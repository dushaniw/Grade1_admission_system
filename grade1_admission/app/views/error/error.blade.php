<!doctype html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<title>{{ $title }}</title>
	<meta name="viewport" content="width=device-width">
	<style type="text/css">
		html { font-size: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
		body { font-family: "Microsoft YaHei", "Lucida Grande", "Lucida Sans Unicode", Helvetica, Arial, Verdana, sans-serif; background-color: transparent; color: #333; -webkit-font-smoothing: antialiased; }
		img { border: 0; }
		a { color: #08f; }
		a:link, a:visited, a:active { text-decoration: none; }
		a:hover { text-decoration: underline; }
		#footer { font-size:14px; color:#333; text-align:center; margin-top:20px; }
		#footer a { color: #333; }
		#footer a:hover { color:#08f; }
		div.broadcast { text-align:center; margin:100px auto 100px auto; font-size:20px; }
		hr.line { width:60%; }
		code { font-size:16px; }
	</style>
</head>
<body>
	<div class='broadcast'>
		<h1>{{ $content }}</h1>
		<a href="{{{ URL::to('/') }}}"><h1>返回首页</h1></a>
	</div>
	<div id="footer"><hr class='line' />&copy; 2014 <a href="http://0x123.com">0x123.com</a></div>
</body>
</html>
