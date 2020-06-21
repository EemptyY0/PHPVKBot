<?php

    $city = $bstr[1];
    $apiK = "d800b90975b372514ea969bf2e1a1531";
    $url = "https://api.openweathermap.org/data/2.5/weather?q=" . $city . "&units=metric&appid=" . $apiK . "&lang=ru";

    $contents = file_get_contents($url);
    $data=json_decode($contents);

//    $icon=$data->weather[0]->icon.".png";
    $weather=$data->weather[0]->description;
    $temp_now=$data->main->temp."°C";
    $feels_like=$data->main->feels_like."°C";
    $pressure=$data->main->pressure;
    $humidity=$data->main->humidity;
    $visibility=$data->visibility;
    $wind_speed=$data->wind->speed;
    $country=$data->sys->country;
    $cityru=$data->name;

//    echo "<img src='$icon'>";
?>