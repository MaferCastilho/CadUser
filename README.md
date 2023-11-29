## Índice 
🔸[Descrição](#descri%C3%A7%C3%A3o-)  
🔸[Funcionalidades](#%EF%B8%8Ffontes-consultadas)  
🔸[Fontes Consultadas](#%EF%B8%8Ffontes-consultadas)  
🔸[Tecnologias Utilizadas](#tecnologias-utilizadas)  

## 📝Descrição
Neste porjeto que estamos iniciando, estaremos criando uma tela de cadastro onde os dados colocados pelo usuário irá ser armazenado dentro de um banco de dados no caso o phpMyAdmin, utilizando a linguagem php.  
O projeto inicialmente está assim:⬇️  
![image info](_img/Tela%20Inicial.png)
<br><br>

## ⚙️Funções
Aqui iremos falar um pouco das funcionalidades de alguns códigos e de como vai funcionar.  

Variáveis para armazenamento de dados do form  
Em azul é uma variável  
Pega os dados do formulário e envia para o metodo Post ($_POST)  
Para entender mais sobre o metodo $_POST entre neste link  
https://www.php.net/manual/en/reserved.variables.post.php  

    $nome   = $_POST['nome'];  
    $email  = $_POST['email'];  
    $senha  = $_POST['senha'];  


escreve uma mensagem no corpo da página (echo)

    echo "<h3>Nome: $nome</h3>";
    echo "<h3>Email: $email</h3>";
    echo "<h3>Senha: A senha é secreta</h3>";