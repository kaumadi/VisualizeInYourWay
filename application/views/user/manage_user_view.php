<div class="page-title">	
    <h3><?php echo $heading; ?></h3>		
</div>
<!-- User Table  -->
<div class="row-fluid">
    <div class="col-md-11">
        <div class="span12">
            <div class="grid simple ">
                <div class="grid-title">
                    <h4>Advance <span class="semi-bold">Options</span></h4>
                    <div class="tools"> <a href="javascript:;" class="collapse"></a>  <a href="javascript:;" class="reload"></a>  </div>
                </div>
                <div class="grid-body ">
                    <table class="table table-hover" id="user_table" >
                        <thead>
                            <tr>                          
                                <th>Name</th>                    
                                <th>Email</th>
                                <th>Designation</th>
                                <th>Image</th>
                                <th>Company</th>
                               

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($users as $user) {
                                ?> 
                                <tr  id="user_<?php echo $user->user_id; ?>">


                                    <td><?php echo $user->user_name; ?></td>
                                    <td><?php echo $user->user_email; ?></td>
                                    <td><?php echo $user->user_job; ?></td>
                                    


                                    

                                    
                                    <td>
                                        <img src="<?PHP echo base_url(); ?>uploads/user_avatar/<?php
                                        if ($user->user_avatar != '') {
                                            echo $user->user_avatar;
                                        } else {
                                            echo 'avatar.jpg';
                                        }
                                        ?>" alt="" width="50px" height="50px" /></td>
                                    
                                    <td><?php echo $user->user_company_name; ?></td>

                                    <td>
<!--                                        <a href="<?php echo site_url(); ?>/user/user_controller/edit_user_view/<?php echo $user->user_id; ?>">
                                            <span class="label label-info">Edit</span>
                                        </a>-->
                                        
<!--                                        <a href="<?php echo site_url(); ?>/user_privilege/user_privilege_controller/manage_user_privileges/<?php echo $user->user_id; ?>">
                                            <span class="label label-warning ">Privilege</span>
                                        </a>-->

                                    </td>

                                </tr>

                            <?php } ?>    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--<div class="col-md-1">
        <div class="invoice-button-action-set">
            <p>
                <button class="btn btn-primary" type="button" id="user_print_btn"><i class="fa fa-print"></i></button>
            </p>
        </div>
    </div>-->
</div>

<!-- ADD NEW u MODEL -->
<!--<div class="modal fade" id="add_user_modal" tabindex="-1" role="dialog" aria-labelledby="add_user_modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="add_user_form" name="add_user_form">
                <div class="modal-header tiles green">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >×</button>
                    <br>
                    <i class="fa fa-desktop fa-4x"></i>
                    <h4 id="add_user_modalLabel" class="semi-bold text-white">It's a new user</h4>

                    <p class="no-margin text-white">Include Employee details here.</p>
                    <br>
                </div>
                <div class="modal-body">

                    <div class="row form-row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="form-label">Previous id ?</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-with-icon  right">                                       
                                <i class=""></i>
                                <input id="user_no" class="form-control" type="text" name="user_no">                              
                            </div>
                        </div>
                    </div>

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
                                <input id="user_fname" class="form-control" type="text" name="user_fname">                              
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
                                <input id="user_lname" class="form-control" type="text" name="user_lname">                              
                            </div>
                        </div>
                    </div>

                    <div class="row form-row">
                        <div class="col-md-5">
                            <i class="">
                                <div class="form-group">                               
                                    <label class="form-label">Password</label>
                                    <span style="color: red">*</span>                             
                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inner-addon left-addon" id="generatePassword">                                         
                                <i class=""></i>
                                <input id="user_password" class="text" type="text" name="user_password"  >  
                                <button type="button" class="btn btn-primary btn-sm btn-small" onclick="generatePassword()">Password</button> 

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
                                <input id="user_email" class="form-control" type="text" name="user_email">                              
                            </div>
                        </div>
                    </div>

                    <div class="row form-row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="form-label">Type</label>
                                <span style="color: red">*</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-with-icon  right">                                       
                                <i class=""></i>
                                <select name="user_type" id="user_type" class="select2 form-control"  >
                                    <option value="1"  selected="true" >Admin</option>
                                    <option value="2"  selected="true" >Company Owner</option>
                                    <option value="3" selected="true">Employee</option>
                                </select>  

                            </div>
                        </div>
                    </div>


                    <div class="row form-row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="form-label">Wages Category</label>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-with-icon  right">                                       
                                <i class=""></i>
                                <select name="wages_category" id="wages_category" class="select2 form-control"  >

                                    <?php foreach ($wages_categories as $wages_category) {
                                        ?> 
                                        <option value="<?php echo $wages_category->wages_category_id; ?>"><?php echo $wages_category->category_name; ?></option>
                                    <?php } ?>

                                </select>    

                            </div>
                        </div>
                    </div>

                    <div class="row form-row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="form-label">Contract</label>
                                <span style="color: red">*</span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-with-icon  right">                                       
                                <i class=""></i>
                                <select name="user_contract" id="user_contract" class="select2 form-control"  >
                                    <option value="FULL_TIME" selected="true">Full Time</option>
                                    <option value="PART_TIME" selected="true">Part Time</option>

                                </select>                             
                            </div>
                        </div>
                    </div>
                </div>



                <div id="add_user_msg" class="form-row"> </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>

                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                </div>

            </form>
        </div>
         /.modal-content 
    </div>
     /.modal-dialog 
</div>-->
<!-- /.modal -->
<script type="text/javascript">-->
    $('#user_parent_menu').addClass('active open');
</script>

