<?php

class ApiClientSample{

    public static function main(){
        $client = \CallFire\Api\DocumentedClient::createClient("login", "password");
        $request = $client->getTextBroadcast();
        $request->getOperationConfig()->setPathParameters(array("id" => 123));
        $result = $client->request($request);
        $json = json_decode($result->getBody());
    }
}

ApiClientSample::main();

