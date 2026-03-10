@extends('layouts.main')

@section('title', 'Reset Password')

@section('content')
<div class="row justify-content-center">
  <div class="col-12 col-md-8 col-lg-6">

    <div class="p-4 p-md-5 rounded-4 shadow-sm register-wrap">
      <div class="text-center mb-4">
        <h1 class="h3 fw-bold text-white mb-1">Скинути пароль</h1>
        <p class="text-white-50 mb-0">Введіть новий пароль для вашого акаунта</p>
      </div>

      <div class="bg-white p-4 rounded-4 shadow-sm">
        <form action="{{ route('password.update') }}" method="post" novalidate>
          @csrf

          <input type="hidden" name="token" value="{{ $token }}">

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
              value="{{ old('email', $email) }}"
            >
            @error('email')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Новий пароль</label>
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

          <div class="mb-4">
            <label for="password_confirmation" class="form-label">Підтвердіть пароль</label>
            <input
              name="password_confirmation"
              type="password"
              class="form-control @error('password_confirmation') is-invalid @enderror"
              id="password_confirmation"
              placeholder="••••••••"
            >
            @error('password_confirmation')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <button type="submit" class="btn btn-primary btn-lg w-100">
            Зберегти новий пароль
          </button>

          <div class="text-center mt-3">
            <a href="{{ route('login') }}" class="link-primary text-decoration-none">
              Повернутися до входу
            </a>
          </div>
        </form>
      </div>
    </div>

  </div>
</div>
@endsection