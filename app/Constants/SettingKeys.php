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

    public const SHOPIFY_STORE_DOMAIN = 'store_domain';
    public const SHOPIFY_API_KEY = 'api_key';
    public const SHOPIFY_API_SECRET = 'api_secret';
    public const SHOPIFY_ACCESS_TOKEN = 'access_token';
    public const SHOPIFY_API_VERSION = 'api_version';

    public const SHOPIFY_ADMIN_BASE_URL = 'https://%s.myshopify.com/admin';
    public const SHOPIFY_API_BASE_URL = self::SHOPIFY_ADMIN_BASE_URL . '/api/%s';
    public const SHOPIFY_ENDPOINT_OAUTH_AUTHORIZE = self::SHOPIFY_ADMIN_BASE_URL . '/oauth/authorize';
    public const SHOPIFY_ENDPOINT_OAUTH_ACCESS_TOKEN = self::SHOPIFY_ADMIN_BASE_URL . '/oauth/access_token';
    public const SHOPIFY_ENDPOINT_PRODUCTS = self::SHOPIFY_API_BASE_URL . '/products.json';
    public const SHOPIFY_ENDPOINT_ORDERS = self::SHOPIFY_API_BASE_URL . '/orders.json';
    public const SHOPIFY_ENDPOINT_CUSTOMERS = self::SHOPIFY_API_BASE_URL . '/customers.json';
    public const SHOPIFY_ENDPOINT_WEBHOOKS = self::SHOPIFY_API_BASE_URL . '/webhooks.json';
    public const SHOPIFY_ENDPOINT_SMART_COLLECTIONS = self::SHOPIFY_API_BASE_URL . '/smart_collections.json';
    public const SHOPIFY_ENDPOINT_CUSTOM_COLLECTIONS = self::SHOPIFY_API_BASE_URL . '/custom_collections.json';
    public const SHOPIFY_ENDPOINT_METAFIELDS = self::SHOPIFY_API_BASE_URL . '/metafields.json';
    public const SHOPIFY_ENDPOINT_GRAPHQL = self::SHOPIFY_API_BASE_URL . '/graphql.json';

    public const SHOPIFY = [
        self::SHOPIFY_STORE_DOMAIN,
        self::SHOPIFY_API_KEY,
        self::SHOPIFY_API_SECRET,
        self::SHOPIFY_ACCESS_TOKEN,
        self::SHOPIFY_API_VERSION,
    ];

    public const SHOPIFY_STANDARD_ENDPOINTS = [
        'oauth_authorize' => self::SHOPIFY_ENDPOINT_OAUTH_AUTHORIZE,
        'oauth_access_token' => self::SHOPIFY_ENDPOINT_OAUTH_ACCESS_TOKEN,
        'products' => self::SHOPIFY_ENDPOINT_PRODUCTS,
        'orders' => self::SHOPIFY_ENDPOINT_ORDERS,
        'customers' => self::SHOPIFY_ENDPOINT_CUSTOMERS,
        'webhooks' => self::SHOPIFY_ENDPOINT_WEBHOOKS,
        'smart_collections' => self::SHOPIFY_ENDPOINT_SMART_COLLECTIONS,
        'custom_collections' => self::SHOPIFY_ENDPOINT_CUSTOM_COLLECTIONS,
        'metafields' => self::SHOPIFY_ENDPOINT_METAFIELDS,
        'graphql' => self::SHOPIFY_ENDPOINT_GRAPHQL,
    ];
}
