@extends('main.index')
@section('content')
<header>
    <div class="header-content">
        <div class="header-content-inner sr-button">
            <h1>Welcome To RestoEat</h1>
            <hr>
            <p>The fastest way to book a table! Get special discount by showing your RestoEat account at the selected restaurants around the world.</p>

        </div>
    </div>
</header>
<section style="height:20px;" class="bg-primary" id="featured">
  <div style="margin-top:-40px;"class="container">
      <div class="row">
          <div class="col-lg-12 text-center sr-icons">
              <h2 class="section-heading">Featured Restaurants</h2>
              <p>
                Our best partners, RestoEat Special.
              </p>
              <hr class="light">

          </div>
      </div>
  </div>
</section>
<section id="featured">
    <div class="container-fluid">
        <div class="row no-gutter popup-gallery">
            @foreach($restaurants as $restaurant)
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        @if(is_null($restaurant->profile_pic))
                            @if($restaurant->category == 0)
                                <img src="/images/veget.png" class="img-responsive" alt="">
                            @elseif($restaurant->category == 1)
                                <img src="/images/regular.png" class="img-responsive" alt="">
                            @else
                                <img src="/images/fine-dining.png" class="img-responsive" alt="">
                            @endif
                        @else
                            <img src="{{ $restaurant->profile_pic }}" class="img-responsive" alt="">
                        @endif
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    @if($restaurant->category == 0)
                                        Vegetarian Restaurant
                                    @elseif($restaurant->category == 1)
                                        Regular Restaurant
                                    @else
                                        Fine Dining Restaurant
                                    @endif
                                </div>
                                <div class="project-name">
                                    {{ $restaurant->nama }}
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
<section style="height:20px;" id="top_reviews">
  <div style="margin-top:-40px;"class="container">
      <div class="row">
          <div class="col-lg-12 text-center sr-icons">
              <h2 class="section-heading">Top Reviews Restaurants</h2>
              <p>
                User never lie, here are the best from them.
              </p>
              <hr class="primary">

          </div>
      </div>
  </div>
</section>
<sectiond id="top_reviews">
  <div class="container-fluid">
      <div class="row no-gutter popup-gallery">
          <div class="col-lg-4 col-sm-6">
              <a href="img/portfolio/fullsize/1.jpg" class="portfolio-box">
                  <img src="img/portfolio/thumbnails/1.jpg" class="img-responsive" alt="">
                  <div class="portfolio-box-caption">
                      <div class="portfolio-box-caption-content">
                          <div class="project-category text-faded">
                              Vegetarian Restaurant
                          </div>
                          <div class="project-name">
                              Mad Dog Vege
                          </div>
                      </div>
                  </div>
              </a>
          </div>
          <div class="col-lg-4 col-sm-6">
              <a href="img/portfolio/fullsize/2.jpg" class="portfolio-box">
                  <img src="img/portfolio/thumbnails/2.jpg" class="img-responsive" alt="">
                  <div class="portfolio-box-caption">
                      <div class="portfolio-box-caption-content">
                          <div class="project-category text-faded">
                              Category
                          </div>
                          <div class="project-name">
                              Project Name
                          </div>
                      </div>
                  </div>
              </a>
          </div>
          <div class="col-lg-4 col-sm-6">
              <a href="img/portfolio/fullsize/3.jpg" class="portfolio-box">
                  <img src="img/portfolio/thumbnails/3.jpg" class="img-responsive" alt="">
                  <div class="portfolio-box-caption">
                      <div class="portfolio-box-caption-content">
                          <div class="project-category text-faded">
                              Category
                          </div>
                          <div class="project-name">
                              Project Name
                          </div>
                      </div>
                  </div>
              </a>
          </div>
          <div class="col-lg-4 col-sm-6">
              <a href="img/portfolio/fullsize/4.jpg" class="portfolio-box">
                  <img src="img/portfolio/thumbnails/4.jpg" class="img-responsive" alt="">
                  <div class="portfolio-box-caption">
                      <div class="portfolio-box-caption-content">
                          <div class="project-category text-faded">
                              Category
                          </div>
                          <div class="project-name">
                              Project Name
                          </div>
                      </div>
                  </div>
              </a>
          </div>
          <div class="col-lg-4 col-sm-6">
              <a href="img/portfolio/fullsize/5.jpg" class="portfolio-box">
                  <img src="img/portfolio/thumbnails/5.jpg" class="img-responsive" alt="">
                  <div class="portfolio-box-caption">
                      <div class="portfolio-box-caption-content">
                          <div class="project-category text-faded">
                              Category
                          </div>
                          <div class="project-name">
                              Project Name
                          </div>
                      </div>
                  </div>
              </a>
          </div>
          <div class="col-lg-4 col-sm-6">
              <a href="img/portfolio/fullsize/6.jpg" class="portfolio-box">
                  <img src="img/portfolio/thumbnails/6.jpg" class="img-responsive" alt="">
                  <div class="portfolio-box-caption">
                      <div class="portfolio-box-caption-content">
                          <div class="project-category text-faded">
                              Category
                          </div>
                          <div class="project-name">
                              Project Name
                          </div>
                      </div>
                  </div>
              </a>
          </div>
      </div>
  </div>
</section>
<section id="categories">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Explore Restaurants By Categories</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-8 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-leaf text-primary sr-icons"></i>
                    <h3>Vegetarian Restaurants</h3>
                    <p class="text-muted">Eating plants are the best idea!</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-8 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-cutlery text-primary sr-icons"></i>
                    <h3>Regular Restaurants</h3>
                    <p class="text-muted">There is no manners, hungers only!</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-8 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-glass text-primary sr-icons"></i>
                    <h3>Fine Dining Restaurants</h3>
                    <p class="text-muted">Romantic, delightful eating experience!</p>
                </div>
            </div>
        </div>
    </div>
</section>


@stop
