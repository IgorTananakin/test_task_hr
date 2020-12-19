<?php
$count=file_get_contents(__DIR__.'/count.txt');
echo '<img src="пейзаж1.png"/><br><br>';
echo 'Счётчик просмотров страницы '.$count;

$count=$count+1;
file_put_contents(__DIR__.'/count.txt',$count);