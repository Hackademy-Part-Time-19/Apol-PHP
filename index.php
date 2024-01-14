<?php 

// Tracia 1
$Integer = 2;
$Float = 2.3;
$String = "caldsdscio";
$Boolean = true;


// Tracia 2
$text1 = "Marco"; 
$text2 = "hai"; 
$text3 = "sete"; 
$text4 = "?"; 
$text5 = "Perchè";  
$text7 = 'bevuto'; 
$text8 = "tutto.";
echo $text1 . " " . $text2 . " ". $text3 . " " . $text4 . " " . $text5 . " " . $text2 . " " . $text7 . " " . $text8;


// Tracia 3
$words1 = [ 'una', 67 , 'vita', 'colle','mi', 'rosso', [ 'oscura', 'era', 89 => 'di', [ 'mezzo',[ 'cammin', 'Nel', [ 'selva', 'la', [ 'via', 'una', true, ] ], ] ], 'ritrovai', 'per' ], 'diritta' ];
$words2 = [ 'elemento2' => 'nostra', 'elemento3' => ['Virgilio','smarrita','ché']];
echo $words1[6][90][1][1] . " " . $words1[6][90][0] . " " . $words1[6][89] . " " . $words2['elemento2'] . " " . $words1[2]  . " " . $words1[4]  . " " . $words1[6][91] . " " . $words1[6][92] . " " . $words1[0] . " " . $words1[6][90][1][2][0] . " " . $words1[6][0] . "," . $words2['elemento3'][2] . "' " . $words1[6][90][1][2][1] . " " . $words1[7] . " " . $words1[6][90][1][2][2][0] . " " . $words1[6][1] . " " . $words2['elemento3'][1] . "." ; 


// Tracia 4
$x=1;
$w=2;
$y=3;
$z=4;
$x <= $w; 
var_dump($x <= $w);
$y == $z; 
var_dump($y == $z);
$y === $z; 
var_dump($y === $z);
$y !== $z;
var_dump($y !== $z);
$y != $z;
var_dump($y != $z);


// Tracia extra 
$corsoHackademy=['Sono','Lui e','docenti' => ['Mattia','Daniele','Andrea'],'studiando', 'studenti' => ['Keri','Samuele','Luca'],'con', 'argomenti' => ['JS','PHP','CSS'], 'e sto','e sta'];
echo $corsoHackademy[0] . " " . $corsoHackademy['studenti'][0] . " " . $corsoHackademy[4] . " " . $corsoHackademy[2] . " " . $corsoHackademy['argomenti'][2] . " " . $corsoHackademy[3] . " " . $corsoHackademy['docenti'][2] . "\n" ;
echo $corsoHackademy[1] . " " . $corsoHackademy['studenti'][2] . " " . $corsoHackademy[5] . " " . $corsoHackademy[2] . " " . $corsoHackademy['argomenti'][0] . " " . $corsoHackademy[3] . " " . $corsoHackademy['docenti'][0] . "\n" ;
echo $corsoHackademy[1] . " " . $corsoHackademy['studenti'][1] . " " . $corsoHackademy[5] . " " . $corsoHackademy[2] . " " . $corsoHackademy['argomenti'][1] . " " . $corsoHackademy[3] . " " . $corsoHackademy['docenti'][1] ;
