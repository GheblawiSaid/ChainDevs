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
          <a href="#" class="navigation__link"><span>01</span>About Booking</a>
        </li>
        <li class="navigation__item">
          <a href="#" class="navigation__link"><span>02</span>Your benefits</a>
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
        <div class="col-1-of-3">
          <div class="card">
            <div class="card__side card__side--front">
              <div class="card__picture card__picture--1">&nbsp;</div>
              <h4 class="card__heading">
                <span class="card__heading-span card__heading-span--1"></span>Uber Safest drive</span>
              </h4>
              <div class="card__details">
                <ul>
                  <li>Origion: moraco</li>
                  <li>Destination: Dimitri</li>
                  <li>Per Km: 5$</li>
                  <li>Booking Time: 12:56</li>
                  <li>Capacity : 4</li>
                  <li>Available : 2</li>
                </ul>
              </div>
            </div>
            <div class="card__side card__side--back card__side--back-1">
              <div class="card__cta">
                <div class="card__price-box">
                  <p class="card__price-only">only</p>
                  <p class="card__price-value">$299</p>
                </div>
                <a href="#" class="btn btn--white">Book now!</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-1-of-3">
          <div class="card">
            <div class="card__side card__side--front">
              <div class="card__picture card__picture--2">&nbsp;</div>
              <h4 class="card__heading">
                <span class="card__heading-span card__heading-span--2">Cream fastest Drive</span>
              </h4>
              <div class="card__details">
                <ul>
                  <li>Origion: moraco</li>
                  <li>Destination: Dimitri</li>
                  <li>Per Km: 5$</li>
                  <li>Booking Time: 12:56</li>
                  <li>Capacity : 4</li>
                  <li>Available : 2</li>
                </ul>
              </div>
            </div>
            <div class="card__side card__side--back card__side--back-2">
              <div class="card__cta">
                <div class="card__price-box">
                  <p class="card__price-only">only</p>
                  <p class="card__price-value">$299</p>
                </div>
                <a href="#" class="btn btn--white">Book now!</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-1-of-3">
          <div class="card">
            <div class="card__side card__side--front">
              <div class="card__picture card__picture--3">&nbsp;</div>
              <h4 class="card__heading">
                <span class="card__heading-span card__heading-span--3">InDrive safest Drive</span>
              </h4>
              <div class="card__details">
                <ul>
                  <li>Origion: moraco</li>
                  <li>Destination: Dimitri</li>
                  <li>Per Km: 5$</li>
                  <li>Booking Time: 12:56</li>
                  <li>Capacity : 4</li>
                  <li>Available : 2</li>
                </ul>
              </div>
            </div>
            <div class="card__side card__side--back card__side--back-3">
              <div class="card__cta">
                <div class="card__price-box">
                  <p class="card__price-only">only</p>
                  <p class="card__price-value">$299</p>
                </div>
                <a href="#" class="btn btn--white">Book now!</a>
              </div>
            </div>
          </div>
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
    <!-- Form Design -->
    <section class="section-book">
      <div class="row">
        <div class="book">
          <div class="book__form">
            <form class="form" method="post" action="login">
              @csrf
              <div class="u-margin-bottom-medium">
                <h2 class="heading-secondary">Start booking now</h2>
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
                <button class="btn btn--green">Next Step &rarr;</button>
              </div>
            </form>
          </div>
        </div>
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
  <!-- <div class="popup">
      <div class="popup__content">

      </div>
    </div> -->
  <!-- <section class="grid-test">
      <div class="row">
        <div class="col-1-of-2">col 1 of 2</div>
        <div class="col-1-of-2">col 1 of 2</div>
      </div>
      <div class="row">
        <div class="col-1-of-3">col 1 of 3</div>
        <div class="col-2-of-3">col 2 of 3</div>
        <div class="col-2-of-3">col 2 of 3</div>
      </div>
      <div class="row">
        <div class="col-1-of-3">col 1 of 3</div>
        <div class="col-2-of-3">col 2 of 3</div>
      </div>
      <div class="row">
        <div class="col-1-of-4">col 1 of 4</div>
        <div class="col-1-of-4">col 1 of 4</div>
        <div class="col-1-of-4">col 1 of 4</div>
        <div class="col-1-of-4">col 1 of 4</div>
      </div>
      <div class="row">
        <div class="col-1-of-4">col 1 of 4</div>
        <div class="col-1-of-4">col 1 of 4</div>
        <div class="col-2-of-4">col 2 of 4</div>
      </div>
      <div class="row">
        <div class="col-1-of-4">col 1 of 4</div>
        <div class="col-3-of-4">col 3 of 4</div>
      </div>
    </section> -->
</body>

</html>