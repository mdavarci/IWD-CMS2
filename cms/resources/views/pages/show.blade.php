@extends ('layouts.layout')

@section('content')

      		<div class="container">
		 <div class="post-single">
			<div class="post-thumbnail"><img src="/img/blog-post-3.jpeg" alt="..." class="img-fluid"></div>
			 	<div class="post-details">
			<h1>{{$page->title}}</h1>

			 <div class="post-footer d-flex align-items-center flex-column flex-sm-row"><a href="#" class="author d-flex align-items-center flex-wrap">
                    <div class="avatar"><img src="/img/avatar-1.jpg" alt="..." class="img-fluid"></div>
                    <div class="title"><span>{{$page->getPosterUserName()}}</span></div></a>
                  <div class="d-flex align-items-center flex-wrap">       
                    <div class="date"><i class="icon-clock"></i> 2 months ago</div>
                    <div class="views"><i class="icon-eye"></i> 500</div>
                    <div class="comments meta-last"><i class="icon-comment"></i>12</div>
                  </div>
                </div>

                <div class="post-body">
                  <p class="lead"></p>
                </div>



			 <div class="post-body">
                  <p class="lead">{{$page->body}}</p>
                </div>


@endsection