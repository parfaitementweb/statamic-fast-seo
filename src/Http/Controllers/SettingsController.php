<?php

namespace Parfaitementweb\StatamicFastSeo\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Statamic\Support\Arr;
use Statamic\CP\Breadcrumbs;
use Parfaitementweb\StatamicFastSeo\Blueprints\Settings;

class SettingsController extends Controller
{
    public function index()
    {
        $blueprint = Settings::blueprint();
        $data = Settings::values();

        $fields = $blueprint->fields()->addValues($data)->preProcess();

        return view('statamic-fast-seo::cp.settings', [
            'blueprint' => $blueprint->toPublishArray(),
            'action'=> cp_route('statamic-fast-seo.settings.update') ,
            'meta' => $fields->meta(),
            'title' => 'Fast SEO | General Settings',
            'values' => $fields->values(),
        ]);
    }

    public function update(Request $request)
    {
        $blueprint = Settings::blueprint();

        $fields = $blueprint->fields()->addValues($request->all());

        $fields->validate();

        $values = Arr::removeNullValues($fields->process()->values()->all());

        Settings::save($values);
    }

    public function dashboard()
    {
        $crumbs = Breadcrumbs::make([
            ['text' => __('statamic-fast-seo::cp.dashboard.dashboard'), 'url' => cp_route('statamic-fast-seo.dashboard')],
            ['text' => __('statamic-fast-seo::cp.settings'), 'url' => cp_route('statamic-fast-seo.settings.index')],
        ]);

        return view('statamic-fast-seo::cp.dashboard', [
            'title' => __('statamic-fast-seo::cp.dashboard.title'),
            'crumbs' => $crumbs,
        ]);
    }

}
