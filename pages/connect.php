<?php

 
$db = new DataBase(localhost, root, 123123, test);
$data = $db->query("SELECT * FROM `users`");
print_r($data); //выводим полученные данные

?>