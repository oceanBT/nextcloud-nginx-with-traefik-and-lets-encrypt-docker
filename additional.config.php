<?php

// see https://docs.nextcloud.com/server/stable/admin_manual/configuration_server/config_sample_php_parameters.html
$CONFIG = [
    'skeletondirectory' => '',
    'share_folder' => '/shared_with_me',
    'overwrite.cli.url' => $_ENV['OVERWRITEPROTOCOL'] . '://' . $_ENV['OVERWRITEHOST'] . $_ENV['OVERWRITEWEBHOST'],
    # maintenance between 1 and 5 oclock
    'maintenance_window_start' => 1,
    'enabledPreviewProviders' => [
'OC\Preview\Font',
'OC\Preview\Movie',
'OC\Preview\MSOffice2003',
'OC\Preview\MSOffice2007',
'OC\Preview\MSOfficeDoc',
'OC\Preview\PDF',
'OC\Preview\Photoshop',
'OC\Preview\StarOffice',
'OC\Preview\SVG',
'OC\Preview\BMP',
'OC\Preview\GIF',
'OC\Preview\JPEG',
'OC\Preview\MarkDown',
'OC\Preview\MP3',
'OC\Preview\OpenDocument',
'OC\Preview\PNG',
],
];
