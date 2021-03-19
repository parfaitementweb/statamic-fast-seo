@extends('statamic::layout')

@section('content')
    <breadcrumbs :crumbs='@json($crumbs)'></breadcrumbs>

    <h1 class="mt-1 mb-2 flex items-center">
        <div>{{ __('statamic-fast-seo::cp.dashboard.title') }}</div>
        <div class="ml-auto"><a href="{{ cp_route('statamic-fast-seo.settings.index') }}" class="btn btn-primary">{{ __('statamic-fast-seo::cp.dashboard.button') }}</a></div>

    </h1>

    <div class="bg-white overflow-hidden shadow rounded-lg">
        <div class="px-3 py-4 sm:p-4">
            {!! __('statamic-fast-seo::cp.dashboard.introduction') !!}
        </div>
    </div>

    @include('statamic-fast-seo::cp.partials.code', ['title' => 'Meta Title', 'code' => '<title>@{{ fast-seo:title }}</title>'])
    @include('statamic-fast-seo::cp.partials.code', ['title' => 'Meta Description', 'code' => '<meta name="description" content="@{{ fast-seo:description }}">'])
    @include('statamic-fast-seo::cp.partials.code', ['title' => 'Meta Robots', 'code' => '<meta name="robots" content="@{{ fast-seo:robots }}" />'])
    @include('statamic-fast-seo::cp.partials.code', ['title' => 'Alternates locales', 'code' => '@{{ fast-seo:locales }}\n    <link rel="alternate" hreflang="@{{ handle }}" href="@{{ url }}" />\n@{{ /fast-seo:locales }}'])
    @include('statamic-fast-seo::cp.partials.code', ['title' => 'Canonical URL', 'code' => '<link rel="canonical" href="@{{ fast-seo:canonical }}" />'])
    @include('statamic-fast-seo::cp.partials.code', ['title' => 'Open Graph Tags', 'code' => '<meta property="og:locale" content="@{{ fast-seo:locale }}" />\n<meta property="og:type" content="website" />\n<meta property="og:title" content="@{{ fast-seo:title }}" />\n<meta property="og:description" content="@{{ fast-seo:description }}" />\n<meta property="og:url" content="@{{ fast-seo:canonical }}" />\n@{{ fast-seo:og_image }}\n<meta property="og:site_name" content="@{{ site:name }}" />\n'])
    @include('statamic-fast-seo::cp.partials.code', ['title' => 'Twitter Card', 'code' => '<meta name="twitter:card" content="summary_large_image" />\n<meta name="twitter:site" content="@{{ fast-seo:twitter_handle }}" />\n<meta name="twitter:title" content="@{{ fast-seo:title }}" />\n<meta name="twitter:description" content="@{{ fast-seo:description }}" />\n@{{ fast-seo:twitter_image }}'])
    @include('statamic-fast-seo::cp.partials.code', ['title' => 'Extra code', 'code' => '@{{ fast-seo:extra }}'])

    @include('statamic-fast-seo::cp.partials.footer')

@stop
