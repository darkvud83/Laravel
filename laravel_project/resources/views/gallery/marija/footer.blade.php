<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy; Your Website 2014</span>
            </div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <li><a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
               
            </div>
             <form action="{{ URL::route('language-chooser') }}" method="post">
                    
                 <input name="locale"  type="submit" class="btn-language-en" value="en" image>
                 <input name="locale" type="submit" class="btn-language-sr" value="sr">
                
                 
                    {!! Form::token() !!}
                </form>
        </div>
        
    </div>
</footer>

<!-- Portfolio Modals -->
<!-- Use the modals below to showcase details about your portfolio projects! -->


<!-- jQuery -->
<script src="../../laravel_project/bootstrap/startbootstrap/js/jquery.js" type="text/javascript"></script>
<script src="../../laravel_project/bootstrap/startbootstrap/js/pagination.js" type="text/javascript"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../../laravel_project/bootstrap/startbootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../../laravel_project/bootstrap/blueimp_gallery/js/jquery.blueimp-gallery.min.js" type="text/javascript"></script>

<script src="../../laravel_project/bootstrap/bootstrap_gallery/js/bootstrap-image-gallery.min.js" type="text/javascript"></script>


<!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="../../laravel_project/bootstrap/startbootstrap/js/classie.js" type="text/javascript"></script>
<script src="../../laravel_project/bootstrap/startbootstrap/js/cbpAnimatedHeader.js" type="text/javascript"></script>


<!-- Custom Theme JavaScript -->
<script src="../../laravel_project/bootstrap/startbootstrap/js/agency.js" type="text/javascript"></script>