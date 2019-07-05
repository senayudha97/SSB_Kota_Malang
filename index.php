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
    .navatas{
         background-color: #03439C;
         border-color: #080808;
    }
    
    .navbawah{
         background-color: #000E59;
         border-color: #080808;
    }
    /* Set black background color, white text and some padding */
    footer {
      background-color: #9F9BFA;
      color: #383776;
      padding: 15px;
      font-weight: bold;
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
<nav class="navatas" >
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><img src="logo.png" width="50"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <label><h1><font color="white" style="font-weight: bold;">GIS SSB Kota Malang</font></h1></label>
    </div>
  </div>
</nav>

<nav class="navbawah">
  <div class="container-fluid">
    
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"> <a href="index.php"><font color="white">Beranda</a></font></li>
        <li><a href="peta.php"> <font color="white">Peta</a></font></li>
        <li><a href="ssb.php"> <font color="white">SSB</a></font></li>
        <li><a href="lapangan.php"> <font color="white">Lapangan</a></font></li>
        <li><a href="event.php"> <font color="white">Event</a></font></li>
        <li><a href="buku_tamu.php"> <font color="white">Buku Tamu</a></font></li>
        <li><a href="tentang.php"> <font color="white">Tentang</a></font></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in" style="color: white;"></span><font color="white"> Login</font></a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
     
    </div>
    <div class="col-sm-8 text-left" style="color:   #C2C0FF;"> 
      <div class="w3-content w3-display-container">
          <img class="mySlides" src="london.jpg" style="width:100%">
          <img class="mySlides" src="city.png" style="width:100%">
          <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
          <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
      </div>

            <script>
              var myIndex = 0;
              carousel();

              function carousel() {
                  var i;
                  var x = document.getElementsByClassName("mySlides");
                  for (i = 0; i < x.length; i++) {
                     x[i].style.display = "none";  
                  }
                  myIndex++;
                  if (myIndex > x.length) {myIndex = 1}    
                  x[myIndex-1].style.display = "block";  
                  setTimeout(carousel, 3000); 
              }


              var slideIndex = 1;
                  showDivs(slideIndex);

                  function plusDivs(n) {
                    showDivs(slideIndex += n);
                  }

                  function showDivs(n) {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    if (n > x.length) {slideIndex = 1}    
                    if (n < 1) {slideIndex = x.length}
                    for (i = 0; i < x.length; i++) {
                       x[i].style.display = "none";  
                    }
                    x[slideIndex-1].style.display = "block";  
                  }
              </script>
    </div>
    <div class="col-sm-2 sidenav">
      
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
