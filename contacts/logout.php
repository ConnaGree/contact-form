<?php
session_start();
require_once "databaseCon.php";

session_unset();
session_destroy();


header("Location: index.php");
