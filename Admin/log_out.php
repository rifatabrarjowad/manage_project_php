<?php
session_start();
session_destroy();
header('Location: Log_in_out.php');