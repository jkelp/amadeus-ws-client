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

use Amadeus\Client\RequestOptions\Profile\EmployeeInfo;
use Amadeus\Client\RequestOptions\Profile\PaymentMethod;

class Customer extends LoadParamsFromArray
{

  /**
  * @var PersonName
  */
  public $PersonName;

  public $Telephone = [];

  public $Email = [];

  public $Address = [];

  public $RelatedCompany;

  public $EmployeeInfo;

  public $Gender;

  public $BirthDate;

  public $ExternalCustLoyalty = [];

  public $PaymentForm = [];

  public $Document = [];

  public function __construct($params)
  {
    $this->PersonName = new PersonName($params->PersonName);

    $this->Gender = $params->Gender;

    $this->BirthDate = $params->BirthDate;

    $this->loadRelatedCompany($params);

    $this->loadTelephones($params);

    $this->loadEmails($params);

    $this->loadAddresses($params);

    $this->loadEmployeeInfo($params);

    $this->loadExternalCustLoyalty($params);

    $this->loadPaymentForm($params);

    $this->loadDocument($params);
  }


  public function loadRelatedCompany($params)
  {
    if ($params->RelatedCompany) {
      $this->RelatedCompany = $params->RelatedCompany;
    }
  }


  public function loadTelephones($params)
  {
    if ($params->Telephone) {
      foreach ($params->Telephone as $telephone) {
        $this->Telephone[] = new Telephone($telephone);
      }

    }
  }


  public function loadEmails($params)
  {
    if ($params->Email) {
      foreach ($params->Email as $email) {
        $this->Email[] = new Email($email);
      }
    }
  }


  public function loadAddresses($params)
  {
    if ($params->Address) {
      foreach ($params->Address as $address) {
        $this->Address[] = new Address($address);
      }

    }
  }


  public function loadEmployeeInfo($params)
  {
    if ($params->EmployeeInfo) {
      $this->EmployeeInfo = new EmployeeInfo($params->EmployeeInfo);
    }
  }


  public function loadExternalCustLoyalty($params)
  {
    if ($params->ExternalCustLoyalty) {
      foreach ($params->ExternalCustLoyalty as $custLoyalty) {
        $this->ExternalCustLoyalty[] = new ExternalCustLoyalty($custLoyalty);
      }
    }
  }

  public function loadDocument($params)
  {
    if ($params->Document) {
      foreach ($params->Document as $doc) {
        $this->Document[] = new Document($doc);
      }
    }
  }


  public function loadPaymentForm($params)
  {
    if ($params->PaymentMethod) {
      foreach ($params->PaymentMethod as $paymentMethod) {

        $parts = [
          'start' => 'CC',
          'brand' => $paymentMethod->brand,
          'cardNumber' => $paymentMethod->cardNumber,
          'slash' => '/',
          'expMonth' => str_pad($paymentMethod->expirationMonth, 2, '0', STR_PAD_LEFT),
          'expYear' => substr($paymentMethod->expirationYear, -2, 2)
        ];
        $text = implode('', $parts); //'CCVI4141424243434444/1226';

        $this->PaymentForm[] = new PaymentForm([
          'TransferIndicator' => $paymentMethod->transferIndicator,
          'PaymentTransactionTypeCode' => $paymentMethod->paymentTransactionTypeCode,
          'PaymentTypeCode' => $paymentMethod->paymentTypeCode,
          'RPH' => $paymentMethod->rph,
          'PaymentCard' => new PaymentCard([
            'FormattedInd' => false,
            'Text' => $text
          ])
        ]);
      }
    }
  }

  

}
