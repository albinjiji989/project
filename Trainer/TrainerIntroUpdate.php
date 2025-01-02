<?php
ob_start();
include("Head.php");
include("../Assets/Connection/connection.php");
session_start();
$trainerid=$_SESSION['tid'];

if(isset($_POST["btnedit"]))
{
	$introduction=$_POST["txtintroduction"];
	$photo=$_FILES["txtimage"]["name"];
	$photopath=$_FILES["txtimage"]["tmp_name"];
	$demo=$_FILES["txtdemo"]["name"];
	$demopath=$_FILES["txtdemo"]["tmp_name"];
	
	move_uploaded_file($photopath,"../Assets/Files/Trainer/Introduction/".$photo);
	move_uploaded_file($demopath,"../Assets/Files/Trainer/Introduction/".$demo);
	
	

	$insqry="update set tbl_intro(introduction,demo_image,other_image,trainer_id)value('".$introduction."','".$demo."','".$photo."','".$trainerid."')";
	
		
	 if($con->query($insqry))
       {
		   ?>
          <script>
          alert('Updated');
		  	window.location="TrainerIntro.php";
          </script>
           <?php
	   }

	
}

$selq="select*from tbl_trainer where trainer_id='".$trainerid."'";
	$row=$con->query($selq);
	$data=$row->fetch_assoc();
?>
<style>
body{
     margin:0;
     padding:0;
     background: #111B28;
}
#login-form{
     position: absolute;
     top: 80%;
     left: 50%;
     width: 70%;
     padding: 40px;
     transform: translate(-50%, -50%);
     background: linear-gradient(#0B111A, #111B28);
     box-sizing: border-box;
     box-shadow: 0 15px 25px #ff1313;
     border-radius: 10px;
     color: white;
     letter-spacing: .2em ;
}
div.a {
  font-size: 20px;
}


</style>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div id="login-form"  >
<div id="login-details">
  <div id="tab">
<form id="form1" name="form1" method="post" action="">
  <table width="649" height="441" border="1">
    <tr>
      <td width="351" rowspan="2"><img src="../Assets/Files/Trainer/<?php echo $data['trainer_photo'] ?>" width="200px"  /></td>
      <td width="282" height="129"><?php echo $data["trainer_name"];?></td>
    </tr>
    <tr>
      <td><?php echo $data["category_name"];?></td>
    </tr>
    <tr>
      <td colspan="2"><img src="../Assets/Files/Trainer/Introduction/<?php echo $data['other_image'] ?>" width="200px"  /></td>
    </tr>
    <tr>
      <td colspan="2"><?php echo $data["introduction"];?></td>
    </tr>
      <tr>
        
       <td colspan="2"><img src="../Assets/Files/Trainer/Introduction/<?php echo $data['demo_image'] ?>" width="200px"  /></td>
      </tr>
      <tr>
      <td colspan="2" align="center"><input type="submit" name="btnsub" id="btnsub" value="UPDATE" /></td>
    </tr>
    
  </table>
</form>
</div>
  </div>
  </div>
</body>
</html>