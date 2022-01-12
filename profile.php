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
		$email=$_POST['nome'];
	$name=$_POST['name'];
	$face=$_POST['face'];
	$insta=$_POST['insta'];

	$mobileno=$_POST['mobile'];
	$designation=$_POST['designation'];
	$idedit=$_POST['editid'];
	$image=$_POST['image'];


	$xrx=$_POST['scan'];
	if(move_uploaded_file($file_loc,$folder.$final_file))
		{
			$image=$final_file;
		}

$imgx="images/".$_POST['image'];

$imagem_nome=$imgx;
$arquivo=fopen(	$imagem_nome,'r');
$contents = fread($arquivo, filesize($imagem_nome));
$encoded_attach = chunk_split(base64_encode($contents));
fclose($arquivo);
$limitador = "_=======". date('YmdHms'). time() . "=======_";

$mailheaders = "From: noreply@rodrigofaustino.com.br\r\n";
$mailheaders .= "MIME-version: 1.0\r\n";
$mailheaders .= "Content-type: multipart/related; boundary=\"$limitador\"\r\n";
$cid = date('YmdHms').'.'.time();

$texto="
<html>
<body>
<img src=\"cid:$cid\">
<font size=6><br />Dados atualizados </font>
<font size=6><br />Nome: ".$name. "</font>
<font size=6><br />Facebook: ".$face. "</font>
<font size=6><br />Instagram: ".$insta. "</font>
<font size=6><br />Celular: ".$mobileno. "</font>
</body>
</html>
";

$msg_body = "--$limitador\r\n";
$msg_body .= "Content-type: text/html; charset=iso-8859-1\r\n";
$msg_body .= "$texto";
$msg_body .= "--$limitador\r\n";
$msg_body .= "Content-type: image/jpeg; name=\"$imagem_nome\"\r\n";
$msg_body .= "Content-Transfer-Encoding: base64\r\n";
$msg_body .= "Content-ID: <$cid>\r\n";
$msg_body .= "\n$encoded_attach\r\n";
$msg_body .= "--$limitador--\r\n";

mail($email,"Dados QRSys",$msg_body, $mailheaders);


	$sql="UPDATE usuarios SET  name=(:name), mobile=(:mobileno),facebook=(:face),instagram=(:insta), designation=(:designation), image=(:image) WHERE id_usuario=(:idedit)";
	$query = $dbh->prepare($sql);
	$query-> bindParam(':name', $name, PDO::PARAM_STR);
	
	$query-> bindParam(':face', $face, PDO::PARAM_STR);
	$query-> bindParam(':insta', $insta, PDO::PARAM_STR);
	$query-> bindParam(':mobileno', $mobileno, PDO::PARAM_STR);
	$query-> bindParam(':designation', $designation, PDO::PARAM_STR);
	$query-> bindParam(':image', $image, PDO::PARAM_STR);
	$query-> bindParam(':idedit', $idedit, PDO::PARAM_STR);
	$query->execute();
	$msg=" atualizado com sucesso!!";
	
	
	

}    
?>

<!doctype html>
<html lang="en" class="no-js">

<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<link rel="stylesheet" href="css/w3.css">
	<title>Edit Profile</title>

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
		</style>


</head>

<body onload="makeCode()" >
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
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row" id="main" onclick="w3_close()">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading"><?php echo htmlentities($_SESSION['nomeUsuario']); ?></div>
<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

									<div class="panel-body">
<form method="post" class="form-horizontal" enctype="multipart/form-data">

<div class="form-group">
	<div class="col-sm-4">
	</div>
	<div class="col-sm-4 text-center">
		<img src="images/<?php echo htmlentities($result->image);?>" style="width:200px; border-radius:50%; margin:10px;">
		<input type="file" name="image" class="form-control">
		<input type="hidden" name="image" class="form-control" value="<?php echo htmlentities($result->image);?>">
 
	</div>
	<div class="col-sm-4">
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Nome<span style="color:red">*</span></label>
	<div class="col-sm-4">
	<input type="text" name="name" class="form-control" required onblur="makeCode()" value="<?php echo htmlentities($result->name);?>">
	</div>
	<label class="col-sm-2 control-label">Email<span style="color:red">*</span></label>
	<div class="col-sm-2">
	<input type="email" name="email" id="nome" class="form-control" Readonly required  value="<?php echo htmlentities($result->nome);?>">
	</div>
	
	
<div class="col-sm-2">
	<input type="hidden" name="senha" id="senha" class="form-control"  Readonly required value="<?php echo htmlentities($result->senha);?>">
	</div>
	
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Mobile<span style="color:red">*</span></label>
	<div class="col-sm-4">
	<input type="text" name="mobile" class="form-control" required  value="<?php echo htmlentities($result->mobile);?>">
	<label class="col-sm-2 control-label">Facebook<span style="color:red"></span></label>

	<input type="text" name="face" id="face" class="form-control"   value="<?php echo htmlentities($result->facebook);?>">

	<label class="col-sm-2 control-label">Instagram<span style="color:red"></span></label>

	<input type="text" name="insta" id="insta" class="form-control"   value="<?php echo htmlentities($result->instagram);?>">
	</div>

	<label class="col-sm-2 control-label">Codigo<span style="color:red">*</span></label>
	<div class="col-sm-4">
	<input type="text" name="designation" class="form-control" Readonly required value="<?php echo htmlentities($result->designation);?>">
	</div>
</div>
<input type="hidden" name="editid" class="form-control" Readonly required value="<?php echo htmlentities($result->id_usuario);?>">
<main><div id="qrcode" name="xrx" value="qrcode"  style="width:200px; height:200px; margin-top:15px;"></div>
<div class="form-group">
	<div class="col-sm-8 col-sm-offset-2">
		<button class="btn btn-primary" name="submit" type="submit">Salvar</button>
	</div>
	
	<script type="text/javascript" src="qrcode/jquery.min.js"></script>
<script type="text/javascript" src="qrcode/qrcode.js"></script>
<script src="js/md5.min.js"></script>
<script src="js/aes.js"></script>

<style>
media print {
  body * {
    visibility: hidden;
  }
  #qrcode, #qrcode * {
    visibility: visible;
  }
  #qrcode {
    position: fixed;
    left: 0;
    top: 0;
  }
}

</style>
</head>
<body >
<br><br><br><br>



<script type="text/javascript">
var qrcode = new QRCode(document.getElementById("qrcode"), {
	width : 200,
	height : 200
});

function makeCode () {	
  	var  elText= document.getElementById("nome");
  var c= document.getElementById("senha");
  var b = '&';

var a = elText.value+"&"+c.value; 
    

	
	
	if (!elText.value) {
		//alert("Digite o QRCode");
		elText.focus();
		return;
	}
	//alert("Antes salvar o cadastro, Imprima o QRCode, \nou Copie o QRCode só atraves dele fará login");
	
	qrcode.makeCode(a);
	document.getElementById("designation").value=md5(a);
}

makeCode();

$("#text").
	on("blur", function () {
		makeCode();
	}).
	on("keydown", function (e) {
		if (e.keyCode == 13) {
			makeCode();
		}
	});
</script>
  <script type="text/javascript">

	function validate()
        {
            var extensions = new Array("jpg","jpeg");
            var image_file = document.regform.image.value;
            var image_length = document.regform.image.value.length;
            var pos = image_file.lastIndexOf('.') + 1;
            var ext = image_file.substring(pos, image_length);
            var final_ext = ext.toLowerCase();
            for (i = 0; i < extensions.length; i++)
            {
                if(extensions[i] == final_ext)
                {
                return true;
                
                }
            }
            alert("Image Extension Not Valid (Use Jpg,jpeg)");
            return false;
        }
        
        
</script>
<button onclick="report()" id="cameraFlip"><i class="fa fa-camera fa-fw"></i></button>
	 <div class="containerx">
  <img width="75%" class="screen">
</div>


</div>

</form>

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
}</script>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	

	

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