<?php

require_once 'include/user.php';

if(!empty($_SESSION['user_id'])){
    unset($_SESSION['user_id']);
    unset($_SESSION['user_name']);
}

header('Location: index.php');