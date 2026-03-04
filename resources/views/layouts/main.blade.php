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
    {{-- NAV тільки для залогінених і тільки на dashboard --}}
    @auth
        @if (Route::is('dashboard'))
            <nav class="navbar navbar-expand-lg bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand fw-semibold" href="{{ route('dashboard') }}">Health</a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="topNav">
                        <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                            <li class="nav-item">
                                <span class="nav-link">{{ auth()->user()->name }}</span>
                            </li>
                            <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-link nav-link p-0">Logout</button>
                            </form>
                        </ul>
                    </div>
                </div>
            </nav>
        @endif
    @endauth

    <main class="main mt-3">
        <div class="container">

            {{-- повідомлення успіху (виправив succes/succes -> success) --}}
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @yield('content')
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>