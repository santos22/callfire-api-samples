<?php

class ApiClientSample{

    public static function main(){
        $client = \CallFire\Api\DocumentedClient::createClient("login", "password");
        $request = $client->findCalls();
        $request->getOperationConfig()->setQueryParameters(array("fields" => "items(id)",
                                                                 "limit" => 1,
                                                                 "offset" => 0));
        $result = $client->request($request);
        $json = json_decode($result->getBody());
    }
}

ApiClientSample::main();

