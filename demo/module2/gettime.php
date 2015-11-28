<?php
/*
** Сценарий возвращает текущее время
*/
header('Content-type: text/plain; charset=utf-8');
header('Cache-Control: no-store;');
header('My-Time: '. date("H:i:s"));
//header('Expires: ' , date('r'));
?>