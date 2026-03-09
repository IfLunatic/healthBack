@extends('layouts.main')

@section('title', 'Login')

@section('content')
<div class="row justify-content-center">
  <div class="col-12 col-md-8 col-lg-6">

    <div class="p-4 p-md-5 rounded-4 shadow-sm register-wrap">
      <div class="text-center mb-4">
        <h1 class="h3 fw-bold text-white mb-1">Увійти</h1>
        <p class="text-white-50 mb-0">Увійдіть у HealthBack, щоб продовжити відстежувати свій прогрес</p>
      </div>

      <div class="bg-white p-4 rounded-4 shadow-sm">
        <form action="{{ route('login.auth') }}" method="post" novalidate>
          @csrf

          @if ($errors->any())
            <div class="alert alert-danger">
              @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
              @endforeach
            </div>
          @endif

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input
              name="email"
              type="email"
              class="form-control @error('email') is-invalid @enderror"
              id="email"
              placeholder="name@example.com"
              value="{{ old('email') }}"
            >
            @error('email')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Пароль</label>
            <input
              name="password"
              type="password"
              class="form-control @error('password') is-invalid @enderror"
              id="password"
              placeholder="••••••••"
            >
            @error('password')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3 form-check">
            <input
              name="remember"
              class="form-check-input"
              type="checkbox"
              value="1"
              id="remember"
              {{ old('remember') ? 'checked' : '' }}
            >
            <label class="form-check-label" for="remember">
              Запам’ятати мене
            </label>
          </div>

          <button type="submit" class="btn btn-primary btn-lg w-100">
            Увійти
          </button>

          <div class="text-center mt-3">
            <a href="{{ route('register') }}" class="link-primary text-decoration-none">
              Ще не маєте акаунта? Зареєструватися
            </a>
          </div>
        </form>
      </div>
    </div>

  </div>
</div>
@endsection