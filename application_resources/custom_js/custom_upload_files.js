var base_url = js_base_url;
var site_url = js_site_url;


//////////////////upload_files//////////////////////////////////////////////////////////////
$(document).ready(function() {
    //upload_files table
    var upload_files_table = $('#upload_files_table').dataTable({
        "sDom": "<'row'<'col-md-6'l <'toolbar upload_files_table_tbar'>><'col-md-6'f>r>t<'row'<'col-md-12'p i>>",
        "oTableTools": {//plugin
            "aButtons": [
                {
                    "sExtends": "collection",
                    "sButtonText": "<i class='fa fa-cloud-download'></i>",
                    "aButtons": ["csv", "xls", "pdf", "copy"]
                }
            ]
        },
        "aaSorting": [[0, "asc"]],
        "oLanguage": {
            "sLengthMenu": "_MENU_ ",
            "sInfo": "Showing <b>_START_ to _END_</b> of _TOTAL_ entries"
        }
    });

    $(".upload_files_table_tbar").html('<div class="table-tools-actions"><a class="btn btn-primary" style="margin-left:12px" href="' + site_url + '/upload_files/upload_files_controller/add_upload_files_view"   id="add_upload_files_btn" >Add New File</a></div>');

    $('#upload_files_table_wrapper .dataTables_filter input').addClass("input-medium ");
    $('#upload_files_table_wrapper .dataTables_length select').addClass("select2-wrapper span12");
    $(".select2-wrapper").select2({minimumResultsForSearch: -1});

    //HTML5 editor
    $('#file_description').wysihtml5();






    //add upload_files Form
    $('#add_upload_files_form').validate({
        focusInvalid: false,
        ignore: "",
        rules: {
            file_name: {
                required: true
            },
            file_desc: {
                required: true
            }


        },
        invalidHandler: function(event, validator) {
            //display error alert on form submit    
        },
        errorPlacement: function(label, element) { // render error placement for each input type   
            $('<span class="error"></span>').insertAfter($(element).parent()).append(label)
            var parent = $(element).parent('.input-with-icon');
            parent.removeClass('success-control').addClass('error-control');
        },
        highlight: function(element) { // hightlight error inputs
            var parent = $(element).parent();
            parent.removeClass('success-control').addClass('error-control');

        },
        unhighlight: function(element) { // revert the change done by hightlight

        },
        success: function(label, element) {
            var parent = $(element).parent('.input-with-icon');
            parent.removeClass('error-control').addClass('success-control');

        }, submitHandler: function(form)
        {
            $.post(site_url + '/upload_files/upload_files_controller/add_new_upload_files', $('#add_upload_files_form').serialize(), function(msg)
            {
                if (msg == 1) {
                    $("#add_upload_files_msg").html('<div class="alert alert-success"><button class="close" data-dismiss="alert"></button>Success: The <a class="link" > File </a>has been added.</div>');
                    add_upload_files_form.reset();
                    window.location = site_url + '/upload_files/upload_files_controller/manage_upload_files';
                } else {
                    $("#add_upload_files_msg").html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button>Error: The <a class="link" href="#"> File </a>has failed.</div>');
                }
            });


        }
    });
});



////edit upload_files form start date datepicker
//$('#upload_files_end_date_edit_dpicker').datepicker({
//    format: "yyyy-mm-dd",
//    autoclose: true,
//    todayHighlight: true
//});

//edit upload_files Form
$('#edit_upload_files_form').validate({
    focusInvalid: false,
    ignore: "",
    rules: {
        file_name: {
            required: true
        },
        file_description: {
            required: true
        }




    },
    invalidHandler: function(event, validator) {
        //display error alert on form submit    
    },
    errorPlacement: function(label, element) { // render error placement for each input type   
        $('<span class="error"></span>').insertAfter($(element).parent()).append(label)
        var parent = $(element).parent('.input-with-icon');
        parent.removeClass('success-control').addClass('error-control');
    },
    highlight: function(element) { // hightlight error inputs
        var parent = $(element).parent();
        parent.removeClass('success-control').addClass('error-control');

    },
    unhighlight: function(element) { // revert the change done by hightlight

    },
    success: function(label, element) {
        var parent = $(element).parent('.input-with-icon');
        parent.removeClass('error-control').addClass('success-control');
    }, submitHandler: function(form)
    {
        $.post(site_url + '/upload_files/upload_files_controller/edit_upload_files', $('#edit_upload_files_form').serialize(), function(msg)
        {
            if (msg == 1) {
                $("#edit_upload_files_msg").html('<div class="alert alert-success"><button class="close" data-dismiss="alert"></button>Success: The <a class="link" > File </a>has been updated.</div>');
                edit_upload_files_form.reset();
                window.location = site_url + '/upload_files/upload_files_controller/manage_upload_files';
            } else {
                $("#edit_upload_files_msg").html('<div class="alert alert-error"><button class="close" data-dismiss="alert"></button>Error: The <a class="link" href="#"> File</a>has failed.</div>');
            }
        });


    }
});



//delete upload_files
function delete_upload_files(id) {

    if (confirm('Are you sure want to delete this File ?')) {

        $.ajax({
            type: "POST",
            url: site_url + '/upload_files/upload_files_controller/delete_upload_files',
            data: "id=" + id,
            success: function(msg) {
                //alert(msg);
                if (msg == 1) {
                    //document.getElementById(trid).style.display='none';
                    $('#upload_files_' + id).hide();
                }
                else if (msg == 2) {
                    alert('Cannot be deleted as it is already assigned to Tasks.<br>First complete tasks !!');
                }
            }
        });
    }
}


// add upload_files sumbit btn action
$(document).on('click', '#add_upload_files_save_btn', function() {
    if ($('#add_upload_files_form').valid()) {
        $('#add_upload_files_form').submit();
    }
});

// edit upload_files sumbit btn action
$(document).on('click', '#edit_upload_files_save_btn', function() {
    if ($('#edit_upload_files_form').valid()) {
        $('#edit_upload_files_form').submit();
    }
});




function delete_upload_files(element) {
    $(element).parent().parent().hide();
}







        