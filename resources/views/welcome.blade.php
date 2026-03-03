@extends('layouts.main')

@section('title', 'Home page')

@section('content')
<div class="hero-blue p-4 p-md-5 rounded-4 shadow-sm mb-4">
  <div class="row align-items-center g-4">
    <div class="col-lg-7">
      <h1 class="display-6 fw-bold mb-3">Health — ваш персональний wellness-хаб</h1>
      <p class="lead mb-4">
        Система допомагає консолідувати дані про сон, активність, харчування та гідратацію, 
        показує тренди й формує зрозумілі, пояснювані інсайти без медичних діагнозів.
      </p>

      <div class="d-flex gap-2 flex-wrap">
        <a class="btn btn-primary btn-lg" href="{{ route('register') }}">Почати</a>
        <a class="btn btn-outline-light btn-lg border" href="{{ route('login') }}">Увійти</a>
      </div>
    </div>

    <div class="col-lg-5 text-center">
      <img
        
        src="{{ asset('images/hero-person.png') }}"
        alt="Людина, яка слідкує за добробутом"
      >
    </div>
  </div>
</div>

<div class="row g-3">
  <div class="col-md-6 col-lg-4">
    <div class="card border-0 shadow-sm h-100 card-soft">
      <div class="card-body">
        <h5 class="card-title">Єдине місце для даних</h5>
        <p class="card-text mb-0">
          Підтягуємо інформацію з різних джерел та даємо цілісну картину дня/тижня.
        </p>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-lg-4">
    <div class="card border-0 shadow-sm h-100 card-soft">
      <div class="card-body">
        <h5 class="card-title">Пояснювані інсайти</h5>
        <p class="card-text mb-0">
          Не просто графіки: система підсвічує закономірності й коротко пояснює “чому”.
        </p>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-lg-4">
    <div class="card border-0 shadow-sm h-100 card-soft">
      <div class="card-body">
        <h5 class="card-title">Мікро-цілі та nudges</h5>
        <p class="card-text mb-0">
          Маленькі досяжні кроки, які реально впровадити в щоденний ритм.
        </p>
      </div>
    </div>
  </div>
</div>

<hr class="my-4 opacity-25">

<div class="row g-4">
  <div class="col-lg-7">
    <h2 class="h4 fw-bold mb-3">Що саме вміє система</h2>
    <ul class="list-unstyled">
      <li class="mb-2 d-flex gap-2">
        <span class="icon-dot"></span>
        <span>Збір та уніфікація показників (сон, активність, харчування, гідратація).</span>
      </li>
      <li class="mb-2 d-flex gap-2">
        <span class="icon-dot"></span>
        <span>Збереження історії та агрегати (денні/тижневі тренди).</span>
      </li>
      <li class="mb-2 d-flex gap-2">
        <span class="icon-dot"></span>
        <span>Інсайти немедичного характеру + рекомендації дій у форматі “мікро-кроків”.</span>
      </li>
      <li class="mb-2 d-flex gap-2">
        <span class="icon-dot"></span>
        <span>Прозорість: контроль згод, експорт і видалення даних.</span>
      </li>
    </ul>
  </div>

  <div class="col-lg-5">
    <div class="p-4 rounded-4 info-box">
      <h3 class="h5 fw-bold">Приватність</h3>
      <p class="mb-2">
        Ми фокусуємось на wellness-підказках. Система не ставить діагнозів і не призначає лікування.
      </p>
      <small class="text-muted">
        Дані — під вашим контролем: згоди, експорт, повне видалення.
      </small>
    </div>
  </div>
</div>
@endsection