
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
				
				<div class="col-lg-3 hide">
					<section class="panel">
            <header class="panel-heading bg bg-inverse">
              Mailbox
            </header>
            <div class="list-group">
              <a href="#" class="list-group-item bg-lighter">
                <i class="icon-chevron-right"></i>
                <span class="badge bg-success">230</span>
                <i class="icon-inbox"></i> Inbox (5)
              </a>
              <a href="#" class="list-group-item">
                <i class="icon-chevron-right"></i>
                <span class="badge">50</span>
                <i class="icon-ok-sign"></i> Sent mail
              </a>
              <a href="#" class="list-group-item">
                <i class="icon-chevron-right"></i>
                <span class="badge">5</span>
                <i class="icon-edit-sign"></i> Draft
              </a>
              <a href="#" class="list-group-item">
                <i class="icon-chevron-right"></i>
                <span class="badge">20</span>
                <i class="icon-star"></i> Starred
              </a>
              <a href="#" class="list-group-item">
                <i class="icon-chevron-right"></i>
                <span class="badge">15</span>
                <i class="icon-trash"></i> Trash
              </a>
            </div>
          </section>
				</div>

			</div>	
		</div>

      </div>
    </div>
  </section>
  @include('_partials.footer.footer')
</body>
</html>