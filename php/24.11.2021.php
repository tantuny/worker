<?
  header('Content-type: text/html; charset=utf-8');
  
  
  $users = [
    ["name"=>"Ivan","age"=>43], 
    ["name"=>"Alex","age"=>34]
  ];
  
  /*$i=0;
  while($i<2){
    $users[$i];
    $i++;
  }
  echo $i;*/
  
  for($i=0; $i<2; $i++){
    $str = "Hello";
    echo $users[$i];
  }
  echo $str;
  echo $i;
  
  /*
  
  foreach($users as $user){
    echo $user["name"]." - ".$user["age"]."<br>";
  }*/
  
  
  
  /*$cars = ["bmw","kia","audi"];
  
  $cars[] = "vaz";
  
  
  foreach($cars as $car){
    echo $car."<br>";
  }*/
  /*
    1) КККК
    2) КККЛ
    3) КККМ
    4) КККН
    5) КККП
    6) ККЛК
    7) ККЛЛ
    8) ...
    Выяснить на какой позиции находится слово MLKP
  */
  
  
  /*$str = "KLMNP";
  $count = 1;
  $pos;
  for($i=0; $i<strlen($str); $i++){
    for($j=0; $j<strlen($str); $j++){
      for($k=0; $k<strlen($str); $k++){
        for($a=0; $a<strlen($str); $a++){
          $word = $str[$i].$str[$j].$str[$k].$str[$a];
          if($word == "MLKP"){
            $pos = $count;
          }
          echo $count.") ".$word."<br>";
          $count++;
        }
      }
    }
  }
  echo "Искомая строка MLKP находится на ".$pos;*/
  
  /*$nums = [-4,-654,-233,-5,-31,-256];
  $max = -INF;
  
  for($i=1; $i<count($nums); $i++){
    if($max<$nums[$i] and $nums[$i]%2!=0){
      $max = $nums[$i];
    }
  }
  
  echo $max;*/

  /*$marks = [5,5,4,3,4,4,5,5,5]; // count - 9
  $count = count($marks);
  $summ = 0;
  for($i=0; $i<$count; $i++){
    $summ = $summ + $marks[$i];
  }
  echo round($summ/$count, 2);*/

  
  /*$cars = ["bmw","kia","audi"];
  
  for($i=0; $i<5; $i++){
    echo $cars[$i]."<br>";
  }*/
  
  
  /*$i=5;
  do{
    echo "Hello world<br>";
  }while($i<3);*/
  
  
  /*while($i<3){
    echo "Hello world<br>";
  }*/
  
?>