```php
<?php

// Recebe os dados
$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = (int)$_POST['idade'];

// Verifica se é menor de 18 anos
if ($idade < 18) {
    echo "desculpa apenas maiores de 18 anos podem se cadastrar";
    exit;
}

echo "<h4>Debug com var_dump (todas as variáveis do POST):</h4>";

var_dump($_POST);

echo "<h4>Debug com var_dump:</h4>";

var_dump($nome);

echo "<br>";

var_dump($email);

echo "<br>";

var_dump($idade);

echo "<br>";

?>
```
