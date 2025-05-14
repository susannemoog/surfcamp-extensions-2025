<?php

$GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive($GLOBALS['TYPO3_CONF_VARS'], [
    'BE' => [
        'debug' => $_ENV['TYPO3_BE_DEBUG'] ?? 0,
        'installToolPassword' => $_ENV['TYPO3_BE_INSTALLTOOLPASSWORD'] ?? '',
        'entryPoint' => 'typo3/',
    ],
    'FE' => [
        'debug' => $_ENV['TYPO3_FE_DEBUG'] ?? 0,
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'host' => 'db',
                'port' => 3306,
                'user' => 'db',
                'password' => 'db',
                'dbname' => 'db',
            ],
        ],
    ],
    'MAIL' => [
        // 'defaultMailFromAddress' => $_ENV['TYPO3_MAIL_DEFAULTMAILFROMADDRESS'] ?? '',
        // 'defaultMailFromName' => $_ENV['TYPO3_MAIL_DEFAULTMAILFROMNAME'] ?? '',
        // 'transport' => $_ENV['TYPO3_MAIL_TRANSPORT'],
        // 'transport_mbox_file' => $_ENV['TYPO3_MAIL_TRANSPORT_MBOX_FILE'],
        // 'transport_sendmail_command' => $_ENV['TYPO3_MAIL_TRANSPORT_SENDMAIL_COMMAND'],
        // 'transport_smtp_encrypt' => $_ENV['TYPO3_MAIL_TRANSPORT_SMTP_ENCRYPT'],
        // 'transport_smtp_password' => $_ENV['TYPO3_MAIL_TRANSPORT_SMTP_PASSWORD'],
        // 'transport_smtp_server' => $_ENV['TYPO3_MAIL_TRANSPORT_SMTP_SERVER'],
        // 'transport_smtp_username' => $_ENV['TYPO3_MAIL_TRANSPORT_SMTP_USERNAME'],
    ],
    'SYS' => [
        'devIPmask' => '',
        'displayErrors' => 1,
        'encryptionKey' => 'c26bc4ffae86d01188fe2ff0e9b5061cf81f612d3acdb41a261e035862d0510d4eea24dbce58d7041f7b6aa090346d41',
        'exceptionalErrors' => 4096,
    ],
]);
