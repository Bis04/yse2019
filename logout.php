<?php
/* 
【機能】
	セッション情報を削除しログイン画面に遷移する。
*/
//①セッションを開始する。
session_start();
//②セッションを削除する。
session_destroy();
header("Location: login.php");
//③ログイン画面へ遷移する。

?>
