<?php

class ApiClientSample{

    public static function main(){
        $client = \CallFire\Api\DocumentedClient::createClient("login", "password");
        $request = $client->sendCalls();
        $request->getOperationConfig()->setHeaderParameters(array("Content-Type" => "application/json"));
        $request->getOperationConfig()->setQueryParameters(array("campaignId" => 13454234323));
        $body = '[
                    {
                        "phoneNumber":"12135551100",
                        "liveMessage":"Why hello there!"
                    },
                    {
                        "phoneNumber":"12135551101",
                        "liveMessage":"And hello to you too."
                    }
                ]';
        $request->getOperationConfig()->setBodyParameter($body);
        $result = $client->request($request);
        $json = json_decode($result->getBody());
    }
}

ApiClientSample::main();
