<?php
ob_start();
include("Head.php");
include("../Assets/Connection/connection.php");
session_start();
$trainerid=$_SESSION['tid'];
$selqry="select*from tbl_booking u inner join tbl_user p on p.user_id=u.user_id where u.trainer_id='".$trainerid."'";
$row=$con->query($selqry);


?>

<style>
body{
     margin:0;
     padding:0;
     background: #111B28;
}
#login-form{
     /* position: absolute;
     top: 1000px;
     left: 930px; */
     width: 1500px;
     padding: 40px;
     /*transform: translate(-50%, -50%);*/
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
}
.cont {
     display: flex;
    justify-content: center;
    align-items: center; 
    
    
}
.color-bgf {
     box-shadow: 0 20px 20px #ff1313;
     width:fit-content;
     height:fit-content;
}


</style>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
tr, td {
  border-style: hidden;
}
div.a {
  font-size: 20px;
}
.font {
        color: white; 
        font-size: 20px;
    }
</style>
</head>

<body>
<br><br><br><br><br><br>
<p align="center" class="font">This is the list of clients who have taken subscribtion under you chat with each clients with the chat option.
   <br> Upload the resources(Workout Routines and Instructions ) with upload resources option for each client.
   <br> You can upload different Routines for different clients through specified upload button.
<div class="cont">
<div class="color-bgf">
<div id="login-form">  
<div id="login-details">
  <div id="tab">
<form id="form1" name="form1" method="post" action="" align="center">
  <table width="100%" height="400" border="1" align="center">
    <tr>
      <td width="42"><div class="a">SLNO</div></td>
      <td width="37"><div class="a">Name</div></td>
      <td width="45"><div class="a">Gender</td>
      <td width="55"><div class="a">Booking Date</div></td>
      <td width="106"><div class="a">Action</div></td>
      
    </tr>
    <?php 
	$i=1;
	while($data=$row->fetch_assoc())
	{
	?>
    <tr>
      <td><div class="a"><?php echo $i;?></div></td>
      <td><div class="a"><?php echo $data['user_name'];?></div></td>
      <td><div class="a"><?php echo $data['user_gender'];?></div></td>
      <td><?php echo $data['date'];?></div></td>
      <td><a  href="Trainerupload.php?eid=<?php echo $data["booking_id"]?>" style="color:white"class="GFG">Upload Resources</a>
    <br><a href="UserChat.php?id=<?php  echo $data["user_id"]?> "style="color:Red" class="DFG">Chat with user</a></td>
    </tr>
    <?php
	 $i++; }
	?>
  </table>
</form>
</div>
</div>
  </div>
  </div>
  </div>
</body>
<?php
include("Foot.php");
ob_flush();
?>
</html>