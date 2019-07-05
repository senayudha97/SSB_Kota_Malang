<!DOCTYPE html>
<html lang="en">
<head>
  <title>Beranda</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<label><h1>GIS Sekolah Sepak Bola Kota Malang</h1></label>
<br>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="login_Admin.php">Beranda Admin</a></li>
        <li ><a href="kelber_admin.php">Kelola Beranda</a></li>
        <li class="active"><a href="kelssb_admin.php">Kelola SSB</a></li>
        <li ><a href="kelmem_admin_lapangan.php">Kelola Member</a></li>
        <li ><a href="kelbuk_admin.php">Kelola Buku Tamu</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
     <br><br>
    <p>Pilih SSB</p><br>
    <select name="pilih_ssb">
        <option disabled selected value="pilih">Pilih</option>
        <option disabled     value="Arema junior">arema junior</option>
        <option disabled  value="gajayana FC">Gajayana FC</option>
    </select>
    <br>  <br>      
    <input type="submit" name="cari_ssb" value="Cari">
     
    </div>
    <div class="col-sm-10 text-left"> 
      <br>
      <span class="glyphicon glyphicon-circle-arrow-right"></span>
      <a href="input_ssb.php" class="btn btn-default">Tambah SSB</a><br>      
      <br>
      <table class="table">
          <th>Nama SSB</th><th>Sekretariat</th><th>Koordinator</th><th>No Telp</th><th>Stats Lap</th>
          <th>Nama Lapangan</th><th>Jam Latihan</th>
          <th>Jad Lat</th><th>Jum Anggota</th><th>Syarat Masuk</th><th>Action</th>
          <tr>
            <td>Arema Junior</td>
            <td>Blimbing</td>
            <td>Budi</td>
            <td>085678912</td>
            <td>Sewa</td>
            <td>Lap ITN</td>
            <td>15.00-17.00</td>
            <td>Sabtu-Minggu</td>
            <td>70</td>
            <td>Domisili Malang</td>
            <td><a href="update_ssb.php">Edit</a>.<a href="#">Delete</a></td>
            
          </tr>
      </table> 
    </div>
   
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>