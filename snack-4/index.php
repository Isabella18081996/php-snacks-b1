<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 4</title>
</head>
<body>
  <!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

  <?php
  
  function getArrNumRandom($min, $max, $limit){
    
    $newArr =[];
    
    while(count($newArr) < $limit){
      
      $number = rand($min, $max);
      
      if(!in_array($number, $newArr)){
        $newArr[] = $number;
      };
    };
    
    return $newArr;
  };

  
  var_dump(getArrNumRandom(1,100,15));
  ?>
</body>
</html>