<?php
ob_start();
include("Head.php");

include("../Assets/Connection/connection.php");
if(isset($_POST["btnsave"]))
{
  $nemail=$_POST["txtemail"];
  $selUser="select * from tbl_user where user_email='".$nemail."'";
  $selNutri="select * from tbl_nutrition where nutrition_email='".$nemail."'";
  $selTrainer="select * from tbl_trainer where trainer_email='".$nemail."'";
  $dataUser=$con->query($selUser);
  $dataNutri=$con->query($selNutri);
  $dataTrainer=$con->query($selTrainer);
  if( $dataUser->num_rows>0 || $dataNutri->num_rows>0 || $dataTrainer->num_rows>0)
  {
    ?>
    <script>
      alert('Email-id Already used');
	  		window.location="NutritionistRegistration.php";
    </script>
    <?php
  }
  else
  {
	$nname=$_POST["txtname"];
	$ncontact=$_POST["txtcontact"];
	$npassword=$_POST["txtpassword"];
	$ncpassword=$_POST["txtconfirm"];
	$ngender=$_POST["txtgender"];
	$naddress=$_POST["txtaddress"];
	$nplace=$_POST["txtplace"];
	$ndistrict=$_POST["txtdistrict"];
	$nphoto=$_FILES["txtphoto"]["name"];
	$nphotopath=$_FILES["txtphoto"]["tmp_name"];
	$nproof=$_FILES["txtproof"]["name"];
	$nproofpath=$_FILES["txtproof"]["tmp_name"];
	move_uploaded_file($nphotopath,"../Assets/Files/Nutrition/".$nphoto);
	move_uploaded_file($nproofpath,"../Assets/Files/Nutrition/".$nproof);
	if($npassword == $ncpassword)
	{
	    $insQry="insert into tbl_nutrition(nutrition_name,nutrition_contact,nutrition_address,nutrition_email,nutrition_photo,nutrition_proof,nutrition_password,nutrition_gender,place_id,district_id) value('".$nname."','".$ncontact."','".$naddress."','".$nemail."','".$nphoto."','".$nproof."','".$npassword."','".$ngender."','".$nplace."','".$ndistrict."')";
     	if($con->query($insQry))
	{
		?>
        <script>
		alert("VERIFICATION PENDING (wait until admin verify you)");
		window.location="../index.html";
		</script>
        <?php
	}
	else{
		?>
        <script>
		alert("Failed");
		window.location="NutitionRegistration.php";
		</script>
        <?php
        }

	}
  }
     
} 
?>

<style>
body{
     margin: 0;
     padding: 40%;
     background: #111B28;
}
#login-form{
     position: absolute;
     top: 90%;
     left: 50%;
     width: 60%;
     padding: 40px;
     transform: translate(-50%, -50%);
     background: linear-gradient(#0B111A, #111B28);
     box-sizing: border-box;
     box-shadow: 0 20px 35px #ff1313;
     border-radius: 10px;
     color: white;
     letter-spacing: .2em ;
}
#user input{
     background-color: #182638;
     border-color: transparent;
     font-size: 1.6rem;
     width: 100%;
     color: white;
     margin-top: 0.8rem;
     border-radius: 4px;
     padding: .3rem;
     transition: .5S;
     letter-spacing: .1em ;   
}
#user input:hover{
     box-shadow: 0 0 2em 0 #ff1313; 
}
#submit{
     
     margin-top: 5%;
     margin-bottom: 30px;
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
#login-details{
     margin-top: 3rem;
     margin-left: 1rem;
     font-size: 1.5rem;
}
label{
     font-family: 'Inter', sans-serif;  
}
</style>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body style="  background: #111B28 ">
<br><br><br><br><br><br><br><br><br><br><br><br>
<div id="login-form"  >
<div id="login-details">
  <div id="tab">
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table  border-style="none" align="center">
    <tr>
      <td width="150" id="login">Name</td>
      <td width="300" id='user'><input type="text" name="txtname" id="txtname" pattern="^[A-Z]+[a-zA-Z ]*$"/></td>
    </tr>
    <tr>
      <td id="login">Contact</td>
      <td id='user'><input type="text" name="txtcontact" id="txtcontact" pattern="[6-9]{1}[0-9]{9}"  /></td>
    </tr>
    <tr>
      <td id="login">Email</td>
      <td id='user'><input type="email" name="txtemail" id="txtemail" /></td>
    </tr>
    <tr>
      <td id="login">Gender</td>
      <td><br><input type="radio" name="txtgender" id="txtgender" value="Male" />&nbsp;
      MALE
        <br><input type="radio" name="txtgender" id="txtgender2" value="Female" />&nbsp;
      FEMALE</td>
    </tr>
    <tr>
      <td id="login">Password</td>
      <td id='user'><br><input type="password" name="txtpassword" id="txtpassword" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"/>[Must Consist 8 characters,an upper case,lower case,a symbol and a number]</td>
    </tr>
    <tr>
      <td id="login">Confirm Password</td>
      <td id='user'><input type="password" name="txtconfirm" id="txtconfirm" /></td>
    </tr>
    <tr>
      <td  id="login">Address</td>
      <td id='user'><textarea name="txtaddress" id="txtaddress" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td  id="login">District</td>
      <td><select name="txtdistrict" id="txtdistrict" onChange="getPlace(this.value)">
       <option>---district---</option>
       <?php
	
	   //$i=0;
	   	$selQry="select * from tbl_district";
	$row=$con->query($selQry);
	while($data=$row->fetch_assoc())
		{
			//$i++;
		?>	
        <option value="<?php echo $data["district_id"];?> "> <?php echo $data["district_name"        ];?> </option>
        <?php
		}
		?>
      </select></td>
    </tr>
    <tr>
      <td id="login">Place</td>
      <td><select name="txtplace" id="txtplace">
      <option>----select----</option>
      </select></td>
    </tr>
    <tr>
      <td id="login">Photo</td>
      <td><input type="file" name="txtphoto" id="txtphoto" /></td>
    </tr>
    <tr>
      <td id="login">Proof</td>
      <td><input type="file" name="txtproof" id="txtproof" /></td>
    </tr>
    <tr>
      <td height="45" colspan="2" align="center" id='submit'><br><input type="submit" name="btnsave" id="btnsave" value="Submit" />
      <input type="reset" name="btncancel" id="btncancel" value="Cancel" /></td>
    </tr>
  </table>
</form>
  </div>
  </div>
  </div>
<script src="../Assets/JQ/jQuery.js"></script>
<script>
  function getPlace(did){
	  $.ajax({
		  url:"../Assets/AjaxPages/AjaxPlace.php?did=" + did,
		  success:function(html){
			  $("#txtplace").html(html);
		  }
	  });
  }
  </script>

</body>
<?php
include("Foot.php");
ob_flush();
?>
</html>
