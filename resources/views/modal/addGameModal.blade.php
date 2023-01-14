{{-- Login Modal --}}
<div class="modal fade modal-black" id="addGameModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center my-2">
                <button class="close" data-dismiss="modal" type="button" aria-hidden="true">
                    <i class="tim-icons icon-simple-remove text-white"></i>
                </button>
                <div class="text-muted ml-auto mr-auto text-center">
                    <h3 class="mb-0">Add Game</h3>
                </div>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="{{ route('game.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-gamepad"></i></span>
                            </div>
                            <input class="form-control" id="name" name="name" type="text" placeholder="Game">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-info-circle"></i></span>
                            </div>
                            <input class="form-control" id="description" name="description" type="text" placeholder="Description">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-code"></i></span>
                            </div>
                            <input class="form-control" id="api_code" name="api_code" type="text" placeholder="API Code">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="tim-icons icon-image-02"></i></span>
                            </div>
                            <input class="form-control" id="image" name="image" type="file" placeholder="Image">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-clipboard"></i></span>
                            </div>
                            <select class="form-control" name="category_id" data-size="7" data-style="btn btn-primary btn-simple" title="Single Select">
                                <option class="option" disabled selected>Category</option>
                                @foreach ($categories as $category)
                                    <option class="form-label text-body my-3" value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary my-4" type="submit">{{ __('Add Game') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- End Login Modal --}}
