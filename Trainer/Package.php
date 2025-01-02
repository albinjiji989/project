<?php
ob_start();
include("Head.php");
include("../Assets/Connection/connection.php");

if(isset($_POST["btnsave"]))
{
	
	$packagename=$_POST["txtpackagename"];
	$details=$_POST["txtdetails"];
	$amount=$_POST["txtamount"];
	$image=$_FILES["txtimage"]["name"];
	$duration=$_POST["txtduration"];
	$imagepath=$_FILES["txtimage"]["tmp_name"];
	move_uploaded_file($imagepath,"../Assets/Files/Package/".$image);
	$insQry="insert into tbl_package(package_name,package_details,package_amount,package_image,duration)value('".$packagename."','".$details."','".$amount."','".$image."','".$duration."')";
	$con->query($insQry); 
	
}
if(isset($_GET["did"]))
{
	$delqry="delete from tbl_package where package_id='".$_GET["did"]."'";
	$con->query($delqry);
	header("location:Package.php");
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

  <table align="center" width="200" border="10">
    <tr>
      <td>Package Name</td>
      <td><label for="txtpackagename"></label>
      <input type="text" name="txtpackagename" id="txtpackagename" /></td>
    </tr>
    <tr>
      <td>Detaills</td>
      <td><label for="txtdetails"></label>
      <textarea name="txtdetails" id="txtdetails" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>Amount</td>
      <td><label for="txtamount"></label>
      <input type="text" name="txtamount" id="txtamount" /></td>
    </tr>
    <tr>
      <td>Image</td>
      <td><label for="txtimage"></label>
      <input type="file" name="txtimage" id="txtimage" /></td>
    </tr>
    <tr>
      <td>Duration(Days)</td>
      <td><label for="txtduration"></label>
      <input type="text" name="txtduration" id="txtduration" /></td>
    </tr>
    <tr>
      <td align="center" colspan="2"><input type="submit" name="btnsave" id="btnsave" value="Save" />
      <input type="reset" name="txtcancel" id="txtcancel" value="Cancel" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table align="center" width="200" border="10">
    <tr>
      <td>SL.NO</td>
      <td>PACKAGE NAME</td>
      <td>DETAILS</td>
      <td>AMOUNT</td>
      <td>IMAGE</td>
      <td>DURATION</td>
      <td>ACTION</td>
    </tr>
   <?php
	$i=0;
	$selQry="select * from tbl_package";
	$row=$con->query($selQry);
	while($data=$row->fetch_assoc())
	{
	$i++
	?>

    <tr>
    
      <td><?php echo $i;?></td>
      <td><?php echo $data["package_name"];?></td>
      <td><?php echo $data["package_details"];?></td>
       <td><?php echo $data["package_amount"];?></td>
        <td> <img src="../Assets/Files/Package/<?php echo $data['package_image'] ?>" width="200px"  /></td>
         <td><?php echo $data["duration"];?></td>
      <td><a href="Package.php?did=<?php echo $data["package_id"]?>">Delete</a></td>
    </tr>
    <?php
	}
	?>
  </table>
  <p>&nbsp;</p>
</form>
</div>
</body>
<?php
include("Foot.php");
ob_flush();
?>
</html>