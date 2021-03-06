<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<h2>Pages</h2>

<!-- Pages table. -->
<table>
	<tr>
		<th>Title</th>
		<th>Slug</th>
		<th>Categories</th>
		<th>Last updated</th>
		<th>Created</th>
	</tr>
	<!-- Create a row for each page. -->
	<?php
	foreach ($pages as $page)
	{
	?>
		<tr onclick="location.hash = '#edit-page:<?= $page->id ?>';">
			<td><?= $page->title ?></td>
			<td><?= $page->slug ?></td>
			<td><?= implode(', ', $page->categories) ?></td>
			<td><?= $page->updated ?></td>
			<td><?= $page->created ?></td>
		</tr>
	<?php
	}
	?>
</table>

<h2>Add a page</h2>
<button class="blue" onclick="location.hash = '#edit-page:-1'">New page</button>