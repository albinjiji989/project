<?php
ob_start();
include("Head.php");
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
     width: 100%;
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

</head>
<body style="  background: #111B28 ">
    <?php
    $calories = 0;

    if (isset($_POST["btn_submit"])) {
        $age = $_POST["txt_age"];
        $gender = isset($_POST["gender"]) ? $_POST["gender"] : '';
        $height = $_POST["txt_height"];
        $weight = $_POST["txt_weight"];
        $activityLevel = $_POST["activityLevel"]; 

      
        if (is_numeric($age) && $age >= 15 && $age <= 80 && is_numeric($height) && is_numeric($weight) && $height > 0 && $weight > 0 && ($gender === 'Male' || $gender === 'Female')) {
           
            $calories = calculateCalories($age, $gender, $weight, $height, $activityLevel);
        } else {
            echo '<script>alert("Please enter valid age, gender, height, and weight.");</script>';
        }
    }

    function calculateCalories($age, $gender, $weight, $height, $activityLevel) {
       
        $caloriesPerKg = 24;
        $caloriesMale = 5;
        $caloriesFemale = -161;

      
        if ($gender === 'Male') {
            $bmr = ($caloriesPerKg * $weight) + ($caloriesMale * ($height / 100)) - (5 * $age);
        } else {
            $bmr = ($caloriesPerKg * $weight) + ($caloriesFemale * ($height / 100)) - (5 * $age);
        }

        $calories = $bmr * $activityLevel;

        return $calories;
    }
    ?>
    <br><br><br><br>
    <div id="login-form"  >
<div id="login-details">
<div id="tab" align="center">
    <form method="post">
        <h1 align="center" style="color:white">Calculate your Calorie</h1>
        <table border="0" align="center">
            <tr>
                <td id="login" width="150">Age (15 - 80)</td>
                <td id="user" width="300"><input type="text" name="txt_age" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter your Age" required></td>
            </tr>
            <tr>
                <td>Gender</td>
                <br>
                <td>
                    <input type="radio" name="gender" value="Male"> Male
                    <br>
                    <input type="radio" name="gender" value="Female"> Female
                </td>
            </tr>
            <tr>
                <td id="login">Height (in cm)</td>
                <td id="user"><input type="text" name="txt_height" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter your Height" required></td>
            </tr>
            <tr>
                <td id="login">Weight (in kg)</td>
                <td id="user"><input type="text" name="txt_weight" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter your Weight" required></td>
            </tr>
            <tr>
                <td>Activity Level</td>
                <td>
                    <select name="activityLevel">
                        <option value="1.2">Sedentary (little or no exercise)</option>
                        <option value="1.375">Lightly active (light exercise or sports 1-3 days a week)</option>
                        <option value="1.55">Moderately active (moderate exercise or sports 3-5 days a week)</option>
                        <option value="1.725">Very active (hard exercise or sports 6-7 days a week)</option>
                        <option value="1.9">Super active (very hard exercise, physical job, or training twice a day)</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td id="submit" colspan="2" align="center">
                    <input type="submit" name="btn_submit" value="Calculate">
                    <input type="reset" name="btn_cancel" value="Cancel">
                </td>
            </tr>
        </table>
    </form>

    <table border="0" align="center">
        <tr>
            <td align="center" id="login-head" width="800" height="110">
                <?php
                if ($calories > 0) {
                    echo "Your estimated daily calorie needs are approximately: " . number_format($calories, 2) . " calories";
                }
                ?>
            </td>
        </tr>
    </table>
            </div>
            </div>
            </div>
</body>
</html>
<?php
include("Foot.php");
ob_flush();
?>