<?php
ob_start();
include("Head.php");
include("../Assets/Connection/connection.php");

session_start();
$userid = $_SESSION['uid'];

$selq = "select * from tbl_nutrition u inner join nutrition_intro d on d.nutrition_id=u.nutrition_id where u.nutrition_id='" . $_GET["did"] . "'";
$row = $con->query($selq);
$data = $row->fetch_assoc();

if (isset($_POST["btnsub"])) {
    $insQry = "insert into tbl_booking(user_id,nutrition_id) values('" . $userid . "','" . $_GET["did"] . "')";
    $con->query($insQry);
    header("location:NutriPayment.php");
}
?>

<style>
    body {
        margin: 0;
        padding: 0;
        background: #111B28;
    }

    #login-form {
        position: absolute;
        top: 70%;
        left: 50%;
        width: 48%;
        padding: 40px;
        transform: translate(-50%, -50%);
        background: linear-gradient(#0B111A, #111B28);
        box-sizing: border-box;
        box-shadow: 0 10px 10px #ff1313;
        border-radius: 5px;
        color: white;
        letter-spacing: .2em;
    }
</style>

<script>
    function openImageModal(imageSrc) {
        var modal = document.createElement('div');
        modal.className = 'image-modal';

        var modalImage = document.createElement('img');
        modalImage.src = imageSrc;
        modalImage.className = 'modal-image';

        modal.appendChild(modalImage);
        document.body.appendChild(modal);

        modal.onclick = function () {
            modal.remove();
        };
    }
</script>

<style>
    .image-modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.8);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 999;
        cursor: pointer;
    }

    .modal-image {
        max-width: 90%;
        max-height: 90%;
    }
</style>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>
<body>
<br><br><br><br><br><br>
<div id="login-form">
    <div id="login-details">
        <div id="tab">
            <form id="form1" name="form1" method="post" action="">
                <table align="center" width="400" border="1">
                    <tr id="login" align="center">
                        <td width="100%">
                            <img src="../Assets/Files/Nutrition/<?php echo $data['nutrition_photo'] ?>"
                                 width="50%;" onclick="openImageModal('../Assets/Files/Nutrition/<?php echo $data['nutrition_photo'] ?>')" />
                        </td>
                        <td width="100%"><?php echo $data["nutrition_name"]; ?></td>
                    </tr>
                    <tr id="login" align="center">
                        <td colspan="2">
                            <img src="../Assets/Files/Nutrition/Introduction/<?php echo $data['other_image'] ?>"
                                 width="50%;" onclick="openImageModal('../Assets/Files/Nutrition/Introduction/<?php echo $data['other_image'] ?>')" />
                        </td>
                    </tr>
                    <tr id="login" align="center">
                        <td width="100%" colspan="2"><?php echo $data["introduction"]; ?></td>
                    </tr>
                    <tr id="login" align="center">
                        <td colspan="2">
                            <img src="../Assets/Files/Nutrition/Introduction/<?php echo $data['demo_image'] ?>"
                                 width="50%;" onclick="openImageModal('../Assets/Files/Nutrition/Introduction/<?php echo $data['demo_image'] ?>')" />
                        </td>
                    </tr>
                    <tr id="login" align="center">
                        <td width="100%" height="38" align="center" colspan="2">
                            <input type="submit" name="btnsub" id="btnsub" value="BOOK NOW" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
</body>
<?php
include("Foot.php");
ob_flush();
?>
</html>
