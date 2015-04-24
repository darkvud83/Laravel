<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading section-subheading text-muted">{{trans('greetings.contact')}}</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                @if(Session::has('message'))
                <div class="alert alert-info">
                    {{ Session::get('message')}}
                </div>
                @endif
                
                    @foreach($errors->all() as $error)
                    <div class="alert alert-info">{{ $error }}</div>
                    @endforeach
               
                {!! Form::open(array('route' => 'contact_store', 'name' => 'sentMessage', 'id' => 'contactForm')) !!}

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                           
                            {!! Form::text('name', null, 
                            array('required', 
                            'class'=>'form-control',
                            'id'=>'name',
                            'placeholder'=> trans('greetings.placeholder_name') )) !!}

                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                           
                            {!! Form::text('email', null, 
                            array('required', 
                            'class'=>'form-control',
                            'id' =>'email',
                            'placeholder'=> trans('greetings.placeholder_email') )) !!}

                            <p class="help-block text-danger"></p>
                        </div>
                        
                         <div class="form-group">
                           
                            {!! Form::text('subject', null, 
                            array('required', 
                            'class'=>'form-control',
                            'id' =>'subject',
                            'placeholder'=>trans('greetings.placeholder_subject') )) !!}

                            <p class="help-block text-danger"></p>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          
                            {!! Form::textarea('message', null, 
                            array('required',
                            'id' =>'message',
                            'class'=>'form-control', 
                            'placeholder'=>trans('greetings.placeholder_message') )) !!}

                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12 text-center">
                        <div id="success"></div>
                        {!! Form::submit(trans('greetings.submit_message'), 
                        array('class'=>'btn btn-primary')) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>