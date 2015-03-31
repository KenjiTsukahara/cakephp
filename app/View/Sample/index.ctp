<html>
	<head>
		<title>INDex Page</title>
	</head>
	<body>
		<h1>index page</h1>
		<p>message:<?php echo $msg; ?></p>
		<div>
			<ul>
				<?php foreach ($datas as $data) : ?>
				<li><?php echo $data; ?></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</body>
</html>
