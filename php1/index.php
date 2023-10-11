 <?php
// $people= [
//  ['name' => 'Pippo', 'surname' => 'Pluto', 'gender' => 'M'],
//  ['name' => 'Roberto', 'surname' => 'Bianchi', 'gender' => 'M'],
// ['name' => 'Claudia', 'surname' => 'Rossi', 'gender' => 'F'],
//   ['name' => 'Michela', 'surname' => 'Esposito', 'gender' => 'F'],
//   ['name' => 'Michela', 'surname' => 'Ricci', 'gender' => ''],
  
// ];

//     foreach ($people as $persona){
//         if ($persona['gender']== 'M') {
//             echo "Buongiorno signor.". " " . $persona['name'] . $persona['surname']. "\n";
//         }else if ($persona['gender']=='F'){
//             echo "Buongiorno signora"." " .$persona['name']. " ". $persona['surname']. "\n";
//         }else{
//             echo "Buongiorno". " ". $persona['name']. " ". $persona ['surname']. "\n"; 
//         }
   
// };  
 
$totale = 0;
$numeri = [8, 5, 3 , 2, 1, 4, 6];
foreach ($numeri as $number) {
    if ($number % 2 == 0) {
        $totale += $number;
        var_dump($totale);   
    }
}    
  $media = $totale / count($numeri);
  var_dump($media);