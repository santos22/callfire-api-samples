#!/usr/bin/env bash

curl -u username:password -H "Content-Type:application/json" -X GET "https://api.callfire.com/v2/texts/auto-replys/15?fields=id,keyword,message"
