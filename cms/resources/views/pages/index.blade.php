@extends ('layouts.layout')

@section('content')
        <div class="container">
            <div class="row">
              <!-- post -->
            @foreach ($pages as $page)
	            @if ($page->place === 2)
	                @include('pages.page')
	            @endif
            @endforeach

            </div>
          </div>
@endsection