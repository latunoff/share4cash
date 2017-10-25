<!DOCTYPE HTML>
<html>
	<head>
		<title>Control Panel 4 Cash 4 Share</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="{TPL_PATH}css/main.css" />
		<link rel="stylesheet" href="{TPL_PATH}css/font-awesome.min.css" />
		
		<link rel="stylesheet" media="all" href="{TPL_PATH}css/jquery.dynatable.css" />
		<link rel="stylesheet" media="all" href="https://s3.amazonaws.com/dynatable-docs-assets/css/bootstrap-2.3.2.min.css" />
		
		<script type='text/javascript' src='{TPL_PATH}js/jquery-1.7.2.min.js'></script>
		<link rel="stylesheet" media="all" href="{TPL_PATH}css/jquery.dynatable.css" />
		<script type='text/javascript' src='{TPL_PATH}js/jquery.dynatable.js'></script>
		
	</head>
	<body>

		<!-- Content -->
			<div id="content">
				<div class="inner">

					<!-- Post -->
						<article class="box post post-excerpt">
							
								{NOTIFICATION}
							
							<header>
								<h2>{TITLE}</h2>
								<p>{DESCRIPTION}</p>
							</header>
							<div class="info">
								 
								<span class="date"><span class="month">{S_MONTH}</span> <span class="day">{S_DAY}</span><span class="year">{S_YEAR}</span></span>
							</div>
							
                                {CONTENT}
                                <div id="link_new">{LINK_NEW}</div>
						</article>
				</div>
			</div>

		<!-- Sidebar -->
			<div id="sidebar">
					<!-- Logo -->
					<h1 id="logo"><a href="/cp/">{SITE_TITLE}</a></h1>
					<div><a href="/cp/?menu=out">Sign out</a></div>
					{ACTION}
					<ul id="copyright">
						<li>&copy; All right reserved.</li>
					</ul>
			</div>

		<!-- Scripts -->
			<script src="{TPL_PATH}js/jquery.min.js"></script>
			<script src="{TPL_PATH}js/skel.min.js"></script>
			<script src="{TPL_PATH}js/util.js"></script>
			<!--[if lte IE 8]><script src="{TPL_PATH}js/ie/respond.min.js"></script><![endif]-->
			<script src="{TPL_PATH}js/main.js"></script>
	</body>
</html>