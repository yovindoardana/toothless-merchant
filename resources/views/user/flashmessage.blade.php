@if (session()->has('success'))
    <div class="alert alert-success mt-2" role="alert">
        <button class="close" data-bs-dismiss="alert" type="button" ariahidden="true">&times;</button>
        {{ session('success') }}
    </div>
@elseif(session()->has('error'))
    <div class="alert alert-warning mt-2" role="alert">
        <button class="close" data-bs-dismiss="alert" type="button" ariahidden="true">&times;</button>
        {{ session('error') }}
    </div>
@elseif($errors->any())
    <div class="alert alert-danger mt-2" role="alert">
        <button class="close" data-bs-dismiss="alert" type="button" ariahidden="true">&times;</button>
        Masukkan Data dengan benar
    </div>
@endif
