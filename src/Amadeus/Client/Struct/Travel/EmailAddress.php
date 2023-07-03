<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel;

class EmailAddress
{
    public $LabelText;
    public $EmailAddressText;

    /**
     *
     * @param $options
     */
    public function __construct($options)
    {
        $this->LabelText = $options->labelText;
        $this->EmailAddressText = $options->emailAddressText;

    }

}