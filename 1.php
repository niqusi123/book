<?php
function fei($n){
	if($n==1) return 1;
  	if($n==2) return 2;

  	return  fei($n-1)+fei($n-2);
}
var_dump(fei(5));
