<?php
session_start();
if (!$_SESSION['login']) {
  echo "<script type= 'text/>javascript'>
  alert ('Maaf anda hasur login); 
  window.location='../login.php'</script>";
}else {
  include('../config/database.php');
  $user= new Database();
  $user=mysqli_query($user->koneksi,
  "SELECT * FROM users WHERE password='$_SESSION[login]");

  $user=mysqli_fetch_array($user);



?>


<!--Header-->
<?php
include('../layouts/includes/head.php');
?>
<!--end header-->
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
      <!--navbar-->
      <?php
      include('../layouts/includes/navbar.php');
      ?>
      <!--end navbar-->
    <div class="app-body">
    <!--sidebar-->
    <?php
    include('../layouts/includes/sidebar.php');
    ?>
    <!--end sidebar-->
      
      <!--main-->
      <main class="main">Ig:Algani14</main>
      <!--end main-->
      
    </div>
    <!--footer-->
    <?php
    include('../layouts/includes/footer.php');
    ?>
    <!--end footer-->
    
    <!-- CoreUI and necessary plugins-->
    <!--scripts-->
    <?php
    include('../layouts/includes/scripts.php');
    ?>
    <!--end scripts-->
    
</html>
<?php
}
?>