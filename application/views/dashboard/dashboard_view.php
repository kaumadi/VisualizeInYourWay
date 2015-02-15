<h3>Employees  at <span class="semi-bold"><?php echo ucfirst($company); ?></span></h3>

<div class="row">

    <?php
    foreach ($users as $user) {
        if($user->user_id != $this->session->userdata('USER_ID')) {
            ?>
            <div class="col-md-3 col-sm-5">
                <div class="col-md-12 m-b-20">
                    <div class="widget-item narrow-margin">
                        <div class="controller overlay right"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                        <div class="tiles green " style="max-height:345px">
                            <div class="tiles-body">
                                <h3 class="text-white m-t-20 m-b-10 m-r-20">Current Project<span class="semi-bold">Niharathi Web</span> </h3>
                                <div class="overlayer bottom-right fullwidth">
                                    <div class="overlayer-wrapper">
                                        <div class=" p-l-20 p-r-20 p-b-20 p-t-20">
                                            <div class="pull-right"> <a href="#" class="hashtags transparent">project added by ...</a> </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                        <div class="tiles white ">
                            <div class="tiles-body">
                                <div class="row">
                                    <div class="user-comment-wrapper pull-left">
                                        <div class="profile-wrapper"> 
                                            <!--<img src="<?php echo base_url(); ?>application_resources/img/profiles/avatar_small.jpg" alt="" data-src="<?php echo base_url(); ?>application_resources/img/profiles/avatar_small.jpg" data-src-retina="<?php echo base_url(); ?>application_resources/img/profiles/avatar_small2x.jpg" width="35" height="35">--> 
                                            <?php if ($user->u_avatar == '') { ?>

                                                <img src="<?php echo base_url(); ?>uploads/user_avatar/avatar_small.jpg"  alt="" data-src="<?php echo base_url(); ?>uploads/user_avatar/avatar_small.jpg" data-src-retina="<?php echo base_url(); ?>uploads/user_avatar/avatar_small2x.jpg" width="35" height="35" />

                                            <?php } else { ?>
                                                <img src="<?php echo base_url(); ?>uploads/user_avatar/<?php echo $user->user_avatar; ?>"  alt="" data-src="<?php echo base_url(); ?>uploads/user_avatar/<?php echo $user->user_avatar; ?>" data-src-retina="<?php echo base_url(); ?>uploads/user_avatar/<?php echo $user->user_avatar; ?>" width="35" height="35" />

                                            <?php } ?> 
                                        </div>
                                        <div class="comment">
                                            <div class="user-name text-black bold"> <?php echo ucfirst($user->user_fname); ?> <span class="semi-bold"><?php echo ucfirst($user->user_lname); ?></span> </div>
                                            <div class="preview-wrapper">@ workgram </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="pull-right m-r-20"> <span class="bold text-black small-text">24m</span> </div>
                                    <div class="clearfix"></div>
                                    <div class="p-l-15 p-t-10 p-r-20">
                                        <p>I have made the visuals for nirahathi</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    }
    ?>

</div>

