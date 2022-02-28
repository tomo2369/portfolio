<?php session_start(); ?>
<header>
<nav class='nav-nav'>
<a class="nav-logo" href="product.php">nuts shop</a>


<ul>

<?php 

if (!isset($_SESSION['customer'])) {
echo
"<li class='nav-li'><a href='product.php'>商品一覧</a></li>
<li class='nav-li'><a href='login-input.php'>ログイン</a></li>
<li class='nav-li'><a href='customer-input.php'>会員登録</a></li>";
}



if (!empty($_SESSION['customer'])) {
    echo "<li class='nav-li'><a href='product.php'>商品一覧</a></li>
    <li class='nav-li'><a href='favorite-show.php'>お気に入り</a></li>
    <li class='nav-li'><a href='history.php'>購入履歴</a></li>
    <li class='nav-li'><a href='cart-show.php'>カート</a></li>
    <li class='nav-li'><a href='purchase-input.php'>購入</a></li>
    <li class='nav-li'><a href='logout-input.php'>ログアウト</a></li>
    <li class='nav-li'><a href='customer-input.php'>会員情報</a></li>";
    
}



if(($_SESSION['customer']['id'])=="14"){
    echo "  <li class='nav-li'><a href='report.php'>管理画面</a></li>";
}

?>

</ul>
</nav>
</header>
<hr>