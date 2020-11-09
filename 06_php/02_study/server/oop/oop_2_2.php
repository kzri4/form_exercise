<?php

$bob = [
    'name' => 'bob',
    'age' => 20,
];

$tom = [
    'name' => 'tom',
    'age' => 21,
];

$ken = [
    'name' => 'ken',
    'age' => 22,
];

function selfIntroduction($human)
{
    echo '私の名前は' . $human['name'] . 'です。今年で' . $human['age'] . '歳になります<br>';
}

selfIntroduction($bob);
selfIntroduction($tom);
selfIntroduction($ken);
