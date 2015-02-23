<?php
//$perm = Access_controll_service::check_access('MANAGE_USERS');
//if ($perm) {
    ?>
    <li class="" id="user_parent_menu"> 
        <a href="javascript:;">
            <i class="fa fa-group"></i> 
            <span class="title">USERS</span> 
            <span class="arrow "></span> 
        </a>
        <ul class="sub-menu">
            <li > <a href="<?php echo site_url(); ?>/user/user_controller/manage_users"> Manage Users </a> </li>

        </ul>
    </li> 

    <?php
//}

?>
<li class="" id="upload_files_parent_menu"> 
    <a href="javascript:;">
        <i class="fa fa-file-text"></i> 
        <span class="title">Upload</span> 
        <span class="arrow "></span> 
    </a>
    <ul class="sub-menu">
        <li > <a href="<?php echo site_url(); ?>/upload_files/upload_files_controller/manage_upload_files"> Manage Uploads</a> </li>

    </ul>
</li> 
<?php // }  ?>

<li class="" id="select_data_type_parent_menu"> 
    <a href="javascript:;">
        <i class="fa fa-tasks"></i> 
        <span class="title">Select data type</span> 
        <span class="arrow "></span> 
    </a>
    <ul class="sub-menu">
        <li > <a href="<?php echo site_url(); ?>/upload_files/upload_files_controller/manage_upload_files"> Select Data Type</a> </li>

    </ul>
</li> 
<?php // }  ?>

<li class="" id="generate_graphs_parent_menu"> 
    <a href="javascript:;">
        <i class="fa fa-money"></i> 
        <span class="title">Generate Graphs</span> 
        <span class="arrow "></span> 
    </a>
    <ul class="sub-menu">
        <li > <a href="<?php echo site_url(); ?>/upload_files/upload_files_controller/manage_upload_files"> Generate graphs</a> </li>

    </ul>
</li> 
<?php // }  ?>

<li class="" id="share_and_print_parent_menu"> 
    <a href="javascript:;">
        <i class="fa fa-calendar-o"></i> 
        <span class="title">Share and Print</span> 
        <span class="arrow "></span> 
    </a>
    <ul class="sub-menu">
        <li > <a href="<?php echo site_url(); ?>/upload_files/upload_files_controller/manage_upload_files"> Share and Print</a> </li>

    </ul>
</li> 
<?php // }  ?>

 


<!--<li class="" id="user_privilege_parent_menu"> 
    <a href="javascript:;">
        <i class=""></i> 
        <span class="title">Privileges</span> 
        <span class="arrow "></span> 
    </a>
    <ul class="sub-menu">
        <li > <a href="<?php echo site_url(); ?>/user_privilege/user_privilege_controller/manage_user_privileges"> Manage User Privileges </a> </li>
        
    </ul>
</li> -->

