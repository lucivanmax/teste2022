 
   foreach (range(-10.000, 10.000) as $n) {
   if ( ($n==0 || $n > 0) && ($n==0 || $n<10)) //|| $n < 10
   {
      $recebe = $n;
      print_r($recebe.", "); // $recebe;
      
   }
      
       }







$haystack = 'ababcd';
$needle   = 'p';

$pos      = strripos($haystack, $needle);

if ($pos === false) {
    echo "Sinto muito, nós não encontramos ($needle) em ($haystack)";
} else {
    echo "Parabéns!\n";
    echo "Nós encontramos a última ($needle) em ($haystack) na posição ($pos)";
}




$findme    = 'a';
$mystring1 = 'xyz';
$mystring2 = 'aabbb';

$pos1 = stripos($mystring1, $findme);
$pos2 = stripos($mystring2, $findme);

// 'a' certamente não esta em 'xyz'
if ($pos1 !== false) {
    echo "A string '$findme' não foi encontrada na string '$mystring1'";

    // echo "W will output: " . strpbrk("Hello world!","W");
}

// Note o nosso uso de  ===. Simples == não funcionaria como o esperado
// porque a posição de 'a' é 0 (primeiro) caractere.
if ($pos2 !== false) {
    echo "Nós encontramos '$findme' em '$mystring2' na posição $pos2";
}




$text2 = 'aabbb';
echo substr_count($text2, 'aabbb');
