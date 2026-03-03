@extends('layouts.main')

@section('title', 'Register')

@section('content')
<div class="row justify-content-center">
  <div class="col-12 col-md-8 col-lg-6">

    <div class="p-4 p-md-5 rounded-4 shadow-sm register-wrap">
      <div class="text-center mb-4">
        <h1 class="h3 fw-bold text-white mb-1">Створити акаунт</h1>
        <p class="text-white-50 mb-0">Приєднуйтесь до HealthBack і починайте відстежувати свій прогрес</p>
      </div>

      <div class="bg-white p-4 rounded-4 shadow-sm">
        <form action="{{ route('user.store') }}" method="post" novalidate>
          @csrf

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
            <label for="name" class="form-label">Name</label>
            <input
              name="name"
              type="text"
              class="form-control @error('name') is-invalid @enderror"
              id="name"
              placeholder="Ваше ім’я"
              value="{{ old('name') }}"
            >
            @error('name')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
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
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input
              name="password_confirmation"
              type="password"
              class="form-control"
              id="password_confirmation"
              placeholder="••••••••"
            >
          </div>

          <button type="submit" class="btn btn-primary btn-lg w-100">
            Зареєструватися
          </button>

          <div class="text-center mt-3">
            <a href="{{ route('login') }}" class="link-primary text-decoration-none">
              Вже маєте акаунт? Увійти
            </a>
          </div>
        </form>
      </div>
    </div>

  </div>
</div>
@endsection