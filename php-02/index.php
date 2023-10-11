<?php
//ESERCIZIO PASSWORD 


// function checkLenght($pass){
//     if (strlen($pass)>= 8) {
//         return true;
//     }
//         return false;  
//     }

//     function checkNumber($pass){
//         for ($i=0; $i < strlen($pass) ; $i++) { 
//             if (is_numeric($pass[$i])) {
//             return true;        
//             }
//         }
//         return false;
//     }

// function checkUpper($pass){
//     for($i = 0; $i < strlen($pass); $i++){
//         if (ctype_upper($pass[$i])) {
//             return true;
//         }
//     }
//     return false;
// }

// function checkSpecial($pass){
//     $specialChars = ["!", '@', '$', '%', '_', '+'];

//     for($i = 0; $i < strlen($pass); $i++){
//         if(in_array($pass[$i], $specialChars)){
//             return true;
//         }
//     }
//     return false;
// }

// function checkPassword(){
//     $password = readline('Inserisci password : ');
//     $firstRule = checkLenght($password);
//     $secondRule = checkNumber($password);
//     $thirdRule = checkUpper($password);
//     $fourthRule = checkSpecial($password);
//     if ($firstRule && $secondRule && $thirdRule && $fourthRule) {
//         echo 'Password inserita corettamente' . "\n";
//         return true;
//     }else {
//         echo 'Password sbagliata' . "\n";
//         return false;
//     }
// }
// $counter = 1;
// $verificaPassword = false;
// do {
//     echo "Tentativo $counter di 5" . "\n";
//     $verificaPassword = checkPassword();
//     $counter++;
// } while($verificaPassword == false && $counter <= 5 ); -->


// ESERCIZIO 2 

function media(...$numbers){
    $somma = array_reduce($numbers, function($acc, $n){
        $acc += $n;
        return $acc;
    });
    return $somma / count($numbers);
};


echo media(3, 3, 3);


