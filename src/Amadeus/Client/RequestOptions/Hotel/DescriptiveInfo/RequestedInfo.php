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

namespace Amadeus\Client\RequestOptions\Hotel\DescriptiveInfo;

use Amadeus\Client\LoadParamsFromArray;

/**
 * RequestedInfo
 *
 * @package Amadeus\Client\RequestOptions\Hotel\MultiSingleAvail
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class RequestedInfo extends LoadParamsFromArray
{

    const SECURE_MULTIMEDIA = "SecureMultimediaURLs";

    /**
     * @var bool
     */
    public $generalInfo;

    /**
     * @var bool
     */
    public $guestRooms;

    /**
     * @var bool
     */
    public $meetingRooms;

    /**
     * @var bool
     */
    public $restaurants;

    /**
     * @var bool
     */
    public $policies;

    /**
     * @var bool
     */
    public $referencePoints;

    /**
     * @var bool
     */
    public $attractions;

    /**
     * @var bool
     */
    public $recreations;

    /**
     * @var bool
     */
    public $loyaltyPrograms;

    /**
     * @var bool
     */
    public $awards;


    /**
     * @var bool
     */
    public $contactInformation;

    /**
     * @var bool
     */
    public $multimedia;

    /**
     * @var ContentInfo[]
     */
    public $contentInfos;



}
