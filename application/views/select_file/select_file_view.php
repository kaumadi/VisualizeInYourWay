
<div class="page-title">	
    <h3><?php echo $heading; ?></h3>		
</div>



<div class="row-fluid">
    <div class="col-md-11">
        <div class="col-md-4" >
                <!-- select company-->
            <select class="select2 span12" id="select_company">
                <option value="">Select file</option>
                <?php
                foreach ($select_files as $upload_files_stuff) {
                    ?>
                    <option value="<?php echo $upload_files_stuff->file_id; ?>"   selected="true"<?php  ?>><?php echo ucfirst($upload_files_stuff->stuff_name); ?></option>
                <?php }
                ?>
            </select>

           

        </div>
                         
               </div>
                        </div>
                    </div>
          
        <script type="text/javascript">
            $('#upload_files_parent_menu').addClass('active open');
        </script>


