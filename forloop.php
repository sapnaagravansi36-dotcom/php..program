<?php
  //for($row=1; $row<=4; $row++){
  //$ch="A";
     
     // for($col=1 ; $col<=4; $col++){
      //echo $ch;
     // $ch++;
// }
      // echo "<br>";
   // }
// for($row=1; $row<=4; $row++){
     // for ($col=1; $col<=$row; $col++){
      // if(($row+$col)%2==0){
      //  echo"1";}
       // else{
        //  echo"0";
       // }
      //} echo "<br>";
   // }
        for($row=0; $row<4; $row++){
          for($col=0; $col<$row; $col++){
            echo "&nbsp";
          }

            for($i=0; $i<(4-$row); $i++){
              echo ($row+1);
            }
            echo "<br>";
          }

           
      
           
                                               

    
      
   ?>