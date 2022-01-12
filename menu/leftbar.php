<!DOCTYPE html>
<html lang="pt-br">
<head>
 <head>


<meta charset="UTF-8">


  <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
 <link rel="stylesheet" href="style.css" type="text/css">
 <link rel="stylesheet" href="w3.css" type="text/css">

  <meta name="viewport" content="width=device-width, initial-scale=1">


  <script type="text/javascript">
var isNS = (navigator.appName == "Netscape") ? 1 : 0; var EnableRightClick = 0; if(isNS) document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP); function mischandler(){ if(EnableRightClick==1){ return true; } else {return false; } } function mousehandler(e){ if(EnableRightClick==1){ return true; } var myevent = (isNS) ? e : event; var eventbutton = (isNS) ? myevent.which : myevent.button; if((eventbutton==2)||(eventbutton==3)) return false; } function keyhandler(e) { var myevent = (isNS) ? e : window.event; if (myevent.keyCode==96) EnableRightClick = 1; return; } document.oncontextmenu = mischandler; document.onkeypress = keyhandler; document.onmousedown = mousehandler; document.onmouseup = mousehandler;
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->

  
  <style>
.centered img {
  width: 150px;
  border-radius: 50%;
}
.navbar {
  overflow: hidden;
  background: teal;
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
.w3-sidebar {width: 120px;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
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

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 100%;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container text {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
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
</head>

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></button>

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



</script>
<script>
function texto_aleatorio(){ 
   var textos = new Array() 
   

   aleat = Math.random() * (textos.length) 
   aleat = Math.floor(aleat) 

document.write(textos[aleat]) 
} 
</script>
<script>
var imagens = [
  
  "Quem olha para fora sonha,<br> quem olha para dentro desperta.<br> <b>'Carl Jung'</b>", 
   "Conheça todas as teorias, domine todas as técnicas,<br> mas ao tocar uma alma humana, <br> seja apenas outra alma humana.<br> <b>'Carl Jung'</b>", 
   "Não me pergunte quem sou <br>e não me diga para permanecer o mesmo.<br> <b>'Michel Foucault'</b>", 
   "Nenhuma técnica psicológica <br>funcionará se o amor não funcionar.<br> <b>'Augusto Cury'</b>",
  "É parte da cura o desejo de ser curado.<br> <b>'Sêneca'</b>", 
    "Ninguém chegou a ser sábio por acaso. <br><b>'Sêneca'</b>", 
   "O homem que sofre antes de ser necessário,<br> sofre mais que o necessário.<br> <b>'Sêneca'</b>",
    "Se quer ser amado, ame.<br> <b>'Sêneca'</b>",
   "Toda arte é imitação da natureza. <br><b>'Sêneca'</b>",
    "A fome não é exigente:<br> basta contentá-la; como, não importa. <br><b>'Sêneca'</b>",
   "Cala-te primeiro se queres que os outros se calem.<br> <b>'Sêneca'</b>",
    "A medida do amor é amar sem medida.<br> <b>'Santo Agostinho'</b>",
    "O Senhor oculta algumas coisas aos sábios, <br> mas as revela aos pequeninos.<br> <b>'Jesus Cristo'</b>",
   "O que não provoca minha morte <br> faz com que eu fique mais forte. <br><b>'Friedrich Nietzsche'</b>", 
    "Imagine uma nova história para sua vida e acredite nela. <br><b>'Paulo Coelho'</b>",
    "Quantas coisas perdemos por medo de perder.<br> <b>'Paulo Coelho'</b>",
   "Não espere por uma crise para descobrir <br> o que é importante em sua vida.<br> <b>'Platão'</b>",
    "Pessimismo leva à fraqueza, otimismo ao poder.<br> <b>'William James'</b>",
    "O otimismo é a fé em ação.<br>  Nada se pode levar a efeito sem otimismo.<br> <b>'Helen Keller'</b>",
    "Só há um tempo em que é fundamental despertar.<br> Esse tempo é agora. <br><b>'Buda'</b>",
    "O que somos é consequência do que pensamos.<br> <b>'Buda'</b>",
    "A paz vem de dentro de você mesmo.<br> Não a procure à sua volta.<br> <b>'Buda'</b>",
   "Não sou nem ateniense, nem grego, <br> mas sim um cidadão do mundo.<br> <b>'Sócrates'</b>",
    "Conhece-te a ti mesmo <br> e conhecerás o universo e os deuses.<br> <b>'Sócrates'</b>",
    "A imaginação é mais importante que o conhecimento.<br> <b>'Albert Einstein'</b>",
    "A natureza não faz nada em vão. <br><b>'Aristóteles'</b>",
    "Com organização e tempo,<br> acha-se o segredo de fazer tudo e bem feito.<br> <b>'Pitágoras'</b>",
   "Não é livre quem não obteve domínio sobre si.<br> <b>'Pitágoras'</b>",
    "Tudo vale a pena quando a alma não é pequena.<br> <b>'Fernando Pessoa'</b>",
   "A mente que se abre a uma nova idéia <br> jamais voltará ao seu tamanho original.<br> <b>'Oliver Wendell Holmes Sr.'</b>",
    "Todas as graças da mente e do coração <br> se escapam quando o propósito não é firme.<br> <b>'William Shakespeare'</b>", 
   "A sorte favorece a mente bem preparada.<br> <b>'Louis Pasteur'</b>",
   "O primeiro dos bens, depois da saúde, é a paz interior.<br> <b>'François La Rochefoucauld'</b>",
   "Que seu alimento seja seu remédio.<br> <b>'Hipócrates'</b>",
    "A felicidade nada mais é do que boa saúde e memória fraca.<br> <b>'Desconhecido'</b>",
   "Tente o SIM, pois o NÃO você já possui.<br> <b>'Desconhecido'</b>" ,
    "Tudo o que a mente humana pode conceber,<br> ela pode conquistar.<br> <b>'Napoleon Hill'</b>", 
   "Mente humana, como pára-quedas:<br> funciona melhor aberta.<br> <b>'Charlie Chan'</b>",
   "Poderosa e grande é a mente humana! <br> Pode construir e pode destruir.<br> <b>'Napoleon Hill'</b>",
  "Quem desiste nunca vence e <br> só vence quem nunca desiste.<br> <b>'Napoleon Hill'</b>",
   "Poeira ao vento (Dust In The Wind) <br> Tudo o que somos é poeira ao vento<br> <b>'Kansas'</b>" 
];
function cite() {
document.getElementById("citacao").innerHTML = "'" + imagens[Math.floor(Math.random() * imagens.length)] + "'";
var intervalo = setInterval(function() { 
  document.getElementById("citacao").innerHTML = "'" + imagens[Math.floor(Math.random() * imagens.length)] + "'";
 }, 12000);
 }

</script> 
<div class="navbar w3-opacity">
  <button class="w3-button  w3-xlarge w3-hide-large" onclick="w3_open()"><i class="fa fa-bars" aria-hidden="true"></i></button>
<span class="w3-center w3-padding-14 w3-content  w3-hover-text-green" align="center"><b><i class="w3-spin fa fa-ravelry" style="font-size:20px;"></i> RODRIGO HIPNÓLOGO</b></span>

</div>
 <div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left " style="width:170px; background: linear-gradient(to top, #00000 80%, #000000 100%);" id="mySidebar">

<div class="w3-container w3-center">
 <div class="centered">
  <a href="../#" >
    <img src="img/hipnose-clinica.jpg" style="width:50%"></a>
      </div>
  </div> 
  
  <footer class="w3-content w3-padding-44 w3-center " style="font-size:20px;">
    <a href="https://www.facebook.com/rodrigo.hipnologo" target="_blank"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
   <a href="https://www.instagram.com/rodrigo_hipnologo/" target="_blank"> <i class="fa fa-instagram w3-hover-opacity"></i></a>
    <a href="https://youtube.com/menteaberta" target="_blank"><i class="fa fa-youtube w3-hover-opacity"></i></a>
   <a href="https://twitter.com/RodrigoFautino" target="_blank"> <i class="fa fa-twitter w3-hover-opacity"></i></a>
   <a href="https://www.linkedin.com/in/rodrigo-faustino-655934163/" target="_blank"> <i class="fa fa-linkedin w3-hover-opacity"></i></a>
    <a href="https://www.google.com/maps/place/Hipnose+cl%C3%ADnica+-+Rodrigo+Faustino/@-23.581608,-46.6399507,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x58ce588d960cb029!8m2!3d-23.581608!4d-46.637762" target="_blank"><i class="fa fa-map-marker w3-hover-opacity"></i></a>  
    
  <!-- End footer -->
  </footer>
  <hr>
  <a href="#" class="w3-bar-item w3-button" onclick="w3_close()"><i class="fa fa-home" aria-hidden="true"></i> INICIO</a>
  <a href="#hipnose" class="w3-bar-item w3-button" onclick="w3_close()"><i class="fa fa-bullseye" aria-hidden="true"></i> HIPNOSE</a>
   <a href="#fotos" class="w3-bar-item w3-button" onclick="w3_close()"><i class="fa fa-picture-o" aria-hidden="true"></i> FOTOS</a>
   <a href="#avaliacao" class="w3-bar-item w3-button" onclick="w3_close()">  <i class="fa fa-star" aria-hidden="true"></i> AVALIAÇÕES</a>
      <a href="#contato" class="w3-bar-item w3-button" onclick="w3_close()">  <i class="fa fa-envelope" aria-hidden="true"></i> CONTATO</a>
 
  <a href="tag/artigos" class="w3-bar-item w3-button" onclick="w3_close()"><i class="fa fa-book" aria-hidden="true"></i> ARTIGOS</a>
  <a href="tag/terapia-ai" class="w3-bar-item w3-button" onclick="w3_close()"><i class="fa fa-android" aria-hidden="true"></i> IA-TERAP<b>IA</b></a>

<br><br><br><br><br><br><br><br>
 
</div>
 
<div class="container">
<div class="content">
<div class="w3-container">
<div class="w3-display-container ">























</div></div></div></div>

 <script src="css/jquery-3.3.1.js"></script>
 
<!-- END PAGE CONTENT -->

<link rel="sortcut icon" href="img/hipnose-clinica.jpg" type="image/jpg">;


<script type="text/javascript" src="js/script.js"></script>
<script src="css/jquery.min.js"></script>
<ul class="">
   <li>
    <span><i class="fa fa-lightbulb-o" aria-hidden="true"></i></span>
    <span><i class="fa fa-lightbulb-o" aria-hidden="true"></i></span>
   </li>
  </ul>
  <ul2 class="">
   <li>
    <span><i class="fa fa-tint" aria-hidden="true"></i></span>
    <span><i class="fa fa-tint" aria-hidden="true"></i></span>
   </li>
  </ul2>
<script>
function rateApp() {
            android.rateApp();
       }
	   
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

$(document).ready(function(){
$('ul').click(function(){
    $('ul').toggleClass('active')
    $('div').toggleClass('w3-black')
   })
   $('ul2').click(function(){
    $('ul2').toggleClass('active')
    $('div').toggleClass('w3-blue')
   })
 
  
$("xx").click(function(){
    $("h1, h3, p").toggleClass("w3-xlarge");
  });
$('luz').click(function(){
   
    $('div').toggleClass('w3-black')
   })
  $("verde").click(function(){
   
    $("div").toggleClass("w3-teal");
  });
  $("azul").click(function(){
   
    $("div").toggleClass("linear-gradient(to bottom, #3399ff 0%, #99ccff 100%);");
  });
});
</script>
  <script>
/* Get the element you want displayed in fullscreen */ 
var elem = document.documentElement;

/* Function to open fullscreen mode */
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.mozRequestFullScreen) { /* Firefox */
    elem.mozRequestFullScreen();
  } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE/Edge */
    elem.msRequestFullscreen();
  }
}

/* Function to close fullscreen mode */
function closeFullscreen() {
  if (document.exitFullscreen) {
    document.exitFullscreen();
  } else if (document.mozCancelFullScreen) {
    document.mozCancelFullScreen();
  } else if (document.webkitExitFullscreen) {
    document.webkitExitFullscreen();
  } else if (document.msExitFullscreen) {
    document.msExitFullscreen();
  }
}

// Events
var output = document.getElementById("myP");
document.addEventListener("fullscreenchange", function() {
  output.innerHTML = "fullscreenchange event fired!";
});
document.addEventListener("mozfullscreenchange", function() {
  output.innerHTML = "mozfullscreenchange event fired!";
});
document.addEventListener("webkitfullscreenchange", function() {
  output.innerHTML = "webkitfullscreenchange event fired!";
});
document.addEventListener("msfullscreenchange", function() {
  output.innerHTML = "msfullscreenchange event fired!";
});
</script>
  
<div class="footer2">

   <footer class="w3-content w3-padding-44 w3-center " style="font-size:25px;">
   <span onclick="openFullscreen();"><i class="fa fa-arrows-alt"></i></span>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K2533210P5" target="_blank"><i class="fa fa-user w3-hover-opacity"></i></a>&nbsp;&nbsp;
    <a href="https://www.facebook.com/rodrigo.hipnologo" target="_blank"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>&nbsp;&nbsp;
   <a href="https://www.instagram.com/rodrigo_hipnologo/" target="_blank"> <i class="fa fa-instagram w3-hover-opacity"></i></a>&nbsp;&nbsp;
    <a href="https://youtube.com/menteaberta" target="_blank"><i class="fa fa-youtube w3-hover-opacity"></i></a>&nbsp;&nbsp;
   <a href="https://twitter.com/RodrigoFautino" target="_blank"> <i class="fa fa-twitter w3-hover-opacity"></i></a>&nbsp;&nbsp;
   <a href="https://www.linkedin.com/in/rodrigo-faustino-655934163/" target="_blank"> <i class="fa fa-linkedin w3-hover-opacity"></i></a>&nbsp;&nbsp;
    <a href="https://www.google.com/maps/place/Hipnose+cl%C3%ADnica+-+Rodrigo+Faustino/@-23.581608,-46.6399507,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x58ce588d960cb029!8m2!3d-23.581608!4d-46.637762" target="_blank"><i class="fa fa-map-marker w3-hover-opacity"></i></a>  
   
  <!-- End footer -->
  </footer>
</div>
