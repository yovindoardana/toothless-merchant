@extends('admin.template')

@section('main')

     <div class="container">
     <div class="forms">
	     <div class="xs">
  	       <h3>Create Article</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" action="{{ url('article') }}" method="post" enctype="multipart/form-data">
                            @csrf
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Title</label>
									<div class="col-sm-8">
										<input type="text" class="form-control @error('title') is-invalid @enderror" id="focusedinput" name="title"
										value="{{ old('title') }}">
									</div>
								</div>
							    <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Author</label>
									<div class="col-sm-8">
										<input type="text" class="form-control @error('author') is-invalid @enderror" id="focusedinput" name="author"
										value="{{ old('author') }}">
									</div>
								</div>
                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Content</label>
									<div class="col-sm-8">
										<input type="text" class="form-control @error('content') is-invalid @enderror" id="focusedinput" name="content"
										value="{{ old('content') }}">
									</div>
								</div>
							    
                                <div class="form-group">
                                    <label for="focusedinput" class="col-sm-2 control-label">Image</label>
									<div class="col-sm-8">
                                        <input type="file" class="form-control-file" name="picture">
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                    </div>
								</div>
								</div>
                                <button type="submit" class="btn btn-primary">Submit</button>
							</form>
                    </div>
                </div>
@endsection