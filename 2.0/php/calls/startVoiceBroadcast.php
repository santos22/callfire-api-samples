<?php

class ApiClientSample{

    public static function main(){
        $client = \CallFire\Api\DocumentedClient::createClient("login", "password");
        $request = $client->startVoiceBroadcast();
        $request->getOperationConfig()->setHeaderParameters(array("Content-Type" => "application/json"));
        $request->getOperationConfig()->setPathParameters(array("id" => 15));
        $result = $client->request($request);
        $json = json_decode($result->getBody());
    }
}

ApiClientSample::main();