<h1>index page</h1>
<form method="post" action="./find">
ID:<input type="text" name="id" />
<input type="submit" />
</form>

<table>
<?php if(isset($data)): ?>
<tr>
	<td>Name:</td>
	<td><?php echo $data['MySampleData']['name']; ?>
</tr>
<tr>
	<td>mail:</td>
	<td><?php echo $data['MySampleData']['mail']; ?>
</tr>
<tr>
	<td>tel:</td>
	<td><?php echo $data['MySampleData']['tel']; ?>
</tr>
<?php endif; ?>
</table>

