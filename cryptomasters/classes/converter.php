<?php

class AnotherConverter {

}

class CryptoConverter extends AnotherConverter { //here CryptoConverter inherits
// public and protected properties and methods from its parent AnotherConverter, which can be used using
// parent keyword

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

   public function convert(float $value): float {
    // the syntax is availability function methodName(parameters typed or not): outputType { instructions }
    // output type is optionnal


  }

}

// to call a new instance of this class :
// $current = new CryptoConverter("BTC")
// $current = new CryptoConverter(currencyCode: "BTC")
