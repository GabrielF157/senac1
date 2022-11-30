<?php

include("conexao.php");

$nome = $_POST['nome'];
$cep = $_POST['cep'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$datavistoria = $_POST['data_vistoria'];
$dataconstrucao = $_POST['data_construcao'];

if($nome == "" || $nome == null)
{
    echo "Nome não pode estar vazio!";
}
else
{

  echo $nome;
  echo $cep; 
  echo $numero;
  echo $complemento;
  echo $datavistoria;
  echo $dataconstrucao;
  
    $query = "INSERT INTO edificio (nome, cep, numero, complemento, data_vistoria, data_construcao) VALUES ('$nome','$cep','$numero','$complemento','$datavistoria','$dataconstrucao')";
    $insert = mysqli_query($conn, $query);
    if($insert){
        echo"<script language='javascript' type='text/javascript'>
        alert('Apartamento cadastrado com sucesso!');window.location.
        href='index.html'</script>";
      }else{
        echo"<script language='javascript' type='text/javascript'>s
        alert('Não foi possível cadastrar esse Apartamento');window.location
        .href='cadastroedificio.html'</script>";
      }

}


?>