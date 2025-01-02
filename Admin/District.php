<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Location</title>
</head>

<body>
<style> 
        .RFG { 
            background-color: #3F6DD0; 
            border: 2px solid black; 
            color: green; 
            padding: 5px 50px; 
            text-align: center; 
            display: inline-block; 
            font-size: 20px; 
            margin: 10px 30px; 
            cursor: pointer; 
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
#user input{
     background-color: #182638;
     border-color: transparent;
     font-size: 1.2rem;
     width: 100%;
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
#login-details{
     margin-top: 3rem;
     margin-left: 1rem;
     font-size: 1.5rem;
}
label{
     font-family: 'Inter', sans-serif;  
}
</style>
<?php
ob_start();
include("Head.php");
include("../Assets/Connection/connection.php");
$dis="";
$disid="";

if(isset($_POST["btnsave"]))
{
	
	$district=$_POST["txtdistrict"];
	$hid=$_POST["txthid"];
	if($hid!="")
			{
				$update="update tbl_district set district_name='".$district."' where district_id='".$hid."'";
				$con->query($update);
				header("location:District.php");
			}
			else{
	              $insQry="insert into tbl_district(district_name)value('".$district."')";
	             $con->query($insQry); 
			}
	
}
if(isset($_GET["eid"]))
 {
	 $selq="select * from tbl_district where district_id='".$_GET["eid"]."'";
	 $res=$con->query($selq);
	 $result=$res->fetch_assoc();
	 $dis=$result["district_name"];
	 $disid=$result["district_id"];
 }

?>

  <div id="tab">
<form id="form1" name="form1" method="post" action="">
  <table align="center" width="50%" height="200" border-style="none">
    <tr>
      <td width="150" align='center' id='login-details'>District</td>
      <td width="300" id='user'><label for="txtdistrict"></label>
      <input type="text" name="txtdistrict" id="txtdistrict" value="<?php echo $dis ?>" placeholder ="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;District Name" required/>
         <input type="hidden" name="txthid" value="<?php echo $disid ?>"/>
      </td>
    </tr>
    <tr>
      <td align="center" colspan="2" id="submit"><input type="submit" name="btnsave" id="btnsave" value="Submit" />
      &nbsp;&nbsp;&nbsp;<input type="reset" name="btncancel" id="btncancel" value="Cancel" />
   
      </td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table align="center" width="100%" height="134" border="1">
    <tr>
      <th width='100px'></th>
      <th id='login-details'>Sl no</th>
      <th></th>
      <th width='100px'></th>
      <th id='login-details'>District</th>
      <th></th>
     
    </tr>
    <?php
	$i=0;
	$selQry="select * from tbl_district";
	$row=$con->query($selQry);
	while($data=$row->fetch_assoc())
	{
		$i++;
    ?>
    <tr>
      <td colspan='2' align='center'><?php  echo $i; ?></td>
      <td colspan='3' align='center'><?php  echo $data["district_name"]; ?></td>
      <td align='center'>
      <a href="District.php?eid=<?php echo $data["district_id"]?>" style="color:white" class="RFG">Edit</a>
      </td>
    </tr>
    <?php
	}
	?>
  </table>
</form>
</div>
</body>
</html>


<body>

</body>
</html>
<?php
include("Foot.php");
ob_flush();
?>