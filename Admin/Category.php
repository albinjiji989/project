<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Category</title>
</head>
<body>
<style> 

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
body{
     margin:0;
     padding:0;
     background: #111B28;
}
#login-details{
     margin-top: 3rem;
     margin-left: 1rem;
     font-size: 1.5rem;
}
label{
     font-family: 'Inter', sans-serif;   
}
#user input{
     background-color: #182638;
     border-color: transparent;
     font-size: 1.2rem;
     width: 80%;
     color: white;
     margin-top: 0.5rem;
     border-radius: 4px;
     padding: .3rem;
     transition: .5S;
     letter-spacing: .1em ;   
}
#user input:hover{
     box-shadow: 0 0 2em 0 #ff1313; 
}
#submit{
     
     margin-top: 50px;
     margin-bottom: 0;
     margin-left: 0;
     
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
</style>
<?php
ob_start();
include("Head.php");
include("../Assets/Connection/connection.php");

if(isset($_POST["btnsubmit"]))
{
	
	$category=$_POST["txtcategory"];
	$photo=$_FILES["txtimage"]["name"];
	$photopath=$_FILES["txtimage"]["tmp_name"];
	move_uploaded_file($photopath,"../Assets/Files/Category/".$photo);
	$insQry="update tbl_category set category_name ='".$category."'";
	$con->query($insQry);
}
	if(isset($_GET["did"]))
{
	$delqry="delete from tbl_category where category_id='".$_GET["did"]."'";
	$con->query($delqry);
	header("location:Category.php");
}
?>

<div id="tab">
<form action="" method="post" enctype="multipart/form-data" name="form1">
  <table width="50%" border-style="none" align='center' >
    <tr>
      <td id='login-details' width='150'>Category</td>
      <td id='user' width='300'><input type="text" name="txtcategory" id="txtcategory" placeholder='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;category name' required></td>
    </tr>
    <tr>
      <td id='login-details'><br>Image</td>
      <td><br><input type="file" name="txtimage" id="txtimage"></td>
    </tr>
    <tr>
      <td colspan="2" align="center" id='submit'>
            <br><input type="submit" name="btnsubmit" id="btnsubmit" value="Submit"></td>
    </tr>
    
  </table>
  
  <p>&nbsp;</p>
  <table width="100%" border="1" align='center'>
    <tr>
      <th width="20%">SL.NO</th>
      <th width="40%">Category</th>
      <th width="60%">Image</th>
      <th></th>
      <th width="120%">&nbsp;Action</th>
    </tr>
    <tr>     <?php
	$i=0;
	$selQry="select * from tbl_category";
	$row=$con->query($selQry);
	while($data=$row->fetch_assoc())
	{
	$i++
	?>

    <tr>
    
      <td><?php echo $i;?></td>
      <td><?php echo $data["category_name"];?></td>
      <td colspan='2'>
  <img src="../Assets/Files/Category/<?php echo $data['image'] ?>" width="200px"  />
  </td>
      <td><a href="category.php?did=<?php echo $data["category_id"]?>"style="color:white" class="GFG">Delete</a></td>
      <td><a href="update.php?did=<?php echo $data["category_id"]?>"style="color:white" class="GFG">Update</a></td>
    </tr>
    <?php
	}
	?>
  </table>
  <p>&nbsp;</p>
</form>
</div>
</body>
</html>
<?php
include("Foot.php");
ob_flush();
?>