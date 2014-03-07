<script type="text/javascript" src="<?php echo base_url();?>js/plugins/forms/uniform.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/forms/inputmask.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/interface/datatables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/interface/tabletools.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/plugins/forms/select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/application.js"></script>
<!-- Page header -->
<div class="page-header">
  <div class="page-title">
    <h3>Data Siswa <small>Form penerimaan siswa baru, profil siswa.</small></h3>
  </div>
  <div id="reportrange" class="range">
    <div class="visible-xs header-element-toggle"><a class="btn btn-primary btn-icon"><i class="icon-calendar"></i></a></div>
    <div class="date-range"></div>
    <span class="label label-danger">9</span></div>
</div>
<!-- /page header -->
<!-- Breadcrumbs line -->
<div class="breadcrumb-line">
  <ul class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">Profil</a></li>
    <li class="active">Siswa</li>
  </ul>
  <div class="visible-xs breadcrumb-toggle"><a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a></div>
  <!--
  <ul class="breadcrumb-buttons collapse">
    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-search3"></i> <span>Search</span> <b class="caret"></b></a>
      <div class="popup dropdown-menu dropdown-menu-right">
        <div class="popup-header"><a href="#" class="pull-left"><i class="icon-paragraph-justify"></i></a><span>Quick search</span><a href="#" class="pull-right"><i class="icon-new-tab"></i></a></div>
        <form action="#" class="breadcrumb-search">
          <input type="text" placeholder="Type and hit enter..." name="search" class="form-control autocomplete">
          <div class="row">
            <div class="col-xs-6">
              <label class="radio">
                <input type="radio" name="search-option" class="styled" checked="checked">
                Everywhere</label>
              <label class="radio">
                <input type="radio" name="search-option" class="styled">
                Invoices</label>
            </div>
            <div class="col-xs-6">
              <label class="radio">
                <input type="radio" name="search-option" class="styled">
                Users</label>
              <label class="radio">
                <input type="radio" name="search-option" class="styled">
                Orders</label>
            </div>
          </div>
          <input type="submit" class="btn btn-block btn-success" value="Search">
        </form>
      </div>
    </li>
    <li class="language dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="images/flags/german.png" alt=""> <span>German</span> <b class="caret"></b></a>
      <ul class="dropdown-menu dropdown-menu-right icons-right">
        <li><a href="#"><img src="images/flags/ukrainian.png" alt=""> Ukrainian</a></li>
        <li class="active"><a href="#"><img src="images/flags/english.png" alt=""> English</a></li>
        <li><a href="#"><img src="images/flags/spanish.png" alt=""> Spanish</a></li>
        <li><a href="#"><img src="images/flags/german.png" alt=""> German</a></li>
        <li><a href="#"><img src="images/flags/hungarian.png" alt=""> Hungarian</a></li>
      </ul>
    </li>
  </ul>-->
</div>
<!-- /breadcrumbs line -->
<!-- Right labels -->
<form class="form-horizontal form-bordered" action="#" role="form">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h6 class="panel-title"><i class="icon-paragraph-right2"></i> Form Penerimaan Siswa Baru</h6>
    </div>
    <div class="panel-body">
      <div class="form-group">
        <label class="col-sm-2 control-label text-right">Nama:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label text-right">Alamat:</label>
        <div class="col-sm-10">
          <textarea rows="5" cols="5" class="form-control"></textarea>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label text-right">Tanggal Lahir:</label>
        <div class="col-sm-10">
          <input class="form-control" type="text" data-mask="99/99/9999" placeholder="dd/mm/yyyy">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label text-right">Asal Sekolah:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label text-right">Tahun Kelulusan:</label>
        <div class="col-sm-10">
          <input class="form-control" type="text" data-mask="9999" placeholder="yyyy">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label text-right">Nilai Akhir:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label text-right">Nama Ibu:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label text-right">Pekerjaan Ibu:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label text-right">Nama Ayah:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label text-right">Pekerjaan Ayah:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control">
        </div>
      </div>
      <div class="form-actions text-right">
        <input type="submit" value="Submit form" class="btn btn-primary">
      </div>
    </div>
  </div>
</form>
<!-- /right labels -->
<div class="panel panel-default">
  <div class="panel-heading">
    <h6 class="panel-title"><i class="icon-table"></i> Datatable with tools menu</h6>
  </div>
  <div class="datatable-tools">
    <table class="table">
      <thead>
        <tr>
          <th># Pendaftaran</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Asal Sekolah</th>
          <th>Akreditasi</th>
          <th>Tahun Kelulusan</th>
          <th>Nilai Akhir</th>
          <th>Tanggal Pendaftaran</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $nomor  = 431;
          $alamat = 12;
          $nilai  = 99;
          for($i=1;$i<=20;$i++){
            $a  = $nomor+$i;
            $b  = $alamat+$i;
            $c  = $nilai-$i;
            echo "
        <tr>
          <td>{$a}</td>
          <td>Siswa {$i}</td>
          <td>Jln. Kesiswaan No. {$b}</td>
          <td>SMPN {$i} Bandung</td>
          <td>A</td>
          <td>2014</td>
          <td>{$c}</td>
          <td>06-03-2014</td>
          <td>a</td>
        </tr>
            ";
          }
        ?>
      </tbody>
    </table>
  </div>
</div>