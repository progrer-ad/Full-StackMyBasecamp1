<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session('error') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="login">
        <div class="asos">
            <div class="title">
                <h1>Sign up</h1>
            </div>
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="input-b">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Ismingizni kirting . . ." name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>
                <div class="input-b">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Mailingizni kiriting . . ." name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>
                <div class="input-b">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Parol yarating . . ." name="password" required autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>
                <div class="input-b">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Parolni takrorlang . . ." required autocomplete="new-password">
                </div>
                <div class="input-b">
                    <input class="sub" type="submit" value="Sign up">
                </div>
            </form>
            <div class="input-b">
                <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
            </div>
        </div>
    </div>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
