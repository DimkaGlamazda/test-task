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

foreach ($data['travel_type'] as $item){
    $answer[] =  $travel_style[$item];
}

$text = '';
foreach ($answer as $par){
    $text .= "\n".  $par;
}

sleep(5);
print $text;


?>