<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>

        <style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg, #1e3a5f, #4f709c);

    min-height: 100vh;

    display: flex;
    justify-content: center;
    align-items: center;

    padding: 30px;
}

form {
    background-color: #ffffff;

    width: 100%;
    max-width: 450px;

    padding: 35px;

    border-radius: 15px;

    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.20);
}

h1 {
    color: #1e3a5f;
    font-size: 30px;

    text-align: center;

    margin-bottom: 30px;
}

h3 {
    color: #1e3a5f;
    font-size: 18px;

    margin-top: 15px;
    margin-bottom: 15px;
}

label {
    display: block;

    color: #333333;
    font-weight: bold;

    margin-bottom: 7px;
}

input[type="text"],
input[type="password"],
input[type="date"] {
    width: 100%;

    padding: 12px;

    margin-bottom: 18px;

    border: 1px solid #cccccc;
    border-radius: 7px;

    font-size: 15px;

    transition: 0.3s;
}

input[type="text"]:focus,
input[type="password"]:focus,
input[type="date"]:focus {
    outline: none;

    border-color: #1e3a5f;

    box-shadow: 0 0 5px rgba(30, 58, 95, 0.25);
}

/* Área dos checkbox e radio */

.opcao {
    display: flex;

    align-items: center;

    gap: 10px;

    margin-bottom: 12px;
}

.opcao label {
    margin: 0;

    font-weight: normal;

    cursor: pointer;
}

.opcao input[type="checkbox"],
.opcao input[type="radio"] {
    width: 18px;
    height: 18px;

    margin: 0;

    cursor: pointer;
}

select {
    width: 100%;

    padding: 12px;

    margin-bottom: 18px;

    border: 1px solid #cccccc;
    border-radius: 7px;

    background-color: white;

    font-size: 15px;

    cursor: pointer;
}

select:focus {
    outline: none;

    border-color: #1e3a5f;

    box-shadow: 0 0 5px rgba(30, 58, 95, 0.25);
}

input[type="submit"] {
    width: 100%;

    padding: 13px;

    margin-top: 20px;

    background-color: #1e3a5f;

    color: white;

    border: none;
    border-radius: 8px;

    font-size: 16px;
    font-weight: bold;

    cursor: pointer;

    transition: 0.3s;
}

input[type="submit"]:hover {
    background-color: #152a45;

    transform: translateY(-2px);
}

    </style>
</head>

<body>

    <?php

    if (isset($_GET["login"])) {

        $login = $_GET["login"];

        echo "Você digitou: " . $login;
    }

    ?>

    <form method="get">

        <h1>Formulário</h1>
        
        <label for="login">Login</label>
        <input type="text" id="login" name="login">
        <br><br>

        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha">
        <br><br>

        <label for="data">Data</label>
        <input type="date" id="data" name="data">
        <br><br>

        <h3>Linguagens para Back-End</h3>

        <br>

        <label for="opcao">Java</label>
        <input type="checkbox" id="java" name="linguagens" value="java">
        <br><br>


        <input type="radio" id="iniciante" name="nivel"> Iniciante
        <br><br>        

        <input type="radio" id="intermediario" name="nivel"> intermediário    

        <input type="radio" id="avancado" name="nivel"> Avançado
        <br><br>       

        <label for="opcao">PHP</label>
        <input type="checkbox" id="php" name="linguagens" value="php">
        <br><br>

        <input type="radio" id="iniciante" name="nivel"> Iniciante
        <br><br>        

        <input type="radio" id="intermediario" name="nivel"> intermediário    

        <input type="radio" id="avancado" name="nivel"> Avançado
        <br><br>       

        <label for="opcao">Python</label>
        <input type="checkbox" id="python" name="linguagens" value="python">
        <br><br>

        <input type="radio" id="iniciante" name="nivel"> Iniciante
        <br><br>        

        <input type="radio" id="intermediario" name="nivel"> intermediário    

        <input type="radio" id="avancado" name="nivel"> Avançado
        <br><br>       

        <h3>Entendeu a aula?</h3>

        <input type="radio" name="aula" value="sim" >Sim 
        <input type="radio" name="aula" value="nao" >Não
        <input type="radio" name="aula" value="boia" >Estou boiando

        <br><br>

        <h3>UF - Região Sudeste</h3>

        <select id="uf" name="uf">
            <option value="">Selecione seu estado</option>
            <option value="SP">São Paulo</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="MG">Minas Gerais</option>
            <option value="ES">Espírito Santo</option>
        </select> 



        <input type="submit" value="Entrar">

    </form>

</body>

</html>