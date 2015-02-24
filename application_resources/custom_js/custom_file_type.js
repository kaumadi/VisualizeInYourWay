var base_url = js_base_url;
var site_url = js_site_url;


// execl conver to json
 function handleFile(e) {
 var files = e.target.files;
 var i,f;
 for (i = 0, f = files[i]; i != files.length; ++i) {
   var reader = new FileReader();
   var name = f.name;
   reader.onload = function(e) {
     var data = e.target.result;
 var workbook = XLSX.read(data, {type: 'binary'});

     /* DO SOMETHING WITH workbook HERE */
   };
   reader.readAsBinaryString(f);
 }
}
input_dom_element.addEventListener('change', handleFile, false);
input_dom_element.addEventListener('change', handleFile, false);


//Search button
$(document).on('click', '#select_uploaded_Files', function() {

    var file_id = $('#select_uploaded_Files').val();
    

    $.post(site_url + '/select_file/select_file_controller/upload_file', {file_id: file_id}, function(msg) {

    });

});


