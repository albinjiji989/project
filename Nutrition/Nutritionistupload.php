<?php
ob_start();
include("Head.php");

include("../Assets/Connection/connection.php");

  session_start();
  $nutritionid=$_SESSION['nid'];
  
if(isset($_POST["btnupload"]))
{
	$bookingid=$_GET["eid"];
	$caption=$_POST["txtcaption"];
     $instructions=$_POST["txtinstruction"];
	$photo=$_FILES["trainerimage"]["name"];
	$photopath=$_FILES["trainerimage"]["tmp_name"];
	$video=$_FILES["trainervideo"]["name"];
	$videopath=$_FILES["trainervideo"]["tmp_name"];
	$pdf=$_FILES["trainerpdf"]["name"];
	$pdfpath=$_FILES["trainervideo"]["tmp_name"];
	
	move_uploaded_file($pdfpath,"../Assets/Files/Nutrition/Upload/".$pdf);
	move_uploaded_file($photopath,"../Assets/Files/Nutrition/Upload/".$photo);
	move_uploaded_file($videopath,"../Assets/Files/Nutrition/Upload/".$video);
	
	
	
	
	$insQry="insert into nutrition_upload(nutrition_id,booking_id,up_image,up_video,up_pdf,up_caption,up_instruction) value('".$nutritionid."','".$bookingid."','".$photo."','".$video."','".$pdf."','".$caption."','".$instructions."')";
     	
	 if($con->query($insQry))
       {
		   ?>
          <script>
          alert(' Uploaded');
		  		window.location="Nutritionistupload.php";

          </script>
           <?php
	   }
}
if(isset($_GET["did"]))
{
	$delqry="delete from nutrition_upload where nutrition_id='".$_GET["did"]."'";
	$con->query($delqry);
	header("location:Nutritionistupload.php");
}
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
     transform: translate(-50%, -50%);
     background: linear-gradient(#0B111A, #111B28);
     box-sizing: border-box;
     box-shadow: 0 15px 25px #ff1313;
     border-radius: 10px;
     color: white;
     letter-spacing: .2em ;
}

#login-head{
     text-align: center;
     font-family: 'Inter', sans-serif;
     color:#ff1313 ;
     margin-bottom: 30px;
     font-size: 4.5rem;
     text-shadow: 0 0 .28rem#ff1313;
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
     background-color: #182638 ;
     border-color: transparent;
     font-size: 2.2rem;
     width: 100%;
     color: white;
     margin-top: 0.5rem;
     border-radius: 7px;
     padding: .3rem;
     transition: .5S;
     letter-spacing: .1em ;
    
}
#user input:hover{
     box-shadow: 0 0 2em 0 white; 
}

#pass{
     margin-top: 1rem;
}
#pass input{
     background-color: transparent;
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
#pass input:hover{
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
tr, td {
  border-style: none;
}
.a {
  font-size: 20px;
}
.cont {
     display: flex;
    justify-content: center;
    align-items: center; 
}
.color-bgf {
     box-shadow: 0 15px 25px #ff1313;
     width:fit-content;
     height:fit-content;
}
.font {
        color: white; 
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
<div class="cont">
<div class="color-bgf">
<div id="login-form "  >
<div id="login-details">
  <div id="tab">
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1" align="center" style="font-size: 20px;">
  <table width="100%" border="1" align="center">
    <tr>
      <td>Plan Caption</td>
      <td id="user"><input type="text" name="txtcaption" id="txtcaption" /></td>
    </tr>
    <tr>
      <td>Image</td>
      <td><input type="file" name="trainerimage" id="trainerimage" /></td>
    </tr>
    <tr>
      <td>Video</td>
      <td><input type="file" name="trainervideo" id="trainervideo" /></td>
    </tr>
    <tr>
      <td>Routines as PDF</td>
      <td><input type="file" name="trainerpdf" id="trainerpdf" /></td>
    </tr>
    <tr>
      <td id='login'><br>Addititional Instructions</td>
      <td id='user'><label for="txtinstruction"></label>
      <textarea name="txtinstruction" id="txtinstruction" cols="45" rows="5"></textarea></td>
    </tr>
     <tr>
      <td colspan="2" align="center" id="submit"><input type="submit" name="btnupload" id="btnupload" value="Upload" />
       <input type="reset" name="btncancel" id="btncancel" value="Cancel" /></td>
    </tr>
  </table>
 <br><br>
  <table width="100%" border="1" align="center">
    <tr>
      <td>SLNO</td>
      <td>Caption</td>
      <td>Instruction</td>
      <td>Image</td>
      <td>Video</td>
      <td>Routine</td>
      <td>Action</td>
    </tr>
     <?php
	$i=0;
	$selQry="select * from nutrition_upload where nutrition_id='".$nutritionid."'";
	$row=$con->query($selQry);
	while($datas=$row->fetch_assoc())
	{
	$i++
	?>
    <tr>
      <td><?php echo $i?></td>
      <td><?php echo $datas["up_caption"]?></td>
      <td><?php echo $datas["up_instruction"]?></td>
      <td>
      <a href="../Assets/Files/Nutrition/Upload/<?php echo $datas['up_image'] ?>" target="_blank"><img src="../Assets/Files/Nutrition/Upload/<?php echo $datas['up_image'] ?>"width="266px" target="_blank"/></a>
      <td>
      <a href="../Assets/Files/Nutrition/Upload/<?php echo $datas['up_video'] ?>" target="_blank"><img src="../Assets/Files/Nutrition/Upload/<?php echo $datas['up_video'] ?>"width="266px" target="_blank"/></a>
     </td>
     <td>
    <a href="http://localhost/FitQuest/Project/Assets/Files/Trainer/Nutrition/<?php echo $data['up_pdf']; ?>" download="<?php echo $datas['up_pdf']; ?>">View PDF</a>
</td>     
 <td align="center">
            <a  href="Nutritionistupload.php?did=<?php echo $datas["nutrition_id"]?>" style="color:white"class="GFG">DELETE</a>

      </td>
    </tr>
    <?php
	}
	?>
  </table>
  <p>&nbsp;</p>
</form>
</div>
</div>
</div>
</div>
</div>
</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
include("Foot.php");
ob_flush();
?>
</html>