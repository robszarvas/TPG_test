<?pHp

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