<!-- Page container -->
<div class="page-container">
  <!-- Sidebar -->
  <div class="sidebar collapse">
    <div class="sidebar-content">
      <!-- User dropdown --
      <div class="user-menu dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="images/demo/users/face3.png" alt="">
        <div class="user-info">Madison Gartner <span>Web Developer</span></div>
        </a>
        <div class="popup dropdown-menu dropdown-menu-right">
          <div class="thumbnail">
            <div class="thumb"><img alt="" src="images/demo/users/face3.png">
              <div class="thumb-options"><span><a href="#" class="btn btn-icon btn-success"><i class="icon-pencil"></i></a><a href="#" class="btn btn-icon btn-success"><i class="icon-remove"></i></a></span></div>
            </div>
            <div class="caption text-center">
              <h6>Madison Gartner <small>Front end developer</small></h6>
            </div>
          </div>
          <ul class="list-group">
            <li class="list-group-item"><i class="icon-pencil3 text-muted"></i> My posts <span class="label label-success">289</span></li>
            <li class="list-group-item"><i class="icon-people text-muted"></i> Users online <span class="label label-danger">892</span></li>
            <li class="list-group-item"><i class="icon-stats2 text-muted"></i> Reports <span class="label label-primary">92</span></li>
            <li class="list-group-item"><i class="icon-stack text-muted"></i> Balance
              <h5 class="pull-right text-danger">$45.389</h5>
            </li>
          </ul>
        </div>
      </div>
      <!-- /user dropdown -->
      <!-- Main navigation -->
      <ul class="navigation">
        <!-- pake class="active" di li kalau mau di highlight -->
        <li><a href="<?php echo base_url();?>"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>
        <li><a href="#" class="expand" id="second-level"><span>Profil</span> <i class="icon-users"></i></a>
          <ul>
            <!-- pake class="active" di li kalau mau di highlight -->
            <li><a href="<?php echo base_url();?>siswa">Siswa</a></li>
            <li><a href="<?php echo base_url();?>guru">Guru</a></li>
          </ul>
        </li>
        <li><a href="#" class="expand"><span>Navigation levels</span> <i class="icon-stack"></i></a>
          <ul>
            <li><a href="#">Second level first item</a></li>
            <li><a href="#" class="expand">Second level second item</a>
              <ul>
                <li><a href="#">Third level first item</a></li>
                <li><a href="#">Third level second item</a></li>
                <li><a href="#" class="expand">Third level third item</a>
                  <ul>
                    <li><a href="#">Fourth level first item</a></li>
                    <li><a href="#">Fourth level second item</a></li>
                    <li><a href="#">Fourth level third item</a></li>
                  </ul>
                </li>
                <li><a href="#">Third level second item</a></li>
              </ul>
            </li>
            <li><a href="#">Second level third item</a></li>
          </ul>
        </li>
      </ul>
      <!-- /main navigation -->
    </div>
  </div>
  <!-- /sidebar -->
  <!-- Page content -->
  <div class="page-content">