<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900"
  rel="stylesheet"
  />

  <link rel="stylesheet" href="{{ asset('frontend_assets/css/icon-font.css') }}" />
  <link rel="stylesheet" href="{{ asset('frontend_assets/css/style.css') }}" />

  <link rel="shortcut icon" type="image/png" href="{{ asset('frontend_assets/img/favicon.png') }}" />

  <title>Ride Booking | Exciting for travels</title>
</head>

<body>
  <div class="navigation">
    <input type="checkbox" class="navigation__checkbox" id="navi-toggle" />
    <label for="navi-toggle" class="navigation__button">
      <span class="navigation__icon">&nbsp;</span>
    </label>
    <div class="navigation__background">&nbsp;</div>
    <nav class="navigation__nav">
      <ul class="navigation__list">
        <li class="navigation__item">
          <a href="/" class="navigation__link"><span>01</span>About Booking</a>
        </li>
        <li class="navigation__item">
          <a href="/register" class="navigation__link"><span>02</span>Register</a>
        </li>
        <li class="navigation__item">
          <a href="/login" class="navigation__link"><span>03</span>Login</a>
        </li>
        <li class="navigation__item">
          <a href="#" class="navigation__link"><span>04</span>Rides</a>
        </li>
        <li class="navigation__item">
          <a href="#" class="navigation__link"><span>05</span>Book now</a>
        </li>
      </ul>
    </nav>
  </div>

  <main>

    <!-- Form Design -->
    <section class="section-book">
      <div class="row">
        <div class="book book1">
          <div class="book__form">
            <form class="form" method="post" action="login">
              @csrf
              <div class="u-margin-bottom-medium">
                <h2 class="heading-secondary">Login</h2>
              </div>

              <div class="form__group">
                <input type="email" name="email" class="form__input" placeholder="Email address" id="email" required />
                <label for="email" class="form__label">Email</label>
              </div>
                <div class="form__group">
                <input type="password" class="form__input" name="password" placeholder="Password" id="name" required />
                <label for="name" class="form__label">Password</label>
              </div>
              <div class="form__group">
                <div class="form__radio-group">
                  <input type="radio" class="form__radio-input" id="small" name="size" />
                  <label for="small" class="form__radio-label">
                    <span class="form__radio-button"></span>
                    Small tour group
                  </label>
                </div>
                <div class="form__radio-group">
                  <input type="radio" class="form__radio-input" id="large" name="size" />
                  <label for="large" class="form__radio-label">
                    <span class="form__radio-button"></span>
                    Large tour group
                  </label>
                </div>

              </div>
              <div class="form__group">
                <a href="{{ url('/redirect') }}" class="btn btn--white">Login with google &rarr;</a>
              </div>
               <div class="form__group">
                <button class="btn btn--green">Login &rarr;</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>

</html>
