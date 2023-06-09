<?php

$cards = file_get_contents("cards.json");

header("Content-Type: application/json");
echo $cards;
