<div class='container'>
	<div class='pullbranch span3'>
		<h3>Залить ветку:</h3>
		<select id='branch' name='branch'>
			<?php foreach ($branches as $branch):?>
			<option value="<?=$branch?>"><?=$branch?></option>
			<?php endforeach; ?>
		</select>
		<h3>На:</h3>
		<select id='host' name='host'>
			<?php foreach ($lines as $line):?>
			<?php list($name, $ip, $path) = explode(":", $line);?>
			<option value="<?=$name?>"><?=$name?></option>
			<?php endforeach; ?>
		</select>
		<input id='pullbranchapply' type="submit" value="Применить">
	</div>
	<div id='result' class='span6'>
		Выберите ветку и хост и нажмите "Применить"
	</div>
	<a href='/config'>Настройки</a> | <a href='http://www.4erp.ru/s-miru-po-nitki/deploy.html'>Инструкция</a> | <a href='http://www.4erp.ru'>Мой блог</a>

</div>
