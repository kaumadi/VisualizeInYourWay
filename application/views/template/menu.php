<?php
$perm = Access_controll_service::check_access('MANAGE_USERS');
if ($perm) {
    ?>
    <li class="" id="user_parent_menu"> 
        <a href="javascript:;">
            <i class="fa fa-suitcase"></i> 
            <span class="title">USERS</span> 
            <span class="arrow "></span> 
        </a>
        <ul class="sub-menu">
            <li > <a href="<?php echo site_url(); ?>/user/user_controller/manage_users"> Manage Users </a> </li>

        </ul>
    </li> 

    <?php
}

?>
<li class="" id="upload_parent_menu"> 
    <a href="javascript:;">
        <i class="fa fa-group"></i> 
        <span class="title">Upload</span> 
        <span class="arrow "></span> 
    </a>
    <ul class="sub-menu">
        <li > <a href="<?php echo site_url(); ?>/upload/upload_controller/manage_uploads"> Manage Uploads</a> </li>

    </ul>
</li> 
<?php // }  ?>

<li class="" id="wages_parent_menu"> 
    <a href="javascript:;">
        <i class="fa fa-money"></i> 
        <span class="title">Wages</span> 
        <span class="arrow "></span> 
    </a>
    <ul class="sub-menu">
        <li > <a href="<?php echo site_url(); ?>/wages_category/wages_category_controller/manage_wages_category"> Manage Wages Categories </a> </li>
        <li > <a href="<?php echo site_url(); ?>/wages/manage_wages_controller/manage_wages"> Manage Wages </a> </li>

    </ul>
</li> 

<li class="" id="skill_parent_menu"> 
    <a href="javascript:;">
        <i class="fa fa-dashboard"></i> 
        <span class="title">Skills</span> 
        <span class="arrow "></span> 
    </a>
    <ul class="sub-menu">
        <li > <a href="<?php echo site_url(); ?>/skill_matrix/skill_matrix_controller/manage_skill_matrix"> Skills Matrix </a> </li>
        <li > <a href="<?php echo site_url(); ?>/skill/skill_category_controller/manage_skill_category"> Manage Skill Categories </a> </li>
        <li > <a href="<?php echo site_url(); ?>/skill/skill_controller/manage_skill"> Manage Skills </a> </li>

    </ul>
</li> 

<li class="" id="snap_shot_parent_menu"> 
    <a href="javascript:;">
        <i class="fa fa-camera"></i> 
        <span class="title">Work Snaps</span> 
        <span class="arrow "></span> 
    </a>
    <ul class="sub-menu">
        <li > <a href="<?php echo site_url(); ?>/employee_screenshots/employee_screenshots_controller/manage_employee_screenshot"> Snap Shots </a> </li>
        <li > <a href="<?php echo site_url(); ?>/screenshot_inquiry/screenshot_inquiry_controller/manage_screenshot_inquiry"> Inquiries </a> </li>

    </ul>
</li> 

<li class="" id="notification_parent_menu"> 
    <a href="javascript:;">
        <i class="fa fa-quote-right"></i> 
        <span class="title">Notification</span> 
        <span class="arrow "></span> 
    </a>
    <ul class="sub-menu">
        <li > <a href="<?php echo site_url(); ?>/notification/notification_controller/manage_notification"> Manage Notification </a> </li>

    </ul>
</li> 

<li class="" id="event_parent_menu"> 
    <a href="javascript:;">
        <i class="fa fa-calendar-o"></i> 
        <span class="title">Events</span> 
        <span class="arrow "></span> 
    </a>
    <ul class="sub-menu">
        <li > <a href="<?php echo site_url(); ?>/event/event_controller/manage_event"> Manage Events </a> </li>

    </ul>
</li> 

<li class="" id="settings_parent_menu"> 
    <a href="javascript:;">
        <i class="fa fa-gears"></i> 
        <span class="title">Settings</span> 
        <span class="arrow "></span> 
    </a>
    <ul class="sub-menu">
        <li > <a href="<?php echo site_url(); ?>/settings/privilege_master_controller/manage_privilege_masters"> Manage Master Privileges </a> </li>
        <li > <a href="<?php echo site_url(); ?>/settings/privilege_controller/manage_privileges"> Manage Privileges </a> </li>
<!--        <li > <a href="<?php echo site_url(); ?>/settings/statistics_controller/index"> Usage Statistics </a> </li>-->
    </ul>
</li> 

<li class="" id="attendance_parent_menu"> 
    <a href="javascript:;">
        <i class="fa fa-tasks"></i> 
        <span class="title">Attendance</span> 
        <span class="arrow "></span> 
    </a>
    <ul class="sub-menu">
        <li > <a href="<?php echo site_url(); ?>/employee_attendance/employee_attendance_controller/manage_employee_attendance">Employee Attendance </a> </li>

    </ul>
</li> 

