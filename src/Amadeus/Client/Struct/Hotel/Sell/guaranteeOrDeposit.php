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

namespace Amadeus\Client\Struct\Hotel\Sell;

use Amadeus\Client\RequestOptions\Hotel\Sell\PaymentDetails;

use Amadeus\Client\Struct\Hotel\Sell\ccInfo;

/**
 * Criterion
 *
 * @package Amadeus\Client\Struct\Hotel\Sell
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class guaranteeOrDeposit
{
    /***
     * @var string
     */
    public $paymentInfo;

    public $groupCreditCardInfo;


    /**
     * Criterion constructor.
     *
     * @param PaymentDetails $det
     */
    public function __construct(PaymentDetails $det)
    {

        $paymentInfo = new \StdClass;
        $paymentDetails = new \StdClass;
        $paymentDetails->formOfPaymentCode = $det->paymentInfo->formOfPaymentCode;
        $paymentDetails->paymentType = $det->paymentInfo->paymentType;
        $paymentDetails->serviceToPay = $det->paymentInfo->serviceToPay;
        $paymentInfo->paymentDetails = $paymentDetails;
        $this->paymentInfo = $paymentInfo;

        $groupCreditCardInfo = new \StdClass;
        $creditCardInfo = new \StdClass;
        $creditCardInfo->ccInfo = new ccInfo($det->creditCardInfo);
        $groupCreditCardInfo->creditCardInfo = $creditCardInfo;
        $this->groupCreditCardInfo = $groupCreditCardInfo;


    }
}
