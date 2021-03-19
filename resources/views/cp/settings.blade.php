@extends('statamic::layout')

@section('content')
    <publish-form
        title="{{ $title }}"
        action="{{ $action }}"
        :blueprint='@json($blueprint)'
        :meta='@json($meta)'
        :values='@json($values)'
    ></publish-form>

    @include('statamic-fast-seo::cp.partials.footer')
@stop
