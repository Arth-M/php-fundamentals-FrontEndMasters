<?php
// define('__ROOT__', dirname(__FILE__, 2));
// echo __ROOT__.'/urls.php';
// include_once(__ROOT__.'/urls.php');

require_once(__DIR__.'/../urls.php');



class AnotherConverter {

}

interface CanConvert {
  public function convert (float $value): float;
}

class CryptoConverter extends AnotherConverter { //here CryptoConverter inherits
// public and protected properties and methods from its parent AnotherConverter, which can be used using
// parent keyword, following java rules

   //properties

   //properties & methods can be public (everyone can see it), private (only for this class) or protected (private
   // for the outside, but available for my class and subclasses/classes inheriting this class
   // properties and methods) : default is public
   //property can be typed

  //  public string $currencyCode;
  //  public function __construct(string $currencyCode) {
  //   $this->currencyCode = $currencyCode;
  //  }

   //the three lines above can be replaced by this : here i assigned the value that will be passed to
  //  my class CryptoConverter to the variable currencyCode
   public function __construct(public string $currencyCode) {
   }


   //methods

   public function convert(float $value = 1): float|bool { //return float or boolean (in the case $json does not exist)
    // the syntax is availability function methodName(parameters typed or not, with a default value or not/here default =1,
    // in case no value is passed as parameter): outputType { instructions }
    // output type is optionnal
    $code = $this->currencyCode;
    // echo $this->currencyCode;
    $api = "https://cex.io/api/ticker/$code/USD";
    $json = file_get_contents($api);
    if ($json) {
    $change_values = json_decode($json);
    // var_dump($change_values);
    $last = $change_values->last;
    return $value * $last;
    } else {
      return false;
      //you can also throw an exception int his case
    }
  }

}

// to call a new instance of this class :
// $current = new CryptoConverter("BTC")
// $current = new CryptoConverter(currencyCode: "BTC")
