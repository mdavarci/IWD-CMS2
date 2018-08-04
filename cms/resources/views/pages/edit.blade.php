@extends('layouts.layout')

@section('content') 
	<div class="col-md-8 blog-main">
		<h1>Edit the page</h1>

		<hr>

		<form method="POST" action="/pages/{{$page->id}}">

			@csrf
			{{ method_field('PUT') }}

		 	<div class="form-group">
			    <label for="title">Title</label>
			    <input type="text" class="form-control" id="title" name="title" value="{{$page->title}}">
			 	</div>

		  	<div class="form-group">
			    <label for="body">Body</label>
				<textarea id="body" name="body" class="form-control">{{$page->body}}</textarea>		  
			</div>

			<div class="form-group">
              <select name="place" id="place" class="form-control">
                  <option value="">Select place</option>
                  <option value="1">Menu</option>
                  <option value="2">Pages</option>
              </select>
            </div>

			<div class="form-group">
		 		<button type="submit" class="btn btn-primary">Edit page</button>
			</div>
		</form>

		@include('layouts.errors')
		
	</div>
@endsection
