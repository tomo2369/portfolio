<?php session_start();
$_SESSION['token'] = "f7=Rd98$0!asf";
// ホントは関数でランダムなのを出す 
?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>お問い合わせ - FITTED</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Exo+2:400,700" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
</head>

<body>


	<header>
		<div class="container">

			<a href="index.html">FITTED</a>

			<nav>
				<ul>
					<li><a href="index.html">トップ</a></li>
					<li><a href="about.html">サイトについて</a></li>
					<li><a href="contact.php">お問い合わせ</a></li>
				</ul>
			</nav>

		</div>
	</header>

	<div class="contents">
		<div class="container">

	<article>
		<!-- 送信画面 -->
		<section id="input" class="">
			<h1>お問い合わせ</h1>
			<p>ご意見、ご感想などがありましたら、以下の欄にご記入の上、送信してください。記事に関するご質問などもお気軽にお寄せください。</p>

			<form id="fm" method="post" action="soshin.php">
				<input type="hidden" name="token" value="<?= $_SESSION['token'] ?>">
				<p>
					<label> 名前： </label>
					<input type="text" id="name" name="name" class="abcd" required >
				</p>

				<p>
					<label> メールアドレス：</label>
					<input type="email" id="mail" name="mail" class="abcd" required >
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


<div class="sub">
				<aside class="profile">
					<h2>PROFILE</h2>
					<figure>
						<img src="img/foot-_1_.png" alt="FITTEDの管理人">
					</figure>
					<p>街歩き＆食べ歩きがライフスタイル。天気がいい日はあちこちに出没しています。</p>
				</aside>


				<aside class="topics">
					<h2>TOPICS</h2>

					<ul>
						<li>
							<a href="post02.html">
								<figure><img src="img/tomato.jpg" alt=""></figure>
								<h3>今だから食べたい！免疫食材</h3>
							</a>
						</li>

						<li>
							<a href="post03.html">
								<figure><img src="img/cycle.jpg" alt=""></figure>
								<h3>「歩くのはちょっと抵抗があるな」<br>という方必見！！</h3>
							</a>
						</li>

						<li>
							<a href="post04.html">
								<figure><img src="img/green.jpg" alt=""></figure>
								<h3>自然と健康</h3>
							</a>
						</li>

						<li>
							<a href="post05.html">
								<figure><img src="img/time.jpg" alt=""></figure>
								<h3>散歩をゲーム化！！</h3>
							</a>
						</li>
					</ul>
				</aside>
			</div>

		</div>
	</div>


	<footer>
		© FITTED
	</footer>


</body>

</html>