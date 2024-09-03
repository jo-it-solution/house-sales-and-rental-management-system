


<?php

include 'connect.php';

setcookie('user_id', '', time() - 1, '/');

header('location:../home_am.php');

?>