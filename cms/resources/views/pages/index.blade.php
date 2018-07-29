@extends ('layouts.layout')

@section('content')
        <div class="container">
            <div class="row">
              <!-- post -->
            @foreach ($pages as $page)
                @include('pages.page')
            @endforeach

            </div>
          </div>
@endsection