{{-- Category Modal --}}
<div class="modal fade modal-black" id="addCategoryModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center my-2">
                <button class="close" data-dismiss="modal" type="button" aria-hidden="true">
                    <i class="tim-icons icon-simple-remove text-white"></i>
                </button>
                <div class="text-muted ml-auto mr-auto text-center">
                    <h3 class="mb-0">Add Category</h3>
                </div>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="{{ route('category.store') }}">
                    @csrf
                    <div class="form-group mb-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-gamepad"></i></span>
                            </div>
                            <input class="form-control" id="name" name="name" type="text" placeholder="Category">
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
                    <div class="text-center">
                        <button class="btn btn-primary my-4" type="submit">{{ __('Add Category') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- End Login Modal --}}
