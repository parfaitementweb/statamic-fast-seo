<?php

namespace Parfaitementweb\StatamicFastSeo\Blueprints;

use Parfaitementweb\StatamicFastSeo\Traits\Savable;
use Statamic\Facades\Blueprint;

class Settings
{
    use Savable;

    static $filename = 'fast-seo.yaml';

    public static function blueprint()
    {
        return Blueprint::make()->setContents([
            'sections' => [
                'main' => [
                    'display' => 'Main',
                    'fields' => [
                        [
                            'handle' => 'meta_section',
                            'field' => [
                                'display' => __('statamic-fast-seo::cp.blueprint.meta_section.display'),
                                'instructions' => __('statamic-fast-seo::cp.blueprint.meta_section.instructions'),
                                'type' => 'section',
                                'listable' => 'hidden',
                            ],
                        ],
                        [
                            'handle' => 'title_separator',
                            'field' => [
                                'display' => __('statamic-fast-seo::cp.blueprint.title_separator.display'),
                                'instructions' => __('statamic-fast-seo::cp.blueprint.title_separator.instructions'),
                                'type' => 'select',
                                'default' => '-',
                                'options' => [
                                    '|',
                                    '-',
                                    '~',
                                    '•',
                                    '/',
                                    '//',
                                    '»',
                                    '«',
                                    '>',
                                    '<',
                                    '*',
                                    '+',
                                ],
                                'width' => 50,
                            ],
                        ],
                        [
                            'handle' => 'site_name',
                            'field' => [
                                'display' => __('statamic-fast-seo::cp.blueprint.site_name.display'),
                                'instructions' => __('statamic-fast-seo::cp.blueprint.site_name.instructions'),
                                'type' => 'text',
                                'placeholder' => config('app.name'),
                                'width' => 50,
                            ],
                        ],
                        [
                            'handle' => 'ignore_site_name',
                            'field' => [
                                'display' => __('statamic-fast-seo::cp.blueprint.ignore_site_name.display'),
                                'instructions' => __('statamic-fast-seo::cp.blueprint.ignore_site_name.instructions'),
                                'type' => 'toggle',
                                'width' => 100,
                            ],
                        ],
                        [
                            'handle' => 'default_og_image',
                            'field' => [
                                'display' => __('statamic-fast-seo::cp.blueprint.default_og_image.display'),
                                'instructions' => __('statamic-fast-seo::cp.blueprint.default_og_image.instructions'),
                                'type' => 'assets',
                                'container' => 'assets',
                                'max_files' => 1,
                                'width' => 100,
                            ],
                        ],
                        [
                            'handle' => 'twitter_handle',
                            'field' => [
                                'display' => __('statamic-fast-seo::cp.blueprint.twitter_handle.display'),
                                'instructions' => __('statamic-fast-seo::cp.blueprint.twitter_handle.instructions'),
                                'type' => 'text',
                                'placeholder' => '@parfaitementweb',
                                'width' => 50,
                            ],
                        ],
                        [
                            'handle' => 'extra',
                            'field' => [
                                'display' => __('statamic-fast-seo::cp.blueprint.extra.display'),
                                'instructions' => __('statamic-fast-seo::cp.blueprint.extra.instructions'),
                                'type' => 'code',
                                'width' => 100,
                            ],
                        ],
                    ]
                ],
                'formulas' => [
                    'display' => __('statamic-fast-seo::cp.blueprint.formula_section.display'),
                    'fields' => [
                        [
                            'handle' => 'formula_section',
                            'field' => [
                                'display' => __('statamic-fast-seo::cp.blueprint.formula_section.display'),
                                'instructions' => __('statamic-fast-seo::cp.blueprint.formula_section.instructions'),
                                'type' => 'section',
                                'listable' => 'hidden',
                            ],
                        ],
                        [
                            'handle' => 'title_formula',
                            'field' => [
                                'display' => __('statamic-fast-seo::cp.blueprint.title_formula.display'),
                                'instructions' => __('statamic-fast-seo::cp.blueprint.title_formula.instructions'),
                                'type' => 'code',
                                'width' => 100,
                                'line_numbers' => false
                            ],
                        ],
                        [
                            'handle' => 'description_formula',
                            'field' => [
                                'display' => __('statamic-fast-seo::cp.blueprint.description_formula.display'),
                                'instructions' => __('statamic-fast-seo::cp.blueprint.description_formula.instructions'),
                                'type' => 'code',
                                'width' => 100,
                                'line_numbers' => false
                            ],
                        ],
                        [
                            'handle' => 'canonical_formula',
                            'field' => [
                                'display' => __('statamic-fast-seo::cp.blueprint.canonical_formula.display'),
                                'instructions' => __('statamic-fast-seo::cp.blueprint.canonical_formula.instructions'),
                                'type' => 'code',
                                'width' => 100,
                                'line_numbers' => false
                            ],
                        ],
                        [
                            'handle' => 'og_image_formula',
                            'field' => [
                                'display' => __('statamic-fast-seo::cp.blueprint.og_image_formula.display'),
                                'instructions' => __('statamic-fast-seo::cp.blueprint.og_image_formula.instructions'),
                                'type' => 'code',
                                'width' => 100,
                                'line_numbers' => false
                            ],
                        ],
                        [
                            'handle' => 'twitter_image_formula',
                            'field' => [
                                'display' => __('statamic-fast-seo::cp.blueprint.twitter_image_formula.display'),
                                'instructions' => __('statamic-fast-seo::cp.blueprint.twitter_image_formula.instructions'),
                                'type' => 'code',
                                'width' => 100,
                                'line_numbers' => false
                            ],
                        ],
                        [
                            'handle' => 'name_formula',
                            'field' => [
                                'display' => __('statamic-fast-seo::cp.blueprint.name_formula.display'),
                                'instructions' => __('statamic-fast-seo::cp.blueprint.name_formula.instructions'),
                                'type' => 'code',
                                'width' => 100,
                                'line_numbers' => false,
                                'hidden' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ]);
    }

    public static function entryBlueprint()
    {
        return Blueprint::make()->setContents([
            'sections' => [
                'main' => [
                    'display' => 'Main',
                    'fields' => [
                        [
                            'handle' => 'title_section',
                            'field' => [
                                'display' => __('statamic-fast-seo::cp.entry_blueprint.title_section.display'),
                                'instructions' => __('statamic-fast-seo::cp.entry_blueprint.title_section.instructions'),
                                'type' => 'section',
                                'listable' => 'hidden',
                            ],
                        ],
                        [
                            'handle' => 'meta_title',
                            'field' => [
                                'display' => __('statamic-fast-seo::cp.entry_blueprint.meta_title.display'),
                                'instructions' => __('statamic-fast-seo::cp.entry_blueprint.meta_title.instructions'),
                                'type' => 'text',
                                'width' => 100,
                                'antlers' => true,
                                'localizable' => true,
                            ],
                        ],
                        [
                            'handle' => 'meta_description',
                            'field' => [
                                'display' => __('statamic-fast-seo::cp.entry_blueprint.meta_description.display'),
                                'instructions' => __('statamic-fast-seo::cp.entry_blueprint.meta_description.instructions'),
                                'type' => 'textarea',
                                'width' => 100,
                                'antlers' => true,
                                'localizable' => true,
                            ],
                        ],
                        [
                            'handle' => 'canonical_url',
                            'field' => [
                                'display' => __('statamic-fast-seo::cp.entry_blueprint.canonical_url.display'),
                                'instructions' => __('statamic-fast-seo::cp.entry_blueprint.canonical_url.instructions'),
                                'type' => 'text',
                                'placeholder' => '{{ link to="/acme-inc-url" absolute="true" }}',
                                'width' => 100,
                                'antlers' => true,
                                'localizable' => true,
                            ],
                        ],
                        [
                            'handle' => 'og_image',
                            'field' => [
                                'display' => __('statamic-fast-seo::cp.entry_blueprint.og_image.display'),
                                'instructions' => __('statamic-fast-seo::cp.entry_blueprint.og_image.instructions'),
                                'type' => 'assets',
                                'container' => $_ENV['FASTSEO_OG_IMAGE_CONTAINER'] ?? 'assets',
                                'max_files' => 1,
                                'width' => 100,
                                'localizable' => true,
                            ],
                        ],
                        [
                            'handle' => 'noindex',
                            'field' => [
                                'display' => __('statamic-fast-seo::cp.entry_blueprint.noindex.display'),
                                'instructions' => __('statamic-fast-seo::cp.entry_blueprint.noindex.instructions'),
                                'type' => 'toggle',
                                'width' => 33,
                                'localizable' => true,
                            ],
                        ],
                        [
                            'handle' => 'nofollow',
                            'field' => [
                                'display' => __('statamic-fast-seo::cp.entry_blueprint.nofollow.display'),
                                'instructions' => __('statamic-fast-seo::cp.entry_blueprint.nofollow.instructions'),
                                'type' => 'toggle',
                                'width' => 33,
                                'localizable' => true,
                            ],
                        ],
                        [
                            'handle' => 'noarchive',
                            'field' => [
                                'display' => __('statamic-fast-seo::cp.entry_blueprint.noarchive.display'),
                                'instructions' => __('statamic-fast-seo::cp.entry_blueprint.noarchive.instructions'),
                                'type' => 'toggle',
                                'width' => 33,
                                'localizable' => true,
                            ],
                        ],
                    ],
                ],
            ],
        ]);
    }
}
