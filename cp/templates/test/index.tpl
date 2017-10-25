<!DOCTYPE HTML>
<html>
	<head>
		<title>Short links</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="{TPL_PATH}css/style.css" />
        <script src="{TPL_PATH}js/jquery.min.js"></script>
        <script src="/js/script.js"></script>
	</head>
	<body>
		<div id="wrapper">
			<div id="bg"></div>
			<div id="manage">
                {ACTION}
            </div>
			<main>
				<!-- Header -->
					<header id="header">
						<h1>{TITLE}</h1>
						<p>{DESCR}</p>
					</header>
                    <section>
                        {CONTENT}
                    </section>
				<!-- Footer -->
					<footer>
						<span class="copyright">&copy; All right reserved.</span>
					</footer>

			</main>
		</div>
        <div id="loader"><img src="/i/loader.gif"></div>
	</body>
</html>