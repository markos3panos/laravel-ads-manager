<?php

namespace App\Constants;

final class SettingKeys
{
    public const APP_ID = 'app_id';
    public const APP_SECRET = 'app_secret';
    public const AD_ACCOUNT_ID = 'ad_account_id';
    public const ACCESS_TOKEN = 'access_token';
    public const REFRESH_TOKEN = 'refresh_token';

    public const PINTEREST = [
        self::APP_ID,
        self::APP_SECRET,
        self::AD_ACCOUNT_ID,
        self::ACCESS_TOKEN,
        self::REFRESH_TOKEN,
    ];
}
