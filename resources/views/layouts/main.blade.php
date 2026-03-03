<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Health')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <style>
  :root{
    --blue-1:#0b5ed7;
    --blue-2:#2b7cff;
    --blue-3:#eaf3ff;
    --blue-4:#f6fbff;
  }
  body{ background: var(--blue-4); }
  .hero-blue{
    background: linear-gradient(135deg, var(--blue-1), var(--blue-2));
    color: #fff;
  }
  .hero-badge{ color:#0b5ed7; }
  .hero-img{ max-height: 340px; object-fit: cover; }
  .card-soft{ background: #fff; border-radius: 16px; }
  .info-box{ background: var(--blue-3); }
  .icon-dot{
    width: 10px; height: 10px; margin-top: 7px;
    border-radius: 999px; background: var(--blue-1); flex: 0 0 10px;
  }
    .register-wrap{
    background: linear-gradient(135deg, var(--blue-1), var(--blue-2));
  }
</style>
</head>

<body>
    <main class="main mt-3">
        <!-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}">Logo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dashboard</a>
                    </li>
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="#">Dashboard</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                        @endif
                    @endif
                </ul>
                </div>
            </div>
        </nav> -->
        <div class="container">

                <!-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                         @foreach ($errors->all() as $error) -->
                                <!-- <li>{{ $error }}</li> -->
                            <!-- @endforeach -->
                        <!-- </ul>
                    </div>
                @endif  -->

                @if (session('succes'))
                <div class="alert alert-succes">
                    {{ session('success') }}
                </div>
            
            @endif
            @yield('content')
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>