<htmL>
<head>
<title> Você foi cadastrado!</title>

<meta charset="utf-8'">

<script src="Ryte.js"></script>

<link rel="stylesheet" type="text/css" href="TelaPrincipal.css">

</head>

<div class="img2">

<center>
    
<body>

    
<?php
$con = mysqli_connect('localhost', 'root', '', 'Ryte');

$nome = $_POST['nome'];
$senha = sha1($_POST['senha']);
$email = $_POST['email']; 
$nas = $_POST['data'];
$sexo = $_POST['sexo'];

$insert = "INSERT INTO cadastro(nome, senha, email, nas, sexo) VALUES ('$nome', '$senha', '$email', '$nas', '$sexo')";

mysqli_query($con, $insert);

mysqli_close($con);

echo '<h1> Seu cadastro foi realizado com sucesso!! </h1>';
?>

<h1><ul>
        
        <li><a href="TelaPrincipal.html">Voltar</a></li>
</ul></h1>



</body></center>

</div>

</html>