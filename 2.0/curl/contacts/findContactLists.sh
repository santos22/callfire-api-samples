#!/usr/bin/env bash

curl -u username:password -H "Content-Type:application/json" -X GET "https://api.callfire.com/v2/contacts/lists?name=my list&offset=0&limit=10&fields=items(id,name,size)"

