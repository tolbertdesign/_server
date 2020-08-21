@props(['card' => 'summary_large_image', 'title', 'description', 'image' => false])

<meta name="twitter:card" content="{{ $card }}" />
<meta name="twitter:site" content="@design_coder" />

<meta property="og:title" content="{{ $title }}" />
<meta property="og:description" content="{{ $description }}" />

@if ($image)
    <meta property="og:image" content="{{ $image }}" />
@endif

<meta property="og:url" content="{{ url()->current() }}" />
