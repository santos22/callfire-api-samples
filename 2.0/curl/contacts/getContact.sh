#!/usr/bin/env bash

curl -u username:password -H "Content-Type:application/json" -X GET "https://api.callfire.com/v2/contacts/379506003?fields=firstName,lastName,workPhone"
