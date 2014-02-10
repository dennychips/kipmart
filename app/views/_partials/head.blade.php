<meta charset="utf-8">
<title>Mobile first web app theme | first</title>
<meta name="description" content="mobile first, app, web app, responsive, admin dashboard, flat, flat ui">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
@section('style')
{{HTML::style('assets/css/bootstrap.css')}}
{{HTML::style('assets/css/font-awesome.min.css')}}
{{HTML::style('assets/css/font.css')}}
{{HTML::style('assets/css/plugin.css')}}
{{HTML::style('assets/css/style.css')}}
@show
@section('scripthead')
<!--[if lt IE 9]>
{{HTML::script('assets/js/ie/respond.min.js')}}
{{HTML::script('assets/js/ie/html5.js')}}
<![endif]-->
@show