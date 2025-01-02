
<?php
ob_start();
include("Head.php");
include("../Assets/Connection/connection.php");
session_start();
$trainerid=$_SESSION['tid'];

if(isset($_POST["btnsubmit"]))
{
	$introduction=$_POST["txtintroduction"];
	$photo=$_FILES["txtimage"]["name"];
	$photopath=$_FILES["txtimage"]["tmp_name"];
	$demo=$_FILES["txtdemo"]["name"];
	$demopath=$_FILES["txtdemo"]["tmp_name"];
	
	move_uploaded_file($photopath,"../Assets/Files/Trainer/Introduction/".$photo);
	move_uploaded_file($demopath,"../Assets/Files/Trainer/Introduction/".$demo);
	
	

	$insqry="insert into tbl_intro(introduction,demo_image,other_image,trainer_id)value('".$introduction."','".$demo."','".$photo."','".$trainerid."')";
	
		
	 if($con->query($insqry))
       {
		   ?>
          <script>
          alert('Uploaded');
		  	window.location="TrainerIntro.php";
          </script>
           <?php
	   }

	
}

?>

<style>
body{
     margin:0;
     padding:0;
     background: #111B28;
}
#login-form{
     position: absolute;
     top: 500px;
     left: 930px;
     width:fit-content;
     padding: 40px;
     transform: translate(-50%, -50%);
     background: linear-gradient(#0B111A, #111B28);
     box-sizing: border-box;
     box-shadow: 0 15px 25px #ff1313;
     border-radius: 10px;
     color: white;
     letter-spacing: .2em ;
}
label{
     font-family: 'Inter', sans-serif;   
}
#user input{
     background-color: #182638 ;
     border-color: transparent;
     font-size: 2.2rem;
     width: 160%;
     color: white;
     margin-top: 0.5rem;
     border-radius: 7px;
     padding: .3rem;
     transition: .5S;
     letter-spacing: .1em ;
    
}
#user input:hover{
     box-shadow: 0 0 2em 0 #ff1313; 
}

#pass{
     margin-top: 1rem;
}
#pass input{
     background-color: transparent;
     border-color: transparent;
     font-size: 1.2rem;
     width: 100%;
     color: white;
     margin-top: 0.5rem;
     border-radius: 4px;
     padding: .3rem;
     transition: .5S;
     letter-spacing: .1em ;
}
#pass input:hover{
     box-shadow: 0 0 2em 0 #ff1313;
}


#submit{
     
     margin-top: 20%;
     margin-bottom: 20%;
     margin-left: 3%;
     
}
#submit input{
     padding: .5rem;
     color: #ff1313;
     background-color: transparent;
     border: solid 2px #ff1313;
     font-family: 'Inter', sans-serif;
     font-size: 16px;
     font-weight: 400;
     letter-spacing: 3px ;
     border-radius: 0.25em;
     transition: .5s;
     text-shadow: 0 0 0.125em white , 0 0 0.25 currentColor ;
     text-shadow: 0 0 .2rem #ff1313;  
}
#submit input:hover{
     background: #ff1313;
     color: white;
     box-shadow: 1px 0  3.5em 0 #ff1313;
     text-shadow: 0 0 .2rem white;
}
#login-head{
     text-align: center;
     font-family: 'Inter', sans-serif;
     color:#ff1313 ;
     margin-bottom: 30px;
     font-size: 4.5rem;
     text-shadow: 0 0 .28rem#ff1313;
}
div.a {
  font-size: 20px;
}
.b {
  font-size: 15px;
}tr, td {
  border-style: none;
}
</style>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<br><br><br><br><br><br>
<div id="login-form"  >
<div id="login-details">
<div id="login-head">
<h1 align="centr" style="color:white">Marketing Tools<h1>
</div> 
<h3 style="color:white">Marketing Tools are mean to be as a brief indroduction of yourself to the clients.Explain briefly what you are intend to provide through FitQuest.Upload two images that may include an example of your style and procedures.</h3>
  <div id="tab">
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" align="cenetr">
  <table width="100%" height="600"border="1" align="center">
   <tr>
      <td><div class="a">Introduction</div></td>
      <td><textarea name="txtintroduction" id="txtintroduction" cols="45" rows="5" style="font-size: 20px;" required ></textarea></td>
    </tr>
    <tr>
      <td width="176"></td>
      <td width="53"><input type="file" name="txtdemo" id="txtdemo"/></td>
    </tr>
   
    <tr>
      <td><div class="a">other images</div></td>
      <td><input type="file" name="txtimage" id="txtimage" /></div></td>
    </tr>
    <tr>
      <td colspan="2" id="submit" align="center"><input type="submit" name="btnsubmit" id="btnsubmit" style="font-size: 20px;" value="Submit" />
      <input type="reset" name="btncancel" id="btncancel" style="font-size: 20px;" value="Cancel" /></td>
      <td><a  href="TrainerIntroUpdate.php?did=<?php echo  $trainerid?>" style="color:white"class="GFG">Upload Resources</a>
    </tr>
  </table>
</form>
</div>
</div>
  </div>
</body>
<?php
include("Foot.php");
ob_flush();
?>
</html>