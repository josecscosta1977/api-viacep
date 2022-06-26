<?php
require __DIR__ . "/vendor/autoload.php";

use src\PesquisaCep;

echo "<h2>Disciplina de Programação Avancada Web - 05/11/2021</h2>";
echo "<p>Api ViaCep</p>";



$busca = new PesquisaCep();

$resultado = $busca->getAddressFromZipcode("50050570");

foreach($resultado as $resultados){
    print_r($resultados);
    
}
//$json = file_get_contents("data.json");
$resul = json_decode($resultados);

echo "<br><br>";
print_r($resul->cep);
echo "<br>";
print_r($resul->logradouro);
echo "<br>";
print_r($resul->bairro);
echo "<br>";
print_r($resul->localidade);
echo "<br>";
print_r($resul->uf);
echo "<br>";
print_r($resul->ddd);


