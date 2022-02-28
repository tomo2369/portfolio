<?php require 'header.php'; ?>
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









<?php require 'footer.php'; ?>