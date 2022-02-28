<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php
unset($_SESSION['customer']);
$pdo=new PDO('mysql:host=mysql1.php.xdomain.ne.jp;dbname=ttsite_nohin;charset=utf8','ttsite_tt23', 'Asdf3333');


//顧客テーブルからログインアカウントとパスワードがともに等しい行を選択	
$sql=$pdo->prepare(
	'select * 
	from customer 
	where login=? '
	// and password=?'
);
$sql->execute([
	// これらが ?(プレースホルダ) に入る
	$_REQUEST['login'] 
]);


foreach ($sql as $row) {
	//一件しか無いが,foreachすると一行から値を取りやすい
	if( password_verify($_REQUEST['password'] , $row['password'] )){
		//パスワードが正しい
			$_SESSION['customer']=[
				'id'=>$row['id'], 
				'name'=>$row['name'], 
				'address'=>$row['address'], 
				'login'=>$row['login'], 
				// 'password'=>$row['password'] ← 使わない
			];
	}else{
		echo 'ログイン名またはパスワードが違います。';
	}

}



if (isset($_SESSION['customer'])) {
	echo 'いらっしゃいませ、', $_SESSION['customer']['name'], 'さん。';

} else {
	echo 'ログイン名またはパスワードが違います。';
}

?>

<meta http-equiv="refresh" content="2;URL=http://ttsite.php.xdomain.jp/nuts-shop/product.php">

 
 <?php require 'footer.php'; ?>