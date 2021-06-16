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

namespace Test\Amadeus\Client\Struct\Hotel;

use Amadeus\Client\RequestOptions\Hotel\CompleteReservationDetails\KeyGroup;
use Amadeus\Client\RequestOptions\Hotel\CompleteReservationDetails\Key;
use Amadeus\Client\RequestOptions\Hotel\CompleteReservationDetails\Tattoo;
use Amadeus\Client\RequestOptions\HotelCompleteReservationDetailsOptions;
use Amadeus\Client\Struct\Hotel\CompleteReservationDetails;
use Test\Amadeus\BaseTestCase;

/**
 * HotelDescriptiveInfoTest
 *
 * @package Test\Amadeus\Client\Struct\Hotel
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class HotelCompleteReservationDetailsTest extends BaseTestCase
{
    public function testCanMakeMessage()
    {
        $opt = new HotelCompleteReservationDetailsOptions([
            "retrievalKeyGroup" =>
              new KeyGroup([
                "retrievalKey" => new Key([
                    "companyId" => "1A",
                    "controlNumber" => "Z3GGAK",
                    "controlType" => "P"
                ]),
                "tattooID" => new Tattoo([
                    "type" => "S",
                    "value" => "3"
                ])
              ])

        ]);

        //print_r($opt);
        //exit;

        $msg = new CompleteReservationDetails($opt);

        print_r($msg);
        exit;

        // $this->assertEquals('WithParsing', $msg->EchoToken);
        // $this->assertEquals('6.001', $msg->Version);
        // $this->assertEquals('en', $msg->PrimaryLangID);
        // //
        //
        // $this->assertEquals('NSMADABA', $msg->HotelDescriptiveInfos->HotelDescriptiveInfo[0]->HotelCode);
        // $this->assertTrue($msg->HotelDescriptiveInfos->HotelDescriptiveInfo[0]->HotelInfo->SendData);
        //
        // $this->assertTrue($msg->HotelDescriptiveInfos->HotelDescriptiveInfo[0]->FacilityInfo->SendMeetingRooms);
        // $this->assertTrue($msg->HotelDescriptiveInfos->HotelDescriptiveInfo[0]->FacilityInfo->SendGuestRooms);
        // $this->assertTrue($msg->HotelDescriptiveInfos->HotelDescriptiveInfo[0]->FacilityInfo->SendRestaurants);
        //
        // $this->assertTrue($msg->HotelDescriptiveInfos->HotelDescriptiveInfo[0]->Policies->SendPolicies);
        //
        // $this->assertFalse($msg->HotelDescriptiveInfos->HotelDescriptiveInfo[0]->AreaInfo->SendRefPoints);
        // $this->assertFalse($msg->HotelDescriptiveInfos->HotelDescriptiveInfo[0]->AreaInfo->SendAttractions);
        // $this->assertTrue($msg->HotelDescriptiveInfos->HotelDescriptiveInfo[0]->AreaInfo->SendRecreations);
        //
        // $this->assertFalse($msg->HotelDescriptiveInfos->HotelDescriptiveInfo[0]->AffiliationInfo->SendLoyalPrograms);
        // $this->assertTrue($msg->HotelDescriptiveInfos->HotelDescriptiveInfo[0]->AffiliationInfo->SendAwards);
        //
        // $this->assertFalse($msg->HotelDescriptiveInfos->HotelDescriptiveInfo[0]->ContactInfo->SendData);
        //
        // $this->assertTrue($msg->HotelDescriptiveInfos->HotelDescriptiveInfo[0]->MultimediaObjects->SendData);
        //
        // $this->assertCount(1, $msg->HotelDescriptiveInfos->HotelDescriptiveInfo[0]->ContentInfos->ContentInfo);
        // $this->assertEquals('SecureMultimediaURLS', $msg->HotelDescriptiveInfos->HotelDescriptiveInfo[0]->ContentInfos->ContentInfo[0]->Name);

        // $this->assertEquals('PM4', $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->RatePlanCandidates->RatePlanCandidate[0]->RatePlanCode);
        // $this->assertEquals('3', $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->RatePlanCandidates->RatePlanCandidate[0]->MealsIncluded->MealPlanCodes);
        //
        // // $this->assertEquals('T1Q', $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->RoomStayCandidates->RoomStayCandidate[0]->RoomTypeCode);
        // $this->assertEquals('1', $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->RoomStayCandidates->RoomStayCandidate[0]->RoomID);
        // $this->assertEquals('1', $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->RoomStayCandidates->RoomStayCandidate[0]->Quantity);
        // // $this->assertEquals('PM4', $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->RoomStayCandidates->RoomStayCandidate[0]->BookingCode);
        // $this->assertTrue($msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->RoomStayCandidates->RoomStayCandidate[0]->GuestCounts->IsPerRoom);
        // $this->assertEquals('10', $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->RoomStayCandidates->RoomStayCandidate[0]->GuestCounts->GuestCount[0]->AgeQualifyingCode);
        // $this->assertEquals('1', $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->RoomStayCandidates->RoomStayCandidate[0]->GuestCounts->GuestCount[0]->Count);

    }
}
