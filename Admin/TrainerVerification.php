<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Verification</title>
    <style> 
        .GFG { background-color: green; border: 2px solid black; color: green; padding: 5px 10px; text-align: center; display: inline-block; font-size: 20px; margin: 10px 30px; cursor: pointer; } 
        .RFG { background-color: red; border: 2px solid black; color: green; padding: 5px 10px; text-align: center; display: inline-block; font-size: 20px; margin: 10px 30px; cursor: pointer; }
        .DFG { background-color: dodgerblue; border: 2px solid black; color: green; padding: 5px 10px; text-align: center; display: inline-block; font-size: 20px; margin: 10px 30px; cursor: pointer; }
        #login-details { margin-top: 3rem; margin-left: 1rem; font-size: 1.5rem; }
        label { font-family: 'Inter', sans-serif;  }
        /* Added CSS for the Trainer Photo Modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.9);
        }
        .modal-content {
            margin: 5% auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }
        #closeTrainerModal {
            color: white;
            position: absolute;
            top: 15px;
            right: 25px;
            font-size: 30px;
            font-weight: bold;
            cursor: pointer;
        }
    </style> 
</head>

<body>
<?php
ob_start();
include("Head.php");
include("../Assets/Connection/connection.php");

if(isset($_GET["eid"])) {
    $upQ = "update tbl_trainer set trainer_status=1 where trainer_id='".$_GET["eid"]."' ";
    if($con->query($upQ)) { ?>
        <script> alert("Accepted"); window.location="TrainerVerification.php"; </script>
    <?php } else { ?>
        <script> alert("Failed"); window.location="TrainerVerification.php"; </script>
    <?php }
}

// ... (Repeat similar blocks for other GET parameters)

?>

<div id="tab">
    <form id="form1" name="form1" method="post" action="">
        <br><br><br>
        <!-- Pending List Table -->
        <table align="center" width="100%" border="1">
            <tr>
                <td height="44" colspan="12" align="center" id='login-details'>PENDING LIST</td>
            </tr>
            <tr>
                <th>SL.NO</th>
                <th>NAME</th>
                <th>CONTACT</th>
                <th></th>
                <th>EMAIL</th>
                <th></th>
                <th>GENDER</th>
                <th></th>
                <th>PHOTO</th>
                <th></th>
                <th>PROOF</th>
                <th></th>
            </tr>
            <?php
            $i=0;
            $selQry = "select * from tbl_trainer where trainer_status=0";
            $row = $con->query($selQry);
            while($data = $row->fetch_assoc()) {
                $i++
            ?>
            <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $data["trainer_name"];?></td>
                <td><?php echo $data["trainer_contact"];?></td>
                <td colspan='2'><?php echo $data["trainer_email"];?></td>
                <td colspan='2' align='center'><?php echo $data["trainer_gender"];?></td>
                <td colspan='2'>
                    <!-- Add a class and data-image attribute to the image for modal functionality -->
                    <img src="../Assets/Files/Trainer/<?php echo $data['trainer_photo'] ?>" width="200px" class="modalImage" data-image="../Assets/Files/Trainer/<?php echo $data['trainer_photo'] ?>"/>
                </td>
                <td colspan='2'><a href="../Assets/Files/Trainer/<?php echo $data['trainer_proof'] ?>" download style="color:white" class="DFG">Download</a></td>
                <td align="center">
                    <a  href="TrainerVerification.php?eid=<?php echo $data["trainer_id"]?>" style="color:white" class="GFG">ACCEPT</a>
                    <a href="TrainerVerification.php?did=<?php echo $data["trainer_id"]?>" style="color:white" class="RFG">REJECT</a>
                </td>
            </tr>
            <?php } ?>
        </table>

        <!-- Accepted List Table -->
        <br><br><br>
        <table width="100%" border="1">
            <tr>
                <td height="44" colspan="12" align="center" id='login-details'>ACCEPTED LIST</td>
            </tr>
            <tr>
                <th>SL.NO</th>
                <th>NAME</th>
                <th>CONTACT</th>
                <th></th>
                <th>EMAIL</th>
                <th></th>
                <th>GENDER</th>
                <th></th>
                <th>PHOTO</th>
                <th></th>
                <th>PROOF</th>
                <th></th>
            </tr>
            <?php
            $i=0;
            $selQry = "select * from tbl_trainer where trainer_status=1";
            $res = $con->query($selQry);
            while($value = $res->fetch_assoc()) {
                $i++
            ?>
            <tr>
                <td height="281"><?php echo $i;?></td>
                <td><?php echo $value["trainer_name"];?></td>
                <td><?php echo $value["trainer_contact"];?></td>
                <td colspan='2'><?php echo $value["trainer_email"];?></td>
                <td colspan='2' align='center'><?php echo $value["trainer_gender"];?></td>
                <td colspan='2'>
                    <!-- Add a class and data-image attribute to the image for modal functionality -->
                    <img src="../Assets/Files/Trainer/<?php echo $value['trainer_photo'] ?>" width="200px" class="modalImage" data-image="../Assets/Files/Trainer/<?php echo $value['trainer_photo'] ?>"/>
                </td>
                <td colspan='2'><a href="../Assets/Files/Trainer/<?php echo $data['trainer_proof'] ?>" download style="color:white" class="DFG">Download</a></td>
                <td align="center">
                    <a href="TrainerVerification.php?rid=<?php echo $value["trainer_id"]?>" style="color:white" class="RFG">REJECT</a>
                </td>
            </tr>
            <?php } ?>
        </table>

        <!-- Rejected List Table -->
        <br><br><br>
        <table width="100%" border="1">
            <tr>
                <td height="44" colspan="12" align="center" id='login-details'>REJECTED LIST</td>
            </tr>
            <tr>
                <th>SL.NO</th>
                <th>NAME</th>
                <th>CONTACT</th>
                <th></th>
                <th>EMAIL</th>
                <th></th>
                <th>GENDER</th>
                <th></th>
                <th>PHOTO</th>
                <th></th>
                <th>PROOF</th>
                <th></th>
            </tr>
            <?php
            $i=0;
            $selq = "select * from tbl_trainer where trainer_status=2";
            $result = $con->query($selq);
            while($val = $result->fetch_assoc()) {
                $i++
            ?>
            <tr>
                <td height="281"><?php echo $i;?></td>
                <td><?php echo $val["trainer_name"];?></td>
                <td><?php echo $val["trainer_contact"];?></td>
                <td colspan='2'><?php echo $val["trainer_email"];?></td>
                <td colspan='2' align='center'><?php echo $val["trainer_gender"];?></td>
                <td colspan='2'>
                    <!-- Add a class and data-image attribute to the image for modal functionality -->
                    <img src="../Assets/Files/Trainer/<?php echo $val['trainer_photo'] ?>" width="200px" class="modalImage" data-image="../Assets/Files/Trainer/<?php echo $val['trainer_photo'] ?>"/>
                </td>
                <td colspan='2'><a href="../Assets/Files/Trainer/<?php echo $data['trainer_proof'] ?>" download style="color:white" class="DFG">Download</a></td>
                <td align="center">
                    <a href="TrainerVerification.php?aid=<?php echo $val["trainer_id"]?>" style="color:white" class="GFG">ACCEPT</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </form>

    <!-- Trainer Photo Modal -->
    <div id="trainerPhotoModal" class="modal">
        <span class="close" id="closeTrainerModal">&times;</span>
        <img src="" alt="Trainer Photo" id="trainerModalContent" class="modal-content">
    </div>

    <!-- JavaScript code for Trainer's photo modal -->
    <script>
        const trainerModal = document.getElementById('trainerPhotoModal');
        const trainerModalContent = document.getElementById('trainerModalContent');
        const closeTrainerModal = document.getElementById('closeTrainerModal');
        const trainerModalImages = document.querySelectorAll('.modalImage');

        trainerModalImages.forEach(image => {
            image.onclick = function() {
                trainerModal.style.display = 'block';
                trainerModalContent.src = this.getAttribute('data-image');
            }
        });

        closeTrainerModal.onclick = function() {
            trainerModal.style.display = 'none';
        }

        window.onclick = function(event) {
            if (event.target == trainerModal) {
                trainerModal.style.display = 'none';
            }
        }
    </script>

    <?php
    include("Foot.php");
    ob_flush();
    ?>
</div>
</body>
</html>
