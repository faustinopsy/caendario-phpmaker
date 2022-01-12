<?php
session_start();
error_reporting(0);
require_once('evento/action/conexao2.php');
if(strlen($_SESSION['idUsuario'])==0)
	{	
header('location:index.php');
}
else{
	
if(isset($_POST['submit']))
  {	
	$file = $_FILES['image']['name'];
	$file_loc = $_FILES['image']['tmp_name'];
	$folder="images/";
	$new_file_name = strtolower($file);
	$final_file=str_replace(' ','-',$new_file_name);
	
	$name=$_POST['name'];
	$nome=$_POST['nome'];
	$mobileno=$_POST['mobile'];
	$designation=$_POST['designation'];
	$idedit=$_POST['editid'];
	$image=$_POST['image'];

	if(move_uploaded_file($file_loc,$folder.$final_file))
		{
			$image=$final_file;
		}

	$sql="UPDATE usuarios SET name=(:name), nome=(:nome), mobile=(:mobileno), designation=(:designation), Image=(:image) WHERE id=(:idedit)";
	$query = $dbh->prepare($sql);
	$query-> bindParam(':name', $name, PDO::PARAM_STR);
	$query-> bindParam(':nome', $nome, PDO::PARAM_STR);
	$query-> bindParam(':mobileno', $mobileno, PDO::PARAM_STR);
	$query-> bindParam(':designation', $designation, PDO::PARAM_STR);
	$query-> bindParam(':image', $image, PDO::PARAM_STR);
	$query-> bindParam(':idedit', $idedit, PDO::PARAM_STR);
	$query->execute();
	$msg="Information Updated Successfully";
}    
?>

<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<link rel="stylesheet" href="css/w3.css">
	<title>Cartão</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">
<script src="css/html2canvas.min.js"></script>
	<style>
	.containerx {
  margin-top: 10px;
  border: solid 0px ;
}
	<script type= "text/javascript" src="../vendor/countries.js"></script>
	<style>
	.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
	background: #dd3d36;
	color:#fff;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
	background: #5cb85c;
	color:#fff;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}

#grad2 {
  
  /*background-color: red; /* For browsers that do not support gradients */
  background-image: linear-gradient(to right, blue,green , red); /* Standard syntax (must be last) */


}

</style>

</head>

<body >
<?php
		$nome = $_SESSION['nomeUsuario'];
		$sql = "SELECT * from usuarios where nome = (:nome);";
		$query = $dbh -> prepare($sql);
		$query-> bindParam(':nome', $nome, PDO::PARAM_STR);
		$query->execute();
		$result=$query->fetch(PDO::FETCH_OBJ);
		$cnt=1;	
?>
	<?php include ('menu/menuSuperior.php'); ?>
	

				    
		<div class="w3-container w3-center" id="main" onclick="w3_close()">
  <h2></h2>
 <main >
  <div  class="w3-card-4 w3-dark-grey"  >

    <div class="w3-container w3-center" id="grad2">
      <h3></h3>
      <div  class="w3-display-container " >
      <img src="images/<?php echo htmlentities($result->image);?>" alt="Avatar" class="w3-circle w3-border w3-hover-grayscale" style="width:30%">
       <div class="w3-display-topmiddle w3-container "style="text-shadow:1px 1px 1px gold"><h5></h5></div>
     <div class="w3-display-left w3-container" style="text-shadow:1px 1px 1px gold"> <h5><?php echo htmlentities($result->name);?></h5>

<h5><?php echo htmlentities($result->nome);?></h5></div>
    
       <div class="w3-row" >
    <div class="w3-third w3-center">
      <h3></h3>
      <a href='https://www.facebook.com/rodrigo.hipnologo' target="_blank"><img src="phpimages/fc.png" alt="facebook" style="width:30%"></a>
      <div class="w3-display-bottomleft w3-container "style="width:50% text-shadow:1px 1px 1px gold"><h5><?php echo htmlentities($result->facebook);?></h5></div>
    
    </div>
    <div class="w3-third w3-center">
      <h3></h3>
      <a href='https://api.whatsapp.com/send?<?php echo htmlentities($result->mobile);?>=&text=pode me ligar' target="_blank"><img src="phpimages/wh.png" alt="Whatsapp" style="width:30%"></a>
    <div class="w3-display-botton w3-container "style="width:50% text-shadow:1px 1px 1px gold"><h5><?php echo htmlentities($result->mobile);?></h5></div>
    </div>
    <div class="w3-third w3-center w3-margin-bottom">
      <h3></h3>
      <a href='https://www.instagram.com/rodrigo_hipnologo' target="_blank"><img src="phpimages/ins.png" alt="Instagram" style="width:30%"></a>
      <div class="w3-display-bottomright w3-container "style="twidth:50% ext-shadow:1px 1px 1px gold"><h5><?php echo htmlentities($result->instagram);?></h5></div>
    
    </div>
  </div></div>
    </div>
 </div>
  </div>
</div>
</div>
	 </main> 
	 
	 <button onclick="report()" id="cameraFlip"><i class="fa fa-camera fa-fw"></i></button>
	 <div class="containerx">
  <img width="75%" class="screen">
</div>
<br><br><br><br>
<script>
			function report() {
  let region = document.querySelector("main"); // whole screen
  html2canvas(region, {
    onrendered: function(canvas) {
      let pngUrl = canvas.toDataURL(); // png in dataURL format
      let img = document.querySelector(".screen");
      img.src = pngUrl; 

      // here you can allow user to set bug-region
      // and send it with 'pngUrl' to server
    },
  });
}


			function takeSnapShot(){
	//Captura elemento de vídeo
	var video = document.querySelector("#webcam");
	
	//Criando um canvas que vai guardar a imagem temporariamente
	var canvas = document.createElement('canvas');
	canvas.width = video.videoWidth;
	canvas.height = video.videoHeight;
	var ctx = canvas.getContext('2d').drawImage(video, 0, 0, 320, 240);
	
	//Desenhando e convertendo as dimensões
	//ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
	
	//Criando o JPG
	var dataURI = canvas.toDataURL('image/jpeg'); //O resultado é um BASE64 de uma imagem.
	document.querySelector("#base_img").value = dataURI;
	
            document.querySelector("#imagemConvertida").setAttribute("src", dataURI);
            
	//sendSnapShot(dataURI); //Gerar Imagem e Salvar Caminho no Banco
}

			</script>
  
	
	
	
	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
	<script type="text/javascript">
				 $(document).ready(function () {          
					setTimeout(function() {
						$('.succWrap').slideUp("slow");
					}, 3000);
					});
	</script>
</body>
</html>
<?php } ?>