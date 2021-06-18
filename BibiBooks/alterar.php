<html lang = "pt-br">

	<head>

		<title>BibiBooks</title>

		<meta charset="utf-8">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		 <link rel="stylesheet" type="text/css" href="./style/style_pages.css">

		 <style>
			body{
				background-color: #B0E0E6;
			}
		</style>

	</head>

	<body>

		<nav class="navbar navbar-expand-lg navbar-light bg-light">

	      <div class="collapse navbar-collapse" >

	        <ul class="navbar-nav mr-auto">

	          <li class="nav-item">
	            <a class="nav-link" href="index.html">Home</a>
	          </li>

	          <li class="nav-item ">
	            <a class="nav-link" href="add_livro.html">Adicionar Livros</a>
	          </li>

	          <li class="nav-item active">
	            <a class="nav-link" href="alterar.php">Alterar Livros</a>
	          </li>

	          <li class="nav-item">
	            <a class="nav-link" href="listar_todas.php">Listar todos os Livros</a>
	          </li>

	          <li class="nav-item">
	            <a class="nav-link" href="listar.html">Listar um Livro</a>
	          </li>

	          <li class="nav-item">
	            <a class="nav-link" href="apagar.php">Remover um Livro</a>
	          </li>

	        </ul>

	      </div>

	    </nav>

		<div id="content" class="mx-auto">

	        <form class="form-row" method="POST" action="" style="margin-bottom: 85px;">

				

		          <div class="col-sm-12">
		            <label for="nome">Nome do Livro</label>
		            <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o novo nome do Livro (Irá Substituir o atual nome!)">
		          </div>

		          <div class="col-sm-12">
		            <label for="num">ID do Livro</label>
		            <input type="number" class="form-control" id="num" name="num" placeholder="Insira o ID do livro que deseja alterar">
		          </div>

		          <div class="col-sm-12">
		            <label for="genero">Gênero</label>
		            <input type="varchar" class="form-control  " id="genero" name="genero" placeholder="Insira o gênero do livro">
		          </div>

		          <div class="col-sm-12">
		            <label for="autor">Autor</label>
		            <input type="varchar" class="form-control autor" id="autor" name="autor" placeholder="Insira o nome do autor">
		          </div>

		          <div class="col-sm-12">
		            <label for="ano">Ano do Lançamento</label>
		            <input type="number" class="form-control ano" id="ano" name="ano" placeholder="Insira o ano de lançamento do livro">
		          </div>

		          <div class="form-group col-md-12">
		              <button class="btn btn-primary" type="submit" name="Alterar">Alterar</button>
		          </div>

		      </form>

	    </div>

	</body>

</html>

<?php

if(isset($_POST["Alterar"])){

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $nomeBanco = "dbase_bibibooks";

    $nome = $_POST['nome'];
    $id = $_POST['num'];
    $genero = $_POST['genero'];
    $autor = $_POST['autor'];
    $ano = $_POST['ano'];


    $conn = mysqli_connect($servidor, $usuario, $senha, $nomeBanco);

    if(!$conn) {
        die("Erro de conexão com localhost, o seguinte erro ocorreu ->".mysql_error());
    }


    $query =  "SELECT * FROM bibibooks WHERE id='$id'";

     $result = $conn->query($query);

     if ($result->num_rows > 0){
        $up = "UPDATE prod_manager SET nome = '$nome', qtd = '$qtd', genero = '$genero', ano= '$ano' WHERE id = '$id'";

        if ($conn->query($up) === TRUE) {

            echo "<script>alert('Livro alterado com sucesso'); location= 'listar_todas.php';</script>";
    
        } else {
    
            die("Erro!");
    
        }

     } 

} 

?>

