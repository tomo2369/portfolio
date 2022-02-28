<?php session_start();
$_SESSION['token'] = "f7=Rd98$0!asf";
// ホントは関数でランダムなのを出す 
?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>たぐちの宿-お問合わせ</title>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Exo+2:400,700" rel="stylesheet">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />

	<meta name="description" content="This site is a test site.">
	<link rel="icon" href="images/favicon.png">
	<link rel="stylesheet" href="styles/loader.css">
	<script src="scripts/vendors/pace.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Kameron:wght@400;700&family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="styles/vendors/bootstrap-reboot.css" />
	<link rel="stylesheet" href="styles/vendors/swiper.min.css" />
	<link rel="stylesheet" href="styles/style.css" />
	<link rel="stylesheet" href="style.css">
</head>






<body class="  pace-done"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
    <div id="global-container">
      <div id="container">
        <div class="mobile-menu__cover"></div>
        <div class="nav-trigger"></div>
        <header class="header triggered">
          <div class="header__inner appear up inview">
            <div class="logo item">
			<a href="index.PHP">
              <img src="images/logo.svg" alt="" class="logo__img">
              <span class="logo__taguchi">たぐちの</span>
              <span class="logo__world">宿</span></a>
            </div>
            <nav class="header__nav">
              <ul class="header__ul">
                <li class="header__li item"><a href="index.PHP">トップ</a></li>
                <li class="header__li item"><a href="about.html">サイトについて</a></li>
                <li class="header__li item">
                  <a class="btn filled" href="contact.php">お問合わせ</a>
                </li>
              </ul>
            </nav>
            <button class="mobile-menu__btn">
              <span></span>
              <span></span>
              <span></span>
            </button>
          </div>
        </header>












			<div id="top_igai_contents">
				<div class="container">

					<article>
						<!-- 送信画面 -->
						<section id="input" class="">
							<h1>予約・お問い合わせ</h1>
							<p>ご興味がある宿がありましたら、以下の欄にHouse番号をご記入の上、送信してください。宿に関するご質問などもお気軽にお寄せください。</p>

							<form id="fm" method="post" action="soshin.php">
								<input type="hidden" name="token" value="<?= $_SESSION['token'] ?>">
								<p>
									<label> 名前： </label>
									<input type="text" id="name" name="name" class="abcd" required>
								</p>

								<p>
									<label> メールアドレス：</label>
									<input type="email" id="mail" name="mail" class="abcd" required>
								</p>


								<p>
									<label>House番号</label>
									<select id="yado" name="yado" class="abcd" required>
										<option value="お問合わせのみ">お問合わせのみ</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>

									</select>
								</p>



								<p>
									<label> コメント：</label>
									<textarea id="comment" name="comment" class="abcd" required></textarea>
								</p>

								<p><input id="btn_confirm" type="button" value="確認へ"></p>
							</form>
						</section>


						<!-- 確認画面  -->
						<h2>確認してください</h2>
						<ul id="confirm" class="hidden" style="list-style: none !important;">
							<li>
								<label> 名前：</label>
								<p class="efgh"></p>
							</li>

							<li>
								<label> メールアドレス：</label>
								<p class="efgh"></p>
							</li>

							<li>
								<label> House番号：</label>
								<p class="efgh"></p>
							</li>

							<li>
								<label> コメント：</label>
								<p class="efgh"></p>
							</li>

							<li>
								<input id="btn_return" type="button" value="戻る">
								<input id="btn_submit" type="button" value="送信">
							</li>
							<ul>
					</article>




					<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
					<script>
						//確認ボタンクリック
						$("#btn_confirm").click(function() {
							$('.abcd').each(function(i, e) {
								$('.efgh').eq(i).text($(e).val());
							});

							$('#confirm').removeClass('hidden');
							$('#input').addClass('hidden');
						});


						$("#btn_confirm").click(function() {
							$('.abcd').each(function(i, e) {
								$('.efgh').eq(i).select($(e).val());
							});

							$('#confirm').removeClass('hidden');
							$('#input').addClass('hidden');
						});


						//戻るクリック
						$("#btn_return").click(function() {
							$('#confirm').addClass('hidden');
							$('#input').removeClass('hidden');
						});

						//送信クリック
						$("#btn_submit").click(function() {
							$('#fm').submit();
						});
					</script>










				</div>



				<footer class="footer appear up inview">
					<div class="logo item">
						<img src="images/logo.svg" alt="" class="logo__img" />
						<span class="logo__stay">たぐちの</span>
						<span class="logo__world">宿</span>

					</div>
					<nav class="footer__nav">
						<ul class="footer__ul">
							<li class="footer__li item"><a href="index.PHP">トップ</a></li>
							<li class="footer__li item"><a href="about.html">サイトについて</a></li>
							<li class="footer__li item"><a href="#">宿一覧</a></li>
							<li class="footer__li item"><a href="contact.php">お問合わせ</a></li>
						</ul>

					</nav>
				</footer>



</body>

</html>