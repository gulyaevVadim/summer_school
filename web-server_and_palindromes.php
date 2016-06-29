<!DOCTYPE html>
<html>
  <body>
    <p>
      <?php
      
     // $curl = curl_init('http://127.0.0.1:8000/palindromes.php'); 
	
      //$post = curl_exec($curl);
      $inputArrray =  ["hello", "racecar", "Level", "lol", "xsolla",222,5965,787,7887,78587];
      $outputArrray = [];
      
      for($i = 0; $i < count($inputArrray);$i++)
      {
          if(strtoupper($inputArrray[$i]) == strtoupper(strrev($inputArrray[$i])))
          {
              array_push ($outputArrray, $inputArrray[$i]);
          }
      }
      $result = json_encode($outputArrray);
      print $result;
        ?>
      </p>
  </body>
</html>


