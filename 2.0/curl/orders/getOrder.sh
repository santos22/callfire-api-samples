#!/usr/bin/env bash

curl -u "username:password" -H "Content-Type:application/json" -X GET "https://api.callfire.com/v2/orders/379506003?fields=status,totalCost"
