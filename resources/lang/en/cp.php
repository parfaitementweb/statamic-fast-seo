<?php return [
    'dashboard' => [
        'dashboard' => 'Dashboard',
        'title' => 'How to use Fast SEO',
        'introduction' => "Your SEO is in good hands.<br/>We have made things easy for you to start. Here is how you can add all SEO-related tags easily.
<ul class='mt-3 text-xs'>
    <li class='ml-3'>1. <strong>You control the entire markup.</strong><br/>We do not want to impose anything. This addon only computes the values and you can place them on any tag you want. You can even reuse computed values for multiple tags.</li>
    <li class='ml-3 mt-1'>2. <strong>Copy & Paste.</strong><br/>We have prepared every SEO tag for you. Just copy and paste the snippets below in your layout.</li>
    <li class='ml-3 mt-1'>3. <strong>Customize the General Settings.</strong><br/>Head over the <a class='text-blue' href=\"" . cp_route('statamic-fast-seo.settings.index') . "\">General Settings</a> to fine-tune how your tags are computed.</li>
    <li class='ml-3 mt-1'>4. <strong>Fine-tune for every collection entry or tag.</strong><br/>You can customize each entry individually using the Fast SEO tab.</li>
</ul>",
        'button' => 'Settings',
    ],
    'settings' => 'Settings',
    'tab_name' => 'Fast SEO',
    'footer' => 'Get more Statamic addons at <span class="text-grey-70">Parfaitement Web</span>',
    'blueprint' => [
        'meta_section' => [
            'display' => 'General Settings',
            'instructions' => 'All the default settings which will be used if none are set on an entry (collection/taxonomy) level.',
        ],
        'title_separator' => [
            'display' => 'Title Separator',
            'instructions' => 'Used to separate the title and site name.',
        ],
        'site_name' => [
            'display' => 'Site Name',
            'instructions' => 'Default back to *config(\'app.name\')*',
        ],
        'ignore_site_name' => [
            'display' => 'Ignore Site Name',
            'instructions' => 'Do not include the title separator and site name.',
        ],
        'default_og_image' => [
            'display' => 'Default Open Graph Image',
            'instructions' => 'The default image used in your Open Graph.',
        ],
        'twitter_handle' => [
            'display' => 'Twitter Handle',
            'instructions' => 'Your Twitter handle used in Twitter Cards. Include the @ symbol.',
        ],
        'extra' => [
            'display' => 'Extra code',
            'instructions' => 'You can enter here any extra HTML you want. This can be useful for Schema.org schema or Validation tags',
        ],
        'formula_section' => [
            'display' => 'Formulas',
            'instructions' => 'We use antlers fields instead of views as we find it easier to edit within the Control Panel. You can customize every formula here.',
        ],
        'title_formula' => [
            'display' => 'Meta Title Formula',
            'instructions' => 'The antler expression used to generate the meta title.<br/><br/>__Click to reveal__',
        ],
        'description_formula' => [
            'display' => 'Meta Description Formula',
            'instructions' => 'The antler expression used to generate the meta description.<br/><br/>__Click to reveal__',
        ],
        'canonical_formula' => [
            'display' => 'Canonical URL Formula',
            'instructions' => 'The antler expression used to generate the canonical URL.<br/><br/>__Click to reveal__',
        ],
        'og_image_formula' => [
            'display' => 'Open Graph Image Formula',
            'instructions' => 'The antler expression used to generate the open graph image.<br/><br/>__Click to reveal__',
        ],
        'twitter_image_formula' => [
            'display' => 'Twitter Image Formula',
            'instructions' => 'The antler expression used to generate the twitter card image.<br/><br/>__Click to reveal__',
        ],
        'name_formula' => [
            'display' => 'Name Formula',
            'instructions' => 'The antler expression used to generate the name of the website.<br/><br/>__Click to reveal__',
        ],
    ],
    'entry_blueprint' => [
        'title_section' => [
            'display' => 'SEO',
            'instructions' => "You can customize the SEO options for this entry. If a field is not completed, the <a class='text-blue' href=\"" . cp_route('statamic-fast-seo.settings.index') . "\">General Settings</a> value will be applied.",
        ],
        'meta_title' => [
            'display' => 'Meta Title',
            'instructions' => 'You can use Antlers expression here.',
        ],
        'meta_description' => [
            'display' => 'Meta Description',
            'instructions' => 'You can use Antlers expression here.',
        ],
        'og_image' => [
            'display' => 'Open Graph Image',
            'instructions' => '',
        ],
        'noindex' => [
            'display' => 'Do not index',
            'instructions' => 'This will add the _noindex_ meta tag to your page.',
        ],
        'nofollow' => [
            'display' => 'Do not follow',
            'instructions' => 'This will add the _nofollow_ meta tag to your page.',
        ],
        'noarchive' => [
            'display' => 'Do not archive',
            'instructions' => 'This will add the _noarchive_ meta tag to your page.',
        ],
        'canonical_url' => [
            'display' => 'Canonical URL',
            'instructions' => 'You can use Antlers expression here.',
        ]
    ]
];
