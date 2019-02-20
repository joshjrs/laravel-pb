@extends('layouts.admin')


@section('title')
	New Post
@endsection

@section('content')
	<div class="content">
		<div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-light">
                            New Post
                        </div>

                        @if(Session::has('success'))
                        	<div class="alert alert-success">
                        		{{ Session::get('success') }}
                        	</div>
                        @endif

                        @if($errors->any())
                        	<div class="alert alert-danger">
                        		<ul>
                        			@foreach($errors->all() as $error)
                        				<li>{{ $error }}</li>
                        			@endforeach
                        		</ul>
                        	</div>
                        @endif

                        <form action="{{ route('createPost') }}" method="POST">
                        	@csrf
	                        <div class="card-body">
	                            <div class="row">
	                                <div class="col-md-8">
	                                    <div class="form-group">
	                                        <label for="normal-input" class="form-control-label">Title</label>
	                                        <input id="normal-input" name="title" class="form-control" placeholder="Post Title">
	                                    </div>
	                                </div>
	                            </div>

	                            <div class="row mt-4">
	                                <div class="col-md-8">
	                                    <div class="form-group">
	                                        <label for="placeholder-input" class="form-control-label">Content</label>
	                                        <textarea class="form-control" name="content" cols="30" rows="10" placeholder="Post Content"></textarea>	
	                                    </div>
	                                </div>
	                            </div>
	                            <button type="submit" class="btn btn-success">Create Post</button>
	                        </div>
	                    </form>
                    </div>
                </div>
            </div>
        </div>
	</div>
@endsection