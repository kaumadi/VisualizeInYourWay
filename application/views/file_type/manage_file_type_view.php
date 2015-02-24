
<div class="page-title">	
    <h3><?php echo $heading; ?></h3>		
</div>

<div class="row-fluid">
    <div class="col-md-11">
        <div class="col-md-4" >
                <!-- select company-->
            <select class="select2 span12" id="select_file">
                <option value="">Select File</option>
                <?php
                foreach ($upload_file_stuff as $upload_files_stuff) {
                    ?>
                    <option value="<?php echo $upload_files_stuff->file_id; ?>"   selected="true"<?php  ?>><?php echo ucfirst($upload_files_stuff->stuff_name); ?></option>
                <?php }
                ?>
            </select>

            

        </div>
        

        <div class="col-md-2" >
            <button id="search_btn" style="margin-left:12px" name="search_btn" class="btn btn-primary"><i class="fa fa-search"></i></button>
        </div>
    </div>
    <!-- print button-->
 
   
</div>



<script type="text/javascript">
    $('#select_data_type_parent_menu').addClass('active open');
</script>
