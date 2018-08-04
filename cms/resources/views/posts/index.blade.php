@extends ('layouts.layout')

@section('content')
        <!-- Latest Posts -->        
          <div class="container">
            <div class="row">
              <!-- post -->
            @foreach ($posts as $post)
                @include('posts.post')
            @endforeach
              <nav aria-label="Page navigation example">
                <ul class="pagination pagination-template d-flex justify-content-center">
                  <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-left"></i></a></li>
                  <li class="page-item"><a href="#" class="page-link active">1</a></li>
                  <li class="page-item"><a href="#" class="page-link">2</a></li>
                  <li class="page-item"><a href="#" class="page-link">3</a></li>
                  <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-right"></i></a></li>
                </ul>
              </nav>
              </div>
          </div>
@endsection