<?php
header("Content-Type: application/json");

//header("Access-Control-Allow-Origin: *");

if(strpos($_SERVER["HTTP_ORIGIN"], "www.amfibios.dk") == false){
  header("Access-Control-Allow-Origin: " . $_SERVER["HTTP_ORIGIN"]);
}

  $fortnitePeriods = [
                        [
                          "dayHourConsump"=>"-12",
                          "windPrClust"=>"86",
                          "sunPrClust"=>"0" ,
                          "surplus"=>"-17"
                         ]
                    ];
  echo json_encode($fortnitePeriods, JSON_PRETTY_PRINT);
?>
