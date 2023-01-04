<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
          <a href="/login" class="navigation__link"><span>01</span>Login</a>
        </li>
        <li class="navigation__item">
          <a href="/register" class="navigation__link"><span>02</span>Register</a>
        </li>
        <li class="navigation__item">
          <a href="#" class="navigation__link"><span>03</span>Popular Deals</a>
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
  <header class="header">
    <div class="header__logo-box">
      <img src="./frontend_assets/img/logo-white.png" class="header__logo" alt="This is natural tours logo" />
    </div>
    <div class="header__text-box">
      <h1 class="heading-primary">
        <span class="heading-primary--main">Bookings</span>
        <span class="heading-primary--sub">travelers enjoy alot</span>
      </h1>
      <a href="#" class="btn btn--white btn--animated">Discover our Bookings</a>
    </div>
  </header>
  <main>
    <section>
      <section class="section-about">
        <div class="u-center-text u-margin-bottom-big">
          <h2 class="heading-secondary">
            Exciting bookings for our travelers
          </h2>
        </div>
        <div class="row">
          <div class="col-1-of-2">
            <h3 class="heading-tertiary u-margin-bottom-small">
              You're going to enjoy it
            </h3>
            <p class="paragraph">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. At
              expedita dolor dolores laudantium debitis. Iure reiciendis
              eligendi provident quidem modi sequi incidunt odio quaerat
              itaque quasi, eius maxime velit! Minima?
            </p>
            <h3 class="heading-tertiary u-margin-bottom-small">
              Live adventures like you never have before
            </h3>
            <p class="paragraph">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. At
              expedita dolor dolores laudantium debitis.
            </p>
            <a href="#" class="btn-text">Learn more &rarr;</a>
          </div>
          <div class="col-1-of-2">
            <div class="composition">
              <img src="frontend_assets/img/nat-1-large.jpg" alt="photo1"
                class="composition__photo composition__photo--p1" />
              <img src="frontend_assets/img/nat-2-large.jpg" alt="photo 2"
                class="composition__photo composition__photo--p2" />
              <img src="frontend_assets/img/nat-3-large.jpg" alt="photo 3"
                class="composition__photo composition__photo--p3" />
            </div>
          </div>
        </div>
      </section>
    </section>
    <section class="section-features">
      <div class="row">
        <div class="col-1-of-4">
          <div class="feature-box">
            <i class="feature-box__icon icon-basic-world"></i>
            <h3 class="heading-tertiary u-margin-bottom-small">
              Explore the box
            </h3>
            <div class="feature-box__text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum
              adipisci impedit quidem aperiam.
            </div>
          </div>
        </div>
        <div class="col-1-of-4">
          <div class="feature-box">
            <i class="feature-box__icon icon-basic-compass"></i>
            <h3 class="heading-tertiary u-margin-bottom-small">
              Meet nature
            </h3>
            <div class="feature-box__text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum
              adipisci impedit quidem aperiam.
            </div>
          </div>
        </div>
        <div class="col-1-of-4">
          <div class="feature-box">
            <i class="feature-box__icon icon-basic-map"></i>
            <h3 class="heading-tertiary u-margin-bottom-small">
              Find your way
            </h3>
            <div class="feature-box__text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum
              adipisci impedit quidem aperiam.
            </div>
          </div>
        </div>
        <div class="col-1-of-4">
          <div class="feature-box">
            <i class="feature-box__icon icon-basic-heart"></i>
            <h3 class="heading-tertiary u-margin-bottom-small">
              Live a health life
            </h3>
            <div class="feature-box__text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum
              adipisci impedit quidem aperiam.
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-tours">
      <div class="u-center-text u-margin-bottom-big">
        <h2 class="heading-secondary">Most popular Deals</h2>
      </div>
      <div class="row">
         @foreach($rides as $ride)
        <div class="col-1-of-3">
          <div class="card">
            <div class="card__side card__side--front">
              <div class="card__picture card__picture--1">&nbsp;</div>
              <h4 class="card__heading">
                <span class="card__heading-span card__heading-span--1"></span>Uber Safest drive</span>
              </h4>
              <div class="card__details">
                <ul>
                  <li>{{ $ride['title'] }}</li>
                  <li>{{ $ride['description'] }}</li>
                  <li>Origion: {{ $ride['origion'] }}</li>
                  <li>Destination: {{ $ride['destination'] }}</li>
                  <li>Booking Time: {{ $ride['timeOfRide'] }}</li>
                  <li>Capacity : {{ $ride['totalCapacity'] }}</li>
                  <li>Available : {{ $ride['availableCapacity'] }}</li>
                </ul>
              </div>
            </div>
            <div class="card__side card__side--back card__side--back-1">
              <div class="card__cta">
                @if (auth()->check())
                <div class="card__price-box">

                  <p class="card__price-only">only</p>
                  <p class="card__price-value">${{ $ride['price'] }}</p>
                </div>
                    @if($ride['availableCapacity']>0)
                    <a href="/chatWithNewUser/{{ $ride['id'] }}/{{ $ride['userId'] }}" class="btn btn--white">Chat now!</a>
                    <form action="/bookRideWithUser/{{ $ride['id'] }}/{{ Auth::user()->id }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn--white u-margin-top-small">Book now!</button>
                        <!-- <h 3class="btn btn--white u-margin-top-small">Book now!</h> -->
                    </form>
                    @else
                    <div class="card__price-box">
                    <p class="card__price-only">This ride is full of capacity</p>
                    </div>
                    @endif
                @else
                <div class="card__price-box">
                 <p class="card__price-only">Please login first</p>
                </div>
                 @endif
            </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    <div class="row">
        <div class="u-margin-top-big">
           {{ $rides->links('pagination::bootstrap-4') }}
        </div>
      </div>
      <div class="u-center-text">
        <a href="#" class="btn btn--green">Discover all Deals</a>
      </div>
    </section>
    <section class="section-stories">
      <div class="bg-video">
        <video class="bg-video__content" autoplay muted loop>
          <source src="frontend_assets/img/video.mp4" type="video/mp4" />
          <source src="frontend_assets/img/video.webm" type="video/webm" />
          Your browser is not supported
        </video>
      </div>
      <div class="u-center-text u-margin-bottom-big">
        <h2 class="heading-secondary">we make people geniunely happy</h2>
      </div>
      <div class="row">
        <div class="story">
          <figure class="story__shape">
            <img src="frontend_assets/img/nat-8.jpg" alt="Person on a tour" class="story__image" />
            <figcaption class="story__caption">John</figcaption>
          </figure>
          <div class="story__text">
            <h3 class="heading-tertiary u-margin-bottom-small">
              I had the best week with my family
            </h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum,
              ratione! Ratione consectetur quae sequi repellat magnam
              molestiae? Labore, voluptatibus tempora! Lorem ipsum dolor sit,
              amet consectetur adipisicing elit. Id, iure. Lorem ipsum dolor
              sit amet. Lorem ipsum dolor sit amet.
            </p>
          </div>
        </div>
        <div class="story">
          <figure class="story__shape">
            <img src="frontend_assets/img/nat-9.jpg" alt="Person on a tour" class="story__image" />
            <figcaption class="story__caption">Jopsa</figcaption>
          </figure>
          <div class="story__text">
            <h3 class="heading-tertiary u-margin-bottom-small">
              My life is completely different now
            </h3>
            <p>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum,
              ratione! Ratione consectetur quae sequi repellat magnam
              molestiae? Labore, voluptatibus tempora! Lorem ipsum dolor sit,
              amet consectetur adipisicing elit. Id, iure. Lorem ipsum dolor
              sit amet. Lorem ipsum dolor sit amet.
            </p>
          </div>
        </div>
      </div>
      <div class="u-center-text">
        <a href="#" class="btn-text">Read all stories &rarr;</a>
      </div>
    </section>
  </main>
  <!-- Footer Designing -->
  <footer class="footer">
    <div class="footer__logo-box">
      <img src="frontend_assets/img/logo-green-2x.png" alt="Full logo" class="footer__logo" />
    </div>
    <div class="row">
      <div class="col-1-of-2">
        <div class="footer__navigation">
          <ul class="footer_list">
            <li class="footer__item">
              <a href="" class="footer__link">Company</a>
            </li>
            <li class="footer__item">
              <a href="" class="footer__link">Contact us</a>
            </li>
            <li class="footer__item">
              <a href="" class="footer__link">Careers</a>
            </li>
            <li class="footer__item">
              <a href="" class="footer__link">Privacy policy</a>
            </li>
            <li class="footer__item">
              <a href="" class="footer__link">Terms</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-1-of-2">
        <p class="footer__copyright">
          Built my <a href="#" class="footer_link">BookingSite.com</a> for his
          online course
          <a href="#" class="footer__link">Advance css and sass</a> .
          Copyright &copy; by Booking Site
        </p>
      </div>
    </div>
  </footer>
  </body>

</html>
