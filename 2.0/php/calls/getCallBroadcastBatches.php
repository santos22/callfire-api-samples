<?php

class ApiClientSample{

    public static function main(){
        $client = \CallFire\Api\DocumentedClient::createClient("login", "password");
        $request = $client->getCallBroadcastBatches();
        $request->getOperationConfig()->setPathParameters(array("id" => 617063450003));
        $request->getOperationConfig()->setQueryParameters(array("fields" => "items(id)",
                                                                 "limit" => 1));
        $result = $client->request($request);
        $json = json_decode($result->getBody());
    }
}

ApiClientSample::main();


