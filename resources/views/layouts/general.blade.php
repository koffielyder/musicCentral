<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<?php $title = "Login"; ?>
	@include('includes.head')
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.html">Login</a></h1>
						@include('menu.menu')
					</header>
					@yield('content')
			</div>
			@include('includes.scripts')
	</body>
</html>