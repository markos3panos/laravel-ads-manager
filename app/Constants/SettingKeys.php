<?php

namespace App\Constants;

final class SettingKeys
{
    public const PINTEREST_APP_ID = 'app_id';
    public const PINTEREST_APP_SECRET = 'app_secret';
    public const PINTEREST_AD_ACCOUNT_ID = 'ad_account_id';
    public const PINTEREST_ACCESS_TOKEN = 'access_token';
    public const PINTEREST_REFRESH_TOKEN = 'refresh_token';

    public const PINTEREST_API_BASE_URL = 'https://api.pinterest.com/v5';
    public const PINTEREST_ENDPOINT_OAUTH_TOKEN = self::PINTEREST_API_BASE_URL . '/oauth/token';
    public const PINTEREST_ENDPOINT_OAUTH_REVOKE = self::PINTEREST_API_BASE_URL . '/oauth/revoke';
    public const PINTEREST_ENDPOINT_AD_ACCOUNTS = self::PINTEREST_API_BASE_URL . '/ad_accounts';
    public const PINTEREST_ENDPOINT_SINGLE_AD_ACCOUNT = self::PINTEREST_ENDPOINT_AD_ACCOUNTS . '/%s';
    public const PINTEREST_ENDPOINT_CAMPAIGNS = self::PINTEREST_ENDPOINT_AD_ACCOUNTS . '/%s/campaigns';
    public const PINTEREST_ENDPOINT_AD_GROUPS = self::PINTEREST_ENDPOINT_AD_ACCOUNTS . '/%s/ad_groups';
    public const PINTEREST_ENDPOINT_ADS = self::PINTEREST_ENDPOINT_AD_ACCOUNTS . '/%s/ads';
    public const PINTEREST_ENDPOINT_AUDIENCES = self::PINTEREST_ENDPOINT_AD_ACCOUNTS . '/%s/audiences';
    public const PINTEREST_ENDPOINT_CONVERSION_EVENTS = self::PINTEREST_ENDPOINT_AD_ACCOUNTS . '/%s/conversion_events';
    public const PINTEREST_ENDPOINT_REPORTS = self::PINTEREST_ENDPOINT_AD_ACCOUNTS . '/%s/reports';
    public const PINTEREST_ENDPOINT_BOARDS = self::PINTEREST_API_BASE_URL . '/boards';
    public const PINTEREST_ENDPOINT_PINS = self::PINTEREST_API_BASE_URL . '/pins';
    public const PINTEREST_ENDPOINT_CATALOGS = self::PINTEREST_API_BASE_URL . '/catalogs';
    public const PINTEREST_ENDPOINT_PRODUCT_GROUPS = self::PINTEREST_ENDPOINT_CATALOGS . '/%s/product_groupings';

    public const PINTEREST = [
        self::PINTEREST_APP_ID,
        self::PINTEREST_APP_SECRET,
        self::PINTEREST_AD_ACCOUNT_ID,
        self::PINTEREST_ACCESS_TOKEN,
        self::PINTEREST_REFRESH_TOKEN,
    ];

    public const PINTEREST_STANDARD_ENDPOINTS = [
        'oauth_token' => self::PINTEREST_ENDPOINT_OAUTH_TOKEN,
        'oauth_revoke' => self::PINTEREST_ENDPOINT_OAUTH_REVOKE,
        'ad_accounts' => self::PINTEREST_ENDPOINT_AD_ACCOUNTS,
        'single_ad_account' => self::PINTEREST_ENDPOINT_SINGLE_AD_ACCOUNT,
        'campaigns' => self::PINTEREST_ENDPOINT_CAMPAIGNS,
        'ad_groups' => self::PINTEREST_ENDPOINT_AD_GROUPS,
        'ads' => self::PINTEREST_ENDPOINT_ADS,
        'audiences' => self::PINTEREST_ENDPOINT_AUDIENCES,
        'conversion_events' => self::PINTEREST_ENDPOINT_CONVERSION_EVENTS,
        'reports' => self::PINTEREST_ENDPOINT_REPORTS,
        'boards' => self::PINTEREST_ENDPOINT_BOARDS,
        'pins' => self::PINTEREST_ENDPOINT_PINS,
        'catalogs' => self::PINTEREST_ENDPOINT_CATALOGS,
        'product_groups' => self::PINTEREST_ENDPOINT_PRODUCT_GROUPS,
    ];
}
