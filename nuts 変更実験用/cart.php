<?php
if (isset($_SESSION['customer'])) {
	echo '<table>';
	echo '<th>商品番号</th><th>商品名</th><th>価格</th>';
	$pdo=new PDO('mysql:host=mysql1.php.xdomain.ne.jp;dbname=ttsite_nohin;charset=utf8','ttsite_tt23', 'Asdf3333');
	$sql=$pdo->prepare(
		'select * from cart_prepare_purchase, product '.
		'where customer_id=? and product_id=id');
	$sql->execute([$_SESSION['customer']['id']]);
	foreach ($sql as $row) {
		$id=$row['id'];
		echo '<tr>';
		echo '<td>', $id, '</td>';
		echo '<td><a href="detail.php?id='.$id.'">', $row['name'], 
			'</a></td>';
		echo '<td>', $row['price'], '</td>';
		echo '<td><a href="cart_prepare_purchase-delete.php?id=', $id, 
			'">削除</a></td>';
		echo '</tr>';
	}
	echo '</table>';
} else {
	echo 'カートを表示するには、ログインしてください。';
}
?>