<?php
include("../Assets/Connection/connection.php");
session_start();
$nutritionid=$_SESSION['nid'];


if(isset($_POST["btnsubmit"]))
{	$trainerplanid=$_GET["vid"];
	$file=$_FILES["txtfile"]["name"];
	$path=$_FILES["txtfile"]["tmp_name"];
	move_uploaded_file($path,"../Assets/Files/Plan/".$file);
	$details=$_POST["txtdetails"];
	$insQry="insert into tbl_gallery(gallery_file,nplan_id,gallery_caption)value('".$file."','".$trainerplanid."','".$details."')";
	$con->query($insQry); 
	
}
if(isset($_GET["did"]))
{
	$delqry="delete from tbl_gallery where nplan_id='".$_GET["did"]."'";
	$con->query($delqry);
	header("location:NutritionSteps.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="200" border="10">
    <tr>
      <td>FILE</td>
      <td><label for="txtfile"></label>
      <input type="file" name="txtfile" id="txtfile" /></td>
    </tr>
    <tr>
      <td>DETAILS</td>
      <td><label for="txtdetails"></label>
      <textarea name="txtdetails" id="txtdetails" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <tr>
    <td align="center" colspan="2"><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" />
      <input type="reset" name="btncancel" id="btncancel" value="Cancel" /></td>
  </tr>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="200" border="10">
    <tr>
      <td>SL.NO</td>
      <td>FILE</td>
      <td>DETAILS</td>
      <td>ACTION</td>
    </tr>
    <?php
	$i=0;
	$selQry="select * from tbl_gallery where nplan_id > 0";
	$row=$con->query($selQry);
	while($data=$row->fetch_assoc())
	{
	$i++
	?>
    
    <tr>
       <td><?php echo $i;?></td>
      <td><?php echo $data["gallery_file"];?></td>
      <td><?php echo $data["gallery_caption"];?></td>
      
      <td>
       <a href="District.php?did=<?php echo $data["nplan_id"]?>">Delete</a>
      </td>
    </tr>
    <?php
	}
	?>
  </table>
  <p>&nbsp;</p>
</form>
</body>
</html>
