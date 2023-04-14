<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel;

class Individual 
{
    public $IndividualID;
    public $Birthdate;
    public $BirthplaceText; //Country Code where the Passenger was born (ISO 3166). For example: DE
    public $GenderCode; //M, F, or X for unspecified
    public $TitleName; //Mr., Mrs., Miss, Dr., etc
    public $GivenName;
    public $MiddleName;
    public $Surname;
    public $SuffixName;

    /**
     *
     * @param $options
     */
    public function __construct($options)
    {
        $this->IndividualID = $options->id;
        $this->Birthdate = $options->birthdate;
        $this->BirthplaceText = $options->birthplace;
        $this->GenderCode = $options->gender;
        $this->TitleName = $options->title;
        $this->GivenName = $options->firstName;
        $this->MiddleName = $options->middleName;
        $this->Surname = $options->lastName;
        $this->SuffixName = $options->suffix;
    }

}