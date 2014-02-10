 <!-- footer -->
  <footer id="footer">
    <div class="text-center padder clearfix">
      <p>
        <small>&copy; first 2013, Mobile first web app framework base on Bootstrap</small><br><br>
        <a href="#" class="btn btn-xs btn-circle btn-twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="btn btn-xs btn-circle btn-facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="btn btn-xs btn-circle btn-gplus"><i class="fa fa-google-plus"></i></a>
      </p>
    </div>
  </footer>

@section('footerscript')
{{HTML::script('assets/js/jquery.min.js', ['type'=> 'text/javascript'])}}
{{HTML::script('assets/js/bootstrap.js', ['type'=> 'text/javascript'])}}
{{HTML::script('assets/js/app.js', ['type'=> 'text/javascript'])}}
@show