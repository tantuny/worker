<?
  header('Content-type: text/html; charset=utf-8');
  
  function F($n){
    if ($n > 2)
      return F($n-1) + G($n-2);
    else return 1;
  }
  
  function  G($n){
    if ($n > 2)
      return G($n-1) + F($n-2);
    else return 1;
  }
  
  echo F(7);
  
  // F(7) = F(6)+G(5)= 8 + (3 + 2) = 13
  // F(6) = F(5)+G(4)= 5+(2+1)= 8
  // F(5) = F(4)+G(3)= 3+(1+1) = 5
  // F(4) = F(3)+G(2)= 2+1=3
  // F(3) = F(2)+G(1)= 1+1=2
  
  // F(9) = F(7)+F(4.5) = 8.75+(2.5+2.25) = 13.5
  // F(7) = F(5)+F(3.5) = 5.5+(1.5+1.75) = 8.75
  // F(5) = F(3)+F(2.5) = 3+2.5 = 5.5
  // F(3) = 3
  
 /* function F($n){
    if ($n > 2)
      return F($n-1) + F($n-2);
    else 
      return 1;
  }
  
  echo F(5);*/
  
  // F(5) = F(4)+F(3) = 3+2 = 5
  // F(4) = F(3)+F(2) = 2+1 = 3
  // F(3) = F(2)+F(1) = 1+1 = 2
  // F(2) = 1
  // F(1) = 1
  
  
  /*getChange(27);
  
  function getChange($num){ // 27
    if($num>=10){
      echo "10<hr>";
      getChange($num-10);
    }else if($num>=5){
      echo "5<hr>";
      getChange($num-5);
    }else if($num>=2){
      echo "2<hr>";
      getChange($num-2);
    }else if($num>=1){
      echo "1<hr>";
      getChange($num-1);
    }
  }*/
  
  
  
  
  
  // Написать функцию которая возвращает минимальное из двух чисел.
  /*function getMin($a, $b){
    if($a<$b){
      return $a;
    }else{
      return $b;
    }
  }
  
  //$d = getMin(6,8);
  echo getMin(6,8);
  
  function f($x){ // Функция
    return $x*$x;
  }
  
  function sayHi(){ // Процедура
    echo "Hello world";
  }*/
  
  
  