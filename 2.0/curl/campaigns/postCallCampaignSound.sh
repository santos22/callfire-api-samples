#!/usr/bin/env bash

curl -u "username:password" -H "Content-Type:application/json" -X POST -d '
    {
        "name":"My sound file",
        "toNumber":"12135551122"
    }' "https://api.callfire.com/v2/campaigns/sounds/calls"