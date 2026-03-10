@extends('layouts.main')

@section('title', 'Відновлення пароля')

@section('content')
<div class="row justify-content-center">
  <div class="col-12 col-md-8 col-lg-6">

    <div class="p-4 p-md-5 rounded-4 shadow-sm register-wrap">
      <div class="text-center mb-4">
        <h1 class="h3 fw-bold text-white mb-1">Відновлення пароля</h1>
        <p class="text-white-50 mb-0">
          Введіть email, і ми надішлемо вам посилання для скидання пароля
        </p>
      </div>

      <div class="bg-white p-4 rounded-4 shadow-sm">
        <form action="{{ route('password.email') }}" method="post" novalidate>
          @csrf

          @if (session('status'))
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
          @endif

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

          <button type="submit" class="btn btn-primary btn-lg w-100">
            Надіслати посилання
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