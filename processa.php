<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];

if($idade < 18) {
    echo "Desculpe, você precisa ter pelo menos 18 anos para se cadastrar.";
} else {
    echo "<h3>Dados recebidos:<h3><br>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Email:</strong> $email </p>";
    echo "<p><strong>Idade:</strong> $idade</p>";
}


?>