@auth
    // The user is authenticated.
@endauth

@guest
    // The user is not authenticated.
@endguest

@guest
    // The user is not authenticated.
@else
    // The user is authenticated.
@endguest

@if(view()->exists('first-view-name'))
    @include('first-view-name')
@else
    @include('second-view-name')
@endif

@includeFirst(['first-view-name', 'second-view-name']);

@if($post->hasComments())
    @include('posts.comments')
@endif
@includeWhen($post->hasComments(), 'posts.comments');


