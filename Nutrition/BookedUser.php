<?php
ob_start();
include("Head.php");

include("../Assets/Connection/connection.php");
session_start();
$nutritionid=$_SESSION['nid'];
$selqry="select*from tbl_booking u inner join tbl_user p on p.user_id=u.user_id where u.nutrition_id='".$nutritionid."' ";
$row=$con->query($selqry);


?>
<style>
body{
     margin:0;
     padding:0;
     background: #111B28;
}
#login-form{
     position: absolute;
     top: 550px;
     left: 930px;
     width: 1500px;
     padding: 40px;
     transform: translate(-50%, -50%);
     background: linear-gradient(#0B111A, #111B28);
     box-sizing: border-box;
     box-shadow: 0 15px 25px #ff1313;
     border-radius: 10px;
     color: white;
     letter-spacing: .2em ;
}

.GFG { 
    background-color: #EA2E05; 
    border: 2px solid black; 
    color: green; 
    padding: 5px 10px; 
    text-align: center; 
    display: inline-block; 
    font-size: 20px; 
    margin: 10px 30px; 
    cursor: pointer; 
} 
.DFG { 
    background-color: white; 
    border: 2px solid black; 
    color: green; 
    padding: 5px 10px; 
    text-align: center; 
    display: inline-block; 
    font-size: 20px; 
    margin: 10px 30px; 
    cursor: pointer; 
} 
tr, td {
  border-style: hidden;
}
div.a {
  font-size: 20px;
}.font {
        color: white; 
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
<form id="form1" name="form1" method="post" action="" align="center" style="font-size: 20px;" >
  <table width="100%" border="1">
    <tr>
      <td width="42">SLNO</td>
      <td width="37">Name</td>
      <td width="45">Gender</td>
      <td width="55">Booking Date</td>
      <td width="106">Action</td>
      
    </tr>
    <?php 
	$i=1;
	while($data=$row->fetch_assoc())
	{
	?>
    <tr>
      <td><?php echo $i;?></td>
      <td><?php echo $data['user_name'];?></td>
      <td><?php echo $data['user_gender'];?></td>
      <td><?php echo $data['date'];?></td>
      <td align="center"><a  href="Nutritionistupload.php?eid=<?php echo $data["booking_id"]?>" style="color:white"class="GFG">Upload Resources</a>
    <br><a href="UserChat.php?id=<?php  echo $data["user_id"]?> "style="color:Red" class="DFG">Chat with user</a></td>
    </tr>
  
    <?php
    $i++;
	}
	?>
  </table>
  </div>
  </div>  
  </div>
</form>
</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
include("Foot.php");
ob_flush();
?>
</html>