<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Location</title>
</head>

<body>
<style> 

.GFG { 
    background-color: #EA2E05; 
    border: 2px solid black; 
    color: green; 
    padding: 5px 50px; 
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
#login-form{
     position: absolute;
     top: 50%;
     left: 50%;
     width: 400px;
     padding: 40px;
     transform: translate(-50%, -50%);
     background: linear-gradient(#0B111A, #111B28);
     box-sizing: border-box;
     box-shadow: 0 15px 25px #ff1313;
     border-radius: 10px;
     color: white;
     letter-spacing: .2em ;
}
label{
     font-family: 'Inter', sans-serif;   
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

#submit{
     
     margin-top: 20%;
     margin-bottom: 20%;
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

if(isset($_POST["btnsave"]))
{
	
	$place=$_POST["txtplace"];
	$dis=$_POST["district"];
	$insQry="insert into tbl_place(place_name,district_id)value('".$place."','".$dis."')";
	$con->query($insQry); 
	
}
if(isset($_GET["did"]))
{
	$delqry="delete from tbl_place where place_id='".$_GET["did"]."'";
	$con->query($delqry);
	header("location:place.php");
}

?>


<div id="tab">
<form id="form1" name="form1" method="post" action="">
  <table align="center" width="50%" height="251" border-style="none">
    <tr>
      <td width="150" id='login-details'>DISTRICT</td>
      <td width="300"><label for="district"></label>
        <select name="district" id="district">
        <option>---select---</option>
       <?php
	
	   //$i=0;
	   	$selQry="select * from tbl_district";
	$row=$con->query($selQry);
	while($data=$row->fetch_assoc())
		{
			//$i++;
		?>	
        <option value="<?php echo $data["district_id"];?> "> <?php echo $data["district_name"];?> </option>
        <?php
		}
		?>
        
      </select></td>
    </tr>
    <tr>
      <td id='login-details'>PLACE</td>
      <td id='user'><label for="txtplace"></label>
      <input type="text" name="txtplace" id="txtplace" required placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Place Name"/></td>
    </tr>
    <tr>
      <td align="center" colspan="2" id='submit'><input type="submit" name="btnsave" id="btnsave" value="Save"/>
      <input type="reset" name="btncancel" id="btncancel" value="cancel"/></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table align='center' width="100%" height="211" border="1">
    <tr>
      <th width="105" id='login-details'>Sl no</th>
      <th width="105" id='login-details'>Place</th>
      <th width="162" id='login-details'>District</th>
      <th width="162"></th>
    </tr>
        <?php
	$i=0;
	$selQry="select * from tbl_place p inner join tbl_district d on d.district_id=p.district_id";
	$row=$con->query($selQry);
	while($data=$row->fetch_assoc())
	{
	$i++
	?>

    <tr>
    
      <td><?php echo $i;?></td>
      <td><?php echo $data["place_name"];?></td>
      <td><?php echo $data["district_name"];?></td>
      <td><a href="place.php?did=<?php echo $data["place_id"]?>"style="color:white" class="GFG">Delete</a></td>
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