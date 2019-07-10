<?php



// function ss($n){
	
//   if($n<100||$n>999){
//    return false;

//   }
    
//      $b=floor($n/100);
//      $s=floor($n/10%10);
//      $g=floor($n%10);
    
//      $sum=pow($b,3)+pow($s,3)+pow($g,3);
//      if($sum==$n){
//        return true;
//      } 
//      return false; 
// }
// $aaa=ss(123);
// var_dump($aaa);

//冒泡
// $arr=[25,1,3,5,9,6];
// function mao($arr){
//   $count=count($arr);
//   for($i=0;$i<$count;$i++){
//     for($j=0;$j<$count-1-$i;$j++){
         
//           if($arr[$j]>$arr[$j+1]){
//              $arr=$arr[$j];
//              $arr[$j]=$arr[$j+1];
//              $arr[$j+1]=$arr;
//           }

//     }
//   }
//    return $arr;  
// }
// $mao = mao($arr);
// var_dump($mao);

// function quick($arr){
//    if(count($arr)<=1){
//     return $arr;
//    } 
//  $base=$arr[0];
//  $min=[];
//  $max=[];
//  for($i=1;$i<count($arr);$i++){
//     if($arr[$i]<=$base){
//     $min[]=$arr[$i];
//     }else{
//     $max[]=$arr[$i];
//     }
//  }
//   $left=quick($min);
//   $right=quick($max);
//   return array_merge($left,[$base],$right);

// }
//   $quick=quick($arr);
//   var_dump($quick);
 // function yanghui($n){
 // 	$arr=[];
 //     for($i=1;$i<=$n;$i++){
 //        for($j=1;$j<=$i;$j++){
 //           if($j==1||$j==$i){
 //          echo $arr[$i][$j]=1;
 //           }else{
 //          echo $arr[$i][$j]=$arr[$i-1][$j-1]+$arr[$i-1][$j];
 //           }
 //          echo " ";
 //        }
 //       echo "<br>";
 //     }  
 // }
 // $yanghui=yanghui(5);
 // print_r($yanghui);
function yanghui($n){
  for($i=1;$i<=$n;$i++){
    for($j=1;$j<=$i;$j++){
       if($j==1||$j==$i){
        echo $arr[$i][$j]=1;
       }else{
       	echo $arr[$i][$j]=$arr[$i-1][$j-1]+$arr[$i-1][$j];
       }
       echo " ";
    }
   echo "<br>";
  }
}
print_r(yanghui(5));