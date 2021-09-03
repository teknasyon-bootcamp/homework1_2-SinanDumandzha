<?php

$gender = "male"; // cinsiyet (male/female)
$weight = 55; // kilo (kg)
$height = 170; // boy (cm)
$age = 25; // yaş (sene)

$guess = "1470"; // Tahmin edilen değer

if ($gender == "male") {
    $result = 88.362 + (13.397 * $weight) + (4.799 * $height) - (5.677 * $age); // erkek için BMR sonucu
    echo "BMR: $result\n";

    if ($guess > $result) { // tahmin ve BMR değerinin karşılaştırması
        echo "Tahmin değerinden düşük";
    } elseif ($guess < $result) {
        echo "Tahmin değerinden büyük";
    } else {
        echo "Tahmin değerine eşit";
    }
}

if ($gender == "female") { // tahmin ve BMR değerinin karşılaştırması
    $result = 447.593 + (9.247 * $weight) + (3.098 * $height) - (4.330 * $age); // kadın için BMR sonucu
    echo "BMR: $result\n";

    if ($guess > $result) {
        echo "Tahmin değerinden düşük";
    } elseif ($guess < $result) {
        echo "Tahmin değerinden büyük";
    } else {
        echo "Tahmin değerine eşit";
    }
}