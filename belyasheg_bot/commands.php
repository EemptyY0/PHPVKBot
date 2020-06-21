<?php
//include "weather.php";
//if ($bstr[0] == "!погода"){
//  vk_msg_send($chat_id, $city ." погода: " . $botsend);
//}
if ($bstr[0] == "!погода"){
  vk_msg_send($chat_id,
      "Регион: ".$country."\n".$cityru ." - погода: " ."\n".
      "Условия: ".$weather."\n".
      "Температура: ".$temp_now."\n".
      "Темп. ощущается как: ".$feels_like."\n".
      "Давление: ".$pressure."\n".
      "Влажность: ".$humidity."\n".
      "Видимость: ".$visibility."\n".
      "Скорость ветра: ".$wind_speed);
}
($str == "᠌") ? sendAttachment($chat_id, "", "attachments/che.png") : '';
//if ($str == "᠌"){
//  sendAttachment($chat_id, "", "attachments/che.png");
//}
if ($str == "!олегстори"){
  vk_msg_send($chat_id, "Олегу не давали покоя соседи алкоголики. Частые сборища их друзей, таких же алкашей, не особо радовали жителей дома. Пьяные дебоши и крики надоели так, что добропорядочные граждане за головы хватались.  Сначала алкашей прогоняли. Бесполезно. Ругали и увещевали. Нулевой эффект. Вызовы милиции тоже приносили только временный результат. Тогда Олег пошел к хозяевам притона и сказал:  - Господа, нужна ваша помощь. Ко мне приехала теща, а я не хочу, чтобы она жила со мной. Не могли бы вы каждый день устраивать шумный скандал. Чем громче будете кричать и ругаться матом, тем лучше.");
  vk_msg_send($chat_id, " А я за это каждый вечер буду приносить вам бутылку водки.  Алкаши рады стараться. Через неделю Олег сказал:  - Тут у меня проблемы с деньгами. Я смогу вам давать только две бутылки в неделю.  «Господа» поворчали и следующую неделю отрабатывали уже без энтузиазма. Через неделю Олег зашел к соседям и пожаловался:  - Вы понимаете, не платят зарплату, поэтому смогу вам за ежедневные скандалы приносить только одну бутылку в две недели.  – Ну, нет, за бутылку в две недели сам дери глотку.  С тех пор вокруг была тишина. Алкаши, даже если и ругались по-настоящему, старались делать это тихо. Чтобы тещу не спугнуть, назло этому жмоту Олегу.");
}
if ($str == "!инфо"){
  vk_msg_send($chat_id, "Вы ввели - " . $arrslcimp);
}
if ($str == "!coinflip"){
  $arrtm = array(
    "Орёл!" => "attachments/coinTail.png",
    "Решка!" => "attachments/coinHead.png"
  );
  $tm = array_rand($arrtm, 1);
  $Hc = "Тебе выпал";
  if ($tm == "Решка!") {
    $Hc .= "а";
  } 
  vk_msg_send($chat_id, "Подбрасываю монетку... ");
  sleep(1);
  sendAttachment($chat_id, $Hc . " - " . $tm, $arrtm[$tm]);
}
if ($str == "!help"){
  sendAttachment($chat_id, "", "attachments/help.png");
}
if ($str == "!clearchat"){
  vk_msg_send($chat_id, "
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ᠌
    ");
}
if ($str == "!baro"){
  vk_msg_send($chat_id, "Число и время прибытия Баро - " . $baro);
}
if ($str == "!arbenem"){
  vk_msg_send($chat_id, "Фракция на активной вылазке - " . $arb);
}
if ($str == "!att"){
  sendAttachment($chat_id, "", "attachments/image.jpg");
}
if ($str == "!неделя"){
  vk_msg_send($chat_id, "Сейчас проходит " . date('W') . "-ая" . " неделя этого года");
}
if ($str == "!дата"){
  vk_msg_send($chat_id, date('l jS \of F Y'));
}
if ($str == "!время"){
  vk_msg_send($chat_id, date('h:i:s A'));
}
if ($str == "!камень" || $str == "!бумага" || $str == "!ножницы"){
  $arr = ["Камень", "Бумага", "Ножницы"];
  $randval = array_rand($arr, 1);
  vk_msg_send($chat_id, $arr[$randval]);
}
if ($str == "!хуямень" || $str == "!хуяга" || $str == "!хуёжницы"){
  $arr = ["(  ͡ ° ͜ ʖ ͡ ° ) Хуямень", "(  ͡ ° ͜ ʖ ͡ ° ) Хуяга", "(  ͡ ° ͜ ʖ ͡ ° ) Хуёжницы"];
  $randval = array_rand($arr, 1);
  vk_msg_send($chat_id, $arr[$randval]);
}
if ($str == "!rng"){
  $x = rand(0, 10000);
  vk_msg_send($chat_id, $x);
}
if ($str == "!rrun"){
  $co = rand(1, 1000);
  $arrn = array(901, 902, 904, 908, 910, 911, 912, 913, 914, 915, 916, 917, 918, 919, 950, 978, 980, 981, 982, 983, 984, 985, 986, 987, 988, 989, 902, 904, 908, 920, 921, 922, 923, 924, 925, 926, 927, 928, 929, 930, 931, 932, 933, 934, 936, 937, 938, 939, 950, 951, 999, 900, 902, 903, 904, 905, 906, 908, 909, 950, 951, 953, 960, 961, 962, 963, 964, 965, 966, 967, 968, 969, 980, 983, 986, 900, 901, 902, 904, 908, 950, 951, 952, 953, 958, 969, 977, 991, 992, 993, 994, 995, 996, 999);
  $op = array_rand($arrn, 1);
  $mi = rand(100, 999);
  $pe = rand(10, 99);
  $en = rand(10, 99);
  vk_msg_send($chat_id, "+7" . " (" . $arrn[$op] . ") " . $mi . "-" . $pe . "-" . $en);
}
if ($str == "отель" || $str == "отель?"){
  vk_msg_send($chat_id, "триваго");
}
if ($message_text == "!с"){
  vk_msg_send($chat_id, "᠌");
}
if ($str == "!марат" ){
  vk_msg_send($chat_id, "Марат - ��");
}
if ($str == "!интеримоадапаредориме"){
  vk_msg_send($chat_id, "Dori me
interimo Adapare Dori me
Ameno Ameno Latire
Latiremo
Dori me
");
  vk_msg_send($chat_id, "Ameno
Omenare imperavi ameno
Dimere Dimere matiro
Matiremo
Ameno");
  vk_msg_send($chat_id, "Omenare imperavi emulari
Ameno
Omenare imperavi emulari");
  vk_msg_send($chat_id, "Ameno
Ameno dore
Ameno dori me
Ameno dori me");
  vk_msg_send($chat_id, "Ameno dom
Dori me reo
Ameno dori me
Ameno dori me
Dori me am");
  vk_msg_send($chat_id, "Ameno
Ameno");
  vk_msg_send($chat_id, "Ameno
Omenare imperavi ameno
Dimere dimere matiro
Matiremo
Ameno");
  vk_msg_send($chat_id, "Ameno
Ameno dore
Ameno dori me
Ameno dori me");
  vk_msg_send($chat_id, "Ameno dom
Dori me reo
Ameno dori me
Ameno dori me
Dori me am");
  vk_msg_send($chat_id, "Ameno
Ameno
Ameno dori me
Ameno dori me
Dori me ...");
  vk_msg_send($chat_id, "Ameno
Ameno dore
Ameno dori me
Ameno dori me");
  vk_msg_send($chat_id, "Ameno dom
Dori me reo
Ameno dori me
Ameno dori me
Ameno
Ameno
Ameno
Ameno dori me
Ameno
Ameno dori me");
  vk_msg_send($chat_id, "Ameno dom
Dori me reo
Ameno
Ameno dori me
Ameno
Ameno dori me");
}
if ($str == "!амено"){
  vk_msg_send($chat_id, "интеримо адапаре дориме");
}
if ($str == "!интеримо"){
  vk_msg_send($chat_id, "адапаре дориме");
}
if ($str == "!адапаре"){
  vk_msg_send($chat_id, "дориме");
}
if ($str == "!латире"){
  vk_msg_send($chat_id, "латиремо дориме");
}
if ($str == "!дориме"){
  vk_msg_send($chat_id, "амено амено латире");
}
if ($str == "благодарю"){
  vk_msg_send($chat_id, "ебать спасибо нахуй");
}
if ($str == "!кто я"){
  vk_msg_send($chat_id, "Я мотылёк летающий, плотоядный");
  vk_msg_send($chat_id, "А ещё я...");
  vk_msg_send($chat_id, "Блять, в своем познании настолько преисполнился, что я как будто бы уже сто триллионов миллиардов лет, блять, проживаю на триллионах и триллионах таких же планет, понимаешь? Как эта Земля. Мне уже этот мир абсолютно понятен, и я здесь ищу только одного, блять: покоя, умиротворения и вот этой гармонии от слияния с бесконечно вечным.");
  vk_msg_send($chat_id, "От созерцания этого великого фрактального подобия и от вот этого вот замечательного всеединства существа бесконечно вечного – куда ни посмотри: хоть в глубь – бесконечно малое, хоть ввысь – бесконечно большое, понимаешь?");
  vk_msg_send($chat_id, "А ты мне опять со своими там это. Иди суетись дальше, твое распределение – это твой путь и твой горизонт познания, ощущения и твоей природы. И он несоизмеримо мелок по сравнению с моим, понимаешь? ");
  vk_msg_send($chat_id, "Я как будто уже глубокий старец бессмертный или там уже почти бессмертный, который на этой планете от её самого зарождения, еще когда только солнце еще только-только сформировалось как звезда и вот это газопылевое облако… после взрыва Солнца, когда оно вспыхнуло, как звезда и начало формировать консерваты-планеты, понимаешь? ");
  vk_msg_send($chat_id, "Я на этой Земле уже как будто пять миллиардов лет, блять, живу и знаю её вдоль и поперек, этот весь мир.");
}
?>
