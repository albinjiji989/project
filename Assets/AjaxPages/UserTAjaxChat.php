<?php
include("../Connection/Connection.php");
session_start();

    echo $insQry="insert into tbl_trainerchat (chat_datetime, to_user_id, from_trainer_id, chat_content) values(CURRENT_TIMESTAMP(),'".$_GET["id"]."','".$_SESSION['tid']."','".$_GET["chat"]."')";
    if($con->query($insQry))
    {
        echo "sended";
    }
    else
    {
        echo "failed";
    }
   ?>

