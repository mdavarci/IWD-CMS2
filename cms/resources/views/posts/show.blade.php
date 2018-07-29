@extends('layouts.layout')

@section('content')
		<div class="container">
		 <div class="post-single">
			<div class="post-thumbnail"><img src="/img/blog-post-3.jpeg" alt="..." class="img-fluid"></div>
			 	<div class="post-details">
			<h1>{{$post->title}}</h1>

			 <div class="post-footer d-flex align-items-center flex-column flex-sm-row"><a href="#" class="author d-flex align-items-center flex-wrap">
                    <div class="avatar"><img src="/img/avatar-1.jpg" alt="..." class="img-fluid"></div>
                    <div class="title"><span>{{$post->getPosterUserName()}}</span></div></a>
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
                  <p class="lead">{{$post->body}}</p>
                </div>
		

	<div class="post-comments">           
		<div class="comment">
			<ul class="list-group">
			@foreach ($post->comments as $comment)
				<li class="list-group-item">
					<strong>
						<div class="comment-header d-flex justify-content-between">
                      <div class="user d-flex align-items-center">
                        <div class="image"><img src="/img/user.svg" alt="..." class="img-fluid rounded-circle" style="width:75px; margin-right:5px;"></div>
                        <div class="title"><strong>{{$comment->getCommenterUserName()}}</strong>&nbsp;<span class="date">  {{$comment->created_at->diffForHumans()}}:&nbsp;</span></div>
                      </div>
                    </div>
						
					</strong>
					<div class="comment-body">
                      <p>{{$comment->body}}</p>
                    </div>
					
				</li>
				<br>

				<form method="POST" action="{{ $post->path() }}/{{ $comment->path() }}">
					@csrf
					{{ method_field('PUT') }}

						 <div class="form-group">
										<textarea name="body" placeholder="Your comment here." class="form-control">{{$comment->body}}</textarea>
						</div>
						<div class="form-group">
										<button type="submit" class="btn btn-primary">Edit comment</button>
						</div>
				</form>


				<form method="POST" action="{{ $post->path() }}/{{ $comment->path() }}">
					@csrf
					{{ method_field('DELETE') }}
						<div class="form-group">
										<button type="submit" class="btn btn-primary">Delete comment</button>
						</div>
				</form>
			@endforeach
			</ul>
		</div>
	</div>
		         <div class="add-comment">
                  <header>
                    <h3 class="h6">Leave a comment</h3>
                  </header>

                  <form method="POST" action="{{ $post->path() }}/comments">
                  	@csrf
                    <div class="row">
                          
                      <div class="form-group col-md-12">
                        <textarea name="body" placeholder="Type your comment" class="form-control"></textarea>
                      </div>

                      <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-secondary">Submit comment</button>
                      </div>
                    </div>
                  </form>
                  @include('layouts.errors')
                </div>
            </div>
        </div>
	</div>
	

@endsection