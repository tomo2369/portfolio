<?php
if (session_status() == PHP_SESSION_NONE) {
	// セッションは有効で、開始していないとき
	session_start();
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>PHP Programs</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script type="text/javascript">
    $(function() {
		$("body").hide().fadeIn(1000); //0は表示までのミリ秒数です。表示を1秒にする場合は1000に設定。
    });
</script>
	<link rel="stylesheet" href="style.css">
	
	


</head> <!-- ここまでがページの仕様 映らない-->

<body>
	<?php require 'menu.php'; ?>

	<section style="text-align: center;">
		
	<?php require 'slider.php'; ?>

		<form action="product.php" method="post">
			<h1>Enjoy Shopping</h1>
			商品検索
			<input type="text" name="keyword">
			<input type="submit" value="検索">
		</form>
	</section>

	<hr>
	<?php

	$pdo = new PDO('mysql:host=mysql1.php.xdomain.ne.jp;dbname=ttsite_nohin;charset=utf8', 'ttsite_tt23', 'Asdf3333');
	if (isset($_REQUEST['keyword'])) {
		$sql = $pdo->prepare('select * from product where name like ?');
		$sql->execute(['%' . $_REQUEST['keyword'] . '%']);
	} else {
		$sql = $pdo->prepare('select * from product');
		$sql->execute([]);
	}

	?>




	<div class='main'>

		<?php
		foreach ($sql as $row) {
			if ($row['onsale'] !== "1") {
				$text = '<span style="color:red">売切</span>';
			} else {
				$text = '<span"> </span>';
			}

			$id = $row['id'];

			echo
			"<div class='textc card content'>
			<a href='detail.php?id=$id'>
			<figure class='product'>
			<img src='image/$id.jpg'>
			<p>$row[name]</p>
			<p>$row[price]円</p>
			<p>$text</p>
			</figure>
			</a>
			</div>";
		}
		?>
	</div>









	<?php require 'footer.php'; ?></body>