<?php

require __DIR__. '/parts/1_config.php';

//session_destroy();

unset($_SESSION['userAccount']);

header('Location: 6_login.php');



