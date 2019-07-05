<?php 
include ('koneksi.php');
session_start();
if (isset($_POST["login"])) {
	$username 		  =$_POST['username'];         
	$password 	    =md5($_POST['pass']);
  $query = "SELECT * FROM tb_login WHERE username='$username'";
  $result = mysqli_query($conn, $query);
  
  if ($result) {
    $row = mysqli_fetch_array($result);
    $cek = $row["password"];

    if ($password ==  $cek) {
      $_SESSION['username'] = $row['username'];
      $_SESSION['password'] = $row['password'];

      header('Location:../../admin.ta.rpl.php');
    }
    else
    {
      echo "<script>alert('Password Invalid');</script>";
    }
  }


}
 ?>
