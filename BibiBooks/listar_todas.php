<?php

  $servidor = "localhost";
  $usuario = "root";
  $senha = "";
  $nomeBanco = "dbase_bibibooks";



  $conn = mysqli_connect( $servidor, $usuario, $senha, $nomeBanco );

  if( !$conn ) {
    die( "Erro de conexão com localhost, o seguinte erro ocorreu ->".mysql_error() );
  }

  

  $query =  "SELECT * FROM bibibooks ";

  $result = $conn->query($query);

?>
<!DOCTYPE html>

  <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>BibiBooks</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="./style/style_pages.css">

        <style>
			body{
				background-color: #B0E0E6;
			}
		</style>

    </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

<div class="collapse navbar-collapse">

  <ul class="navbar-nav mr-auto">

    <li class="nav-item">
      <a class="nav-link" href="index.html">Home</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="add_livro.html">Adicionar Livro</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="alterar.php">Alterar Livro</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="listar_todas.php">Listar todos os  Livros</a>
    </li>

    <li class="nav-item active">
      <a class="nav-link" href="listar.html">Listar um livro</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="apagar.html">Remover um livro</a>
    </li>

  </ul>

</div>

</nav>

<table class='table' border=1>

  <tr>
    <th> Nome do Livro</th>
    <th> ID do Livro</th>
    <th> Gênero </th>
    <th> Autor </th>
    <th> Ano de Lançamento </th>
  </tr>

       <?php

         
            while($linha=$result->fetch_assoc()){
              echo "<tr> <td>" . $linha["nome"] . "</td>" .
              "<td>" . $linha["id"] . "</td>" .
              "<td>" . $linha["genero"] . "</td>" .
              "<td>" . $linha["autor"] . "</td>" .
              "<td>" . $linha["ano"] . "</td>" .
              "</tr>";
            }

      ?>

  </table>

    </body>

</html>