@extends('admin.template')

@section('main')

    <div class="container">
     <div class="forms">
	     <div class="xs">
  	       <h3>Create Game</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" action="{{ route('game.update', $data->id) }}" method="post">
							@method('put')
                            @csrf
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Game Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control @error('name') is-invalid @enderror" id="focusedinput" name="name"
										value="{{ $data->name }}">
									</div>
								</div>
							    <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Description</label>
									<div class="col-sm-8">
										<input type="text" class="form-control @error('description') is-invalid @enderror" id="focusedinput" name="description"
										value="{{ $data->description }}">
									</div>
								</div>
							    <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Category</label>
									<div class="col-sm-8">
                                        <select class="form-select @error('category_id') is-invalid @enderror" aria-label="Default select example" name="category_id">
                                        @foreach($category as $item)
                                          <option value="{{ $item->id }}" @selected($data->category_id==$item->id)>{{ $item->name }}</option>
                                        @endforeach
                                        </select>
									</div>
                                <div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">API - Code</label>
									<div class="col-sm-8">
										<input type="text" class="form-control @error('api_code') is-invalid @enderror" id="focusedinput" name="api_code"
										value="{{ $data->api_code }}">
									</div>
								</div>
								</div>
                                <button type="submit" class="btn btn-primary">Submit</button>
							</form>
                    </div>
                </div>

@endsection