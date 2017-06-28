<?php

/**
 * en_US
 *
 * US English message token translations for the error pages
 *
 * @package MoF
 * @link http://www.userfrosting.com/components/#i18n
 * @author Alexander Weissman
 */

return [
    "ERROR" => [
        "@TRANSLATION" => "Error",

        "400" => [
            "TITLE" => "Error 400: Bad Request",
            "DESCRIPTION" => "It's probably not your fault.",
        ],

        "404" => [
            "TITLE" => "Error 404: Page not found",
            "DESCRIPTION" => "We can't seem to find what you're looking for.",
            "DETAIL" => "We tried to find your page...",
            "EXPLAIN" => "We could not find the page you were looking for.",
            "RETURN" => 'Either way, click <a href="{{url}}">here</a> to return to the front page.'
        ],

        "CONFIG" => [
            "TITLE" => "MoF Configuration Issue!",
            "DESCRIPTION" => "Some MoF configuration requirements have not been met.",
            "DETAIL" => "Something's not right here.",
            "RETURN" => 'Please fix the following errors, then <a href="{{url}}">reload</a>.'
        ],

        "DESCRIPTION" => "We've sensed a great disturbance in the Force.",
        "DETAIL" => "Here's what we got:",

        "ENCOUNTERED" => "Uhhh...something happened.  We don't know what.",

        "MAIL" => "Fatal error attempting mail, contact your server administrator.  If you are the admin, please check the MoF log.",
        
        "RETURN" => 'Click <a href="{{url}}">here</a> to return to the front page.',

        "SERVER" => "Oops, looks like our server might have goofed. If you're an admin, please check the PHP or MoF logs.",

        "TITLE" => "Disturbance in the Force"
    ]
];
