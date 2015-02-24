var base_url = js_base_url;
var site_url = js_site_url;

//Search button
$(document).on('click', '#select_uploaded_Files', function() {

    var file_id = $('#select_uploaded_Files').val();
    

    $.post(site_url + '/select_file/select_file_controller/upload_file', {file_id: file_id}, function(msg) {

    });

});


