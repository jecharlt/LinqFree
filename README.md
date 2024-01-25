# Free Full-Stack and Quickly-Deployable Linktree Alternative

### Installation

Download latest release `.zip` file to your local machine

Install dependencies: 

```bash
composer install
```

```bash 
npm install
```

Configure .env:

Rename `.env.example` to `.env` and configure the `.env` file as necessary

Generate Laravel Application Key:

```bash
php artisan key:generate
````

Serve the application:

```bash
php artisan serve
```

Compile front-end:
```bash
npm run dev
```

### Customization

- To customize the profile name, links, and custom url identifier, visit `config\display.php` to change any of the 
  predefined variables

```injectablephp
<?php

$page_title = "Page Title";
$custom_url_identifier = '';
$linqtree_custom_url = env("APP_URL") . "/{$custom_url_identifier}";
$parsed_url = parse_url($linqtree_custom_url);
$host = $parsed_url['host'];
$path = $parsed_url['path'] ?? '';
$short_linqtree_custom_url = $host . $path;

return [
    'display' => [
        'profile_name' => 'profile_name',
        'links' => [
            [
                "link-name" => "Instagram",
                "link-url" => "/Instagram",
                "component-svg" => "svg.instagram_svg"
            ],
            [
                "link-name" => "X",
                "link-url" => "/X",
                "component-svg" => "svg.x_svg"
            ],
        ],
        'paragraph_text' => '',
        'custom_url_identifier' => "{$custom_url_identifier}",
        'google_measurement_id' => '',
        'page_title' => "{$page_title}",
        'short-custom-url' => "{$short_linqtree_custom_url}",
        'background' => "",
        "profile_picture" => "",
        "link_background" => "",
        'sharebar-links' => [
            [
                'link-name' => 'Snapchat',
                'link-text' => "Share on Snapchat",
                "referral-url" => "snapchat://creativeKitWeb/camera/1?attachmentUrl={$short_linqtree_custom_url}",
                "component-svg" => 'svg.snapchat_svg'
            ],
            [
                'link-name' => 'Facebook',
                'link-text' => "Share on Facebook",
                "referral-url" => "https://www.facebook.com/sharer.php?u={$short_linqtree_custom_url}",
                "component-svg" => "svg.facebook_svg"
            ],
            [
                'link-name' => "LinkedIn",
                'link-text' => "Share on LinkedIn",
                "referral-url" => "https://www.linkedin.com/sharing/share-offsite/?url={$short_linqtree_custom_url}",
                "component-svg" => "svg.linkedin_svg"
            ],
            [
                'link-name' => "X",
                'link-text' => "Share on X",
                "referral-url" => "https://x.com/intent/tweet?text=Check%20out%20{$page_title}%20-%20{$short_linqtree_custom_url}",
                "component-svg" => "svg.x_svg"
            ],
            [
                'link-name' => "WhatsApp",
                'link-text' => "Share via WhatsApp",
                "referral-url" => "https://wa.me/?text=Check%20out%20{$page_title}%20-%20{$short_linqtree_custom_url}",
                "component-svg" => 'svg.whatsapp_svg'
            ],
            [
                'link-name' => "Messenger",
                'link-text' => "Share via Messenger",
                "referral-url" => "https://www.messenger.com/new",
                "component-svg" => "svg.messenger_svg"
            ],
            [
                'link-name' => "Email",
                'link-text' => "Share via Email",
                "referral-url" => "mailto:?subject=%20Check%20out%{$page_title}%20&body=%20Check%20out%20{$page_title}%20-%20{$short_linqtree_custom_url}",
                "component-svg" => 'svg.email_svg'
            ]
        ]
    ]
];
```

- To use a svg not already defined for either a link or sharebar-link, place your svg in a `{$name}_svg.blade.php` 
  file in the `resources\views\svg` directory and use as `"svg.{$name}_svg"` as value to your `"component-svg"` key


- You can change other, non-predefined style elements in `resources/css/app.css`

## Security Vulnerabilities

If you discover any security related issues, please reach out to me directly at [53029902b@gmail.com](mailto:53029902b@gmail.com)

## Credits

- [John Charlton](https://github.com/jecharlt)


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information. 




