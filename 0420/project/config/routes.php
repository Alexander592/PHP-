<?php
	use \Core\Route;

	return [
		new Route('/my-page1/', 'page', 'show1'),
		new Route('/my-page2/', 'page', 'show2'),
		new Route('/p/', 'test', 'act1'),
		new Route('/pok/', 'test', 'act2'),
		new Route('/k/', 'test', 'act3'),

	];
?>

