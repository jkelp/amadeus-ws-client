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

namespace Amadeus\Client\RequestOptions\Car\Availability;

use Amadeus\Client\LoadParamsFromArray;

/**
 * ProviderIndicator
 *
 * @package Amadeus\Client\RequestOptions\Car\Availability
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class MediaContent extends LoadParamsFromArray
{
  /**
   * Picture Type
   *
   * @var string
   */
    public $picturesType;

    /**
     * Picture Size
     *
     * @var string
     */
    public $pictureSize;

    const PICTURE_TYPE_COMPANY = 'CPY';

    const PICTURE_TYPE_VEHICLE = 'VEH';

    const PICTURE_SIZE_70_40 = 0;

    const PICTURE_SIZE_90_50 = 1;

    const PICTURE_SIZE_110_70 = 2;

    const PICTURE_SIZE_140_80 = 3;

    const PICTURE_SIZE_180_110 = 4;

    const PICTURE_SIZE_230_140 = 5;

    const PICTURE_SIZE_290_170 = 6;

    const PICTURE_SIZE_370_220 = 7;

    const PICTURE_SIZE_470_280 = 8;

    const PICTURE_SIZE_600_350 = 9;

}
