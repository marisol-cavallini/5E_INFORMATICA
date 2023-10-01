<?php
require_once 'vendor/autoload.php'; //carico la libreia che contiene i metodi per la conversione 
use Symfony\Component\Yaml\Yaml;//importa la classe YAML dalla libreria symfony YAML

// Funzione per convertire un file YAML in JSON
function convertYamlToJson($yamlFile, $jsonFile) {
    $contenuto=file_get_contents($yamlFile);//leggo il contenuto del file yaml e lo salvo 
    $yamlData = Yaml::parseFile($contenuto);// converto il contenuto in array 
    $jsonData = json_encode($yamlData, JSON_PRETTY_PRINT);//converto il contenuto del array in formato Json [JSON_PRETTY_PRINT] serve per avere una formattazione più leggibile 
    file_put_contents($jsonFile, $jsonData);//scrive il json all'interno del file specificato
}
// Percorsi dei file
$yamlFile = 'Studenti.yaml';
$jsonFile = 'output.json';
echo "File convertito in JSON:\n";
convertYamlToJson($yamlFile, $jsonFile);//richiamo la funzione 
echo "Operazione completata per JSON.\n";
?>

