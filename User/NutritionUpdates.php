<?php
ob_start();
include("Head.php");

  include("../Assets/Connection/connection.php");
  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<br><br><br><br><br><br>
  <div id="tab">
<form method="post">
  <table align="center" width="500" border="1">
    <tr align="center" >
      <td id="login">SL.NO</td>
      <td id="login">IMAGE 1</td>
      <td id="login">IMAGE 2</td>
      <td id="login">PDF</td>
      <td id="login">CAPTION</td>
    </tr>
    <?php
	$sel="select * from nutrition_upload where nutrition_id='".$_GET["eid"]."' and booking_id='".$_GET["bid"]."'";
	$data=$con->query($sel);
	$i=0;
	while($row=$data->fetch_assoc())
	{
		$i++;
	?>
    <tr>
      <td><?php echo $i?></td>
      <td><img src="../Assets/Files/Nutrition/Upload/<?php echo $row["up_image"]?>" width="150"  height="150"/></td>
      <td><img src="../Assets/Files/Nutrition/Upload/<?php echo $row["up_video"]?>" width="150"  height="150"/></td>
      <td><?php echo $row["up_pdf"];?></td>
      <td><?php echo $row["up_caption"];?></td>
    </tr>
    <?php
	}
	?>
  </table>

</form>
</div>

</body>
<?php
include("Foot.php");
ob_flush();
?>
</html>