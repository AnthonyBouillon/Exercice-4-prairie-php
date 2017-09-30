<?php
for($i=1; $i<101; $i=$i+1){

  if($i % 3 == 0 and $i % 5 == 0){
  echo "FizzBuzz ";


  }

  elseif($i % 5 == 0){
      echo "Buzz ";
    }

  elseif($i % 3 == 0){
    echo "Fizz ";

  }

  else{
    echo $i ." ";
  }
}
