<?php

namespace Parfaitementweb\StatamicFastSeo;

use Parfaitementweb\StatamicFastSeo\Tags\FastSeoTags;
use Parfaitementweb\StatamicFastSeo\Subscribers\EventSubscriber;
use Statamic\Facades\CP\Nav;
use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $routes = [
        'cp' => __DIR__ . '/../routes/cp.php',
    ];

    protected $tags = [
        FastSeoTags::class
    ];

    protected $subscribe = [
        EventSubscriber::class,
    ];

    public function boot()
    {
        parent::boot();

        $this->createNavigation();
    }

    protected function createNavigation()
    {
        Nav::extend(function ($nav) {
            $nav->tools('Fast SEO')
                ->route('statamic-fast-seo.dashboard')
                ->icon('seo-search-graph')
                ->active('fast-seo')
                ->children([
                    $nav->item(__('statamic-fast-seo::cp.dashboard.dashboard'))
                        ->route('statamic-fast-seo.dashboard'),
                    $nav->item(__('statamic-fast-seo::cp.settings'))
                        ->route('statamic-fast-seo.settings.index')
                ]);
        });
    }
}
