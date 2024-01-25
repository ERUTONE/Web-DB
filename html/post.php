<?php
	$time = $_POST["time"];		//$time ← 受信した「time」の値
	$name = $_POST["name"];		//$name ← 受信した「name」の値
	$comment = $_POST["comment"];	//$comment ← 受信した「comment」
	
	$fp = fopen("history.txt", "a");	//「history.txt」を追記で開く
	fputs($fp, "{$time}\n");		//ファイルに $dateTime(日時)を書込
	fputs($fp, "{$name}\n");		//ファイルに $name(名前)を書込む
	fputs($fp, "{$comment}\n");		//ファイルに $comment(コメ)を書込む
	fclose($fp);					//ファイルを閉じる
?>

