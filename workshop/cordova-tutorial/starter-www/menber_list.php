
<?php
 
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
 
$sql = "SELECT * FROM child_info";
 
$result = $mysqli -> query($sql);
 
//クエリー失敗
if(!$result) {
	echo $mysqli->error;
	exit();
}
 
//レコード件数
$row_count = $result->num_rows;
 
//連想配列で取得
while($row = $result->fetch_array(MYSQLI_ASSOC)){
	$rows[] = $row;
}
 
//結果セットを解放
$result->free();
 
// データベース切断
$mysqli->close();
 
?>
 
<!DOCTYPE html>
<html>
<head>
<title>名簿</title>
<meta charset="utf-8">

<script type="text/javascript"><!--
function ChangeTab(tabname) {
   // 全部消す
   document.getElementById('tab1').style.display = 'none';
   document.getElementById('tab2').style.display = 'none';
   // 指定箇所のみ表示
   document.getElementById(tabname).style.display = 'block';
}
// --></script>
<style type="text/css">

a { text-decoration: none; }

</style>
<style type="text/css"><!--
/* 表示領域全体 */
div.tabbox {
   margin: 0px; padding: 0px; width: 1000px;
}

/* タブ部分 */
p.tabs { margin: 0px; padding: 0px; }
p.tabs a {
   display: block; width: 20em; height: 3em;float: left;
   margin: 0px 1px 0px 0px; padding: 3px;
   text-align: center;
   border-radius: 12px 12px 0px 0px; /* 角を丸くする */
}
p.tabs a.tab1 { background-color: red; color: white; }
p.tabs a.tab2 { background-color: blue; color:white;}
p.tabs a:hover { color: yellow; }

/* タブ中身のボックス */
div.tab { height: 1000px; overflow: auto; clear: left; }
div#tab1 {
   border: 2px solid red; background-color: #ffffff; 
}
div#tab2 {
   border: 2px solid blue; background-color: #ffffff;
}
div.tab p { margin: 0.5em; }
--></style>

</head>
<body>
<h1>名簿</h1> 
 
 <div class="tabbox">
   <p class="tabs">
      <a href="#tab1" class="tab1" onclick="ChangeTab('tab1'); return false;"><font size="6">在園児</font></a>
      <a href="#tab2" class="tab2" onclick="ChangeTab('tab2'); return false;"><font size="6">卒園児</font></a>
    
   </p>
   <div id="tab1" class="tab">
      	  
	  
 
在園児：<?php echo $row_count; ?>人
 
<table border="1" cellpadding="6" bordercolor="#FFD700" align="center">
<tr>

<td>NUMBER</td>
<td>なまえ</td>
<td>〒</td>
<td>じゅうしょ</td>
<td>たんじょうび</td>

<td>保護者</td>
<td>緊急連絡先</td>
</tr>

 
<?php 
foreach($rows as $row){
?>
<tr> 
	
	<td><?php echo $row['id']; ?></td> 
	<td><?php echo htmlspecialchars($row['c_last_n'].$row['c_first_n'],ENT_QUOTES,'UTF-8'); ?></td> 
		<td><?php echo htmlspecialchars("〒".$row['p_code'],ENT_QUOTES,'UTF-8'); ?></td> 
		<td><?php echo htmlspecialchars($row['address'],ENT_QUOTES,'UTF-8'); ?></td>
		<td><?php echo $row['b_year']."年".$row['b_month']."月".$row['b_day']."日"; ?></td> 
		<td><?php echo htmlspecialchars($row['p_last_n'].$row['p_first_n'],ENT_QUOTES,'UTF-8'); ?></td>
		<td><?php echo htmlspecialchars($row['tel'],ENT_QUOTES,'UTF-8'); ?></td>
	
</tr> 
<?php 
} 
?>
 
</table>
 
	  
	  
   </div>
   <div id="tab2" class="tab">
      	  
	  
 
卒園児：<?php echo $row_count; ?>人
 
<table border="1" cellpadding="6" bordercolor="#FFD700" align="center">
<tr>

<td>NUMBER</td>
<td>なまえ</td>
<td>〒</td>
<td>じゅうしょ</td>
<td>たんじょうび</td>

<td>保護者</td>
<td>緊急連絡先</td>
</tr>

 
<?php 
foreach($rows as $row){
?>
<tr> 
	
	<td><?php echo $row['id']; ?></td> 
	<td><?php echo htmlspecialchars($row['c_last_n'].$row['c_first_n'],ENT_QUOTES,'UTF-8'); ?></td> 
		<td><?php echo htmlspecialchars("〒".$row['p_code'],ENT_QUOTES,'UTF-8'); ?></td> 
		<td><?php echo htmlspecialchars($row['address'],ENT_QUOTES,'UTF-8'); ?></td>
		<td><?php echo $row['b_year']."年".$row['b_month']."月".$row['b_day']."日"; ?></td> 
		<td><?php echo htmlspecialchars($row['p_last_n'].$row['p_first_n'],ENT_QUOTES,'UTF-8'); ?></td>
		<td><?php echo htmlspecialchars($row['tel'],ENT_QUOTES,'UTF-8'); ?></td>
	
</tr> 
<?php 
} 
?>
 
</table>
 
	  
	  
   </div>


</div>
</div>

<script type="text/javascript"><!--
  // デフォルトのタブを選択
  ChangeTab('tab1');
// --></script>
 
</body>
</html>