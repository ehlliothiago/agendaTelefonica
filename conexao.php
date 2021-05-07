<?php
    $servidor = "localhost";
    $usuario = "rootEhllio";
    $senha = "localhost";
    $dbname = "formulario";

    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    if(!$conn){
        die('Erro ao conectar ao banco de dados: ' . mysqli_error());
    }
    echo 'Agenda Salva com sucesso!';


$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$sql = "INSERT INTO agenda VALUES  ('$nome', '$email', '$telefone')"; 
mysqli_query($conn,$sql) or die(" Erro ao tentar cadastrar registro");
mysqli_close($conn);
echo "Agenda cadastrada com sucesso!";
?>
    
