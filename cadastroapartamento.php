<?php

include("conexao.php");

$numero_apto = $_POST['numero_apto'];
$area_apto = $_POST['area_apto'];
$codigo_edificio = $_POST['codigo_edificio'];
$codigo_morador = $_POST['codigo_morador'];
$valor = $_POST['valor'];

if($numero_apto == "" || $numero_apto == null)
{
    echo "numero_apto não pode estar vazio!";
}
else
{
    $query = "INSERT INTO apartamento (numero_apto, area_apto, codigo_edificio,codigo_morador, valor) VALUES ('$numero_apto','$area_apto','$codigo_edificio','$codigo_morador','$valor')";
    $insert = mysqli_query($conn, $query);
    if($insert){

        /*echo $query;*/

      echo"<script language='javascript' type='text/javascript'>
        alert('Apartamento cadastrado com sucesso!');window.location.
        href='index.html'</script>";
      }else{
        echo"<script language='javascript' type='text/javascript'>
        alert('Não foi possível cadastrar esse Apartamento');window.location
        .href='cadastroedificio.html'</script>";
      }

}


?>