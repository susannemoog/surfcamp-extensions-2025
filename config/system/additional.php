<?php

$GLOBALS['TYPO3_CONF_VARS']['SYS']['reverseProxyIP'] = '*';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['reverseProxyHeaderMultiValue'] = 'first';

$GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive($GLOBALS['TYPO3_CONF_VARS'], [
    'BE' => [
        'debug' => 0,
        'installToolPassword' => '$argon2id$v=19$m=65536,t=16,p=1$VktrT0J2cXU3SHNtY0c4SA$36zwyPIHD9iUteTlw04ft6NYYmhVA9FtzkR5py/5B0w',
        'entryPoint' => 'typo3/',
    ],
    'FE' => [
        'debug' => 0,
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
        // @todo: Enable mailpit
    ],
    'SYS' => [
        'devIPmask' => '',
        'displayErrors' => 1,
        'encryptionKey' => 'c26bc4ffae86d01188fe2ff0e9b5061cf81f612d3acdb41a261e035862d0510d4eea24dbce58d7041f7b6aa090346d41',
        'exceptionalErrors' => 4096,
        'reverseProxyIP' => '*',
        'reverseProxyHeaderMultiValue' => 'first'
    ],
]);
