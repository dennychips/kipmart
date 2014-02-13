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
<div class="modal fade" id="postModal">
{{Form::open(['route' => 'post.store'])}}
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Create Post</h4>
      </div>
      <div class="modal-body">
        
        <div class="block">
          {{Form::textarea('message', null, ['class' => 'form-control', 'rows' => 4, 'cols' => 5])}}
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        
        {{Form::submit('Post Stuff!', ['class' => 'btn btn-primary'])}}
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
  {{Form::close()}}
</div><!-- /.modal -->
@section('footerscript')
{{HTML::script('assets/js/jquery.min.js', ['type'=> 'text/javascript'])}}
{{HTML::script('assets/js/bootstrap.js', ['type'=> 'text/javascript'])}}
{{HTML::script('assets/js/app.js', ['type'=> 'text/javascript'])}}
@show