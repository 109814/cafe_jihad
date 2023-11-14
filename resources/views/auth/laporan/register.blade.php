<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card h-100">

    <div class="card-header">
        <h3>Tambah user</h3>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Nik -->
            <div class="mb-3">
                <label for="nik" class="form-label">{{ __('Nik') }}</label>
                <input id="nik" class="form-control" type="text" name="nik" value="{{ old('nik') }}" required autofocus autocomplete="nik">
                @if ($errors->has('nik'))
                    <span class="text-danger">{{ $errors->first('nik') }}</span>
                @endif
            </div>
            <!-- Name -->
            <div class="mb-3">
                <label for="name" class="form-label">{{ __('Name') }}</label>
                <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <!-- Email Address -->
            <div class="mb-3">
                <label for="email" class="form-label">{{ __('Email') }}</label>
                <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autocomplete="username">
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">{{ __('Password') }}</label>
                <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password">
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <!-- Confirm Password -->
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password">
                @if ($errors->has('password_confirmation'))
                    <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                @endif
            </div>
            <!-- Nomer HP -->
            <div class="mb-3">
                <label for="no_hp" class="form-label">{{ __('No HP') }}</label>
                <input id="no_hp" class="form-control" type="text" name="no_hp" value="{{ old('no_hp') }}" required autofocus autocomplete="no_hp">
                @if ($errors->has('no_hp'))
                    <span class="text-danger">{{ $errors->first('no_hp') }}</span>
                @endif
            </div>
            <div class="d-flex justify-content-end">
                <a class="text-sm text-gray-600 mt-3 me-3" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
            </div>
        </form>
    </div>
    </div>
    </div>
    </div>
</div>

