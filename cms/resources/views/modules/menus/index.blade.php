@extends ('layouts.layout')

@section('content')
  <div class="container">
    <span><a class="btn btn-sm btn-outline-secondary" href="/pages/create">Create new page item</a></span>
  </div>
    <div class="container">
      <div class="row">
        <!-- post -->
        @foreach ($pages as $page)
          @include('pages.page')
            <span><a class="btn btn-sm btn-outline-secondary" href="{{ $page->path() }}/edit">Edit page</a></span>
            <form method="POST" action="{{ $page->path() }}">
    					@csrf
    					{{ method_field('DELETE') }}
    						<div class="form-group">
    								<button type="btn btn-sm btn-outline-secondary" class="btn btn-primary">Delete</button>
    						</div>
    		    </form>
        @endforeach
      </div>
    </div>
@endsection
