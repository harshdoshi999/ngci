<?php 

/**
  |
  | Function for debugging
  | @Args   :-  1) `var` variable (could be String, Number, Array or Object)
  |             2) `true` or `false` (if true then it will exit) (by default its true)
  | @Returns:- Printed Variable
  |
 */
function pr($var, $bool = true) {
    if (is_array($var) || is_object($var)) {
        echo "<pre>";
        print_r($var);
    } else {
        echo $var;
    }
    if ($bool == true) {
        exit;
    }
}


// Function to convert NTP string to an array
function NVPToArray($NVPString)
{
  $proArray = array();
  while(strlen($NVPString))
  {
    // name
    $keypos= strpos($NVPString,'=');
    $keyval = substr($NVPString,0,$keypos);
    // value
    $valuepos = strpos($NVPString,'&') ? strpos($NVPString,'&'): strlen($NVPString);
    $valval = substr($NVPString,$keypos+1,$valuepos-$keypos-1);
    // decoding the respose
    $proArray[$keyval] = urldecode($valval);
    $NVPString = substr($NVPString,$valuepos+1,strlen($NVPString));
  }
  return $proArray;
}

/**
| 
| Password Encrypt | Decrypt function :: 29/05/2014 10:54 AM
|
*/

function encry($key, $string, $action = 'encrypt'){
        $res = '';
        if($action !== 'encrypt'){
            $string = base64_decode($string);
        } 
        for( $i = 0; $i < strlen($string); $i++){
                $c = ord(substr($string, $i));
                if($action == 'encrypt'){
                    $c += ord(substr($key, (($i + 1) % strlen($key))));
                    $res .= chr($c & 0xFF);
                }else{
                    $c -= ord(substr($key, (($i + 1) % strlen($key))));
                    $res .= chr(abs($c) & 0xFF);
                }
        }
        if($action == 'encrypt'){
            $res = base64_encode($res);
        } 
        return $res;
}

/** Function for date diff */
// @$date = in format of 'Y-m-d'
function daysDiffFromNow($date) {

  $now = time(); // or your date as well

  /** From date */
  
  $your_date = strtotime($date);
  
  /** Calculate diff in time */
  $datediff = $now - $your_date;

  /** Convert time to days */
  return floor($datediff/(60*60*24));
}
?>