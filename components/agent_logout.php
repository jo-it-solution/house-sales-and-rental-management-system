<?php

include '../components/connect.php';

setcookie('agent_id', '', time() - 1, '/');

header('location:../agent/homeAgent.php');

?>