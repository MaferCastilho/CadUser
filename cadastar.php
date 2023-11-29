<?php

/*Variáveis para armazenamento de dados do form*/
// Em azul é uma variável
$nome   = $_POST['nome'];
$email  = $_POST['email'];
$senha  = $_POST['senha'];

/*Confirma dados infromados pelo usuário */
// Em senha não iremos colocar a variavel pois não queremos que mostre a senha do usuário
echo "<h3>Nome: $nome</h3>";
echo "<h3>Email: $email</h3>";
echo "<h3>Senha: A senha é secreta</h3>";

// String de inserção no banco
// Values = Valores
// Insert Into = Inserir na tabela do phpmydimin
$cad_usuario = "INSERT INTO usuario(nome, email, senha) VALUES ('$nome','$email','$senha')";

?>