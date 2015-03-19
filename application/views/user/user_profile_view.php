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
                                        action: '<?PHP echo site_url(); ?>/user/user_profile_controller/upload_user_cover_pic',
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
                                                $.post(site_url + '/user/user_profile_controller/update_user_cover_image', {user_cover_image: response, user_id: $('#user_id').val()}, function(msg)
                                                {

                                                });

                                                $('#files').html("");
                                                $('<div></div>').appendTo('#files').html('<img src="<?PHP echo base_url(); ?>uploads/user_cover_pics/' + response + '"   style="width: 100%;" /><br />');
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
                    <?php if ($this->session->userdata('USER_COVERPIC') == '') { ?>

                        <img src="<?php echo base_url(); ?>uploads/user_cover_pics/default_cover_pic.png"  alt="" data-src="<?php echo base_url(); ?>uploads/user_cover_pics/default_cover_pic.png" data-src-retina="<?php echo base_url(); ?>uploads/user_cover_pics/default_cover_pic.png" style="width: 100%;" />

                    <?php } else { ?>
                        <img src="<?php echo base_url(); ?>uploads/user_cover_pics/<?php echo $this->session->userdata('USER_COVERPIC'); ?>"  alt="" data-src="<?php echo base_url(); ?>uploads/user_cover_pics/<?php echo $this->session->userdata('USER_COVERPIC'); ?>" data-src-retina="<?php echo base_url(); ?>uploads/user_cover_pics/<?php echo $this->session->userdata('USER_COVERPIC'); ?>"  style="width: 100%;" />

                    <?php } ?>
                </div>
            </div>


            <!--                         js for pro_pic-->

            <script type="text/javascript">

                $(function() {
                    var btnUpload = $('#upload2');
                    var status = $('#status2');
                    new AjaxUpload(btnUpload, {
                        action: '<?PHP echo site_url(); ?>/user/user_profile_controller/upload_user_avatar',
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
                                $.post(site_url + '/user/user_profile_controller/update_user_avatar', {user_avatar: response, user_id: $('#user_id').val()}, function(msg)
                                {

                                });

                                $('#pro_pic').html("");
                                $('<div></div>').appendTo('#pro_pic').html('<img src="<?PHP echo base_url(); ?>uploads/user_avatar/' + response + '"  /><br />');
                                picFileName = response;
                                document.getElementById('image2').value = file;
                                document.getElementById('user_avatar').value = response;
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
                                        <?php if ($this->session->userdata('USER_PROPIC') == '') { ?>

                                            <img src="<?php echo base_url(); ?>uploads/user_avatar/avatar.jpg"  alt="" data-src="<?php echo base_url(); ?>uploads/user_avatar/avatar.jpg" data-src-retina="<?php echo base_url(); ?>uploads/user_avatar/avatar2x.jpg" width="69" height="69" />

                                        <?php } else { ?>
                                            <img src="<?php echo base_url(); ?>uploads/user_avatar/<?php echo $this->session->userdata('USER_PROPIC'); ?>"  alt="" data-src="<?php echo base_url(); ?>uploads/user_avatar/<?php echo $this->session->userdata('USER_PROPIC'); ?>" data-src-retina="<?php echo base_url(); ?>uploads/user_avatar/<?php echo $this->session->userdata('USER_PROPIC'); ?>" width="69" height="69" />

                                        <?php } ?> 

                                    </div>

                                    <span class="hover_edit fa fa-camera" >


                                    </span>
                                </button>
                            </div>


                        </div>

                    </div>
                

                <!-- loading user's details-->

                <div class="col-md-6   col-sm-6">

                    <div class="user-description-box">
                        <h3 class="semi-bold no-margin"> <i class="fa fa-user"></i>   <?php echo ucfirst($user_detail->user_name) ?></h3>
                        <br>

                        <h4 class="no-margin"><i class="fa fa-envelope"></i>    <?php echo ucfirst($user_detail->user_email) ?></h4>
                        <br>
                        <h4 class="no-margin"><i class="fa fa-smile-o"></i>   <?php echo ($user_detail->user_job) ?></h4>
                        <br>
                        <h4 class="no-margin"><i class="fa fa-mobile"></i>   <?php echo ($user_detail->user_company_name) ?></h4>





                        <a data-toggle="modal" data-target="#edit_profile_modal" style="cursor: pointer">
                            <i class="fa fa-pencil"></i>
                        </a> 

                    </div>

                </div>

                <!--friend's images-->

                <div class="col-md-3  col-sm-3">
                    <h5 class="normal">Friends ( <span class="text-success"><?php echo count($users) ?></span> )</h5>
                    <ul class="my-friends">

                        <?php
                        foreach ($users as $user) {
                            ?>
                            <li>
                                <div class="profile-pic"> 
                                    <?php if ($user->user_avatar == '') { ?>

                                        <img src="<?php echo base_url(); ?>uploads/user_avatar/avatar_small.jpg"  alt="" data-src="<?php echo base_url(); ?>uploads/user_avatar/avatar_small.jpg" data-src-retina="<?php echo base_url(); ?>uploads/user_avatar/avatar_small2x.jpg" width="35" height="35" />

                                    <?php } else { ?>
                                        <img src="<?php echo base_url(); ?>uploads/user_avatar/<?php echo $user->user_avatar; ?>"  alt="" data-src="<?php echo base_url(); ?>uploads/user_avatar/<?php echo $user->user_avatar; ?>" data-src-retina="<?php echo base_url(); ?>uploads/user_avatar/<?php echo $user->user_avatar; ?>" width="35" height="35" />

                                    <?php } ?> 
                                </div>
                            </li>
                        <?php } ?> 

                    </ul>	
                    <!--                        <div class="clearfix"></div>
                                            <script src="<?php echo base_url(); ?>application_resources/plugins/jquery-ricksaw-chart/js/raphael-min.js"></script>
                                            <script src="<?php echo base_url(); ?>application_resources/plugins/jquery-ricksaw-chart/js/d3.v2.js"></script>
                                            <script src="<?php echo base_url(); ?>application_resources/plugins/jquery-ricksaw-chart/js/rickshaw.min.js"></script>
                                            <script src="<?php echo base_url(); ?>application_resources/plugins/jquery-morris-chart/js/morris.min.js"></script>-->


                </div>
                </div>				
            </div>
<div class="col-md-12">
<div class="grid simple">
<div class="grid-title no-border">
<h4>Morris <span class="semi-bold">Charts</span></h4>
<!--<div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>-->
</div>
<div class="grid-body no-border">
<div class="row">
<div class="col-md-6">
<!--<h4>Morris <span class="semi-bold">Line Charts</span></h4>
<p> Line graphs are probably the most widely used graph for showing trends.
Chart.js has a ton of customisation features for line graphs, along with support for multiple datasets to be plotted on one chart. </p>-->
<div id="line-example" style="position: relative;"><svg height="342" version="1.1" width="412" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="33.5" y="308" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,308H387" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="237.25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">25</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,237.25H387" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="166.5" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">50</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,166.5H387" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="95.75" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">75</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,95.75H387" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">100</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,25H387" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="387" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text><text x="330.1926061159288" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011</tspan></text><text x="273.3852122318576" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2010</tspan></text><text x="216.5778183477864" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2009</tspan></text><text x="159.61478776814238" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2008</tspan></text><text x="102.80739388407119" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2007</tspan></text><text x="46" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2006</tspan></text><path fill="none" stroke="#d1dade" d="M46,194.8C60.2018484710178,184.1875,88.60554541305339,152.35,102.80739388407119,152.35C117.00924235508899,152.35,145.41293929712458,198.3326607387141,159.61478776814238,194.8C173.8555454130534,191.2576607387141,202.3370607028754,124.04999999999998,216.5778183477864,124.04999999999998C230.7796668188042,124.04999999999998,259.1833637608398,194.8,273.3852122318576,194.8C287.5870607028754,194.8,315.990757644911,141.73749999999998,330.1926061159288,124.04999999999998C344.3944545869466,106.36249999999998,372.7981515289822,70.98749999999998,387,53.29999999999998" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#0aa699" d="M46,166.5C60.2018484710178,155.8875,88.60554541305339,124.04999999999998,102.80739388407119,124.04999999999998C117.00924235508899,124.04999999999998,145.41293929712458,170.0326607387141,159.61478776814238,166.5C173.8555454130534,162.95766073871408,202.3370607028754,95.75,216.5778183477864,95.75C230.7796668188042,95.75,259.1833637608398,166.5,273.3852122318576,166.5C287.5870607028754,166.5,315.990757644911,113.4375,330.1926061159288,95.75C344.3944545869466,78.0625,372.7981515289822,42.6875,387,25" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="46" cy="194.8" r="4" fill="#d1dade" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="102.80739388407119" cy="152.35" r="4" fill="#d1dade" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="159.61478776814238" cy="194.8" r="4" fill="#d1dade" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="216.5778183477864" cy="124.04999999999998" r="4" fill="#d1dade" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="273.3852122318576" cy="194.8" r="4" fill="#d1dade" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="330.1926061159288" cy="124.04999999999998" r="4" fill="#d1dade" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="387" cy="53.29999999999998" r="7" fill="#d1dade" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="46" cy="166.5" r="4" fill="#0aa699" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="102.80739388407119" cy="124.04999999999998" r="4" fill="#0aa699" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="159.61478776814238" cy="166.5" r="4" fill="#0aa699" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="216.5778183477864" cy="95.75" r="4" fill="#0aa699" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="273.3852122318576" cy="166.5" r="4" fill="#0aa699" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="330.1926061159288" cy="95.75" r="4" fill="#0aa699" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="387" cy="25" r="7" fill="#0aa699" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg> <div class="morris-hover morris-default-style" style="left: 319px; top: 35px;"><div class="morris-hover-row-label">2012</div><div class="morris-hover-point" style="color: #0aa699">
  Series A:
  100
</div><div class="morris-hover-point" style="color: #d1dade">
  Series B:
  90
</div></div></div>
</div>
<div class="col-md-6">
<!--<h4>Morris <span class="semi-bold">Area Charts</span></h4>
<p> Line graphs are probably the most widely used graph for showing trends.
Chart.js has a ton of customisation features for line graphs, along with support for multiple datasets to be plotted on one chart. </p>-->
<div id="area-example" style="position: relative;"><svg height="342" version="1.1" width="412" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.5px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="33.5" y="308" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,308H387" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="237.25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">50</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,237.25H387" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="166.5" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">100</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,166.5H387" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="95.75" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">150</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,95.75H387" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="33.5" y="25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">200</tspan></text><path fill="none" stroke="#aaaaaa" d="M46,25H387" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="387" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text><text x="330.1926061159288" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011</tspan></text><text x="273.3852122318576" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2010</tspan></text><text x="216.5778183477864" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2009</tspan></text><text x="159.61478776814238" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2008</tspan></text><text x="102.80739388407119" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2007</tspan></text><text x="46" y="320.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2006</tspan></text><path fill="#eceeee" stroke="#000000" d="M46,39.14999999999998C60.2018484710178,56.837499999999984,88.60554541305339,92.2125,102.80739388407119,109.9C117.00924235508899,127.5875,145.41293929712458,180.64999999999998,159.61478776814238,180.64999999999998C173.8555454130534,180.64999999999998,202.3370607028754,109.9,216.5778183477864,109.9C230.7796668188042,109.9,259.1833637608398,180.64999999999998,273.3852122318576,180.64999999999998C287.5870607028754,180.64999999999998,315.990757644911,127.5875,330.1926061159288,109.9C344.3944545869466,92.2125,372.7981515289822,56.837499999999984,387,39.14999999999998L387,308L46,308Z" fill-opacity="0.5" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 0.5;"></path><path fill="none" stroke="#b7c1c5" d="M46,39.14999999999998C60.2018484710178,56.837499999999984,88.60554541305339,92.2125,102.80739388407119,109.9C117.00924235508899,127.5875,145.41293929712458,180.64999999999998,159.61478776814238,180.64999999999998C173.8555454130534,180.64999999999998,202.3370607028754,109.9,216.5778183477864,109.9C230.7796668188042,109.9,259.1833637608398,180.64999999999998,273.3852122318576,180.64999999999998C287.5870607028754,180.64999999999998,315.990757644911,127.5875,330.1926061159288,109.9C344.3944545869466,92.2125,372.7981515289822,56.837499999999984,387,39.14999999999998" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="46" cy="39.14999999999998" r="7" fill="#b7c1c5" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="102.80739388407119" cy="109.9" r="4" fill="#b7c1c5" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="159.61478776814238" cy="180.64999999999998" r="4" fill="#b7c1c5" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="216.5778183477864" cy="109.9" r="4" fill="#b7c1c5" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="273.3852122318576" cy="180.64999999999998" r="4" fill="#b7c1c5" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="330.1926061159288" cy="109.9" r="4" fill="#b7c1c5" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="387" cy="39.14999999999998" r="4" fill="#b7c1c5" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><path fill="#2ea4e1" stroke="#000000" d="M46,166.5C60.2018484710178,175.34375,88.60554541305339,193.03125,102.80739388407119,201.875C117.00924235508899,210.71875,145.41293929712458,237.25,159.61478776814238,237.25C173.8555454130534,237.25,202.3370607028754,201.875,216.5778183477864,201.875C230.7796668188042,201.875,259.1833637608398,237.25,273.3852122318576,237.25C287.5870607028754,237.25,315.990757644911,210.71875,330.1926061159288,201.875C344.3944545869466,193.03125,372.7981515289822,175.34375,387,166.5L387,308L46,308Z" fill-opacity="0.5" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 0.5;"></path><path fill="none" stroke="#0090d9" d="M46,166.5C60.2018484710178,175.34375,88.60554541305339,193.03125,102.80739388407119,201.875C117.00924235508899,210.71875,145.41293929712458,237.25,159.61478776814238,237.25C173.8555454130534,237.25,202.3370607028754,201.875,216.5778183477864,201.875C230.7796668188042,201.875,259.1833637608398,237.25,273.3852122318576,237.25C287.5870607028754,237.25,315.990757644911,210.71875,330.1926061159288,201.875C344.3944545869466,193.03125,372.7981515289822,175.34375,387,166.5" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="46" cy="166.5" r="7" fill="#0090d9" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="102.80739388407119" cy="201.875" r="4" fill="#0090d9" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="159.61478776814238" cy="237.25" r="4" fill="#0090d9" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="216.5778183477864" cy="201.875" r="4" fill="#0090d9" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="273.3852122318576" cy="237.25" r="4" fill="#0090d9" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="330.1926061159288" cy="201.875" r="4" fill="#0090d9" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="387" cy="166.5" r="4" fill="#0090d9" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg> <div class="morris-hover morris-default-style" style="left: 0px; top: 78px;"><div class="morris-hover-row-label">2006</div><div class="morris-hover-point" style="color: #0090d9">
  Series A:
  100
</div><div class="morris-hover-point" style="color: #b7c1c5">
  Series B:
  90
</div></div></div>
</div>
</div>
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
                                <label class="form-label"> Name</label>
                                <span style="color: red">*</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-with-icon  right">                                       
                                <i class=""></i>
                                <input id="user_name" class="form-control" type="text" name="user_fname" value="<?php echo $user_detail->user_name; ?>">                              
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
                                <input id="user_email" class="form-control" type="text" name="user_email" value="<?php echo $user_detail->user_email; ?>">                              
                            </div>
                        </div>
                    </div>

                  

                    <div class="row form-row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="form-label">Job</label>
                                <span style="color: red">*</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-with-icon  right">                                       
                                <i class=""></i>
                                <input id="user_job" class="form-control" type="text" name="user_job"  value="<?php echo $user_detail->user_job; ?>">                              
                            </div>
                        </div>
                    </div>
                    
                    <div class="row form-row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="form-label">Company Name</label>
                                <span style="color: red">*</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-with-icon  right">                                       
                                <i class=""></i>
                                <input id="user_company_name" class="form-control" type="text" name="user_company_name"  value="<?php echo $user_detail->user_company_name; ?>">                              
                            </div>
                        </div>
                    </div>


                    <div id="edit_user_profile_msg" class="form-row"> </div>

                    <input type="hidden" id="user_id" name="user_id" value="<?php echo $user_detail->user_id; ?>"/>
                    <div class="form-actions">
                        <div class="pull-right">
                            <button class="btn btn-primary btn-cons" type="submit">
                                <i class="icon-ok"></i>
                                Save
                            </button>
                            <a href="<?php echo site_url(); ?>/user/user_profile_controller/view_profile" class="btn btn-white btn-cons" type="button">Cancel</a>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#user_parent_menu').addClass('active open');
    $(document).ready(function() {



    });


</script>