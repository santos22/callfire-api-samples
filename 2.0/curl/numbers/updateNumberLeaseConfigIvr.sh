#!/usr/bin/env bash

curl -u "username:password" -H "Content-Type:application/json" -X PUT -d '
    {
        "configType":"IVR",
        "ivrInboundConfig":
        {
            "dialplanXml":"<dialplan name=\"Root\"> <menu maxDigits=\"1\" timeout=\"3500\" name=\"Live\"> <play type=\"tts\" voice=\"female1\"> Hello this is AB Advertising, please press 1 to transfer to our sales repreentative, press 2 to contact clients support. </play> <keypress pressed=\"1\"> <stash varname=\"selected_menu\">sales</stash> <play type=\"tts\" voice=\"female1\"> You will be transferred to sales representative in a moment. Please wait. </play> <transfer callerid=\"${call.callerid}\" musiconhold=\"blues\" mode=\"ringall\"> 15550004455 </transfer> </keypress> <keypress pressed=\"2\" name=\"kp_become_volonteer\"> <stash varname=\"selected_menu\">sales</stash> <play type=\"tts\" voice=\"female1\"> You will be transferred to clients support. Please wait. </play> <transfer callerid=\"${call.callerid}\" musiconhold=\"blues\" mode=\"ringall\"> 15550005500 </transfer> </keypress> <keypress pressed=\"default\" name=\"incorrect_Selection\"> <play type=\"tts\" voice=\"female1\">That is not a valid selection. Please try again.</play> <goto name=\"replay_Live\">Live</goto> </keypress> </menu> <play type=\"tts\" voice=\"female1\"> Thank you for calling us. Have a good day. </play> <hangup name=\"Hangup\"/> </dialplan> "
        }
    }' "https://api.callfire.com/v2/numbers/leases/configs/19206596476"