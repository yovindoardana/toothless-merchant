{{-- Login Modal --}}
<div class="modal fade modal-black" id="modalOrder{{ $game->id }}" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center my-2">
                <button class="close" data-dismiss="modal" type="button" aria-hidden="true">
                    <i class="tim-icons icon-simple-remove text-white"></i>
                </button>
                <h4 class="title title-up">{{ $game->name }}</h4>
            </div>
            <form action="{{ route('account.index') }}" method="GET">
                @csrf
                <div class="modal-body">
                    <div class="text-left">
                        <div class="my-2">
                            <label class="form-label" for="priceColumn{{ $game->id }}">Diamond</label>
                            <select class="form-control" id="priceColumn{{ $game->id }}" name="selectedProduct" data-size="7" data-style="btn btn-primary btn-simple" title="Single Select" tabindex="-98" onchange="selectPrice({{ $game->id }})">
                                <option selected=""> Please Wait </option>
                            </select>
                        </div>
                        <div class="my-2">
                            <label class="form-label" for="username">Username</label>
                            <input class="form-control" name="username" type="text">
                        </div>
                        <div class="my-2">
                            <label class="form-label" for="serverGame">Server</label>
                            <input class="form-control" name="serverGame" type="text">
                            <input class="form-control" name="code" type="hidden" value="{{ $game->description }}">
                            <input class="form-control" id="price{{ $game->id }}" name="price" type="hidden">
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-conntent-center">
                    <button class="btn btn-danger" data-dismiss="modal" type="button">Close</button>
                    <button class="btn btn-primary" type="submit">Pilih Pembayaran</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- End Login Modal --}}
