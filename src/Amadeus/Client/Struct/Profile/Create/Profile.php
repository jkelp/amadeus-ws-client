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

use stdClass;
use Amadeus\Client\Struct\Profile\Create\Comment;
use Amadeus\Client\Struct\Profile\Create\Comments;
use Amadeus\Client\RequestOptions\ProfileCreateProfileOptions;

class Profile
{

  /**
   * @var ProfileType
   */
  public $ProfileType;

  /**
  * @var Status
  */
  public $Status = 'A';

  /**
  * @var Customer
  */
  public $Customer;

  /**
  * @var CompanyInfo
  */
  public $CompanyInfo;


  public $Comments;


  public $PrefCollections;

  public function __construct($options)
  {
    $this->loadCustomer($options);

    $this->loadCompanyInfo($options);

    $this->loadPrefCollections($options);

    $this->loadComments($options);

    // dd($this);
  }


  public function loadCustomer($options)
  {
    if ($options->Customer) {
      $this->Customer = new Customer($options->Customer);
      $this->ProfileType = 1;
    }

  }


  public function loadCompanyInfo($options)
  {
    if ($options->CompanyInfo) {
      $this->CompanyInfo = new CompanyInfo($options->CompanyInfo);
      $this->ProfileType = 3;
    }

  }


  public function loadPrefCollections($options)
  {
      if ($options->Preferences) {
        $this->PrefCollections = new PrefCollections($options->Preferences);
      }
  }


  public function loadComments($options)
  {
    if (!$options->Comments) return;
    
    $this->Comments = new Comments;

    foreach ($options->Comments as $comment) {
      $this->Comments->Comment[] = new Comment([
        'Name' => $comment->name,
        'Category' => $comment->category,
        'TransferIndicator' => $comment->transferIndicator,
        'Text' => $comment->value
      ]);
    }
  }

}
