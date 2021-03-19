<?php

namespace Parfaitementweb\StatamicFastSeo\Subscribers;

use Parfaitementweb\StatamicFastSeo\Blueprints\Settings;
use Statamic\Events\EntryBlueprintFound;
use Statamic\Events\TermBlueprintFound;
use Statamic\Support\Str;

class EventSubscriber
{
    /**
     * Register the listeners for the subscriber.
     *
     * @param \Illuminate\Events\Dispatcher $events
     *
     * @return void
     */
    public function subscribe($events)
    {
        $events->listen(
            EntryBlueprintFound::class,
            [EventSubscriber::class, 'addFieldsToBlueprint']
        );

        $events->listen(
            TermBlueprintFound::class,
            [EventSubscriber::class, 'addFieldsToBlueprint']
        );
    }

    public function addFieldsToBlueprint($event)
    {
        $type = (Str::contains($event->blueprint->namespace(), 'taxonomies')) ? 'term' : 'entry';

        if (empty($event->$type)) {
            return null;
        }

        $blueprint = $event->blueprint;
        $blueprint_content = $blueprint->contents();

        $blueprint_content['sections']['fast_seo'] = [
            'display' => __('statamic-fast-seo::cp.tab_name'),
            'fields' => collect(Settings::entryBlueprint()->contents()['sections']['main']['fields'])->toArray()
        ];

        $blueprint->setContents($blueprint_content);
    }
}
