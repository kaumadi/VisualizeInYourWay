var base_url = js_base_url;
var site_url = js_site_url;

//////////////////user//////////////////////////////////////////////////////////////
$(document).ready(function() {
    //user table
    var user_table = $('#user_table').dataTable({
        "sDom": "<'row'<'col-md-6'l <'toolbar user_table_tbar'>><'col-md-6'f>r>t<'row'<'col-md-12'p i>>",
        "oTableTools": {
            "aButtons": [
                {
                    "sExtends": "collection",
                    "sButtonText": "<i class='fa fa-cloud-download'></i>",
                    "aButtons": ["csv", "xls", "pdf", "copy"]
                }
            ]
        },
        "aoColumnDefs": [
            {"bSortable": false, "aTargets": [0]}
        ],
        "oLanguage": {
            "sLengthMenu": "_MENU_ ",
            "sInfo": "Showing <b>_START_ to _END_</b> of _TOTAL_ entries"
        }
    });

//

    $(".user_table_tbar").html('<div class="table-tools-actions"><button class="btn btn-primary" style="margin-left:12px" id="add_user_btn" data-toggle="modal" data-target="#add_user_modal">Add New Employee</button></div>');

    $('#user_table_wrapper .dataTables_filter input').addClass("input-medium ");
    $('#user_table_wrapper .dataTables_length select').addClass("select2-wrapper span12");
    $(".select2-wrapper").select2({minimumResultsForSearch: -1});

    
 


    
});







//delete users
function delete_user(id) {

    if (confirm('Are you sure want to deactivate this User ?')) {

        $.ajax({
            type: "POST",
            url: site_url + '/user/user_controller/delete_user',
            data: "id=" + id,
            success: function(msg) {
                //alert(msg);
                if (msg == 1) {
                    //document.getElementById(trid).style.display='none';
                    $('#user_' + id).hide();
                }
//                else if (msg == 2) {
//                    alert('Cannot be deactivate as it is already assigned to Tasks');
//                }
            }
        });
    }

}
























