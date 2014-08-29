<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Xeployer - Powered by Docker and Xervmon</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);
		@import url(//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/css/bootstrap.min.css);
        

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
	<div class="welcome">
		<a href="http://xervmon.com" title="Sponsored By Xervmon"><img src="https://www.xervmon.com/wp-content/uploads/2014/08/xervmon_2.png"
			alt="Sponsored By Xervmon"></a>
		<h1>Xeployer has arrived</h1>
		<button class="btn btn-block btn-large btn-primary" style="margin-top: 15px;"><?= Lang::get('index.login'); ?></button>
	</div>
</body>
</html>
