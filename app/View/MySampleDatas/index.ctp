<h1>index page</h1>

<table><?php foreach ($datas as $data): ?>
		<tr><td><?php echo $data['MySampleData']['name']; ?></td>	
			<td><?php echo $data['MySampleData']['mail']; ?></td>
			<td><?php echo $data['MySampleData']['tel']; ?></td>
		</tr>
	<?php endforeach; ?>
	 
</table>
