<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $user['full_name']; ?></p>
        <a><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">HOME</li>
      <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li class="header">MANAGE</li>
      <li class=""><a href="devotions.php"><i class="fa fa-tasks"></i> <span>Devotions</span></a></li>
      <li class=""><a href="users.php"><i class="fa fa-users"></i> <span>Users</span></a></li>
      <li class=""><a href="payments.php"><i class="fa fa-credit-card"></i> <span>Payments</span></a></li>
      <li class="header">SETTINGS</li>
      <li class=""><a href="settings.php"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
