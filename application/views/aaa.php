<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <title>HOME - <?php echo $this->config->item('nama_aplikasi') . " " . $this->config->item('versi'); ?></title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
   <meta name="apple-mobile-web-app-capable" content="yes">
   <meta name="description" content="SMPT Bugelan - Ujian Berbasis Komputer">
   <link href="<?php echo base_url(); ?>___/css/bootstrap.css" rel="stylesheet">
   <link href="<?php echo base_url(); ?>___/css/style.css" rel="stylesheet">
   <link href="<?php echo base_url(); ?>___/plugin/fa/css/font-awesome.min.css" rel="stylesheet">
   <link href="<?php echo base_url(); ?>___/plugin/datatables/dataTables.bootstrap.css" rel="stylesheet">
   <link rel="icon" type="image/png" href="<?php echo base_url(); ?>___/img/kemenag.png">
</head>

<body>
   <div class="" style="min-height: 450px">
      <nav class="navbar navbar-findcond navbar-fixed-top" style="background-color: #0B6623; color: #fff;">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand"><b><?php echo $this->config->item('nama_aplikasi') . " " . $this->config->item('versi'); ?></b></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar">
               <ul class="nav navbar-nav navbar-right">
                  <?php
                  //$menu = gen_menu();
                  //echo $menu['menu_atas']; 
                  ?>
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <?php echo "[" . $this->session->userdata('admin_user') . "] - " . $this->session->userdata('admin_nama');
                        ?>
                        <span class="caret"></span></a>
                     <ul class="dropdown-menu" role="menu">
                        <li><a href="#" onclick="return rubah_password();">UBAH SANDI</a></li>
                        <li><a href="<?php echo base_url(); ?>adm/logout" onclick="return confirm('ANDA YAKIN KELUAR?');">LOGOUT</a></li>
                     </ul>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <?php echo gen_menu(); ?>
      <?php echo $this->load->view($p); ?>
   </div>
   <div class="col-md-12 footer" style="background-color: #0B6623; color: #fff;">
      <b><?php echo $this->config->item('nama_sekolah') . " - " . $this->config->item('nama_aplikasi') . " - " . $this->config->item('versi') . "<br> WAKTU SERVER: " . tjs(date('Y-m-d H:i:s'), "s") . " - WAKTU DATABASE: " . tjs($this->waktu_sql, "s"); ?>.</b>
   </div>
   <!-- insert modal -->
   <div id="tampilkan_modal"></div>
   <script src="<?php echo base_url(); ?>___/js/jquery-1.11.3.min.js"></script>
   <script src="<?php echo base_url(); ?>___/js/bootstrap.js"></script>
   <?php
   if ($this->uri->segment(2) == "m_soal" && $this->uri->segment(3) == "edit") {
   ?>
      <script src="<?php echo base_url(); ?>___/plugin/ckeditor/ckeditor.js"></script>
   <?php
   }
   ?>
   <script src="<?php echo base_url(); ?>___/plugin/datatables/jquery.dataTables.min.js"></script>
   <script src="<?php echo base_url(); ?>___/plugin/datatables/dataTables.bootstrap.min.js"></script>
   <script src="<?php echo base_url(); ?>___/plugin/jquery_zoom/jquery.zoom.min.js"></script>
   <script src="<?php echo base_url(); ?>___/plugin/countdown/jquery.countdownTimer.js"></script>
   <script type="text/javascript">
      var base_url = "<?php echo base_url(); ?>";
      var editor_style = "<?php echo $this->config->item('editor_style'); ?>";
      var uri_js = "<?php echo $this->config->item('uri_js'); ?>";
   </script>
   <script src="<?php echo base_url(); ?>___/js/aplikasi.js?time=<?php echo time(); ?>"></script>
</body>

</html>