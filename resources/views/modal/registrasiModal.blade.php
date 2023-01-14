{{-- Registrasi Modal --}}
<div class="modal fade modal-black" id="modalRegistrasi" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <button class="close" data-dismiss="modal" type="button" aria-hidden="true">
                    <i class="tim-icons icon-simple-remove text-white"></i>
                </button>
                <div class="text-muted ml-auto mr-auto text-center">
                    <h3 class="mb-0">Registration</h3>
                </div>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="tim-icons icon-single-02"></i>
                                </span>
                            </div>
                            <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="{{ __('Name') }}">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="tim-icons icon-email-85"></i>
                                </span>
                            </div>
                            <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" type="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('Email Address') }}">

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
                            <input class="form-control @error('password') is-invalid @enderror" id="password" name="password" type="password" required autocomplete="new-password" placeholder="{{ __('Password') }}">

                            @error('password')
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
                            <input class="form-control" id="password-confirm" name="password_confirmation" type="password" required autocomplete="new-password" placeholder="{{ __('Confirm Password') }}">
                        </div>
                    </div>
                    <div class="form-check mt-3">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox">
                            <span class="form-check-sign"></span>
                            I agree to the
                            <a href="javascript:void(0)">terms and conditions</a>.
                        </label>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary my-4" type="submit">
                            {{ __('Sign Up') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- End Registrasi Modal --}}
