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
 * Task 2
 *
 * Sorting an array (implementing bubbe sort)
 *
 * @param $a is an array in the following format array(1,2,3,4,5,6,0), containing numbers
 * @note this was the fastest solution other than using built in sorting functionality
 */
function Task2( $a ){
	function swap( &$arr, $a, $b) {
		$tmp     = $arr[$a];
		$arr[$a] = $arr[$b];
		$arr[$b] = $tmp;
	}
	
	$size = count($a);
	for ( $i = 0; $i < $size; $i++ ) {
		for ( $j = 0; $j < $size - 1 - $i; $j++ ) {
			if ( $a[$j+1] < $a[$j] ) {
				swap( $a, $j, $j+1 );
			}
		}
	}
	return $a;
}

/**
 * Task 3
 *
 * String comparison
 */
function Task3( $s1, $s2 ){
	$ret = '';
	foreach ( str_split($s1) as $k => $l){
		# $s1 is longer than $s2
		if ( !isset( $s2[$k]) ){
			$ret = 'First difference between two strings at position '. $k .': Second string has no character at position!';
			break;
		}
		
		# standard character mismatch
		if ( $l !== $s2[$k] ) {
			$ret = 'First difference between two strings at position '. $k .': "'.$l.'" vs "'.$s2[$k].'"';
			break;
		}
	}
	
	# s2 is longer than s1 and no mismatch so far
	if ( strlen ($s2) > strlen ($s1) &&
	   	 $ret == ''
	   ){
		$ret = 'First difference between two strings at position '. strlen ($s1) .': Firat string has no character at position!';
	}
	
	# no difference
	if ( $ret == ''){
		$ret = 'No difference between the two strings';
	}
	
	return $ret;
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