<?php
ob_start();
include("Head.php");

  include("../Assets/Connection/connection.php");

  session_start();
  $userid=$_SESSION['uid'];
  
  $selq="select * from tbl_booking b inner join tbl_trainer t on t.trainer_id=b.trainer_id where b.user_id='".$userid."'";
 $row=$con->query($selq);
 
  $Selql="select * from tbl_booking b inner join tbl_nutrition t on t.nutrition_id=b.nutrition_id where b.user_id='".$userid."'";
		$res=$con->query($Selql);
	
	
?>
<style> 
    .GFG { 
        background-color: green; 
        border: 2px solid black; 
        color: green; 
        padding: 5px 10px; 
        text-align: center; 
        display: inline-block; 
        font-size: 15px; 
        margin: 10px 30px; 
        cursor: pointer; 
    } 

    .RFG { 
        background-color: red; 
        border: 2px solid black; 
        color: green; 
        padding: 5px 15px; 
        text-align: center; 
        display: inline-block; 
        font-size: 15px; 
        margin: 10px 30px; 
        cursor: pointer; 
    }

    .DFG { 
        background-color: dodgerblue; 
        border: 2px solid black; 
        color: green; 
        padding: 5px 25px; 
        text-align: center; 
        display: inline-block; 
        font-size: 15px; 
        margin: 10px 30px; 
        cursor: pointer; 
    }
    #login-details {
            margin-top: 3rem;
            margin-left: 1rem;
            font-size: 1.5rem;
        }
        label {
            font-family: 'Inter', sans-serif;  
        }
        #login-form{
     position: absolute;
     top: 120%;
     left: 50%;
     width: 60%;
     padding: 40px;
     transform: translate(-50%, -50%);
     background: linear-gradient(#0B111A, #111B28);
     box-sizing: border-box;
     box-shadow: 0 20px 35px #ff1313;
     border-radius: 10px;
     color: white;
     letter-spacing: .2em ;
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
  <div id="tab">
    <div id="login-form">
<form id="form1" name="form1" method="post" action="">
  <table align="center" width="100%" border="5" >
    <tr>
      <td align="center" colspan="5" id="login-details">TRAINERS YOU BOOKED
</td>
</tr>
    <tr align="center">
      <td id="login-details">SLNO</td>
      <td id="login-details">TRAINER NAME</td>
      <td id="login-details">CONTACT</td>
      <td id="login-details">PHOTO</td>
      <td id="login-details">ACTION</td>
      
    </tr>
    <?php
	$i=0;
    while($data=$row->fetch_assoc())
	{
	$i++
	?>

    <tr align="center" id="login-details">
      <td id="login"><?php echo $i; ?></td>
      <td id="login"><?php echo $data["trainer_name"];?></td>
      <td id="login"><?php echo $data["trainer_contact"];?></td>
      <td><img src="../Assets/Files/Trainer/<?php echo $data['trainer_photo'] ?>" width="50%"  /></td>
      <td><?php 
      $currentDate = new DateTime();
      $subscribeddate=$data["date"];
      $bookedDate = new DateTime($subscribeddate);
      $interval = $currentDate->diff($bookedDate);
      $monthsDiff = $interval->format('%m');
        if($monthsDiff==1)
        {
          echo "Subscription expired";
          ?>
<h5><font color="white"><a href="CategoryDisplay.php">Renew</a></h5>
          <?php
        }else{

        
        ?> <h5><font color="white"><a  href="WorkoutDisplay.php?tid=<?php echo $data["trainer_id"];?>&bid=<?php echo $data["booking_id"];?>"style="color:white" class="DFG">VIEW UPDATES</a>
    <br><a href="TrainerChat.php?id=<?php echo $data["trainer_id"] ?>"style="color:white" class="GFG">CHAT WITH TRAINER</a>
    <br><a href="TrainerRating.php?pid=<?php echo $data["trainer_id"] ?>"style="color:white" class="RFG">RATE YOUR TRAINER</a>
  <?php
        }
  ?>
  </td>  
    </tr>
    <?php
	}
	?>
 

  </table>

  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table align="center" width="100%" border="5">
  <tr>
      <td align="center" colspan="5" id="login-details">NUTRITIONISTS YOU BOOKED
</td>
</tr>
    <tr align="center">
      <td id="login-details">SLNO</td>
      <td id="login-details">NUTRITIONIST NAME</td>
      <td id="login-details">CONTACT</td>
      <td id="login-details">PHOTO</td>
      <td id="login-details">ACTION</td>
    </tr>
    <tr align="center">
       <?php
	$i=0;
    while($value=$res->fetch_assoc())
	{
	$i++
	?>

    <tr align="center" id="login-details">
      <td id="login"><?php echo $i; ?></td>
      <td id="login"><?php echo $value["nutrition_name"];?></td>
      <td id="login"><?php echo $value["nutrition_contact"];?></td>
      <td><img src="../Assets/Files/Nutrition/<?php echo $value['nutrition_photo'] ?>" width="100%"  /></td>
      <td><?php 
      $currentDate = new DateTime();
      $subscribeddate=$value["date"];
      $bookedDate = new DateTime($subscribeddate);
      $interval = $currentDate->diff($bookedDate);
      $monthsDiff = $interval->format('%m');
        if($monthsDiff==1)
        {
          echo "Subscription expired";
          ?>
<h5><font color="white"><a href="NutritionistSearch.php">Renew</a></h5>
          <?php
        }else{
 ?>  <h5><font color="white"><a  href="NutritionUpdates.php?eid=<?php echo $value["nutrition_id"]?>&bid=<?php echo $value["booking_id"];?>"style="color:white" class="DFG">VIEW UPDATES</a>
      <br>
    <br><a href="NutritionistChat.php?id=<?php echo $value["nutrition_id"] ?>"style="color:white" class="GFG">CHAT WITH NUTRITIONIST</a>
    <br>
    <br><a href="NutritionRating.php?pid=<?php echo $value["nutrition_id"] ?>"style="color:white" class="RFG">RATE YOUR NUTRITIONIST</a>
  <?php
        }
  ?>
  </td>
    </tr>
    <?php
	}
	?>
  </table>
  </div>
</form>
</div>
<?php
include("Foot.php");
ob_flush();
?>
</body>
</html>