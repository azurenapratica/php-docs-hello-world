<?php

echo "Lendo as Configurações em uma Aplicação PHP"; 
echo "<br />";
echo $_ENV["VAR_1"];
echo "<br />";
echo getenv('MYSQLCONNSTR_bridgesConnection');
