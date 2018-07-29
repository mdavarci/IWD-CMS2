@extends ('layouts.layout')

@section('content')

      		<div class="container">
		 <div class="post-single">
			<div class="post-thumbnail"></div>
			 	<div class="post-details">
			<h1>{{$page->title}}</h1>
                </div>

                



			 <div class="post-body">
                  <p class="lead">{{$page->body}}</p>
                </div>


@endsection