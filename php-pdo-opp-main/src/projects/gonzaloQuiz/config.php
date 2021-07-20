<?php 
session_start();

$incPaths = $_SERVER['DOCUMENT_ROOT'] . '/php';
$incPaths .= PATH_SEPARATOR;

$incPaths .= $_SERVER['DOCUMENT_ROOT'] . '/projects/gonzaloQuiz/php';
set_include_path($incPaths);

include "auth.php";
include "database.php";

define('TRACE_DB_ACCESS', false);