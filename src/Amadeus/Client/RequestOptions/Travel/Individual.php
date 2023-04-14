<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel;
use Amadeus\Client\LoadParamsFromArray;

class Individual extends LoadParamsFromArray
{
    public $id;
    public $birthdate;
    public $birthplace; //Country Code where the Passenger was born (ISO 3166). For example: DE
    public $gender; //M, F, or X for unspecified
    public $title; //Mr., Mrs., Miss, Dr., etc
    public $firstName;
    public $middleName;
    public $lastName;
    public $suffix;

}