<?php

session_start();
session_unset();
session_destroy();

header("Location: ../pages/landing/landing.php");
die();