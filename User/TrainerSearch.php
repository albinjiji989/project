<?php
ob_start();
include("Head.php");
include('../Assets/Connection/Connection.php');
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
     width: 50.5%;
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<title>Untitled Document</title>
</head>

<body>
<br><br><br><br><br><br>
<div id="login-form"  >
<div id="login-details">
  
  <div id="tab">
<table width="100%"  border="0" >
<tr>
<?php
$selQry="select * from tbl_trainer where trainer_status=1 and trainer_category='".$_GET["did"]."' ";
$res=$con->query($selQry);
$i=0;
while($data=$res->fetch_assoc())
{
	$i++;
	$average_rating = 0;
	$total_review = 0;
	$five_star_review = 0;
	$four_star_review = 0;
	$three_star_review = 0;
	$two_star_review = 0;
	$one_star_review = 0;
	$total_user_rating = 0;
 
   $query = "SELECT * FROM tbl_review where trainer_id = '" .$data["trainer_id"]. "' ORDER BY review_id DESC";
  $rs1 = $con->query($query);
	while ($row2=$rs1->fetch_assoc()) {
		if ($row2["user_rating"]==5) {
			$five_star_review++;
		}
		if ($row2["user_rating"]==4) {
			$four_star_review++;
		}
		if ($row2["user_rating"]==3) {
			$three_star_review++;
		}
		if ($row2["user_rating"]==2) {
			$two_star_review++;
		}
		if ($row2["user_rating"]==1) {
			$one_star_review++;
		}
		$total_review++;
		$total_user_rating += intval($row2["user_rating"]);
	}
	if ($total_user_rating > 0) {
		$average_rating = $total_user_rating / $total_review;
	}
 
 
 
?>
<td>
<a href="TrainerViewMore.php?did=<?php echo $data["trainer_id"]?>">
<div>
<p><img src="../Assets/Files/Trainer/<?php echo $data["trainer_photo"]; ?>" width="200px"  /></p>
<p> <?php
            if ($average_rating == 5) {
                echo '<i class="fas fa-star" style="color:yellow;"></i>';
                echo '<i class="fas fa-star" style="color:yellow;"></i>';
                echo '<i class="fas fa-star" style="color:yellow;"></i>';
                echo '<i class="fas fa-star" style="color:yellow;"></i>';
                echo '<i class="fas fa-star" style="color:yellow;"></i>';
            }
            elseif ($average_rating == 4) {
                echo '<i class="fas fa-star" style="color:yellow;"></i>';
                echo '<i class="fas fa-star" style="color:yellow;"></i>';
                echo '<i class="fas fa-star" style="color:yellow;"></i>';
                echo '<i class="fas fa-star" style="color:yellow;"></i>';
                echo '<i class="fas fa-star" style="color:grey;"></i>';
            }
            elseif ($average_rating == 3) {
                echo '<i class="fas fa-star" style="color:yellow;"></i>';
                echo '<i class="fas fa-star" style="color:yellow;"></i>';
                echo '<i class="fas fa-star" style="color:yellow;"></i>';
                echo '<i class="fas fa-star" style="color:grey;"></i>';
                echo '<i class="fas fa-star" style="color:grey;"></i>';
            }
            elseif ($average_rating == 2) {
                echo '<i class="fas fa-star" style="color:yellow;"></i>';
                echo '<i class="fas fa-star" style="color:yellow;"></i>';
                echo '<i class="fas fa-star" style="color:grey;"></i>';
                echo '<i class="fas fa-star" style="color:grey;"></i>';
                echo '<i class="fas fa-star" style="color:grey;"></i>';
            }
            elseif ($average_rating == 1) {
                echo '<i class="fas fa-star" style="color:yellow;"></i>';
                echo '<i class="fas fa-star" style="color:grey;"></i>';
                echo '<i class="fas fa-star" style="color:grey;"></i>';
                echo '<i class="fas fa-star" style="color:grey;"></i>';
                echo '<i class="fas fa-star" style="color:grey;"></i>';
            }
            elseif ($average_rating == 0) {
                echo '<i class="fas fa-star" style="color:grey;"></i>';
                echo '<i class="fas fa-star" style="color:grey;"></i>';
                echo '<i class="fas fa-star" style="color:grey;"></i>';
                echo '<i class="fas fa-star" style="color:grey;"></i>';
                echo '<i class="fas fa-star" style="color:grey;"></i>';
            }
            ?>
</p>
<p><h4><font color="white">NAME: <?php echo $data["trainer_name"];?></font></h4></p>
<p><h4><font color="white">SUBSCRIPTION: <?php echo $data["monthly_subscription"];?></h4></font></p>
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