<?php

header("Content-type: text/html; charset=utf-8");

//データベース接続
$server = "localhost";  
$userName = "root"; 
$password = "enpit2016"; 
$dbName = "child_mgmt";
$mysqli = new mysqli($server, $userName, $password,$dbName);
 
if ($mysqli->connect_error){
	echo $mysqli->connect_error;
	exit();
}else{
	$mysqli->set_charset("utf-8");
}

if(empty($_POST)) {
	echo "<a href='database1.html'>database1.html</a>←こちらのページからどうぞ";
}else{
	//名前入力判定
	if (!isset($_POST['c_first_n'])  || $_POST['c_first_n'] === "" ){
		echo "名前が入力されていません。";
	}else{
		//プリペアドステートメント
		$stmt = $mysqli->prepare("INSERT INTO child_info (c_last_n,c_first_n,p_last_n,p_first_n,p_code,address,b_year,b_month,b_day,tel) VALUES (?,?,?,?,?,?,?,?,?,?)");
		
		if($stmt){
			//プレースホルダへ実際の値を設定する
			
			$stmt->bind_param('ssssssiiis', $c_last_n,$c_first_n,$p_last_n,$p_first_n,$p_code,$address,$b_year,$b_month,$b_day,$tel);
			$c_last_n = $_POST['c_last_n'];
			$c_first_n = $_POST['c_first_n'];
			$p_last_n   = $_POST['p_last_n'];
			$p_first_n   = $_POST['p_first_n'];
			$p_code = $_POST['p_code'];
			$address  = $_POST['address'];
			$b_year=$_POST['year'];
			$b_month  = $_POST['month'];
			$b_day = $_POST['day'];
			$tel  = $_POST['tel'];

			if($stmt->execute()){
			echo htmlspecialchars($c_last_n, ENT_QUOTES, 'UTF-8');
				echo htmlspecialchars($c_first_n, ENT_QUOTES, 'UTF-8')."</p>\n";
				echo htmlspecialchars($p_last_n, ENT_QUOTES, 'UTF-8');
				echo htmlspecialchars($p_first_n, ENT_QUOTES, 'UTF-8')."</p>\n";
			echo htmlspecialchars("〒");
				for($i = 0; $i < 3; $i++) {
 					 echo htmlspecialchars($p_code[$i], ENT_QUOTES, 'UTF-8');
					}
				echo htmlspecialchars("-");

				for($i = 3; $i < strlen($p_code); $i++) {
  					echo htmlspecialchars($p_code[$i], ENT_QUOTES, 'UTF-8');
				}
					echo "</p>\n";
			echo htmlspecialchars($address, ENT_QUOTES, 'UTF-8');
				
	echo "</p>\n";

			echo htmlspecialchars($b_year, ENT_QUOTES, 'UTF-8')."年";
				echo htmlspecialchars($b_month, ENT_QUOTES, 'UTF-8')."月";
				echo htmlspecialchars($b_day, ENT_QUOTES, 'UTF-8')."日"."</p>\n";
			
				echo htmlspecialchars($tel, ENT_QUOTES, 'UTF-8')."</p>\n";

				echo htmlspecialchars("この内容で登録しました");



			}else{
				echo $stmt->errno . $stmt->error;
			}
		
			//ステートメント切断
			$stmt->close();
		}else{
			echo $mysqli->errno . $mysqli->error;
		}
	}
}

// データベース切断
$mysqli->close();
 
?>