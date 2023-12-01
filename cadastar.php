<?php
include('conexao.php');

/*Variáveis para armazenamento de dados do form*/
// Em azul é uma variável
$nome  = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

/*Confirma dados infromados pelo usuário */
// Em senha não iremos colocar a variavel pois não queremos que mostre a senha do usuário
echo "<h3>nome:   $nome</h3>";
echo "<h3>email:  $email</h3>";
echo "<h3>senha:  A senha é secreta</h3>";


/*FORMA PROCEDURAL*/
// String de inserção no banco
// Values = Valores
// Insert Into = Inserir na tabela do phpmydimin
$cad_usuario = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', md5('$senha'))";

//Estrutura de decisão para executar código SQL
if (mysqli_query($conn, $cad_usuario)) {
      echo "<h1>Novo cadastro realizado </h1></br>";
} else {
      echo "Erro: " . $cad_usuario . "</br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>