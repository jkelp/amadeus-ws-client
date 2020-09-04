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


  public function __construct($params)
  {
    $this->PersonName = new PersonName($params->PersonName);

    $this->Gender = $params->Gender;

    $this->loadRelatedCompany($params);

    $this->loadTelephones($params);

    $this->loadEmails($params);

    $this->loadAddresses($params);

    $this->loadEmployeeInfo($params);
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

}
