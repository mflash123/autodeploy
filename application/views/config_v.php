<div class='container'>
<h2>Настройка</h2>
<h3>Хосты для внедрения</h3>
<table class="table table-hover">
	<thead>
		<tr>
		<th>User name</th>
		<th>IP</th>
		<th>Path to project</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($lines as $line):?>
<?php list($name, $ip, $path) = explode(":", $line);?>
<tr>
<td><?=$name?></td>
<td><?=$ip?></td>
<td><?=$path?></td>
</tr>
<?php endforeach; ?>
	</tbody>
</table>
<h3>Разрешенные ветки</h3>
<table class="table table-hover">
	<thead>
		<tr>
		<th>Branches</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($branches as $branch):?>
<tr>
<td><?=$branch?></td>
</tr>
<?php endforeach; ?>
	</tbody>
</table>

<a href='/'>Ok</a>
</div>