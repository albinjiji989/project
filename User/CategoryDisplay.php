<?php
ob_start();
include("Head.php");
include('../Assets/Connection/connection.php');

$selqry="select * from tbl_trainer where trainer_status=1";
$result=$con->query($selqry);
$row=$result->fetch_assoc()
?>
<style>
body{
     margin:0;
     padding:0;
     background: #111B28;
}
#login-form{
     position: absolute;
     top: 55%;
     left: 50%;
     width: 90%;
     padding: 40px;
     transform: translate(-50%, -50%);
     background: linear-gradient(#0B111A, #111B28);
     box-sizing: border-box;
     box-shadow: 0 15px 25px #ff1313;
     border-radius: 10px;
     color: white;
     letter-spacing: .2em ;
}
tr, td {
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
<div id="login-form">
<div id="login-details">
<div id="tab">
<table width="100%" border="0" >
<tr>
<?php
$selQry="select * from tbl_category ";
$res=$con->query($selQry);
$i=0;
while($data=$res->fetch_assoc())
{
	$i++;
?>
<td>
<a href="Trainersearch.php?did=<?php echo $data["category_id"]?>">
<div>
<p><img src="../Assets/Files/Category/<?php echo $data["image"]; ?>" width="200px"  /></p>
<p><h4><font color="lightblue"><?php echo $data["category_name"];?></font></h4></p>
<p><h4><font color="lightgrey">Explore Programs →</font></h4></p>
</div>
</a>
</td>
<?php
if($i==5)
{
	echo "</tr><tr>";
	$i=0;
}
}
?>
</tr>
</table>
</div>
</div>
</div>
</body>
<?php
include("Foot.php");
ob_flush();
?>
</html>