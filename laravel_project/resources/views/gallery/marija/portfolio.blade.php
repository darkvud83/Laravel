  <!-- Portfolio Grid Section -->

        <section id="portfolio" class="bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">{{trans('greetings.gallery')}}</h2>
                        <h3 class="section-subheading text-muted"></h3>
                    </div>
                </div>
                <div class="row">
                    @foreach($image as $img) 
                    <div id="links" class="col-md-4 col-sm-6 portfolio-item">
                        <a href="{{$img->url}}" data-gallery>
                            <img src="{{$img->url}}" class="img-responsive" alt="">
                        </a>
                        <div class="portfolio-caption">
                            <h4>{{$img->title}}</h4>
                            <p class="text-muted">{{$img->pricing}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="text-center">
              <?php echo $image->render() ?>
            </div>
        </section>
