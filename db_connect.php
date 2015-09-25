<?php

// try {
//     $pdo = new PDO('mysql:host=localhost;dbname=team8;charset=utf8','root','',
//     array(PDO::ATTR_EMULATE_PREPARES => false));
// } catch (PDOException $e) {
//     exit('データベース接続失敗。'.$e->getMessage());
// }

// echo $e;

//MySQLサーバに接続します
$DBSERVER = "localhost";
$DBUSER = "root";
$DBPASSWORD = "";
$con = mysql_connect($DBSERVER, $DBUSER, $DBPASSWORD);
//MySQL読み込み時の文字コードを設定
mysql_query("set names utf8");
//データベースを選択します
$DBNAME = "team8";
$selectdb = mysql_select_db($DBNAME, $con);
