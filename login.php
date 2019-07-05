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
      <a class="navbar-brand" href="index.php">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Beranda</a></li>
        <li><a href="peta.php">Peta</a></li>
        <li><a href="ssb.php">SSB</a></li>
        <li><a href="lapangan.php">Lapangan</a></li>
        <li><a href="event.php">Event</a></li>
        <li><a href="buku_tamu.php">Buku Tamu</a></li>
        <li><a href="tentang.php">Tentang</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
     
    </div>
    <div class="col-sm-8 text-left"> 
    <br><br><br>
    <center>
        <table class="table" >
            <tr>
              <td>
                <br><br>
                <center>
                  <img src="login.png" width="50"><br><br><br>
                  <span class="glyphicon glyphicon-user"></span>
                  <input type="text" name="username" placeholder="Username" required>
                  <br><br>
                  <span class=" glyphicon glyphicon-eye-close"></span>
                  <input type="text" name="password" placeholder="Password" required>
                  <br><br>
                  <select class="select">
                    <option selected="Level">Level</option>
                    <option value="koordinator lapangan">Koordinator Lapangan</option>
                    <option value="koordinator event">Koordinator Event</option>
                    <option value="admin">Admin</option>
                  </select>
                  <br><br>
                  <input type="submit" name="login" class="btn btn-default">
                </center> 
              </td>
            </tr>
          
        </table>
        </center>
    </div>
    <div class="col-sm-2 sidenav">
         <p><b>Register</b></p><br><br>
        <p style="text-align: left;"><a href="daftar_klapangan.php" class="btn btn-default">Dft Koordinator Lapangan</a></p>
        <p style="text-align: left;"><a href="daftar_kevent.php" class="btn btn-default">Dft Koordinator Event</a></p>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
