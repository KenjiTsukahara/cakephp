<html>
	<head>
		<title>INDex Page</title>
	</head>
	<body>
		<h1>this is test view.</p>
		<p><?php echo $result; ?></p>
		<p>
		<?php
			echo $this->Form->create(false,array('type'=>'post','action'=>'.'));	
			echo $this->Form->text('text1');
			echo $this->Form->end('submit');
		?>
		</p>
	</body>
</html>
