<?php
ob_start();
include("Head.php");
$bmi = 0;

if (isset($_POST["btn_submit"])) {
    $height = $_POST["txt_height"];
    $weight = $_POST["txt_weight"];

    if (is_numeric($height) && is_numeric($weight) && $height > 0 && $weight > 0) {
        $heightInMeter = $height / 100;
        $bmi = $weight / ($heightInMeter * $heightInMeter);
    } else {
        ?>
       <script>
     alert("Please enter valid height and weight values.");
     window.location="BMI.php";
      </script>
       <?php
    }
}
?>

<style>
body{
     margin:0;
     padding:0;
     background: #111B28;
}
#login-form{
     position: absolute;
     top: 50%;
     left: 50%;
     width: 70%;
     padding: ;
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
     color: white ;
     margin-bottom: 30px;
     font-size: 2.5rem;
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
     background-color: #182638;
     border-color: transparent;
     font-size: 1.6rem;
     width: 120%;
     color: white;
     margin-top: 0.8rem;
     border-radius: 4px;
     padding: .3rem;
     transition: .5S;
     letter-spacing: .1em ;   
}
#user input:hover{
     box-shadow: 0 0 2em 0 #ff1313; 
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

</style>


<!DOCTYPE html>
<html>

<head>
    <title>BMI Calculator</title>
</head>
<body style="  background: #111B28 ">
<div id="login-form"  >
<div id="login-details">
    <div id="tab">
        <div id="login-head">
        <h1 align="center" style="color:white">Calculate your BMI</h1>
        </div>
    <form method="post">
        
        <table border-style="none" align="center" Height="300">
            <tr>
                <td  id="login" align='center'><br>Height (in cm)</td>
                <td  id="user" align='center'><input type="text" name="txt_height" placeholder="&nbsp;&nbsp;&nbsp;Enter your Height" required></td>
             </tr>
            <tr>
                <td id="login" align ='center'>Weight (in kg)</td>
                <td id = 'user' align='center'><input type="text" name="txt_weight" placeholder="&nbsp;&nbsp;&nbsp;Enter your Weight" required></td>
            </tr>
            <tr>
                <td id ="submit" colspan="2" align="center">
                    <input type="submit" name="btn_submit" value="Calculate">
                    <input type="reset" name="btn_cancel" value="Cancel">
                </td>
            </tr>
        </table>
    </form>
    </div>
    

    <?php
if ($bmi > 0) {
?>
    <table border="0" align="center">
        <tr>
            <td id="login-head" align="center" Height="110">
                <?php
                
                    if ($bmi < 16.0) {
                        ?><span style="color:rgb(188, 32, 32)"> <?php   echo "Your BMI is " . number_format($bmi, 2) . "<br>Severely Underweight";?></span> <?php
                    } else  if ($bmi >= 16.0 && $bmi<=16.9) {
                        ?><span style="color:rgb(211, 136, 136)"> <?php   echo "Your BMI is " . number_format($bmi, 2) . "<br>Underweight";?></span> <?php
                    }else  if ($bmi >= 17.0 && $bmi<=18.4) {
                        ?><span style="color:rgb(255, 228, 0)"> <?php   echo "Your BMI is " . number_format($bmi, 2) . "<br>Mildly Underweight";?></span> <?php
                    }else  if ($bmi >= 18.5 && $bmi<=24.9) {
                        ?><span style="color:rgb(0, 129, 55)"> <?php   echo "Your BMI is " . number_format($bmi, 2) . "<br>Normal Weight";?></span> <?php
                    }else  if ($bmi >= 25.0 && $bmi<=29.9) {
                        ?><span style="color:rgb(255, 228, 0)"> <?php   echo "Your BMI is " . number_format($bmi, 2) . "<br>Overweight";?></span> <?php
                    }
                    else  if ($bmi >= 30.0 && $bmi<=34.9) {
                        ?><span style="color:rgb(211, 136, 136)"> <?php   echo "Your BMI is " . number_format($bmi, 2) . "<br>Obese (Class 1)";?></span> <?php
                    }
                    else  if ($bmi >= 35.0 && $bmi<=39.9) {
                        ?><span style="color:rgb(211, 136, 136)"> <?php   echo "Your BMI is " . number_format($bmi, 2) . "<br>Obese (Class 2)";?></span> <?php
                    } else  if ($bmi >= 40.0 ) {
                        ?><span style="color:rgb(138, 1, 1)"> <?php   echo "Your BMI is " . number_format($bmi, 2) . "<br>Morbidly Obese (Class 3)";?></span> <?php
                    }
                     else {
                        ?><span style="color:white"> <?php       echo "Your BMI is " . number_format($bmi, 2) . "<br>";?></span> <?php
                                             
                                           }
               
                ?>
            </td>
        </tr>
    </table>
    <?php
 }
    ?>
     </div>
    </div>
</body>
</html>
<?php
include("Foot.php");
ob_flush();
?>
