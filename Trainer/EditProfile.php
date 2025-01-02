<?php
ob_start();
include("Head.php");
include("../Assets/Connection/connection.php");
session_start();
$trainerid=$_SESSION['tid'];

if(isset($_POST["btnedit"]))
{
	$tname=$_POST["txtname"];
	$contact=$_POST["txtcontact"];
	$email=$_POST["txtemail"];
	$address=$_POST["txtaddress"];
	
	$upQ="update tbl_trainer set trainer_name='".$tname."', trainer_contact='".$contact."', trainer_email='".$email."',trainer_address='".$address."' where trainer_id='".$trainerid."'";
	
		
	 if($con->query($upQ))
       {
		   ?>
          <script>
          alert(' Profile Updated');
		  	window.location="EditProfile.php";
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
     top: 450px;
     left: 930px;
     width: 1000px;
     padding: 40px;
     transform: translate(-50%, -50%);
     background: linear-gradient(#0B111A, #111B28);
     box-sizing: border-box;
     box-shadow: 0 15px 25px #ff1313;
     border-radius: 10px;
     color: white;
     letter-spacing: .2em ;
}
#login-head{
     text-align: center;
     font-family: 'Inter', sans-serif;
     color:#ff1313 ;
     margin-bottom: 30px;
     font-size: 4.5rem;
     text-shadow: 0 0 .28rem#ff1313;
}
#login-details{
     margin-top: 3rem;
     margin-left: 1rem;
     font-size: 1.5rem;    
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
     box-shadow: 0 0 2em 0 white; 
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
div.a {
  font-size: 20px;
}
tr, td {
  border-style: none;
}

</style>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><b>Untitled Document<</title>
<style>
th, td {
  border-style: none;
}
div.a {
  font-size: 20px;
}
</style>
</head>

<body>
<br><br><br><br><br><br>
<div id="login-form"  >
<div id="login-details">
  <div id="tab">
<form id="form1" name="form1" method="post" action="" align="center">
  <table height="299" border-style="none">
    <tr>
      <td width="146"><div class="a">Name</div></td>
      <td  id="user"><input type="text" name="txtname" id="txtname"  value="<?php  echo $data["trainer_name"];?>" /></td>
    </tr>
    <tr>
      <td><div class="a">Contact</div></td>
      <td id="user"><input type="text" name="txtcontact" id="txtcontact" style="font-size: 20px;" value="<?php echo $data["trainer_contact"];?>  " /></td>
    </tr>
    <tr>
      <td><div class="a">Email</div></td>
      <td id="user"><input type="text" name="txtemail" id="txtemail" style="font-size: 20px;" value="<?php echo $data["trainer_email"];?>"/></td>
    </tr>
    <tr>
      <td><div class="a">Address</div></td>
      <td><textarea name="txtaddress" id="txtaddress" cols="45" rows="5" style="font-size: 20px;" ><?php echo $data["trainer_address"];?></textarea></td>
    </tr>
     <tr>
      <td colspan="2" id="submit" align="center"><input type="submit" name="btnedit" id="btnedit" style="font-size: 20px;" value="Edit" />
       <input type="reset" name="btncancel" id="btncancel" value="Cancel" style="font-size: 20px;" /></td>
    </tr>
  </table>
</form>
</div>
</div>
  </div>
</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php
include("Foot.php");
ob_flush();
?>
</html>