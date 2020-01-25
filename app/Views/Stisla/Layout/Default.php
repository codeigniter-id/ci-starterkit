<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Codeigniter 4 Starterkit</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url('stisla/modules/bootstrap/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('stisla/modules/fontawesome/css/all.min.css'); ?>">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url('stisla/css/style.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('stisla/css/components.css');?>">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <?php echo $this->include('Stisla/Components/Navbar'); ?>
      <?php echo $this->include('Stisla/Components/SidebarMenu'); ?>


      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
     <?php echo $this->include('Stisla/Components/SectionHeader') ; ?>

          <div class="section-body">
            <h2 class="section-title">This is Example Page</h2>
            <p class="section-lead">This page is just an example for you to create your own page.</p>
            <div class="card">
              <div class="card-header">
                <h4>Example Card</h4>
              </div>
              <div class="card-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
              <div class="card-footer bg-whitesmoke">
                This is card footer
              </div>
            </div>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="<?php echo base_url('stisla/modules/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('stisla/modules/popper.js');?>"></script>
  <script src="<?php echo base_url('stisla/modules/tooltip.js');?>"></script>
  <script src="<?php echo base_url('stisla/modules/bootstrap/js/bootstrap.min.js');?>"></script>
  <script src="<?php echo base_url('stisla/modules/nicescroll/jquery.nicescroll.min.js');?>"></script>
  <script src="<?php echo base_url('stisla/modules/moment.min.js');?>"></script>
  <script src="<?php echo base_url('stisla/js/stisla.js');?>"></script>
  
  <!-- JS Libraies -->

  <!-- Page Specific JS File -->
  
  <!-- Template JS File -->
  <script src="<?php echo base_url('stisla/js/scripts.js');?>"></script>
  <script src="<?php echo base_url('stisla/js/custom.js');?>"></script>
</body>
</html>