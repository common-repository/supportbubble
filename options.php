<?php

/**
 * Shorthand variable
 */

$options = $this->framework->options;

/**
 * Translation
 */

$options->translation = [
    'confirm'               =>      __('Are You Sure?', 'supportbubble'),
    'save_changes'          =>      __('Save Changes', 'supportbubble'),
    'error'                 =>      __('An error occurred, please reload the page', 'supportbubble'),
    'validation_error'      =>      __('Changes could not be updated, Some errors were found', 'supportbubble'),
    'data_saved'            =>      __('Changes successfully updated', 'supportbubble'),
    'add_item'              =>      __('Add Item', 'supportbubble'),
    'remove'                =>      __('Remove', 'supportbubble'),
    'import'                =>      __('Import', 'supportbubble'),
    'download_data'         =>      __('Download Data', 'supportbubble'),
    'override_warning'      =>      __('This will override your current settings. Are You Sure?', 'supportbubble'),
    'image_url'             =>      __('Image URL', 'supportbubble'),
    'from_library'          =>      __('From Library', 'supportbubble'),
    'select'                =>      __('Select', 'supportbubble'),
    'search'                =>      __('Search', 'supportbubble'),
    'select_file'           =>      __('Select file', 'supportbubble'),
    'size'                  =>      __('Size', 'supportbubble'),
    'line_height'           =>      __('Line Height', 'supportbubble'),
    'left'                  =>      __('Left', 'supportbubble'),
    'right'                 =>      __('Right', 'supportbubble'),
    'center'                =>      __('Center', 'supportbubble'),
    'justify'               =>      __('Justify', 'supportbubble'),
    'letter_spacing'        =>      __('Letter Spacing', 'supportbubble'),
    'word_spacing'          =>      __('Word Spacing', 'supportbubble'),
    'underline'             =>      __('Underline', 'supportbubble'),
    'italic'                =>      __('Italic', 'supportbubble'),
    'uppercase'             =>      __('Uppercase', 'supportbubble')
];


/**
 * Section: Bubble
 */

$options->add('section', [
    'id' => 'bubble',
    'title' => __('Bubble', 'supportbubble'),
]);

$options->add('link', [
    'type' => 'section',
    'title' => __('Bubble', 'supportbubble'),
    'section' => 'bubble',
    'icon' => 'ri-chat-3-fill',
]);

$options->add('field', [
    'id' => 'icon',
    'type' => 'icon',
    'title' => __('Icon', 'supportbubble'),
    'section' => 'bubble',
    'default' => 'ri-chat-smile-3-fill',
]);

$options->add('field', [
    'id' => 'size',
    'type' => 'select',
    'title' => __('Size', 'supportbubble'),
    'section' => 'bubble',
    'default' => 'medium',
    'choices' => [
        [
            'value' => 'small',
            'label' => __('Small', 'supportbubble')
        ],
        [
            'value' => 'medium',
            'label' => __('Medium', 'supportbubble')
        ],
        [
            'value' => 'large',
            'label' => __('Large', 'supportbubble')
        ],
    ]
]);

$options->add('field', [
    'id' => 'bg',
    'type' => 'color',
    'title' => __('Background', 'supportbubble'),
    'section' => 'bubble',
    'default' => '#0043ff',
]);

$options->add('field', [
    'id' => 'color',
    'type' => 'color',
    'title' => __('Text Color', 'supportbubble'),
    'section' => 'bubble',
    'default' => '#ffffff',
]);

$options->add('field', [
    'id' => 'behaviour',
    'type' => 'select',
    'title' => __('Behaviour', 'supportbubble'),
    'section' => 'bubble',
    'default' => 'menu',
    'choices' => [
        [
            'value' => 'menu',
            'label' => __('Open menu', 'supportbubble')
        ],
        [
            'value' => 'first_item',
            'label' => __('Launch first item', 'supportbubble')
        ],
    ]
]);

$options->add('field', [
    'id' => 'automatically_expand',
    'type' => 'switch',
    'title' => __('Automatically Expand', 'supportbubble'),
    'section' => 'bubble',
    'default' => false,
]);

$options->add('field', [
    'id' => 'prompts',
    'type' => 'repeater',
    'title' => __('Prompt Messages', 'supportbubble'),
    'section' => 'bubble',
    'default' => [
        [
            "message" => "Hi there 👋 </br>\nHow can I help you?",
            "_id" => "_vevbj2n"
        ]
    ],
    'fields' => [
        [
            'id' => 'message',
            'type' => 'textarea',
            'title' => __('Message', 'supportbubble'),
            'default' => __('New Message', 'supportbubble'),
            'attributes' => [
                'placeholder' => __('Message...', 'supportbubble'),
            ]
        ]
    ],
]);



/**
 * Section: Menu
 */

$options->add('section', [
    'id' => 'menu',
    'title' => __('Menu', 'supportbubble'),
]);

$options->add('link', [
    'type' => 'section',
    'title' => __('Menu', 'supportbubble'),
    'section' => 'menu',
    'icon' => 'ri-layout-right-fill',
]);

$options->add('field', [
    'id' => 'items',
    'type' => 'repeater',
    'title' => __('Items', 'supportbubble'),
    'section' => 'menu',
    'limit'   => 5,
    'limit_link' => [
        'icon' => 'ri-coin-fill',
        'text' => 'Go Pro',
        'msg'  => 'Upgrade to the Pro plan to get unlimited items.',
        'url' => $this->framework->freemius->get_upgrade_url()
    ],
    'fields' => [
        [
            'id' => 'title',
            'type' => 'text',
            'title' => __('Title', 'supportbubble'),
            'default' => __('New Item', 'supportbubble'),
        ],
        [
            'id' => 'subtitle',
            'type' => 'text',
            'title' => __('Subtitle', 'supportbubble'),
            'default' => __('The subtitle goes here', 'supportbubble'),
        ],
        [
            'id' => 'icon',
            'type' => 'icon',
            'title' => __('Icon', 'supportbubble'),
            'default' => 'ri-messenger-fill',
        ],
        [
            'id' => 'color',
            'type' => 'color',
            'title' => __('Color', 'supportbubble'),
            'default' => '#2c01ff',
        ],
        [
            'id' => 'type',
            'type' => 'select',
            'title' => __('Type', 'supportbubble'),
            'default' => 'link',
            'choices' => [
                [
                    'value' => 'form',
                    'label' => __('Contact Form', 'supportbubble'),
                ],
                [
                    'value' => 'link',
                    'label' => __('Outbound Link', 'supportbubble'),
                ],
                [
                    'value' => 'messenger',
                    'label' => __('Messenger', 'supportbubble'),
                ],
                [
                    'value' => 'whatsapp',
                    'label' => __('WhatsApp', 'supportbubble'),
                ],
                [
                    'value' => 'email',
                    'label' => __('Email', 'supportbubble'),
                ],
            ]
        ],
        // Link
        [
            'id' => 'url',
            'type' => 'text',
            'title' => __('URL', 'supportbubble'),
            'condition' => 'data.type == "link"',
            'default' => '',
        ],
        // Whatsapp & Messenger
        [
            'id' => 'welcome_message',
            'type' => 'textarea',
            'title' => __('Welcome Message', 'supportbubble'),
            'condition' => '["messenger", "whatsapp"].includes(data.type)',
            'default' => '',
        ],
        [
            'id' => 'avatar',
            'type' => 'image',
            'title' => __('User Avatar', 'supportbubble'),
            'condition' => '["messenger", "whatsapp"].includes(data.type)',
            'default' => 'https://images.pexels.com/photos/53453/marilyn-monroe-woman-actress-pretty-53453.jpeg',
        ],
        [
            'id' => 'user_name',
            'type' => 'text',
            'title' => __('User Name', 'supportbubble'),
            'condition' => '["messenger", "whatsapp"].includes(data.type)',
            'default' => 'Nancy',
        ],
        [
            'id' => 'caption',
            'type' => 'text',
            'title' => __('Caption', 'supportbubble'),
            'condition' => '["messenger", "whatsapp"].includes(data.type)',
            'default' => __('Typically replies within a day', 'supportbubble'),
        ],
        [
            'id' => 'btn_icon',
            'type' => 'icon',
            'title' => __('Button Icon', 'supportbubble'),
            'condition' => '["messenger", "whatsapp"].includes(data.type)',
            'default' => 'ri-messenger-fill',
        ],
        [
            'id' => 'btn_text',
            'type' => 'text',
            'title' => __('Button Text', 'supportbubble'),
            'condition' => '["messenger", "whatsapp"].includes(data.type)',
            'default' => __('Start Chat', 'supportbubble'),
        ],
        [
            'id' => 'phone',
            'type' => 'text',
            'title' => __('Phone Number', 'supportbubble'),
            'condition' => 'data.type == "whatsapp"',
            'default' => '',
        ],
        // Messenger
        [
            'id' => 'messenger_url',
            'type' => 'text',
            'title' => __('Messenger URL', 'supportbubble'),
            'condition' => 'data.type == "messenger"',
            'default' => '',
        ],
        // Form
        [
            'id' => 'headline',
            'type' => 'text',
            'title' => __('Headline', 'supportbubble'),
            'condition' => 'data.type == "form"',
            'default' => '',
        ],
        [
            'id' => 'description',
            'type' => 'text',
            'title' => __('Description', 'supportbubble'),
            'condition' => 'data.type == "form"',
            'default' => '',
        ],
        [
            'id' => 'form',
            'type' => 'select',
            'title' => __('Form', 'supportbubble'),
            'condition' => 'data.type == "form"',
            'lookup' => 'data.forms.forms',
        ],
        [
            'id' => 'success_message',
            'type' => 'textarea',
            'title' => __('Success Message', 'supportbubble'),
            'condition' => 'data.type == "form"',
            'default' => '',
        ],
        // Messenger
        [
            'id' => 'email',
            'type' => 'text',
            'title' => __('Email', 'supportbubble'),
            'condition' => 'data.type == "email"',
            'default' => '',
        ],
        
        // Targeting Rules
        [
            'id' => 'targeting',
            'type' => 'link',
            'title' => __('Audience Targeting', 'supportbubble'),
            'default' => [],
            'icon' => 'ri-coin-fill',
            'text' => 'Go Pro',
            'msg'  => 'Our audience targeting feature allows you to show/hide items on specific pages, users, login status, and for a specific time of the day.',
            'url' => $this->framework->freemius->get_upgrade_url()
        ],
    ],
    'default' => [
        [
            "title" => __("Messenger", 'supportbubble'),
            "avatar" => "https://images.pexels.com/photos/53453/marilyn-monroe-woman-actress-pretty-53453.jpeg",
            "caption" => __("Typically replies within a day", 'supportbubble'),
            "color" => "rgba(0, 132, 255, 1)",
            "icon" => "ri-messenger-fill",
            "messenger_url" => "m.me/102918678451971",
            "subtitle" => __("Contact us on Facebook", 'supportbubble'),
            "type" => "messenger",
            "url" => "facebook.com",
            "user_name" => "PluginCube",
            "welcome_message" => __("Hi there 👋 <br> \nHow can I help you?", 'supportbubble'),
            'btn_icon' => 'ri-messenger-fill',
            'btn_text' => __('Start Chat', 'supportbubble'),
            "_id" => "_imn3s"

        ]
    ],
]);



/**
 * Section: Forms
 */

$options->add('section', [
    'id' => 'forms',
    'title' => __('Forms', 'supportbubble'),
]);

$options->add('link', [
    'type' => 'section',
    'title' => __('Forms', 'supportbubble'),
    'section' => 'forms',
    'icon' => 'ri-mail-fill',
]);

$options->add('field', [
    'id' => 'forms',
    'type' => 'repeater',
    'title' => __('Forms', 'supportbubble'),
    'section' => 'forms',
    'limit'   => 3,
    'limit_link' => [
        'icon' => 'ri-coin-fill',
        'text' => 'Go Pro',
        'msg'  => 'Upgrade to the Pro plan to get unlimited forms.',
        'url' => $this->framework->freemius->get_upgrade_url()
    ],
    'remove_alert' => 'This will remove the form and all the submission data associated with it. Are you sure?',
    'fields' => [
        [
            'id' => 'title',
            'type' => 'text',
            'title' => __('Title', 'supportbubble'),
            'default' => __('New Form', 'supportbubble'),
        ],
        [
            'id' => 'fields',
            'type' => 'repeater',
            'title' => __('Fields', 'supportbubble'),
            'default' => [],
            'remove_alert' => __('This will remove the field and all the submission data associated with it. Are you sure?', 'supportbubble'),
            'fields' => [
                [
                    'id' => 'title',
                    'type' => 'text',
                    'title' => __('Title', 'supportbubble'),
                    'default' => __('New Field', 'supportbubble'),
                ],
                [
                    'id' => 'type',
                    'type' => 'select',
                    'title' => __('Type', 'supportbubble'),
                    'default' => 'single_line_text',
                    'choices' => [
                        [
                            'value' => 'single_line_text',
                            'label' => __('Single Line Text', 'supportbubble')
                        ],
                        [
                            'value' => 'paragraph',
                            'label' => __('Paragraph Text', 'supportbubble')
                        ],
                        [
                            'value' => 'number',
                            'label' => __('Number', 'supportbubble')
                        ],
                        [
                            'value' => 'date',
                            'label' => __('Date', 'supportbubble')
                        ],
                        [
                            'value' => 'time',
                            'label' => __('Time', 'supportbubble')
                        ],
                        [
                            'value' => 'email',
                            'label' => __('Email Address', 'supportbubble')
                        ],
                        [
                            'value' => 'phone_number',
                            'label' => __('Phone Number', 'supportbubble')
                        ],
                    ]
                ]
            ]
        ],
        [
            'id' => 'show_in_admin',
            'type' => 'switch',
            'title' => __('Show in admin?', 'supportbubble'),
            'default' => true,
        ],
        [
            'id' => 'forward',
            'type' => 'link',
            'title' => __('Forward to Email?', 'supportbubble'),
            'default' => [],
            'icon' => 'ri-coin-fill',
            'text' => 'Go Pro',
            'msg'  => 'Upgrade and get the form entries delivered directly to your email.',
            'url' => $this->framework->freemius->get_upgrade_url()
        ],
    ],
    'default' => [],
]);


/**
 * Section: Advanced
 */


$options->add('section', [
    'id' => 'advanced',
    'title' => __('Advanced', 'supportbubble'),
]);

$options->add('link', [
    'type' => 'section',
    'title' => __('Advanced', 'supportbubble'),
    'section' => 'advanced',
    'icon' => 'ri-inbox-archive-fill',
]);

$options->add('field', [
    'id' => 'export',
    'type' => 'export',
    'title' => __('Export', 'supportbubble'),
    'section' => 'advanced',
]);

$options->add('field', [
    'id' => 'import',
    'type' => 'import',
    'title' => __('Import', 'supportbubble'),
    'section' => 'advanced',
]);
