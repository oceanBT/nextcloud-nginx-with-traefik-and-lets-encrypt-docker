<?php

// see https://docs.nextcloud.com/server/stable/admin_manual/configuration_server/config_sample_php_parameters.html
$CONFIG = [
    'skeletondirectory' => '',
    'share_folder' => '/shared_with_me',
    'overwrite.cli.url' => $_ENV['OVERWRITEPROTOCOL'] . '//' . $_ENV['OVERWRITEHOST'] . $_ENV['OVERWRITEWEBHOST'],
];