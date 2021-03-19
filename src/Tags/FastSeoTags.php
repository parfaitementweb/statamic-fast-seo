<?php

namespace Parfaitementweb\StatamicFastSeo\Tags;

use Parfaitementweb\StatamicFastSeo\Blueprints\Settings;
use Statamic\Facades\Entry;
use Statamic\Facades\Parse;
use Statamic\Facades\Site;
use Statamic\Tags\Tags;

class FastSeoTags extends Tags
{
    protected static $handle = 'fast-seo';
    protected $defaults;

    public function __construct()
    {
        $this->defaults = Settings::augmentedValues();
    }

    public function title()
    {
        $this->context = $this->context->merge([
            'title_separator' => $this->defaults['title_separator']->raw() ?? '|',
            'ignore_site_name' => $this->defaults['ignore_site_name']->value() ?? false,
            'default_og_image' => $this->defaults['default_og_image']->value(),
            'site_name' => $this->defaults['site_name']->value() ?? config('app.name'),
        ]);

        return Parse::template($this->defaults['title_formula']->raw(), $this->context);
    }

    public function description()
    {
        return Parse::template($this->defaults['description_formula']->raw(), $this->context);
    }

    public function name()
    {
        $this->context = $this->context->merge([
            'site_name' => $this->defaults['site_name']->value(),
        ]);

        return Parse::template($this->defaults['name_formula']->raw(), $this->context);
    }

    public function ogImage()
    {
        $this->context = $this->context->merge([
            'default_og_image' => $this->defaults['default_og_image']->value(),
        ]);

        return Parse::template($this->defaults['og_image_formula']->raw(), $this->context);
    }

    public function twitterHandle()
    {
        return $this->defaults['twitter_handle']->raw();
    }

    public function twitterImage()
    {
        $this->context = $this->context->merge([
            'default_og_image' => $this->defaults['default_og_image']->value(),
            'twitter_handle' => $this->defaults['twitter_handle']->value(),
        ]);

        return Parse::template($this->defaults['twitter_image_formula']->raw(), $this->context);
    }

    public function robots()
    {
        $directives = [];

        if ($this->context->value('noindex')) {
            $directives[] = 'noindex';
        }

        if ($this->context->value('nofollow')) {
            $directives[] = 'nofollow';
        }

        if ($this->context->value('noarchive')) {
            $directives[] = 'noarchive';
        }

        return empty($directives) ? 'all' : implode(', ', $directives);
    }

    public function locale()
    {
        if (! isset($this->context['id'])) {
            return null;
        }

        $entry = Entry::find($this->context['id']);

        if (! $entry) {
            return null;
        }

        return Site::get($entry->locale())->locale();
    }

    public function locales()
    {
        if (! isset($this->context['id'])) {
            return null;
        }

        $entry = Entry::find($this->context['id']);

        if (! $entry) {
            return null;
        }

        $locales = [];
        foreach ($entry->sites() as $locale) {
            if ($alternate = $entry->in($locale)) {
                $locales[] = [
                    'handle' => Site::get($locale)->locale(),
                    'url' => $alternate->absoluteUrl(),
                ];
            }
        }

        return $locales;
    }

    public function canonical()
    {
        return Parse::template($this->defaults['canonical_formula']->raw(), $this->context);
    }

    public function extra()
    {
        return $this->defaults['extra']->value() ?? '';
    }
}
