<?php
include ('evento/action/conexao2.php');
if(isset($_POST['submit']))
{

$file = $_FILES['image']['name'];
$file_loc = $_FILES['image']['tmp_name'];
$folder="images/"; 
$new_file_name = strtolower($file);
$final_file=str_replace(' ','-',$new_file_name);

$name=$_POST['name'];
$email=$_POST['nome'];
$password=md5($_POST['senha']);
$gender=$_POST['gender'];
$mobileno=$_POST['mobileno'];
$designation=$_POST['designation'];

if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$image=$final_file;
    }
$notitype='Create Account';
$reciver='Admin';
$sender=$email;

$sqlnoti="insert into notification (notiuser,notireciver,notitype) values (:notiuser,:notireciver,:notitype)";
$querynoti = $dbh->prepare($sqlnoti);
$querynoti-> bindParam(':notiuser', $sender, PDO::PARAM_STR);
$querynoti-> bindParam(':notireciver',$reciver, PDO::PARAM_STR);
$querynoti-> bindParam(':notitype', $notitype, PDO::PARAM_STR);
$querynoti->execute();    
    
$sql ="INSERT INTO usuarios(name,nome, senha, gender, mobile, designation, image, status) VALUES(:name, :nome, :senha, :gender, :mobileno, :designation, :image, 1)";
$query= $dbh -> prepare($sql);
$query-> bindParam(':name', $name, PDO::PARAM_STR);
$query-> bindParam(':nome', $email, PDO::PARAM_STR);
$query-> bindParam(':senha', $password, PDO::PARAM_STR);
$query-> bindParam(':gender', $gender, PDO::PARAM_STR);
$query-> bindParam(':mobileno', $mobileno, PDO::PARAM_STR);
$query-> bindParam(':designation', $designation, PDO::PARAM_STR);
$query-> bindParam(':image', $image, PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script type='text/javascript'>alert('Cadastrado!');</script>";
echo "<script type='text/javascript'> window.print(); </script>";
echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>

<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
  
</head>

<style>
@media print {
  body * {
    visibility: hidden;
  }
  #qrcode, #qrcode * {
    visibility: visible;
  }
  
</style>

</script>
  <script type="text/javascript">

	function validate()
        {
            var extensions = new Array("jpg","jpeg","png");
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
<body>
    	<?php include ('menu/menulogin.php'); ?>
	<div class="login-page bk-img">
		<div class="form-content">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center text-bold mt-2x">Cadastrar</h1>
						<h4 class="text-center text-bold mt-2x">Lembre-se de guadar o QRCode</h4>
                        <div class="hr-dashed"></div>
						<div class="well row pt-2x pb-3x bk-light text-center">
                         <form method="post" class="form-horizontal" enctype="multipart/form-data" name="regform" onSubmit="return validate();">
                            <div class="form-group">
                            <label class="col-sm-1 control-label">Nome<span style="color:red">*</span></label>
                            <div class="col-sm-5">
                            <input type="text" name="name" class="form-control" required>
                            </div>
                            <label class="col-sm-1 control-label" >Email<span style="color:red">*</span></label>
                            <div class="col-sm-5">
                            <input id="nome" type="text" name="nome" class="form-control"  required>
                            </div>
                            </div>

                            <div class="form-group">
                            <label class="col-sm-1 control-label">Senha<span style="color:red">*</span></label>
                            <div class="col-sm-5">
                            <input type="password" name="senha" class="form-control" id="senha" onblur="makeCode()" required >
                            </div>

                            <label class="col-sm-1 control-label"><span style="color:red"></span></label>
                            <div class="col-sm-5">
                            <input type="hidden" name="designation" id="designation" class="form-control" Readonly required>
                            </div>
                            </div>

                             <div class="form-group">
                            <label class="col-sm-1 control-label">Sexo<span style="color:red">*</span></label>
                            <div class="col-sm-5">
                            <select name="gender" class="form-control" required>
                            <option value="">Selecione</option>
                            <option value="Male">Masculino</option>
                            <option value="Female">Feminino</option>
                            </select>
                            </div>

                            <label class="col-sm-1 control-label">Fone<span style="color:red">*</span></label>
                            <div class="col-sm-5">
                            <input type="number" name="mobileno" class="form-control" required>
                            </div>
                            </div>

                             <div class="form-group">
                            <label class="col-sm-1 control-label">Foto<span style="color:red">*</span></label>
                            <div class="col-sm-5">
                            <div><input type="file" name="image" class="form-control"></div>
                            </div>
                            </div>

								<br>
                                <button class="btn btn-primary" name="submit" type="submit"  onclick="window.print()" >Salvar</button>
                                </form>
                                <div id="qrcode" style="width:200px; height:200px; margin-top:15px;"></div>
                                <br>
                                <br>
								<p>Já tem uma conta? <a href="index.php" >Login</a></p>
							</div>
						</div>
				</div>
			</div>
		</div>
		
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

var a = elText.value+"&"+md5(c.value); 
    

	
	
	if (!elText.value) {
		//alert("Digite o QRCode");
		elText.focus();
		return;
	}
	alert("Antes salvar o cadastro, Imprima o QRCode, \nou Copie o QRCode só atraves dele fará login");
	
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

</body>
</html>