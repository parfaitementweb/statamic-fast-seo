<?php

namespace Parfaitementweb\StatamicFastSeo\Traits;

use Statamic\Facades\File;
use Statamic\Facades\YAML;

trait Savable
{
    public static function values()
    {
        return collect(YAML::file(__DIR__ . '/../content/' . static::$filename)->parse())
            ->merge(YAML::file(static::path())->parse())
            ->all();
    }

    public static function augmentedValues()
    {
        return static::blueprint()
            ->fields()
            ->addValues(static::values())
            ->augment()
            ->values();
    }

    public static function save(array $items)
    {
        File::put(static::path(), YAML::dump($items));
    }

    protected static function path()
    {
        return base_path('content/' . static::$filename);
    }
}
