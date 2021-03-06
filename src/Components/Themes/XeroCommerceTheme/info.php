<?php
return [
    'view' => 'theme',
    'setting' => [
        'logo_title' => [
            '_type' => 'text',
            '_section' => '로고 설정',
            'label' => '로고 타이틀',
            'placeholder' => '로고 제목을 입력하세요',
            'description' => '로고 제목을 입력하세요',
        ],
        'logo_image' => [
            '_type' => 'image',
            '_section' => '로고 설정',
            'label' => '로고 이미지',
            'placeholder' => '쇼핑몰 메인에 적용할 로고이미지를 등록하세요.',
            'description' => '쇼핑몰 메인에 적용할 로고이미지를 등록하세요.'
        ],
        'layout_type' => [
            '_type' => 'select',
            '_section' => '레이아웃',
            'label' => '레이아웃 형태',
            'options' => [
                'sub' => 'Sub 페이지용 레이아웃',
                'main' => 'Main 페이지용 레이아웃'
            ]
        ],
        'show_spot' => [
            '_type' => 'select',
            '_section' => '스팟 설정',
            'label' => '스팟 출력 ',
            'options' => [
                'hide' => '출력 안 함',
                'show' => '출력 함'
            ]
        ],
        'spot_title' => [
            '_type' => 'text',
            '_section' => '스팟 설정',
            'label' => '스팟 타이틀',
            'placeholder' => '스팟에 출력할 제목을 입력하세요',
            'description' => '스팟에 출력할 제목을 입력하세요',
        ],
        'spot_content' => [
            '_type' => 'textarea',
            '_section' => '스팟 설정',
            'label' => '스팟 내용',
            'placeholder' => '스팟에 출력할 내용을 입력하세요',
            'description' => '스팟에 출력할 내용을 입력하세요',
        ],
        'spot_image' => [
            '_type' => 'image',
            '_section' => '스팟 설정',
            'label' => '스팟 이미지',
            'description' => '스팟에 출력할 이미지를 등록하세요'
        ],
        'gnb' => [
            '_type' => 'menu',
            '_section' => '메인 메뉴 설정',
            'label' => '메인메뉴',
        ],
        'gnb_sub' => [
            '_type' => 'menu',
            '_section' => '상품 메뉴 설정',
            'label' => '상품메뉴',
        ]
    ],
    'support' => [
        'mobile' => true,
        'desktop' => true
    ],
    'editable' => [
        'theme.blade.php',
        'gnb.blade.php'
    ]
];
