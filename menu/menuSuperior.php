<?php
session_start();
error_reporting(0);
require_once('evento/action/conexao2.php');
if(strlen($_SESSION['idUsuario'])==0)
	{	
header('location:index.php');
}
else{
	
$nome = $_SESSION['nomeUsuario'];
		$sql = "SELECT * from usuarios where nome = (:nome);";
		$query = $dbh -> prepare($sql);
		$query-> bindParam(':nome', $nome, PDO::PARAM_STR);
		$query->execute();
		$result=$query->fetch(PDO::FETCH_OBJ);
		$cnt=1;	
}    
?>


<!-- Core CSS - Include with every page -->

    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/w3css">
<style>
navbar {
  overflow: hidden;
  background: black;
  position: fixed;
  top: 0;
  width: 100%;
}
hr{
  border: 1px solid;
  }
body, h1,h2,h3,h4,h5,h6 {font-family: "Arial", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;
    background: linear-gradient(to top, #00000 80%, #000000 100%);
    padding-top: 60px
}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 130px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0} body {
    height: 100%;
  }  }

.open-button {
  color: teal;
  padding: 2px 2px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
 bottom: 35px;
  right: 10px;
  border-radius: 4px;
}


.footer2 {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background: teal;
   opacity: 0.8;
   text-align: center;
}
#myBtn {
  display: none;
  position: fixed;
  bottom: 80px;
  right: 10px;
  z-index: 99;
  font-size: 25px;
  border: none;
  outline: none;
  background-color: teal;
  color: white;
  cursor: pointer;
  padding: 2px;
  border-radius: 4px;
  opacity: 0.8;
}

#myBtn:hover {
  background-color: #555;
}

.fa-hand-o-right  {
    display: inline-block;
    position: relative;
    -moz-animation: bounce 1s infinite linear;
    -o-animation: bounce 1s infinite linear;
    -webkit-animation: bounce 1s infinite linear;
    animation: bounce 1s infinite linear;
}

@-webkit-keyframes bounce {
    0% { left: 0; }
    50% { left: -0.2em; }
    70% { left: -0.3em; }
    100% { left: 0; }
}
@-moz-keyframes bounce {
    0% { left: 0; }
    50% { left: -0.2em; }
    70% { left: -0.3em; }
    100% { left: 0; }
}
@-o-keyframes bounce {
    0% { left: 0; }
    50% { left: -0.2em; }
    70% { left: -0.3em; }
    100% { left: 0; }
}
@-ms-keyframes bounce {
    0% { left: 0; }
    50% { left: -0.2em; }
    70% { left: -0.3em; }
    100% { left: 0; }
}
@keyframes bounce {
    0% { left: 0; }
    50% { left: -0.2em; }
    70% { left: -0.3em; }
    100% { left: 0; }
}
.fa-hand-o-left{
    display: inline-block;
    position: relative;
    -moz-animation: bounce 1s infinite linear;
    -o-animation: bounce 1s infinite linear;
    -webkit-animation: bounce 1s infinite linear;
    animation: bounce 1s infinite linear;
}

@-webkit-keyframes bounce {
    0% { left: 0; }
    50% { left: -0.2em; }
    70% { left: -0.3em; }
    100% { left: 0; }
}
@-moz-keyframes bounce {
    0% { top: 0; }
    50% { top: -0.2em; }
    70% { top: -0.3em; }
    100% { top: 0; }
}
@-o-keyframes bounce {
    0% { left: 0; }
    50% { left: -0.2em; }
    70% { left: -0.3em; }
    100% { left: 0; }
}
@-ms-keyframes bounce {
    0% { top: 0; }
    50% { top: -0.2em; }
    70% { top: -0.3em; }
    100% { top: 0; }
}
@keyframes bounce {
    0% { left: 0; }
    50% { left: -0.2em; }
    70% { left: -0.3em; }
    100% { left: 0; }
}


.fa-book{
	display: inline-block;
	-moz-animation: pulse 2s infinite linear;
	-o-animation: pulse 2s infinite linear;
	-webkit-animation: pulse 2s infinite linear;
	animation: pulse 2s infinite linear;
}

@-webkit-keyframes pulse {
	0% { opacity: 1; }
	50% { opacity: 0; }
	100% { opacity: 1; }
}
@-moz-keyframes pulse {
	0% { opacity: 1; }
	50% { opacity: 0; }
	100% { opacity: 1; }
}
@-o-keyframes pulse {
	0% { opacity: 1; }
	50% { opacity: 0; }
	100% { opacity: 1; }
}
@-ms-keyframes pulse {
	0% { opacity: 1; }
	50% { opacity: 0; }
	100% { opacity: 1; }
}
@keyframes pulse {
	0% { opacity: 1; }
	50% { opacity: 0; }
	100% { opacity: 1; }
}
</style>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
</head>
<body>
    <div class="w3-navbar w3-opacity">
  <button class="w3-button  w3-xlarge w3-hide-large" onclick="w3_open()"><i class="fa fa-bars" aria-hidden="true"></i></button>
<span class="w3-center w3-padding-14 w3-content  w3-hover-text-green" align="center"><b><i class="w3-spin fa fa-ravelry" style="font-size:20px;"></i> QRCode SY</b></span>
<a href="calendar.php" class="w3-bar-item w3-button" onclick="w3_close()"><i class="fa fa-calendar" aria-hidden="true"></i> </a>
  <a href="profile.php" class="w3-bar-item w3-button" onclick="w3_close()"><i class="fa fa-user" aria-hidden="true"></i> </a>
   <a href="cartao.php" class="w3-bar-item w3-button" onclick="w3_close()"><i class="fa fa-camera" aria-hidden="true"></i> </a>
   <a href="logout.php" class="w3-bar-item w3-button" onclick="w3_close()">  <i class="fa fa-sign-out" aria-hidden="true"></i> </a>
     <?php include ('notificacao.php'); ?>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></button>

<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left " style="width:170px; " id="mySidebar">
     <div class="centered">
  <a href="#" >
    <img src="images/<?php echo htmlentities($result->image);?>" style="width:70%"></a>
      </div>
<a href="calendar.php" class="w3-bar-item w3-button" onclick="w3_close()"><i class="fa fa-calendar" aria-hidden="true"></i> Calendario</a>
  <a href="profile.php" class="w3-bar-item w3-button" onclick="w3_close()"><i class="fa fa-user" aria-hidden="true"></i> Perfil</a>
   <a href="cartao.php" class="w3-bar-item w3-button" onclick="w3_close()"><i class="fa fa-camera" aria-hidden="true"></i> Cartao</a>
   <a href="logout.php" class="w3-bar-item w3-button" onclick="w3_close()">  <i class="fa fa-sign-out" aria-hidden="true"></i> Sair</a>
      <?php include ('notificacao.php'); ?>
<div class="w3-container w3-center">

  </div> 
  
 
  <!-- End footer -->
  </footer>
  <hr>
  

  
</div>





<div class="footer2">

   <footer class="w3-content w3-padding-44 w3-center " style="font-size:25px;">
   Sistema de eventos QRCODE
  <!-- End footer -->
  </footer>
</div>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

function move() {
  var elem = document.getElementById("myBar");   
  var width = 1;
  var id = setInterval(frame, 1000);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
	  setTimeout('location.reload();', 2000);
    } else {
      width++; 
      elem.style.width = width + '%'; 
    }
	 
  }
 
}

</script>