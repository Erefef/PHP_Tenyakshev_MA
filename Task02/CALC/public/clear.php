<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Erefef\CalcG\Database;

Database\clearCalcGamesDatabase();
echo "База данных успешно очищена!";
?>
<br>
<a href="index.php">Вернуться на главную</a>
