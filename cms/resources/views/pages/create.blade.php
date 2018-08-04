@extends('layouts.layout')

@section('content')
	<div class="col-md-8 blog-main">
		<h1>Publish a page</h1>

		<hr>

		<form method="POST" action="/pages">

			@csrf

		 	<div class="form-group">
			    <label for="title">Title</label>
			    <input type="text" class="form-control" id="title" name="title">
			 	</div>

		  	<div class="form-group">
			    <label for="body">Body</label>
				<textarea id="body" name="body" class="form-control"></textarea>		  
			</div>

			<div class="form-group">
              <select name="place" id="place" class="form-control">
                  <option value="">Select place</option>
                  <option value="1">Menu</option>
                  <option value="2">Pages</option>
              </select>
            </div>

			<div class="form-group">
		 		<button type="submit" class="btn btn-primary">Publish</button>
			</div>
		</form>

		@include('layouts.errors')
		
	</div>
@endsection