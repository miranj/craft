<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see \craft\config\GeneralConfig
 */

return [
    // Global settings
    '*' => [
        'useProjectConfigFile' => true,
        'omitScriptNameInUrls' => true,
        'usePathInfo' => true,
        'sendPoweredByHeader' => false,
        'phpSessionName' => getenv('SITE_SLUG').'CraftSessionId',
        'csrfTokenName' => getenv('SITE_SLUG').'_CSRF',
        'securityKey' => getenv('SECURITY_KEY'),
        'requireMatchingUserAgentForSession' => false,
        'rememberedUserSessionDuration' => 'P1M',
        'userSessionDuration' => 'P1M',
        'defaultImageQuality' => 85,
        'maxUploadFileSize' => '100M',
        'defaultSearchTermOptions' => [
            'subLeft' => true,
            'subRight' => true,
        ],

        // region
        'defaultWeekStartDay' => '1',

        'aliases' => [
            '@assetBaseUrl' => getenv('ASSET_BASE_URL'),
            '@assetBasePath' => getenv('ASSET_BASE_PATH'),
        ],
    ],

    // Dev environment settings
    'dev' => [
        'devMode' => true,
        'enableTemplateCaching' => false,
        'timezone' => 'Asia/Kolkata',
    ],

    // Staging environment settings
    'staging' => [
        'devMode' => true,
        'allowAdminChanges' => false,
    ],

    // Production environment settings
    'production' => [
        'devMode' => false,
        'allowAdminChanges' => false,
    ],
];
