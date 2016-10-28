<?php

$travel_style = [
    '1'=>'Машина с кодиционером',
    '2'=>'Фургон/Универсал',
    '3'=>'Едите с животным'
];
$data = $_POST['data'];
$answer = [
    0 =>  $data['district'],
    1 =>  $data['block'],
    2 =>  $data['street'] ? "Улица ". $data['street']: "Улица не введена",
    3 =>  $data['building'] ? "Дом ". $data['building']: "Дом не задан"
];

if(!empty($data['travel_type'])){
    foreach ($data['travel_type'] as $item){
        $answer[] =  html_entity_decode($travel_style[$item]);
    }
}

$text = '';
foreach ($answer as $par){
    $text .= "\n". html_entity_decode($par);
}

sleep(5);
print $text;


?>