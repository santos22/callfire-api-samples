#!/usr/bin/env bash

curl -u username:password -H "Content-Type:application/json" -X GET "https://api.callfire.com/v2/calls/broadcasts/379506003?fields=name,status,labels"
