<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
   require_once("config.php");
?>

<title>Form Login</title>
<div align='center'>
  <form action="proseslogin.php" method="post">
  <h1>SILAHKAN LOGIN</h1>
 
  <table>
  <tbody>
      <img src="download (4).jpg" />
  <tr><td>Username</td><td> : <input name="username" type="text"></td></tr>
  <tr><td>Password</td><td> : <input name="password" type="password"></td></tr>
  <tr><td colspan="2" align="right"><input value="Login" type="submit"> <input value="Batal" type="reset"></td></tr>
  <tr><td colspan="2" align="center">Belum Punya akun ? <a href="daftar.php"><b>Daftar</b></a></td></tr>
  <script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/popper.min.js"></script>
	<script src="/bootstrap/js/bootstrap.min.js"></script>
  </tbody>
  </table>
  </form>
</div>
