<?php
include("../Connection/Connection.php");
session_start();

    echo $insQry="insert into tbl_nutritionchat (chat_datetime, to_nutrition_id, from_user_id, chat_content) values(CURRENT_TIMESTAMP(),'".$_GET["id"]."','".$_SESSION['uid']."','".$_GET["chat"]."')";
    if($con->query($insQry))
    {
        echo "sended";
    }
    else
    {
        echo "failed";
    }
   ?>

