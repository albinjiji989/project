<html>
    <link href="../Assets/Template/Login/style.css" rel="stylesheet">
    
    <body> 
	<?php 
	
include("../Assets/Connection/connection.php");
session_start();
if(isset($_POST['btnlogin']))
{
	$email=$_POST['txtemail'];
	$password=$_POST['txtpassword'];
	$selAdmin="select * from tbl_admin where admin_email='".$email."' and admin_password='".$password."'";
	$resAdmin=$con->query($selAdmin);
	$selUser="select * from tbl_user where user_email='".$email."' and user_password='".$password."'";
	$resUser=$con->query($selUser);
	
	$selTrainer="select * from tbl_trainer where trainer_email='".$email."' and trainer_password='".$password."'";
	$resTrainer=$con->query($selTrainer);
	
	$selNutrition="select * from tbl_nutrition where nutrition_email='".$email."' and nutrition_password='".$password."'";
	$resNutrition=$con->query($selNutrition);
	
	
	if($rowUSer=$resUser->fetch_assoc())
	{
		$_SESSION['uid']=$rowUSer['user_id'];
		$_SESSION['uname']=$rowUSer['user_name'];
		header('location: ../User/HomePage.php');
	}
	
	else if($rowAdmin=$resAdmin->fetch_assoc())
	{
		$_SESSION['aid']=$rowAdmin['admin_id'];
		$_SESSION['aname']=$rowAdmin['admin_name'];
		header('location: ../Admin/HomePage.php');
	}
	
	else if($rowTrainer=$resTrainer->fetch_assoc())
	{
		if($rowTrainer['trainer_status']==1){
		$_SESSION['tid']=$rowTrainer['trainer_id'];
		$_SESSION['tname']=$rowTrainer['trainer_name'];
		header('location: ../Trainer/HomePage.php');
		}
		else if($rowTrainer['trainer_status']==2){
		   ?>
          <script>
          alert('Verification Failed');
          </script>
           <?php
		}
		
			else{
		   ?>
          <script>
          alert('Verification Pending');
          </script>
           <?php
		}
	}
	
		else if($rowNutrition=$resNutrition->fetch_assoc())
	{
		if($rowNutrition['nutrition_status']==1){
		$_SESSION['nid']=$rowNutrition['nutrition_id'];
		$_SESSION['nname']=$rowNutrition['nutrition_name'];
		header('location: ../Nutrition/Homepage.php');
		}
			else if($rowNutrition['nutrition_status']==2){
		   ?>
          <script>
          alert('Verification Failed');
          </script>
           <?php
		}
		else{
		   ?>
          <script>
          alert('Verification Pending');
          </script>
           <?php
		}
		
	}
		
	else
	{
		echo "Invalid";
	}
}
?>
<div id="login-form">
    <div id="login-head">
         <h1>Login</h1>
    </div>
<div id="login-details">
    <form action="" method="post">
         
         <div id="user">
    <input type="email" name="txtemail" id="txtemail" required autocomplete="off" placeholder="Email">
    </div>
    
    <div id="pass">
    <input type="password" name="txtpassword" id="txtpassword" required  autocomplete="off" placeholder="Password">
    </div>

    <div id="submit" align="center">
    <input type="submit" name="btnlogin" id="btnlogin" value="Log In">
         </div>
		 <div align='center'>
		 <a href="../index.html" style="color:#ff1313">Home</a>
		 </div>
		 
    </form>

</div>
</div>
</body>
</html>