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

<li class="" id="User_privilege_parent_menu"> 
    <a href="javascript:;">
        <i class="fa fa-money"></i> 
        <span class="title">Wages</span> 
        <span class="arrow "></span> 
    </a>
    <ul class="sub-menu">
        <li > <a href="<?php echo site_url(); ?>/User_privileges/User_privilege_controller/manage_user_privileges"> Manage User Privileges </a> </li>
        
    </ul>
</li> 
