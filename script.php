<?php

$cards = [
    [
        "img"       => "",
        "title"     => "New Jersey",
        "author"    => "Bon Jovi",
        "year"      => "1988",
    ],
    [
        "img"       => "",
        "title"     => "Live at Wembley 86",
        "author"    => "Queen",
        "year"      => "1992",
    ],
    [
        "img"       => "",
        "title"     => "Ten's Summoner's Tales",
        "author"    => "Sting",
        "year"      => "1993",
    ],
    [
        "img"       => "",
        "title"     => "Steve Gadd band",
        "author"    => "Steve Gadd Band",
        "year"      => "2018",
    ],
    [
        "img"       => "",
        "title"     => "Brave new World",
        "author"    => "Iron Maiden",
        "year"      => "2000",
    ],
    [
        "img"       => "",
        "title"     => "One more car, one more rider",
        "author"    => "Eric Clapton",
        "year"      => "2002",
    ],
];

header("Content-Type: application/json");
echo json_encode($cards);
