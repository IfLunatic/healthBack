@extends('layouts.main')

@section('title', 'Підтвердження email')

@section('content')
<div class="row justify-content-center">
  <div class="col-12 col-md-9 col-lg-7">

    <div class="p-4 p-md-5 rounded-4 shadow-sm register-wrap">
      <div class="text-center mb-4">
        <h1 class="h3 fw-bold text-white mb-1">Підтвердіть вашу пошту</h1>
        <p class="text-white-50 mb-0">
          Це потрібно, щоб захистити акаунт і мати доступ до функцій HealthBack
        </p>
      </div>

      <div class="bg-white p-4 rounded-4 shadow-sm">

        @if (session('status') === 'verification-link-sent')
          <div class="alert alert-success" role="alert">
            Ми повторно надіслали лист для підтвердження на вашу пошту ✅
          </div>
        @endif

        <div class="alert alert-info" role="alert">
          <div class="d-flex align-items-start gap-2">
            <div style="font-size: 1.25rem; line-height: 1;">📩</div>
            <div>
              <strong>Дякуємо за реєстрацію!</strong><br>
              Ми надіслали посилання для підтвердження на вашу email-адресу.
              Відкрийте лист і натисніть “Confirm / Verify”.
              <div class="mt-2 small">
                Якщо листа немає — перевірте <strong>Spam/Promotions</strong>.
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex flex-column flex-sm-row gap-2 align-items-stretch align-items-sm-center justify-content-between">
          <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="btn btn-primary btn-lg">
              Надіслати посилання ще раз
            </button>
          </form>

          <a href="{{ route('login') }}" class="btn btn-outline-primary btn-lg">
            Повернутися до входу
          </a>
        </div>

        <hr class="my-4">

        <div class="small text-muted">
          Порада: додайте нашу адресу відправника в контакти — тоді листи не потраплятимуть у спам.
        </div>

      </div>
    </div>

  </div>
</div>
@endsection