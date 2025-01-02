<?php
ob_start();
include("Head.php");
include("../Assets/Connection/connection.php");
session_start();
$userid = $_SESSION['uid'];

if (isset($_POST["btnsub"])) {
    $insQry = "insert into tbl_booking(user_id, trainer_id) values('" . $userid . "','" . $_GET["did"] . "')";
    $con->query($insQry);
    header("location:TrainerPayment.php");
}

$selq = "select * from tbl_trainer u inner join tbl_category p on p.category_id=u.trainer_category inner join tbl_intro d on d.trainer_id=u.trainer_id where u.trainer_id='" . $_GET["did"] . "'";
$row = $con->query($selq);
$data = $row->fetch_assoc();
?>

<style>
body {
    margin: 0;
    padding: 0;
    background: #111B28;
}

#login-form {
    position: absolute;
    top: 135%;
    left: 50%;
    width: 50%;
    padding: 40px;
    transform: translate(-50%, -50%);
    background: linear-gradient(#0B111A, #111B28);
    box-sizing: border-box;
    box-shadow: 0 15px 25px #ff1313;
    border-radius: 10px;
    color: white;
    letter-spacing: .2em;
}

/* Style for the image viewer */
.image-modal {
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.8);
    z-index: 999;
    cursor: pointer;
}

.modal-content {
    max-width: 80%;
    max-height: 80%;
    object-fit: contain;
    cursor: pointer;
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

<div id="login-form">
    <div id="login-details">
        <div id="tab">
            <form id="form1" name="form1" method="post" action="">
                <table align="center" width="90%" hight="50%"  border="1">
                    <tr align="center">
                        <td width="351" rowspan="2">
                            <img id="otherImage" src="../Assets/Files/Trainer/Introduction/<?php echo $data['other_image'] ?>"
                                width="100%;" onclick="openImage(this.src)" />
                        </td>
                        <td width="200" height="100">
                            <h4><font color="white"><?php echo $data["trainer_name"];?></font></h4>
                        </td>
                    </tr>
                    <tr align="center">
                        <td>
                            <h4><font color="white"><?php echo $data["category_name"];?></font></h4>
                        </td>
                    </tr>
                    <tr align="center">
                        <td colspan="2">
                            <img id="demoImage" src="../Assets/Files/Trainer/Introduction/<?php echo $data['demo_image'] ?>"
                                width="100%;" onclick="openImage(this.src)" />
                        </td>
                    </tr>
                    <tr align="center">
                        <td colspan="2">
                            <h4><font color="white"><?php echo $data["introduction"];?></font></h4>
                        </td>
                    </tr>
                    <tr align="center">
                        <td colspan="2" align="center"><input type="submit" name="btnsub" id="btnsub" value="BOOK NOW" />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>

<script>
function openImage(imageSource) {
    // Create a modal container
    var modal = document.createElement('div');
    modal.classList.add('image-modal');

    // Create an image element for the modal
    var modalImage = document.createElement('img');
    modalImage.src = imageSource;
    modalImage.classList.add('modal-content');

    // Append the image to the modal
    modal.appendChild(modalImage);

    // Append the modal to the body
    document.body.appendChild(modal);

    // Close the modal when clicking outside the image
    modal.addEventListener('click', function (event) {
        if (event.target === modal) {
            modal.remove();
        }
    });
}
</script>

</body>
<?php
include("Foot.php");
ob_flush();
?>
</html>
