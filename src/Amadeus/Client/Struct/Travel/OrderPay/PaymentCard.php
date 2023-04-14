<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel\OrderPay;
use Amadeus\Client\RequestOptions\Travel\OrderPay\PaymentCard as RequestOptions; 


class PaymentCard
{

    public $CardNumber;
    public $EffectiveDate;
    public $ExpirationDate;
    public $CreditCardVendorCode; //The 2 character code of the credit card issuer, e.g. VI, MC
    public $CardholderContactInfo;
    public $MaskedCardID;
    public $CardIssuerName;
    public $SeriesCode;
    public $Surcharge;

    /**
     *
     * @param $options
     */
    public function __construct(RequestOptions $options)
    {

        $this->CardNumber = $options->cardNumber;
        $this->EffectiveDate = $options->effectiveDate;
        $this->ExpirationDate = $options->expirationDate;
        $this->CreditCardVendorCode = $options->issuer;
        $this->SeriesCode = $options->seriesCode;
        $this->MaskedCardID = $options->maskedCardId;

        //$this->CardholderContactInfo = $options->EffectiveDate;
        //$this->CardIssuerName = $options->EffectiveDate;
        //$this->Surcharge = $options->EffectiveDate;
    }

}