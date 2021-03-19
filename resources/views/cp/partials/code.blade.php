<div class="my-3 shadow">
    <div class="bg-white px-2 py-1 border-b border-gray-200">
        <h3>{{ $title }}</h3>
    </div>
    <pre class="m-0 rounded-none rounded-b"><code class="language-html"><div v-text="'{{ $code }}'"></div></code></pre>
</div>

@once
    @push('head')
        <link rel="stylesheet" href="https://unpkg.com/prismjs@1.23.0/themes/prism-okaidia.css">
    @endpush

    @section('scripts')
        <script src="https://unpkg.com/prismjs@1.23.0/components/prism-core.min.js"></script>
        <script src="https://unpkg.com/prismjs@1.23.0/plugins/autoloader/prism-autoloader.min.js"></script>
    @endsection
@endonce
