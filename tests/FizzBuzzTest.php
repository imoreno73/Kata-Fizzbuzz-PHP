<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase {
    
  public function test_example() {

		for($i = 1; $i <= 100; $i++){ 
    	
      if($i % 3 == 0 && $i % 5 == 0) { echo $i." FizzBuzz "; }

      elseif($i % 3 == 0) { echo $i." Fizz "; }

      elseif($i % 5 == 0) { echo $i." Buzz "; }
            
      else{ echo $i." no cumple "; } 
    }
    

  }

  public function test_example2() {
  
  $a=3;
  $b=5;
    

  for($i = 1; $i <= 100; $i++){ 
    
    if($i % 3 == 0 && is_numeric($a)) { echo $i." Fizz "; }

    elseif($i % 5 == 0 && is_numeric($b)) { echo $i." Buzz "; }          
          
    else{ echo $i." no cumple "; } 
  }
  

  }
}

