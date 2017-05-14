<?php
	$links = [
		"Home" => "/",
		"Services" => "/#services",
		"About" => "/about",
		"Contact" => "/#contact"
	];
	$url = $_SERVER["REQUEST_URI"];
?>

<nav class="full-width">
<?php foreach ($links as $link => $href): ?>
	<a class="<?= $url == $href? 'active': '' ?>" href="<?= str_replace($url, "", $href) ?>"><?= $link ?></a>
<?php endforeach ?>
</nav>
<div class="social">
	<a href="http://facebook.com/greenfinchgardeningchewvalley"><img src="images/facebook.svg" alt="Facebook"></a>
</div>
