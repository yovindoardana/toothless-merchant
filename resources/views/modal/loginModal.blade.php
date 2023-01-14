{{-- Login Modal --}}
<div class="modal fade modal-black" id="modalSignIn" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center my-2">
                <button class="close" data-dismiss="modal" type="button" aria-hidden="true">
                    <i class="tim-icons icon-simple-remove text-white"></i>
                </button>
                <div class="text-muted ml-auto mr-auto text-center">
                    <h3 class="mb-0">Sign In</h3>
                </div>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="tim-icons icon-email-85"></i>
                                </span>
                            </div>
                            <input class="form-control @error('email') is-invalid @enderror" name="email" type="email" value="{{ old('email') }}" placeholder="{{ __('Email Address') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="tim-icons icon-key-25"></i>
                                </span>
                            </div>
                            <input class="form-control @error('password') is-invalid @enderror" name="password" type="password" placeholder="{{ __('Password') }}" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary my-4" type="submit">{{ __('Login') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- End Login Modal --}}
