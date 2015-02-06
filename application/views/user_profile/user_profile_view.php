<div class="row">
    <div class="col-md-12">
        <div class=" tiles white col-md-12 no-padding">
            <div class="tiles green cover-pic-wrapper">						
                <div class="overlayer bottom-right">
                    <div class="overlayer-wrapper">
                        <div class="padding-10 hidden-xs">

                            <!-- js for cover_pic-->

                            <script src="<?php echo base_url(); ?>application_resources/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
                            <script src="<?php echo base_url(); ?>application_resources/file_upload_plugin/ajaxupload.3.5.js" type="text/javascript"></script>
                            <script type="text/javascript">

                                $(function() {
                                    var btnUpload = $('#upload');
                                    var status = $('#status');
                                    new AjaxUpload(btnUpload, {
                                        action: '<?PHP echo site_url(); ?>/employee/employee_profile_controller/upload_employee_cover_pic',
                                        name: 'uploadfile',
                                        onSubmit: function(file, ext) {
                                            if (!(ext && /^(jpg|png|jpeg|gif)$/.test(ext))) {
                                                // extension is not allowed 
                                                status.text('Only JPG, PNG or GIF files are allowed');
                                                return false;
                                            }
                                            //status.text('Uploading...Please wait');
//                                            $("#files").html("<i id='animate-icon' class='fa fa-spinner fa fa-2x fa-spin'></i>");

                                        },
                                        onComplete: function(file, response) {
                                            //On completion clear the status
                                            //status.text('');
                                            $("#files").html("");
                                            $("#sta").html("");
                                            //Add uploaded file to list
                                            if (response != "error") {

                                                //save new pic in database and session
                                                $.post(site_url + '/employee/employee_profile_controller/update_employee_cover_image', {employee_cover_image: response, employee_code: $('#employee_code').val()}, function(msg)
                                                {

                                                });

                                                $('#files').html("");
                                                $('<div></div>').appendTo('#files').html('<img src="<?PHP echo base_url(); ?>uploads/employee_cover_pics/' + response + '"   style="width: 100%;" /><br />');
                                                picFileName = response;
                                                document.getElementById('image').value = file;
                                                document.getElementById('cover_image').value = response;
                                            } else {
                                                $('<div></div>').appendTo('#files').text(file).addClass('error');
                                            }
                                        }
                                    });

                                });




                            </script>

<!--<button type="button" class="btn btn-primary btn-small"><i class="fa fa-check"></i>&nbsp;&nbsp;Following</button>-->

                            <div id="upload">
                                <button type="button" class="btn btn-primary btn-small" id="browse"><i class="fa fa-camera"></i></button>

                            </div>
                            <div id="sta"><span id="status" ></span></div>
                        </div>
                    </div>
                </div>


                <div id="files">
                    <?php if ($this->session->userdata('EMPLOYEE_COVERPIC') == '') { ?>

                        <img src="<?php echo base_url(); ?>uploads/employee_cover_pics/default_cover_pic.png"  alt="" data-src="<?php echo base_url(); ?>uploads/employee_cover_pics/default_cover_pic.png" data-src-retina="<?php echo base_url(); ?>uploads/employee_cover_pics/default_cover_pic.png" style="width: 100%;" />

                    <?php } else { ?>
                        <img src="<?php echo base_url(); ?>uploads/employee_cover_pics/<?php echo $this->session->userdata('EMPLOYEE_COVERPIC'); ?>"  alt="" data-src="<?php echo base_url(); ?>uploads/employee_cover_pics/<?php echo $this->session->userdata('EMPLOYEE_COVERPIC'); ?>" data-src-retina="<?php echo base_url(); ?>uploads/employee_cover_pics/<?php echo $this->session->userdata('EMPLOYEE_COVERPIC'); ?>"  style="width: 100%;" />

                    <?php } ?>
                </div>
            </div>


            <!--                         js for pro_pic-->

            <script type="text/javascript">

                $(function() {
                    var btnUpload = $('#upload2');
                    var status = $('#status2');
                    new AjaxUpload(btnUpload, {
                        action: '<?PHP echo site_url(); ?>/employee/employee_profile_controller/upload_employee_avatar',
                        name: 'uploadfile2',
                        onSubmit: function(file, ext) {
                            if (!(ext && /^(jpg|png|jpeg|gif)$/.test(ext))) {
                                // extension is not allowed 
                                status.text('Only JPG, PNG or GIF files are allowed');
                                return false;
                            }
                            //status.text('Uploading...Please wait');
                            //                                            $("#files").html("<i id='animate-icon' class='fa fa-spinner fa fa-2x fa-spin'></i>");

                        },
                        onComplete: function(file, response) {

                            //On completion clear the status
                            //status.text('');
                            $("#files2").html("");
                            $("#sta2").html("");
                            //Add uploaded file to list
                            if (response != "error") {

                                //save new pic in database and session
                                $.post(site_url + '/employee/employee_profile_controller/update_employee_avatar', {employee_avatar: response, employee_code: $('#employee_code').val()}, function(msg)
                                {

                                });

                                $('#pro_pic').html("");
                                $('<div></div>').appendTo('#pro_pic').html('<img src="<?PHP echo base_url(); ?>uploads/employee_avatar/' + response + '"  /><br />');
                                picFileName = response;
                                document.getElementById('image2').value = file;
                                document.getElementById('employee_avatar').value = response;
                            } else {
                                $('<div></div>').appendTo('#files2').text(file).addClass('error');
                            }
                        }
                    });

                });




            </script>

            <div class="tiles white">

                <div class="row">
                    <div class="col-md-2 col-sm-2" >
                        <div class="user-profile-pic profile-upload-pic" >

                            <div id="upload2">
                                <button type="button"  id="browse2">
                                    <div id="pro_pic" class="profile_custom_image_change">
                                        <?php if ($this->session->userdata('EMPLOYEE_PROPIC') == '') { ?>

                                            <img src="<?php echo base_url(); ?>uploads/employee_avatar/avatar.jpg"  alt="" data-src="<?php echo base_url(); ?>uploads/employee_avatar/avatar.jpg" data-src-retina="<?php echo base_url(); ?>uploads/employee_avatar/avatar2x.jpg" width="69" height="69" />

                                        <?php } else { ?>
                                            <img src="<?php echo base_url(); ?>uploads/employee_avatar/<?php echo $this->session->userdata('EMPLOYEE_PROPIC'); ?>"  alt="" data-src="<?php echo base_url(); ?>uploads/employee_avatar/<?php echo $this->session->userdata('EMPLOYEE_PROPIC'); ?>" data-src-retina="<?php echo base_url(); ?>uploads/employee_avatar/<?php echo $this->session->userdata('EMPLOYEE_PROPIC'); ?>" width="69" height="69" />

                                        <?php } ?> 

                                    </div>

                                    <span class="hover_edit fa fa-camera" >


                                    </span>
                                </button>
                            </div>


                        </div>
                        
                        </div>
                    </div>

                    <!-- loading employee's details-->

                    <div class="col-md-6   col-sm-6">

                        <div class="user-description-box">
                            <h3 class="semi-bold no-margin"> <i class="fa fa-user"></i>   <?php echo ucfirst($employee_detail->employee_fname) ?><span class="semi-bold"><?php echo ucfirst($employee_detail->employee_lname) ?></span></h3>
                            <br>
                            <h4 class="no-margin"><i class="fa fa-sort-numeric-asc"></i>   <?php echo ($employee_detail->employee_no) ?></h4>
                            <br>
                            <h4 class="no-margin"><i class="fa fa-envelope"></i>    <?php echo ucfirst($employee_detail->employee_email) ?></h4>
                            <br>
                            <h4 class="no-margin"><i class="fa fa-smile-o"></i>   <?php echo ($employee_detail->employee_bday) ?></h4>
                            <br>
                            <h4 class="no-margin"><i class="fa fa-mobile"></i>   <?php echo ($employee_detail->employee_contact) ?></h4>
                            <br>
                            <h4 class="no-margin"><i class="fa fa-clock-o"></i>   <?php echo ucfirst($employee_detail->employee_contract) ?></h4>



                            <a data-toggle="modal" data-target="#edit_profile_modal" style="cursor: pointer">
                                <i class="fa fa-pencil"></i>
                            </a> 

                        </div>

                        
                        


                    </div>

                    <!--friend's images-->

                    <div class="col-md-3  col-sm-3">
                        <h5 class="normal">Friends ( <span class="text-success"><?php echo count($employees) ?></span> )</h5>
                        <ul class="my-friends">

                            <?php
                            foreach ($employees as $employee) {
                                ?>
                                <li>
                                    <div class="profile-pic"> 
                                        <?php if ($employee->employee_avatar == '') { ?>

                                            <img src="<?php echo base_url(); ?>uploads/employee_avatar/avatar_small.jpg"  alt="" data-src="<?php echo base_url(); ?>uploads/employee_avatar/avatar_small.jpg" data-src-retina="<?php echo base_url(); ?>uploads/employee_avatar/avatar_small2x.jpg" width="35" height="35" />

                                        <?php } else { ?>
                                            <img src="<?php echo base_url(); ?>uploads/employee_avatar/<?php echo $employee->employee_avatar; ?>"  alt="" data-src="<?php echo base_url(); ?>uploads/employee_avatar/<?php echo $employee->employee_avatar; ?>" data-src-retina="<?php echo base_url(); ?>uploads/employee_avatar/<?php echo $employee->employee_avatar; ?>" width="35" height="35" />

                                        <?php } ?> 
                                    </div>
                                </li>
                            <?php } ?> 

                        </ul>	
                        <div class="clearfix"></div>
                        <script src="<?php echo base_url(); ?>application_resources/plugins/jquery-ricksaw-chart/js/raphael-min.js"></script>
                        <script src="<?php echo base_url(); ?>application_resources/plugins/jquery-ricksaw-chart/js/d3.v2.js"></script>
                        <script src="<?php echo base_url(); ?>application_resources/plugins/jquery-ricksaw-chart/js/rickshaw.min.js"></script>
                        <script src="<?php echo base_url(); ?>application_resources/plugins/jquery-morris-chart/js/morris.min.js"></script>
                       
                       
                        </script>
                    </div>				
                </div>



               
            </div>
        </div>	
    </div>
</div>

<!--edit modal-->
<div class="modal fade" id="edit_profile_modal" tabindex="-1" role="dialog" aria-labelledby="edit_profile_modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="edit_profile_form" name="edit_profile_form">
                <div class="modal-header tiles green">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >×</button>
                    <br>
                    <i class="fa fa-desktop fa-4x"></i>
                    <h4 id="edit_profile_modalLabel" class="semi-bold text-white">Edit Details</h4>
                    <p class="no-margin text-white">Edit your details here.</p>
                    <br>
                </div>
                <div class="modal-body">


                    <div class="row form-row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="form-label">First Name</label>
                                <span style="color: red">*</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-with-icon  right">                                       
                                <i class=""></i>
                                <input id="employee_fname" class="form-control" type="text" name="employee_fname" value="<?php echo $employee_detail->employee_fname; ?>">                              
                            </div>
                        </div>
                    </div>

                    <div class="row form-row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="form-label">Last Name</label>
                                <span style="color: red">*</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-with-icon  right">                                       
                                <i class=""></i>
                                <input id="employee_lname" class="form-control" type="text" name="employee_lname" value="<?php echo $employee_detail->employee_lname; ?>">                              
                            </div>
                        </div>
                    </div>


                    <div class="row form-row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <span style="color: red">*</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-with-icon  right">                                       
                                <i class=""></i>
                                <input id="employee_email" class="form-control" type="text" name="employee_email" value="<?php echo $employee_detail->employee_email; ?>">                              
                            </div>
                        </div>
                    </div>

                    <div class="row form-row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="form-label">Birth Day</label>
                                <span style="color: red">*</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-with-icon  right input-append primary date  no-padding" id="employee_bday_edit_dpicker">                                       
                                <i class=""></i>

                                <input class="form-control" type="text" input-append id="employee_bday" name="employee_bday" readonly="true"  value="<?php echo $employee_detail->employee_bday; ?>">
                                <span class="add-on">
                                    <span class="arrow"></span>
                                    <i class="fa fa-th"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="row form-row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="form-label">Contact No</label>
                                <span style="color: red">*</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-with-icon  right">                                       
                                <i class=""></i>
                                <input id="employee_contact" class="form-control" type="text" name="employee_contact"  value="<?php echo $employee_detail->employee_contact; ?>">                              
                            </div>
                        </div>
                    </div>


                    <div id="edit_employee_profile_msg" class="form-row"> </div>

                    <input type="hidden" id="employee_code" name="employee_code" value="<?php echo $employee_detail->employee_code; ?>"/>
                    <div class="form-actions">
                        <div class="pull-right">
                            <button class="btn btn-primary btn-cons" type="submit">
                                <i class="icon-ok"></i>
                                Save
                            </button>
                            <a href="<?php echo site_url(); ?>/employee/employee_profile_controller/view_profile" class="btn btn-white btn-cons" type="button">Cancel</a>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#employee_parent_menu').addClass('active open');
    $(document).ready(function() {



    });


</script>