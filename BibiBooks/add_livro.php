<?php

//Criar conexão com o banco
  $servidor = "localhost";
  $usuario = "root";
  $senha = "";
  $nomeBanco = "dbase_bibibooks";
  //$conn = new mysqli($servidor, $usuario, $senha, $nomeBanco);
  $nome = $_POST['nome'];
  $id = $_POST['num'];
  $genero = $_POST['genero'];
  $autor = $_POST['autor'];
  $ano = $_POST['ano'];


  $conn = mysqli_connect($servidor, $usuario, $senha, $nomeBanco);

  if(!$conn) {
    die("Erro de conexão com localhost, o seguinte erro ocorreu ->".mysql_error());
  }

  //Passar o comando sql para inserir a tabela

  $query = "INSERT INTO bibibooks (nome, id, genero, autor, ano) VALUES ('$nome', '$id', '$genero', '$autor', '$ano')";

  if(!$conn->query($query)) {
  	echo "erro!";
  } else {
    echo "<script>alert('Adição realizada com sucesso'); location= 'add_livro.html';</script>";
  }



?>