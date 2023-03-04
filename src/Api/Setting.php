<?php

namespace slvler\BtcTurkApi\Api;

trait Setting
{

    static $API_KEY = "xxxxxxx-xxxxx-xxxx-xxxx-xxxxxxxxx";
    static $API_SECRET = "xxxxxxxxxx/xxxxxxxxxxxxxxxx";

    public static function getNonce(): float
    {
        return time()*1000;
    }

    public static function getMessage(): string
    {
        return self::$API_KEY.self::getNonce();
    }

    public static function signatureBytes(): string
    {
       return hash_hmac("sha256", self::getMessage(), base64_decode(self::$API_SECRET), true);
    }

    public static function getBase64(): string
    {
        return base64_encode(self::signatureBytes());
    }
}