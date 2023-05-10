<!-- Google Fonts -->
<link
    href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i"
    rel="stylesheet">
@section('content')
<div class="full-screen-container">
    <div class="login-container">
        <h3 class="login-title">Join With Rtech</h3>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="row">
                <label for="name" class="col-form-label">{{ __('Name') }}</label>

                <div class="">
                    <input id="name" type="text" class="input-group form-control @error('name') is-invalid @enderror"
                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <label for="email" class="col-form-label">{{ __('Email Address')
                    }}</label>

                <div class="">
                    <input id="email" type="email" class="input-group form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <label for="password" class="col-form-label">{{ __('Password')
                    }}</label>

                <div class="">
                    <input id="password" type="password"
                        class="input-group form-control @error('password') is-invalid @enderror" name="password"
                        required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <label for="password-confirm" class="col-form-label">{{ __('Confirm
                    Password') }}</label>

                <div class="">
                    <input id="password-confirm" type="password" class="input-group form-control"
                        name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <div class="">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
                <div class="mx-2">
                    <a href="{{ route('dashboard.index') }}" class="btn btn-warning">
                        Cancel
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

<style>
    body {
        font-family: "Poppins", sans-serif;
    }

    .full-screen-container {
        background-image: url('assets/images/background_1.jpg');
        height: 100vh;
        width: 100vw;
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .login-container {
        background-color: hsla(201, 100%, 6%, 0.6);
        padding: 50px 30px;
        min-width: 400px;
        width: 50%;
        max-width: 600px;
    }

    .login-title {
        color: #fff;
        text-align: center;
        margin: 0;
        margin-bottom: 40px;
        font-size: 2.5em;
        font-weight: normal;
    }

    .input-group {
        display: flex;
        flex-direction: column;
        margin-bottom: 20px;
    }

    .input-group label {
        color: #fff;
        font-weight: lighter;
        font-size: 1.5em;
        margin-bottom: 7px;
    }

    .input-group input {
        font-size: 1.5em;
        padding: 0.1em 0.25em;
        background-color: hsla(201, 100%, 91%, 0.3);
        border: 1px solid hsl(201, 100%, 6%);
        outline: none;
        border-radius: 5px;
        color: #fff;
        font-weight: lighter;
    }

    .input-group input:focus {
        border: 1px solid hsl(201, 100%, 50%);
    }

    .login-button {
        padding: 10px 30px;
        width: 100%;
        border-radius: 5px;
        background: hsla(201, 100%, 50%, 0.1);
        border: 1px solid hsl(201, 100%, 50%);
        outline: none;
        font-size: 1.5em;
        color: #fff;
        font-weight: lighter;
        margin-top: 20px;
        cursor: pointer;
    }

    .login-button:hover {
        background-color: hsla(201, 100%, 50%, 0.3);
    }

    .login-button:focus {
        background-color: hsla(201, 100%, 50%, 0.5);
    }
</style>