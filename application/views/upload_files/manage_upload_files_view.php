
<div class="page-title">	
    <h3><?php echo $heading; ?></h3>		
</div>

<div class="row-fluid">
    <div class="col-md-11">
        <div class="span12">
            <div class="grid simple ">
                <div class="grid-title">
                    <h4>Advance <span class="semi-bold">Options</span></h4>
                    <div class="tools"> <a href="javascript:;" class="collapse"></a><a href="javascript:;" class="reload"></a> </div>
                </div>
                <div class="grid-body ">
                    <table class="table table-hover" id="upload_files_table" >
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>File Name</th>
                                <th>Description</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php
                            $i=0;
                            foreach($upload_files as $upload_file) {
                            ?>
                                <tr  id="upload_files_<?php echo $upload_file->file_id; ?>" >
                                    <td><?php echo ++$i; ?></td>
                                    <td><?php echo $upload_file->file_name; ?></td>
                                    <td><?php echo $upload_file->file_desc; ?></td>
                                    <td>
                                        <?php
                                        //$perm = Access_controll_service::check_access('EDIT_UPLOAD_FILES');
                                        //if ($perm) {
                                            ?>
                                            <a href="<?php echo site_url(); ?>/upload_files/upload_files_controller/edit_upload_files_view/<?php echo $upload_file->file_id; ?>">
                                                <span class="label label-info">Edit</span>
                                            </a>
                                            <?php
                                       // }
                                       // $perm = Access_controll_service::check_access('DELETE_UPLOAD_FILES');
                                       // if ($perm) {
                                            ?>
                                            <a style="cursor: pointer;"   title="Delete this File" onclick="delete_upload_files <?php echo $upload_file->file_id; ?>">
                                                <span class="label label-important">Delete</span>
                                            </a>
<!--                                        <a style="cursor: pointer;" title="Delete this Master Privilege" onclick="delete_privilege_master(5)">
                                        <span class="label label-important">Delete</span>
                                    </a>-->
                                            <?php
                                        //}
                                        ?>
                                    </td>
                                </tr>
                            <?php } ?>     
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
   
</div>


<script type="text/javascript">
    $('#upload_files_parent_menu').addClass('active open');
</script>
