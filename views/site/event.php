<p>Я не знаю для чего эта херня, домашние задания формулируют через ЖОПУ, а потому это будет выглядеть именно так.</p>
<?php
foreach($event as $e) {?>
	<ul>
		<li>Пункт1: <?=$e->name?></li>
		<li>Дата создания: <?=$e->created_at?></li>
		<li>Последнее обновление: <?=$e->updated_at?></li>
	</ul>
<?php } ?>