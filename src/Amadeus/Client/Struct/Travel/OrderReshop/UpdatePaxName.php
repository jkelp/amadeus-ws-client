<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel\OrderReshop;
use Amadeus\Client\RequestOptions\Travel\Individual as RequestOptions;

class UpdatePaxName 
{
    public $PaxRefID;
    public $TitleName;
    public $GivenName;
    public $MiddleName;
    public $Surname;
    public $SuffixName;

    /**
     *
     * @param RequestOptions $options
     */
    public function __construct(RequestOptions $options)
    {

        $this->PaxRefID = $options->id;
        $this->TitleName = $options->title;
        $this->GivenName = $options->firstName;
        $this->MiddleName = $options->middleName;
        $this->Surname = $options->lastName;
        $this->SuffixName = $options->suffix;

    }

}
