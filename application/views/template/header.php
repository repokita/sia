<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Akademik System - for a better future.</title>
<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>css/londinium-theme.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>css/styles.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>css/icons.min.css" rel="stylesheet" type="text/css">
<!--<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">-->
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-ui-1.10.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/interface/daterangepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/interface/moment.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/interface/jgrowl.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/interface/collapsible.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/application_blank.js"></script>
</head>
<body class="sidebar-wide">
<!-- Navbar -->
<div class="navbar navbar-inverse" role="navigation">
  <div class="navbar-header"><a class="navbar-brand" href="#"><img src="images/logo.png" alt="Londinium"></a><a class="sidebar-toggle"><i class="icon-paragraph-justify2"></i></a>
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-icons"><span class="sr-only">Toggle navbar</span><i class="icon-grid3"></i></button>
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar"><span class="sr-only">Toggle navigation</span><i class="icon-paragraph-justify2"></i></button>
  </div>
  <ul class="nav navbar-nav navbar-right collapse" id="navbar-icons">
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><i class="icon-people"></i><span class="label label-default">2</span></a>
      <div class="popup dropdown-menu dropdown-menu-right">
        <div class="popup-header"><a href="#" class="pull-left"><i class="icon-spinner7"></i></a><span>Activity</span><a href="#" class="pull-right"><i class="icon-paragraph-justify"></i></a></div>
        <ul class="activity">
          <li> <i class="icon-cart-checkout text-success"></i>
            <div> <a href="#">Kuya</a> ordered 2 copies of <a href="#">OEM license</a> <span>14 minutes ago</span> </div>
          </li>
          <li> <i class="icon-heart text-danger"></i>
            <div> Your <a href="#">latest post</a> was liked by <a href="#">Opun Buds</a> <span>35 minutes ago</span> </div>
          </li>
          <li> <i class="icon-checkmark3 text-success"></i>
            <div> Mail server was updated. See <a href="#">changelog</a> <span>About 2 hours ago</span> </div>
          </li>
          <li> <i class="icon-paragraph-justify2 text-warning"></i>
            <div> There are <a href="#">6 new tasks</a> waiting for you. Don't forget! <span>About 3 hours ago</span> </div>
          </li>
        </ul>
      </div>
    </li>
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><i class="icon-paragraph-justify2"></i><span class="label label-default">2</span></a>
      <div class="popup dropdown-menu dropdown-menu-right">
        <div class="popup-header"><a href="#" class="pull-left"><i class="icon-spinner7"></i></a><span>Messages</span><a href="#" class="pull-right"><i class="icon-new-tab"></i></a></div>
        <ul class="popup-messages">
          <li class="unread"><a href="#"><img src="images/demo/users/face1.png" alt="" class="user-face"><strong>Eugene Kopyov <i class="icon-attachment2"></i></strong><span>Aliquam interdum convallis massa...</span></a></li>
          <li><a href="#"><img src="images/demo/users/face2.png" alt="" class="user-face"><strong>Jason Goldsmith <i class="icon-attachment2"></i></strong><span>Aliquam interdum convallis massa...</span></a></li>
          <li><a href="#"><img src="images/demo/users/face3.png" alt="" class="user-face"><strong>Angel Novator</strong><span>Aliquam interdum convallis massa...</span></a></li>
          <li><a href="#"><img src="images/demo/users/face4.png" alt="" class="user-face"><strong>Monica Bloomberg</strong><span>Aliquam interdum convallis massa...</span></a></li>
          <li><a href="#"><img src="images/demo/users/face5.png" alt="" class="user-face"><strong>Patrick Winsleur</strong><span>Aliquam interdum convallis massa...</span></a></li>
        </ul>
      </div>
    </li>
    <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle"><i class="icon-grid"></i></a>
      <div class="popup dropdown-menu dropdown-menu-right">
        <div class="popup-header"><a href="#" class="pull-left"><i class="icon-spinner7"></i></a><span>Tasks list</span><a href="#" class="pull-right"><i class="icon-new-tab"></i></a></div>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Description</th>
              <th>Category</th>
              <th class="text-center">Priority</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><span class="status status-success item-before"></span> <a href="#">Frontpage fixes</a></td>
              <td><span class="text-smaller text-semibold">Bugs</span></td>
              <td class="text-center"><span class="label label-success">87%</span></td>
            </tr>
            <tr>
              <td><span class="status status-danger item-before"></span> <a href="#">CSS compilation</a></td>
              <td><span class="text-smaller text-semibold">Bugs</span></td>
              <td class="text-center"><span class="label label-danger">18%</span></td>
            </tr>
            <tr>
              <td><span class="status status-info item-before"></span> <a href="#">Responsive layout changes</a></td>
              <td><span class="text-smaller text-semibold">Layout</span></td>
              <td class="text-center"><span class="label label-info">52%</span></td>
            </tr>
            <tr>
              <td><span class="status status-success item-before"></span> <a href="#">Add categories filter</a></td>
              <td><span class="text-smaller text-semibold">Content</span></td>
              <td class="text-center"><span class="label label-success">100%</span></td>
            </tr>
            <tr>
              <td><span class="status status-success item-before"></span> <a href="#">Media grid padding issue</a></td>
              <td><span class="text-smaller text-semibold">Bugs</span></td>
              <td class="text-center"><span class="label label-success">100%</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </li>
    <li class="user dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><img src="images/demo/users/face7.png" alt=""><span>Kuya Rawa</span><i class="caret"></i></a>
      <ul class="dropdown-menu dropdown-menu-right icons-right">
        <li><a href="#"><i class="icon-user"></i> Profile</a></li>
        <li><a href="#"><i class="icon-bubble4"></i> Messages</a></li>
        <li><a href="#"><i class="icon-cog"></i> Settings</a></li>
        <li><a href="#"><i class="icon-exit"></i> Logout</a></li>
      </ul>
    </li>
  </ul>
</div>
<!-- /navbar -->