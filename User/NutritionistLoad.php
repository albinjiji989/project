<?php
include("../Assets/Connection/Connection.php");
session_start();

$selQry = "select * from tbl_nutritionchat c inner join tbl_nutrition d on (c.from_nutrition_id=d.nutrition_id) or (c.to_nutrition_id=d.nutrition_id) inner join tbl_user u on (u.user_id=c.from_user_id) or (u.user_id=c.to_user_id) where (c.from_user_id='" . $_SESSION["uid"] . "' or c.to_user_id='" . $_SESSION["uid"] . "') and d.nutrition_id='".$_GET['id']."' order by c.chat_id";
$rowdis = $con->query($selQry);
while ($datadis = $rowdis->fetch_assoc()) {
    if ($datadis["from_nutrition_id"] == $_GET["id"]) {

?>

        <div class="chat-message is-received">
            <img src="../Assets/Files/Nutrition/<?php echo $datadis["nutrition_photo"] ?>" alt="">
            <div class="message-block">
                <span><?php echo $datadis["nutrition_name"] ?></span>
                <div class="message-text"><?php echo $datadis["chat_content"] ?></div>
            </div>
        </div>
        <div class="chat-message" style="margin: 0px; padding: 0px">

        </div>

    <?php
    } else{

    ?>
        <div class="chat-message is-sent">
            <img src="../Assets/Files/User/<?php echo $datadis["user_photo"] ?>" alt="">
            <div class="message-block">
                <span>You</span>
                <div class="message-text"><?php echo $datadis["chat_content"] ?></div>
            </div>
        </div>
        <div class="chat-message" style="margin: 0px; padding: 0px">

        </div>
<?php
    }
}



?>