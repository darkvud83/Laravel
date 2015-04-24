<!-- About Section -->
        <section id="about" class="home-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">

                        <div class="section-heading text-center">
                            <div class="wow bounceInDown" data-wow-delay="0.2s">
                                @foreach ($artist as $artists)
                                <h2>{{$artists->name}}</h2>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="{{$artists->img_person}}" class="img-responsive img-circle" alt="">
                        <h4>{{$artists->name}}</h4>
                        <p class="text-muted">{{trans('greetings.artist')}}</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>	
                <p class="intro-lead-in">

                    {{$artists->about}}

                </p>
                @endforeach
            </div>
        </section>