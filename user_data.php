<?php


$person = [
    "name" => $_POST["name"],
    "email" => $_POST["email"],
    "gender" => $_POST["gender"],
    "country" => $_POST["country"],
];

$userdata = "./userdata.csv";

$handle = fopen($userdata, "w");

$persons = [];

foreach ($persons as $person){
    fputcsv($handle, $person);
}

fclose($handle);

print_r($person);

?>




