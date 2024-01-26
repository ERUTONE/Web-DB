<?php
	$fp = fopen("history.txt", "r");		//「history.txt」を開く
	if($fp == false){					//開くのに失敗した場合
		exit(0);						//実行を終了する
	}
	while(true){						//以下を繰り返す
		$date = fgets($fp);			//$date ← ファイルから１行読み込む
		$name = fgets($fp); 		//$name ← ファイルから１行読み込む
		$comment = fgets($fp);		//$comment ← ファイルから１行読込む
		
		if(feof($fp) == true){		//ファイルが終わっていたら
			break;					//ループを抜ける
		}
		echo "<p><strong>{$date} {$name}さん</strong><br>";
		echo "{$comment}<br><br>";
		echo "</p>";
	}
	fclose($fp);						//ファイルを閉じる
?>

