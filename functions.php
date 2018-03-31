<?php
	// Draws the head of the page
	function drawHead($pageTitle, $rootPath) {
?>
		<title><?php echo $pageTitle; ?></title>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1.0'> 
		<link rel='stylesheet' href=<?php echo "'" . $rootPath . "css/default.css'"; ?>>
		<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css'>

		<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'"'></script>
		<script src=<?php echo "'" . $rootPath . "js/modal.js'"; ?>></script>
<!--
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-86102408-1', 'auto');
			ga('send', 'pageview');

		</script>
-->
<?php
	}
?>


<?php
	// Draws the header of the page
	function drawHeader($size) {
?>
		<div class=<?php echo "'header-" . $size . "'" ?> id='header'>
		<div id='titles'>
			<span id="titles-inner">
				<a href="http://nicolasenslen.com/">
					<h1 id='full-name'>Nicolas Enslen</h1>
					<h4 id='slogan'>Programmer, Web Developer</h4>
				</a>
			</span>
		</div>
		<div id='links'>
			<div id='links-inner'>
				<a href='mailto:nicolas.enslen@gmail.com'><i class='fa fa-envelope fa-2x' aria-hidden='true'></i></a>
				<a href='https://github.com/nenslen' target='_blank'><i class='fa fa-github fa-2x' aria-hidden='true'></i></a>
				<a href='https://ca.linkedin.com/in/nicolas-enslen-8a3b7b119' target='_blank'><i class='fa fa-linkedin fa-2x' aria-hidden='true'></i></a>
			</div>
		</div>
	</div>
<?php
	}
?>


<?php
	// Draws the modal
	function drawModal() {
?>
		<div id="modal">
			<div class="modal-content"></div>
		</div>
<?php
	}
?>


<?php
	// Draws the footer
	function drawFooter() {
?>
		<footer>
			&copy 2018 - Nic Enslen
		</footer>
<?php
	}
?>
