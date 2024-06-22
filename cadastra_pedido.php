<?php
    require("conecta.php");

    $nome = $_POST['nome'];
    $sobrenome =  $_POST['sobrenome'];
    $email = $_POST['email'];
    $escolha = $_POST['escolha'];
    $jogo = $_POST['jogo'];
    $pagamento = $_POST['pagamento'];
    $observacoes = $_POST['observacoes'];

    $sql = "INSERT INTO pedido (nome, sobrenome, email, escolha, jogo, pagamento, observacoes)
    VALUES ('$nome', '$sobrenome', '$email', '$escolha', '$jogo', '$pagamento', '$observacoes')";

    if ($conn->query($sql) === TRUE) {
      echo "<center><h1>Registro Inserido com Sucesso</h1>";
      echo "<a href='index.html'><input type='button' value='Voltar'></a></center>";
    } else {
      echo "<h3>OCORREU UM ERRO: </h3>: " . $sql . "<br>" . $conn->error;
    }
?>
