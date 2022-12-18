<!doctype html>
<html lang="en-US">
<head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HE36XWSY5Y"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-HE36XWSY5Y');
</script>
<title>GoodSNIPER - Скачать</title>
<meta charset="utf-8">
<meta name="keywords" content="sniperos, goodsniper, скачать">
<?php include 'lib/module/sys-meta.php';?>
<meta property="og:title" content="GoodSNIPER - Скачать" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<meta property="og:url" content="goodsniper.tk" />
<meta property="og:locale" content="en_US"/>
<meta property="og:type" content="website" />
<meta property="og:site_name" content="GoodSNIPER" />

<meta name="twitter:title" content="GoodSNIPER - Скачать">
<meta name="twitter:site" content="@goodsniper">
<meta name="twitter:creator" content="@goodsniper">
<meta name="twitter:card" content="summary_large_image">
<?php include 'lib/module/sys-css.php';?>
<?php include 'lib/module/sys-js.php';?>
</head>
<body>
<?php include 'lib/module/sys-php.php';?>
<?php
if (@include_once("lib/compat/objects/Build.php"))
	$build = Build::get_latest();
?>
<div class="page-con-content">
	<div class="banner-con-container darkmode-header">
		<div id="object-particles">
		</div>
		<div class="wavebar-con-container">
			<div class="wavebar-con-wrap">
				<div class="wavebar-svg-object">
				</div>
				<div class="wavebar-svg-object">
				</div>
			</div>
		</div>
		<div class='banner-con-title fade-up-onstart'>
			<div class='banner-tx1-title fade-up-onstart pulsate'>
				<h1>Скачать</h1>
			</div>
			<div class='banner-con-divider'>
			</div>
			<div class='banner-tx2-title fade-up-onstart'>
				<p>
					 Последняя версия
				</p>
			</div>
		</div>
	</div>
	<div class="page-con-container">
		<div class="page-in-container">
			<div class='downloadable-con-container'>
				<div class='downloadable-con-outer'>
					<div class='downloadable-con-inner-a'>
						<div class='downloadable-con-image darkmode-invert' style="background: url(/img/icons/buttons/windows.png) center left / 42px no-repeat;">
						</div>
						<div class='downloadable-tx1-title darkmode-txt'>
							<span>Windows</span>
						</div>
						<div class='downloadable-tx2-desc darkmode-txt'>
							<span>Вы можете запустить установщик SniperOS на версиях Windows 7 и выше.</span>
						</div>
						<div class='sha2-tx1-title darkmode-txt'>
						</div>
						<div class='package-tx1-title darkmode-txt'>
							<span>Размер:</span>
						</div>
						<div class='package-tx2-desc darkmode-txt'>
							<span>
							<?php
							if (isset($build))
								printf("%s MB", $build->get_size_mb_windows());
							else
								printf("Недоступно");
							?>
							</span>
						</div>
						<?php
						if (isset($build))
							printf("<a href=\"%s\" download>", $build->get_url_windows());
						?>
						<div class='package-con-button'>
							<div class='package-ico-button' style="background: url(/img/icons/buttons/windows-h.png) center / 22px no-repeat;">
							</div>
							<div class='package-tx1-button'>
								<span>
								<?php
								if (isset($build))
									printf("Скачать");
								else
									printf("Скачать");
								?>
								</span>
							</div>
						</div>
						<?php
						if (isset($build))
							printf("</a>");
						?>
					</div>
					<div class='downloadable-con-inner-a'>
						<div class='downloadable-con-image darkmode-invert' style="background: url(/img/icons/buttons/android.png) center left / 80px no-repeat;">
						</div>
						<div class='downloadable-tx1-title darkmode-txt'>
							<span>Android</span>
						</div>
						<div class='downloadable-tx2-desc darkmode-txt'>
							<span>Это версия Catrobat. Специально для людей использующих PocketCode.</span>
						<div class='sha2-tx1-title darkmode-txt'>
						</div>
						<div class='package-tx1-title darkmode-txt'>
							<span>Размер:</span>
						</div>
						<div class='package-tx2-desc darkmode-txt'>
							<span>
							<?php
							if (isset($build))
								printf("%s MB", $build->get_size_mb_windows());
							else
								printf("126 МБ");
							?>
							</span>
						</div>
						<?php
						if (isset($build))
							printf("<a href=\SniperOS\"SniperOS ver. 1.4.1.catrobat\" download>", $build->get_url_windows());
						?>
						<div class='package-con-button'>
						    <a href='/SniperOS/SniperOS ver. 1.4.1.catrobat' download target="_blank">
							<div class='package-ico-button' style="background: url(/img/icons/buttons/windows-h.png) center / 22px no-repeat;">
							</div>
							<div class='package-tx1-button'>
								<span>
								<?php
								if (isset($build))
									printf("Скачать");
								else
									printf("Скачать");
								?>
								</span>
							</div>
						</div>
						<?php
						if (isset($build))
							printf("</a>");
						?>
					</div>
				</div>
				<div class='downloadable-con-outer' style="width: 66.6666666666%;">
					<div class='downloadable-con-inner-a'>
						<div class='downloadable-con-image darkmode-invert' style="background: url(/img/icons/buttons/history.png) center left / 42px no-repeat;">
						</div>
						<div class='downloadable-tx1-title darkmode-txt'>
							<span>Предыдущие сборки</span>
						</div>
						<div class='downloadable-tx2-desc darkmode-txt'>
							<span>Если вы хотите скачать предыдущие сборки SniperOS.Вы можете скачать их нажав на ссылку "Предыдущие сборки". <br> </span>
							</span>
							<br><br>
						</div>
						<a href="https://github.com/mat6rdxr293/goodsniper.tk">
							<div class='package-con-button' style="width: 225px;">
								<div class='package-ico-button' style="background: url(/img/icons/buttons/history-h.png) center / 22px no-repeat;">
								</div>
								<div class='package-tx1-button'>
									<span>
									Предыдущие сборки
									</span>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<h2>Установка на Windows</h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p class="download-desc">
							 Чтобы установить SniperOS на Windows надо скачать Программу для установки SniperOS
							 <br>
							 Далее запускаете установщик и следуйте дальнейшейшим инструкциям.
							 <br>
							 <b>Чтобы скачать программу установки нажмите на ссылку: </b><span class="highlight darkmode-highlight"><a href="https://aka.ms/vs/17/release/vc_redist.x64.exe" target="_blank">Скачать</a></span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-con-content darkmode-slimbar" style="background:#f7f7f7">
	<div class="page-con-container">
		<div class="page-in-container">
			<div class='container-con-block darkmode-block'>
				<div class='container-con-wrapper'>
					<div class='container-tx1-block darkmode-txt'>
						<div class="container-emp-block"></div>
						<h2></h2>
					</div>
					<div class='container-tx2-block darkmode-txt'>
						<p>
							 Сайт goodsniper.tk распрастраняется под лицензией GNU v.2. Загрузка исходного кода сайта позволяет вам клонировать, разветвлять или вносить любые изменения, но с уловием что вы опубликуете исходный код сайта GitHub.  <a href='https://github.com/mat6rdxr293' target="_blank">mat6rdxr293</a>.
						</p>
					</div>
				</div>
			</div>
			<div class="generic-con-button ">
				<a href='https://github.com/mat6rdxr293/goodsniper.tk' target="_blank">
				<div class="generic-btn-button">
					<div class="generic-ico-button" style="background: url('/img/icons/buttons/github-h.png') no-repeat center">
					</div>
					<div class="generic-tx1-button">
						<span>Репозиторий сайта <span class="generic-tx2-label">/mat6rdxr293</span></span>
					</div>
				</div>
				</a>
			</div>
		</div>
	</div>
	<?php include 'lib/module/inc-footer.php';?>
</div>
</body>
</html>
