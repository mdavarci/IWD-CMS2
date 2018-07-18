@extends('layouts.layout')

@section('content')

		  <div class="col-md-8 blog-main">
          
        
            @foreach ($menus as $menu)
                @include('modules.menus.menu')
            @endforeach

            <nav class="blog-pagination">
              <a class="btn btn-outline-primary" href="#">Older</a>
              <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
            </nav>

        </div><!-- /.blog-main -->
@endsection