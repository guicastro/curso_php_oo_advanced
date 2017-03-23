<table>
	<tr>
		<td>ID</td>
		<td>Name</td>
		<td>Description</td>
	</tr>
	<?php foreach($list as $product): ?>
	<tr>
		<td><?=$product['product_id']; ?></td>
		<td><?=$product['product_name']; ?></td>
		<td><?=$product['product_description']; ?></td>
	</tr>
	<?php endforeach; ?>
</table>