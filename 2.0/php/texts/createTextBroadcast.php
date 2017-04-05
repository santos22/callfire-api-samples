<?php

class ApiClientSample{

    public static function main(){
        $client = \CallFire\Api\DocumentedClient::createClient("login", "password");
        $request = $client->createTextBroadcast();
        $request->getOperationConfig()->setHeaderParameters(array("Content-Type" => "application/json"));
        $body = '{
                    "name":"Charity SMS Campaign",
                    "labels":
                    [
                        "charity",
                        "id-10003"
                    ],
                    "fromNumber":"19206596476",
                    "recipients":
                    [
                        {
                            "phoneNumber":"13233834422",
                            "attributes":
                            {
                                "u_name": "Alice",
                                "age": 30
                            }
                        },
                        {
                            "phoneNumber":"13233834433",
                            "attributes":
                            {
                                "u_name": "Mark",
                                "age": 45
                            }
                        },
                        {
                            "phoneNumber":"13233834488",
                            "message": "Hi ${u_name}, the megic number is ${magic_number}",
                            "attributes":
                            {
                                "u_name": "Jane",
                                "magic_number": "10"
                            }
                        }
                    ],
                    "message":"Hello {u_name}, Missing for a great event ? We invite you to participate in a charity fair which takes place at first Saturday of November. You can order tickets by calling us: 855-555-5555. We are looking forward to meet you there"
                }';
        $request->getOperationConfig()->setBodyParameter($body);
        $result = $client->request($request);
        $json = json_decode($result->getBody());
    }
}

ApiClientSample::main();