<?php
/**
 * amadeus-ws-client
 *
 * Copyright 2015 Amadeus Benelux NV
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package Amadeus
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\Struct\Profile\Create;

use Amadeus\Client\LoadParamsFromArray;
use stdClass;

class CompanyInfo extends LoadParamsFromArray
{

  public $CompanyName;

  public $AddressInfo = [];

  public $TelephoneInfo = [];

  public $PaymentForm = [];

  //public $OtherCompanyName;

  // public $telephone = [];

  public function __construct($options)
  {
    // dd($options);

    parent::__construct($options);

    $this->CompanyName = $options->CompanyName;

    //$this->loadAddressInfo($options);

    //$this->loadTelephoneInfo();

    $this->loadPaymentForm($options);
  }


  /* public function loadAddressInfo($options)
  {
    /* if (!empty($options->AddressInfo)) {
      dd($options->AddressInfo);
      $this->AddressInfo[] = new Address($options->AddressInfo);
    } */

    /* $address = new stdClass;
    $address->AddressLine = '123 West Main Street';
    $address->CityName = 'Bloomington';
    $address->PostalCode = '47401';
    $address->StateProv = new stdClass;
    $address->StateProv->_ = 'IN';
    $address->FormattedInd = true;
    $address->TransferIndicator = 'A';
    $address->UseType = '3';
    $address->CompanyName = new stdClass;
    $address->CompanyName->_ = 'TestCo';

    $this->AddressInfo[] = $address;
  } */



  /* public function loadTelephoneInfo()
  {
    $phone = new stdClass;
    $phone->PhoneLocationType = 8;
    $phone->PhoneTechType = 1;
    $phone->PhoneNumber = '111-222-333';
    $phone->TransferIndicator = 'A';

    $this->TelephoneInfo[] = $phone; 
  } */


  public function loadPaymentForm($options)
  {
    foreach ($options->PaymentMethod as $paymentMethod) {
      $paymentForm = new stdClass;
      $paymentForm->PaymentCard = new stdClass;
      $paymentForm->TransferIndicator = 'S';

      // v1 - combine into a single string
      $parts = [
        'start' => 'CC',
        'brand' => $paymentMethod->brand,
        'cardNumber' => $paymentMethod->cardNumber,
        'slash' => '/',
        'expMonth' => str_pad($paymentMethod->expirationMonth, 2, '0', STR_PAD_LEFT),
        'expYear' => substr($paymentMethod->expirationYear, -2, 2)
      ];
      $paymentForm->PaymentCard->Text = implode('', $parts); //'CCVI4141424243434444/1226';

      //dd($paymentForm);
      // $paymentForm->PaymentCard->CardType = '1';
      // $paymentForm->PaymentCard->FormattedInd = false;

      // v2, individual parts
      /* $paymentForm->PaymentCard->FormattedInd = true;
      $paymentForm->PaymentCard->CardType = '1';
      $paymentForm->PaymentCard->CardCode = 'VI';
      $paymentForm->PaymentCard->CardNumber = '4141424243434444';
      $paymentForm->PaymentCard->ExpireDate = '1226'; */
      


      $this->PaymentForm[] = $paymentForm;
    }    
  }

}
