<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<h2>Categories</h2>

<!-- Categories table. -->
<table>
	<tr>
		<th>Name</th>
		<th>Pages</th>
	</tr>
	<!-- Create a row for each category. -->
	<?php
	foreach ($categories as $category)
	{
	?>
		<tr>
			<td><?= $category->name ?></td>
			<td><?= $category->page_count ?></td>
		</tr>
	<?php
	}
	?>
</table>