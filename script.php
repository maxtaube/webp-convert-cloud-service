    'webp-convert' => [
        'converters' => ['cwebp', 'gd', 'imagick'],
        'converter-options' => [
            'cwebp' => [
                'try-common-system-paths' => true,
                'try-supplied-binary-for-os' => true,
                'use-nice' => true
            ]
        ]
    ]
];

$wpc = new WebPConvertCloudService();
