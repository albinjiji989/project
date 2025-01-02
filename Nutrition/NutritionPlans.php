<?php
include("../Assets/Connection/connection.php");
session_start();
$nutritionid=$_SESSION['nid'];

if(isset($_POST["btnsubmit"]))
{
	$caption=$_POST["txtcaption"];
	$details=$_POST["txtdetails"];
	$insQry="insert into tbl_nutritionplans(plan_caption,plan_details,nutrition_id)value('".$caption."','".$details."','".$nutritionid."')";
	 
	  	 	if($con->query($insQry))
       {
		   ?>
          <script>
          alert(' Uploaded');
          </script>
           <?php
	   }

	
}
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
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" align="center">

<table align="center" width="200" border="10">
  <tr>
    <td>CAPTION</td>
    <td><label for="txtcaption"></label>
      <input type="text" name="txtcaption" id="txtcaption" /></td>
  </tr>
 <tr>
    <td>Details</td>
    <td><label for="txtcaption">
      <textarea name="txtdetails" id="txtdetails" cols="45" rows="5"></textarea>
    </label></td>
  </tr>
  <tr>
    <td align="center" colspan="2"><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" />
      <input type="reset" name="btncancel" id="btncancel" value="Cancel" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<table align="center" width="200" border="10">
  <tr align="center">
    <td>SL.NO</td>
    <td>CAPTION</td>
    <td>DETAILS</td>
    <td>ACTION</td>
  </tr>
     <?php
	$i=0;
	$selQry="select * from tbl_nutritionplans where nutrition_id=$nutritionid";
	$row=$con->query($selQry);
	while($data=$row->fetch_assoc())
	{
	$i++
	?>
  <tr align="center">
  
     <td><?php echo $i;?></td>
      <td><?php echo $data["plan_caption"];?></td>
      <td><?php echo $data["plan_details"];?></td>
      
      <td>
        <a href="NutritionSteps.php?vid=<?php echo $data["plan_id"]?>"> Add Steps</a>
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
