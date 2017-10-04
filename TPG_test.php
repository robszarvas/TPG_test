<?pHp

/**
 * Task 1
 *
 * Printing asterixes
 *
 * @note using '<br/>' as linebreak because I assume the output goes to a browser, other breakers might be necessary if this is not the case, maybe as input parameters
 */
function Task1(){
	for ( $i = 1; $i <= 10; $i++ ){
		if ( $i <= 5){
			$k = $i;
		}else{
			$k = 10 - $i + 1;
		}
		for ( $j = 1; $j <= $k; $j++ ){
			print "*";
		}
		
		print "<br/>";
	}
}

/**
 * Task 4
 *
 * Converting arabic numbers to roman numerals
 */
function Task4( $num ) {  
  $ret     = '';
  $decimal = array( 1000, 900, 500, 400, 100, 90, 50, 40, 10, 9, 5, 4, 1 );
  $roman   = array( "M", "CM","D","CD","C", "XC", "L", "XL", "X","IX","V","IV","I" );
  for ( $i = 0; $i < count($decimal); $i++) {
    while ( $num % $decimal[$i] < $num ) {     
      $ret .= $roman[$i];
      $num  = $num - $decimal[$i];
    }
  }
  return $ret;
}