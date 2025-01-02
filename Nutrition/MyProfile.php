<?php
ob_start();
include("Head.php");
include("../Assets/Connection/connection.php");
session_start();
$nutritionid=$_SESSION['nid'];
$selq="select*from tbl_nutrition u inner join tbl_place p on p.place_id=u.place_id inner join tbl_district d on d.district_id=p.district_id where nutrition_id='".$nutritionid."'";
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
     top: 400px;
     left: 930px;
     width: 1100px;
     padding: 40px;
     transform: translate(-50%, -50%);
     background: linear-gradient(#0B111A, #111B28);
     box-sizing: border-box;
     box-shadow: 0 15px 25px #ff1313;
     border-radius: 18px;
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
tr, td {
  border-style: hidden;
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
<br><br><br><br><br><br>
  <div id="tab">
  <div id="login-form"  >
<div id="login-details">
<form id="form1" name="form1" method="post" action="" align="center"style="font-size: 20px;">
  <table  border="1" align="center">
  <tr>
  <td colspan='2'>
  <img src="../Assets/Files/Nutrition/<?php echo $data['nutrition_photo'] ?>" width="200px"  />
  </td>
    <tr>
      <td>NAME</td>
      <td><?php echo $data["nutrition_name"];?></td>
    </tr>
    <tr>
      <td>CONTACT</td>
      <td><?php echo $data["nutrition_contact"];?> </td>
    </tr>
    <tr>
      <td>EMAIL</td>
      <td><?php echo $data["nutrition_email"];?></td>
    </tr>
    <tr>
      <td>ADDRESS</td>
      <td><?php echo $data["nutrition_address"];?></td>
    </tr>
    <tr>
      <td>GENDER</td>
      <td><?php echo $data["nutrition_gender"];?></td>
    </tr>
    <tr>
      <td>DISTRICT</td>
      <td><?php echo $data["district_name"];?>  </td>
    </tr>
    <tr>
      <td>PLACE</td>
      <td><?php echo $data["place_name"];?></td>
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