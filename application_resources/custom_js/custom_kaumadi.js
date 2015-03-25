/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//print attendance report
$(document).on('click', '#generate_graph', function() {
    var pre_id = $('#out').val();
    
    var win = window.open(site_url + '/graphs/graphs_controller/manage_graphs');
    win.focus();
});