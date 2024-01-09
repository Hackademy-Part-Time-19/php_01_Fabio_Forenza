<?php
$words1 = [ 'una', 67, 'vita', 'colle', 'mi', 'rosso', [ 'oscura', 'era', 89, [ 'mezzo', [ 'cammin', 'Nel', [ 'selva', 'la', [ 'via', 'una', true, ] ], ] ], 'ritrovai', 'per' ], 'diritta' ]; 
$words2 = [ 'elemento1' => 25.89, 'elemento2' => 'nostra', 'elemento3' => [ 'Virgilio', 'smarrita', 'ché' ] ];
$mancante = ['di', ' ' ];
//print_r ($words1);
//print_r($words2);
$result = $words1[6][3][1][1] .$mancante[1] .$words1[6][3][0] .$mancante[1] .$mancante[0].$mancante[1] 
.$words1[6][3][1][0].$mancante[1].$mancante[0] .$mancante[1].$words2['elemento2'].$mancante[1]
.$words1[2] .$mancante[1] .$words1[4] .$mancante[1] .$words1[6][4] .$mancante[1] .$words1[6][5]
.$mancante[1] .$words1[6][3][1][2][2][1].$mancante[1] .$words1[6][3][1][2][0].$mancante[1] .$words1[6][0] . "," .$mancante[1] 
.$words2['elemento3'][2] .$mancante[1] .$words1[6][3][1][2][1]
.$mancante[1] .$words1[7].$mancante[1] .$words1[6][3][1][2][2][0].$mancante[1] .$words1[6][1].$mancante[1] .$words2['elemento3'][1];

//Nel mezzo di cammin di nostra vita mi ritrovai per una selva oscura, che' la diritta via era smarrita
echo $result;