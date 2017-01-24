
<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;"> <a href="<?php echo WEB_ROOT;?>index.php" class="site_title"><img src="<?php echo IMAGE_ROOT;?>logo.png" alt="" /></a> </div>
    <div class="clearfix"></div>
    <div class="profile">
      <div class="profile_pic"> <img src="<?php if($viewdata['profile_pic']!=''){
echo DOCS_ROOT.$_SESSION['userid']."/profile/".$viewdata['profile_pic'];
             }else{
              echo IMAGE_ROOT."profile.gif";
             } ?>" alt="Upload Image" class="img-circle profile_img"> </div>
      <div class="profile_info"> <span>Welcome,</span>
        <h2><?php echo ucwords($viewdata['name']);?></h2>
      </div>
    </div>
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section noMargin">
        <h3>General</h3>
        <ul class="nav side-menu">
          <li><a href="<?php echo WEB_ROOT;?>index.php"><i class="fa icon-gauge"></i> Dashboard </a></li>
       <!--    <li><a><i class="fa icon-ticket"></i> Tickets <span class="fa icon-down-open"></span></a>
            <ul class="nav child_menu">
              <li><a href="<?php echo WEB_ROOT;?>tickets/index.php">Ticket</a></li>
            </ul>
          </li> -->
         <!--  <li><a href="<?php echo WEB_ROOT;?>problems/index.php"><i class="fa icon-bug"></i> Problems</a></li>
          <li><a href="<?php echo WEB_ROOT;?>changes/index.php"><i class="fa icon-shield"></i> Changes</a></li>
          <li><a href="<?php echo WEB_ROOT;?>releases/index.php"><i class="fa icon-flash-1"></i> Releases</a> </li> -->
          <li><a href="<?php echo WEB_ROOT;?>assets/index.php"><i class="fa icon-cube"></i> Assets</a> </li>
   <!--        <li><a href="<?php echo WEB_ROOT;?>contracts/index.php"><i class="fa icon-award-empty"></i> Contracts</a></li>
          <li><a href="<?php echo WEB_ROOT;?>solutions/index.php"><i class="fa icon-chart-pie"></i> Solutions</a></li>
          <li><a href="<?php echo WEB_ROOT;?>reports/index.php"><i class="fa icon-book"></i> Reports</a> -->
          <li><a href="<?php echo WEB_ROOT;?>admin/index.php"><i class="fa icon-wrench-1"></i> Admin</a>
        </ul>
      </div>
    </div>
    <div class="sidebar-footer hidden-small"> <a data-toggle="tooltip" data-placement="top" title="Settings"> <span class="icon-cog-1" aria-hidden="true"></span> </a> <a data-toggle="tooltip" data-placement="top" title="FullScreen"> <span class="icon-resize-full" aria-hidden="true"></span> </a> <a data-toggle="tooltip" data-placement="top" title="Lock"> <span class="icon-eye-off" aria-hidden="true"></span> </a> <a data-toggle="tooltip" data-placement="top" title="Logout"> <span class="icon-off" aria-hidden="true"></span> </a> </div>
  </div>
</div>
