#!/usr/bin/env bash

curl -u username:password -H "Content-Type:application/json" -X GET "https://api.callfire.com/v2/webhooks/resources?fields=items(events)"
