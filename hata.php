<?
error_reporting(0);
include("ayar.php");
?>
    


<html dir="ltr" lang="tr-TR">

<head>
		<title>Ücretsiz DNS Hizmeti » ServerButik</title>
		
		

		<meta content="freedns, tsdns, ts3 dns, ts dns, dns" name="keywords">
		<meta name="copyright" content="serverbutik.com">
		<meta name="rating" content="General">
		<meta name="revisit-after" content="5 days">
		<meta name="robots" content="ALL">
		<meta name="distribution" content="Global">
		<meta http-equiv="Content-Language" content="tr">
		<meta http-equiv="reply-to" content="info@serverbutik.com">
		<meta http-equiv="pragma" content="no-cache"> 
		<meta http-equiv="Content-Type" content="text/html">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta charset="utf-8">

		<link href="cdn/font-awesome.min.css" rel="stylesheet">
		<link href="cdn/VpIXGrgSbKSVnjGemjkS.css" rel="stylesheet">
		<link href="http://fonts.googleapis.com/css?family=Alegreya+Sans|Nunito|Josefin+Sans|Orbitron|Audiowide|Exo+2" rel="stylesheet" type="text/css">

</head>
	<body>
		<div id="particles-js"></div>
			<div class="bilgidiv">
			</div>
		</div>
		<header>
			<nav class="navbar navbar-inverse">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">
								Menü							</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">
							<i class="fa fa-headphones"></i> dns<span style="color: #008cba;">.serverbutik.com</span>						</a>
					</div>
					<div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">

							<li>
								<a href="LİNK">
									Ana Sayfa								</a>
							</li>
							<li>
								<a href="link">
									Forum Sitemiz								</a>
							</li>		
							
							<li>
								<a href="link">
									TSDNS								</a>
							</li>
							
							<li>
								<a href="https://github.com/byc4N">
									Github							</a>
							</li>
																					<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<span class="label">
																				<img src="cdn/img/turkey.png" height="16px">
																				<span class="caret"></span>
									</span>
								</a>
								<ul class="dropdown-menu">
									<li>
										<a href="#" name="dil">
											<img src="cdn/img/usa.png" height="16px"> English
										</a>
									</li>
									<li>
										<a href="javascript:dil('tr');" name="dil">
											<img src="cdn/img/turkey.png" height="16px">
											Türkçe										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>

		<main>
<section class="register">
<div class="container">
<form class="uk-form" action="basarili.php" method="POST">
<div class="row">
<div class="col-sm-offset-1 col-sm-10 text-center">
<h1>TeamSpeak Ücretsiz DNS Hizmeti</h1>
<h2>Bu hizmet ile TeamSpeak sunucunuza IP adresi yerine domain(URL) ile bağlantı kurabilirsiniz.</h2>
</div>
<div id="js-alertBox" class="col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6">
</div>
<div class="col-sm-offset-2 col-sm-6 col-md-offset-3 col-md-4">
<div class="input-group">
<span class="input-group-addon">IP</span>
<input type="text" name="ip" class="form-control" value="" placeholder="IP Adresiniz">
</div>
</div>
<div class="col-sm-2">
<div class="input-group">
<span class="input-group-addon">Port</span>
<input type="text" name="port" class="form-control" placeholder="9987">
</div>
</div>
<div class="col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6">
<div class="input-group input-group-lg">
<input type="text" name="subname" id="tsdns" class="form-control" value="" placeholder="wishname" style="width:40%;border-radius:2px 0px 0px 2px;" data-validation="alphanumeric" data-validation-help="" data-validation-allowing="-_">
<div class="select">
<div class="col_one_third col_last nobottommargin">
										<select name="select" class="form-control not-dark">
										
						<?php
foreach ($domains AS $domain) {
    echo '<option value="' . htmlspecialchars($domain) . '">' . htmlspecialchars($domain) . '</option>';
}
?>   

										</select>
</div></div>
<span class="input-group-btn">
<button class="btn btn-register" name="kbaslat" type="submit">Oluştur</button>
</span>
</div>
</div>
</div>
</form>
</div>
</section>


			<section class="main-content bg-light">
				<div class="container text-center">
					<h2 class="page-header text-center">Hoşgeldiniz</h2>
					<p>serverbutik.com Hizmetlerini kullandığınız için teşekkür ederiz</p><p>serverbutik.com DNS Hizmeti tamamen ücretsiz ve tüm insanlığa açık bir hizmettir.</p><p>Düşünceleriniz, önerileriniz ve eleştirileriniz bizim için çok önemlidir. İletişim seçeneklerimizden bize bildirim yapabilirsiniz.</p>				</div>
			</section>

			<section class="main-content">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 text-center">
							<i style="color: #008cba;" class="fa fa-gift fa-5x fa-css-circle"></i>
							<h3>Ücretsiz!</h3>
							<p>DNS Hizmetimiz tamamen ücretsizdir.</p>
						</div>
						<div class="col-sm-4 text-center">
							<i style="color: #008cba;" class="fa fa-child fa-5x fa-css-circle"></i>
							<h3>Kolay Kullanım!</h3>
							<p>Sadece IP, Port Girin, gerisini bize bırakın :)</p>
						</div>
						<div class="col-sm-4 text-center">
							<i style="color: #008cba;" class="fa fa-magic fa-5x fa-css-circle"></i>
							<h3>Hızlı!</h3>
							<p>Saniyeler içinde aktivasyon ve kullanım.</p>
						</div>
					</div>
				</div>
			</section>

		</main>
		<script src="cdn/js/jquery.min.js"></script>
		<script src="cdn/js/bootstrap.min.js"></script>
		<script src="cdn/js/notiny.min.js"></script><div class="notiny"><div class="notiny-container" style="top: 10px; left: 10px;"></div><div class="notiny-container" style="bottom: 10px; left: 10px;"></div><div class="notiny-container" style="top: 10px; right: 10px;"></div><div class="notiny-container" style="bottom: 10px; right: 10px;"></div><div class="notiny-container notiny-container-fluid-top" style="top: 0px; left: 0px; right: 0px;"></div><div class="notiny-container notiny-container-fluid-bottom" style="bottom: 0px; left: 0px; right: 0px;"></div></div>
		<script src="cdn/js/nepix.min.js"></script>

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<h4>
							serverbutik.com Hakkında						</h4>
						<p>
							serverbutik.com forumunun dağıttığı TSV2 yazılımı çok pratik ve hızlıdır. ts3 üzerinden çalışan bu yazılım, tamamen ücretsiz, kolay ve hızlı kullanım ile serverbutik.com.net güvencesiyle hizmetinizdedir..						</p>
					</div>
					<div class="col-sm-3">
						<h4>
							Destek						</h4>
						<ul>
							<li>
								<a href="#">
									1								</a>
							</li>
							<li>
								<a href="#">
									2								</a>
							</li>
							<li>
								<a href="#">
									3								</a>
							</li>
							<li>
								<a href="#">
									4								</a>
							</li>
						</ul>
					</div>
					<div class="col-sm-3">
						<h4>
							İletişim						</h4>
						<ul>
							<li>
								<a href="https://github.com/byc4N" target="_blank">
									<i class="fa fa-github" aria-hidden="true"></i>ᅠ@byc4N
								</a>
							</li>
							<li>
								<a href="mailto:info@serverbutik.com.net" target="_blank">
									<i class="fa fa-envelope-o" aria-hidden="true"></i>ᅠc4N@serverbutik.com (
									Destek)
								</a>
							</li>
							<li>
								<a href="mailto:info@serverbutik.com.net" target="_blank">
									<i class="fa fa-envelope-o" aria-hidden="true"></i>ᅠ0538 000 000
								</a>
							</li>
						</ul>
					</div>
				</div>
				<hr>
					<div class="row copyline">
						<div class="col-sm-6">
							<p>Copyright © 2019 dns.serverbutik.com - 
								Tüm hakları mahfuzdur ve mahfuz acı verir..							</p>

						</div>
						<div class="col-sm-6 text-right">
							<p>
								<a href="https://serverbutik.com">
									Gizlilik								</a>
							</p>
						</div>
					</div>
				</div>
			</footer>

	
		<div id="mrjwg9h-1486297661161" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: auto !important; position: fixed !important; border: 0px !important; min-height: 0px !important; min-width: 0px !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: auto !important; height: auto !important; z-index: 2000000000 !important; cursor: auto !important; float: none !important; bottom: 0px !important; left: 0px !important; right: auto !important; display: block;"><iframe id="H14aEER-1486297661162" src="about:blank" frameborder="0" scrolling="no" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: auto !important; right: auto !important; bottom: auto !important; left: auto !important; position: static !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 320px !important; height: 400px !important; z-index: 999999 !important; cursor: auto !important; float: none !important; display: none !important;"></iframe><iframe id="FB9SwlA-1486297661164" src="about:blank" frameborder="0" scrolling="no" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; position: fixed !important; border: 0px !important; padding: 0px !important; transition-property: none !important; z-index: 1000001 !important; cursor: auto !important; float: none !important; height: 40px !important; min-height: 40px !important; max-height: 40px !important; width: 320px !important; min-width: 320px !important; max-width: 320px !important; transform: rotate(0deg) translateZ(0px) !important; transform-origin: 0px center 0px !important; margin: 0px !important; top: auto !important; bottom: 0px !important; left: 10px !important; right: auto !important; display: block !important;"></iframe><iframe id="Smno28Y-1486297661164" src="about:blank" frameborder="0" scrolling="no" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; position: fixed !important; border: 0px !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; display: none !important; z-index: 1000003 !important; cursor: auto !important; float: none !important; top: auto !important; bottom: 40px !important; left: 10px !important; right: auto !important; width: 320px !important; max-width: 320px !important; min-width: 320px !important; height: 37px !important; max-height: 37px !important; min-height: 37px !important;"></iframe><div id="vh0MeDi-1486297661160" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none rgb(255, 255, 255) !important; opacity: 0 !important; top: 1px !important; bottom: auto !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: auto !important; height: 45px !important; display: block !important; z-index: 999997 !important; cursor: move !important; float: none !important; left: 0px !important; right: 96px !important;"></div><div id="U1D5MCk-1486297661161" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: 96px !important; bottom: auto !important; left: 0px !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 6px !important; height: 100% !important; display: block !important; z-index: 999998 !important; cursor: w-resize !important; float: none !important;"></div><div id="m1rdEYe-1486297661161" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: 0px !important; bottom: auto !important; left: auto !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 6px !important; height: 100% !important; display: block !important; z-index: 999998 !important; cursor: e-resize !important; float: none !important;"></div><div id="wuIp22K-1486297661161" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: 0px !important; bottom: auto !important; left: auto !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 100% !important; height: 6px !important; display: block !important; z-index: 999998 !important; cursor: n-resize !important; float: none !important;"></div><div id="MC1caeV-1486297661161" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: auto !important; right: 0px !important; bottom: 0px !important; left: auto !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 100% !important; height: 6px !important; display: block !important; z-index: 999998 !important; cursor: s-resize !important; float: none !important;"></div><div id="XdIOaGj-1486297661161" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: auto !important; bottom: auto !important; left: 0px !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 12px !important; height: 12px !important; display: block !important; z-index: 999998 !important; cursor: nw-resize !important; float: none !important;"></div><div id="yqm4Nax-1486297661161" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: 0px !important; bottom: auto !important; left: auto !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 12px !important; height: 12px !important; display: block !important; z-index: 999998 !important; cursor: ne-resize !important; float: none !important;"></div><div id="lIXuM8T-1486297661161" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: auto !important; right: auto !important; bottom: 0px !important; left: 0px !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 12px !important; height: 12px !important; display: block !important; z-index: 999998 !important; cursor: sw-resize !important; float: none !important;"></div><div id="fLfkLqp-1486297661161" class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: auto !important; right: 0px !important; bottom: 0px !important; left: auto !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 12px !important; height: 12px !important; display: block !important; z-index: 999999 !important; cursor: se-resize !important; float: none !important;"></div><div class="" style="outline: none !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: none transparent !important; opacity: 1 !important; top: 0px !important; right: auto !important; bottom: auto !important; left: 0px !important; position: absolute !important; border: 0px !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 100% !important; height: 100% !important; display: none !important; z-index: 1000001 !important; cursor: move !important; float: left !important;"></div></div><iframe src="about:blank" style="display: none !important;"></iframe></body>
</html>


</html>
