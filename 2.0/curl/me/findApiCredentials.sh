#!/usr/bin/env bash

curl -u "account_login:account_password" -H "Content-Type:application/json" -X GET "https://api.callfire.com/v2/me/api/credentials?fields=name,enabled"
