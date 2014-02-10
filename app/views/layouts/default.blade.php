
<!DOCTYPE html>
<html lang="en">
<head>
@include('_partials.head')
</head>
<body>
  @include('_partials.header.header')
  <section id="content">
    <div class="main padder">
      <div class="row">
        
        <div class="col-lg-12">
			<div class="row">
				@include('_partials.sidebar')
				<div class="col-lg-9">
					@yield('content')
				</div>
				
				<!-- <div class="col-lg-3">
					<div class="panel panel-default">
						<div class="panel-body">
							Basic panel example
						</div>
					</div>
				</div> -->
			</div>	
		</div>

      </div>
    </div>
  </section>
  @include('_partials.footer.footer')
</body>
</html>