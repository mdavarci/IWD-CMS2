@extends ('layouts.layout')

@section('content')

<div class="container">
<span><a class="btn btn-sm btn-outline-secondary" href="/pages/create">Create new page</a></span>

</div>

        <div class="container">
            <div class="row">
              <!-- post -->
            @foreach ($pages as $page)
                @include('pages.page')
                <span><a class="btn btn-sm btn-outline-secondary" href="{{ $page->path() }}/edit">Edit page</a></span>
            @endforeach

            </div>
          </div>
@endsection
