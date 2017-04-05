<?php

class ApiClientSample{

    public static function main(){
        $client = \CallFire\Api\DocumentedClient::createClient("login", "password");
        $request = $client->createCallBroadcast();
        $request->getOperationConfig()->setHeaderParameters(array("Content-Type" => "application/json"));
        $body = '{
                    "name": "IVR Campaign",
                    "fromNumber": "12135551189",
                    "labels":
                    [
                        "ivr tag",
                        "id-10002"
                    ],
                    "localTimeRestriction":
                    {
                        "beginHour": 9,
                        "beginMinute": 0,
                        "endHour": 18,
                        "endMinute": 0
                    },
                    "schedules":
                    [
                        {
                            "startTimeOfDay":
                            {
                                "hour": 10,
                                "minute": 0,
                                "second": 0
                            },
                            "daysOfWeek":
                            [
                                "MONDAY",
                                "WEDNESDAY"
                            ],
                            "timeZone": "America/New_York",
                            "startDate":
                            {
                                "year": 2016,
                                "month": 12,
                                "day": 1
                            }
                        }
                    ],
                    "retryConfig":
                    {
                        "maxAttempts": 2,
                        "minutesBetweenAttempts": 5,
                        "retryResults":
                        [
                            "BUSY",
                            "NO_ANS"
                        ],
                        "retryPhoneTypes":
                        [
                            "MOBILE_PHONE",
                            "WORK_PHONE"
                        ]
                    },
                    "dialPlanXml": "<dialplan name=\"Root\"> <amd> <live> <goto>live</goto> </live> <machine> <goto>hangup</goto> </machine> </amd> <menu maxDigits=\"1\" timeout=\"3500\" name=\"live\"> <play type=\"tts\" voice=\"female1\" name=\"play_msg\">Hello, ${contact.firstName}, this is CallFire IVR message.</play> <keypress pressed=\"1\"> <goto>live</goto> </keypress> <keypress pressed=\"timeout\"> <hangup/> </keypress> </menu> <hangup name=\"hangup\"/> </dialplan>"
                }';
        $request->getOperationConfig()->setBodyParameter($body);
        $result = $client->request($request);
        $json = json_decode($result->getBody());
    }
}

ApiClientSample::main();


