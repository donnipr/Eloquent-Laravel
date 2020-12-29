<!DOCTYPE html>
<html>
<head>
    <title></title>
  {{ Html::style('assets/css/layout.min.css') }}
	{{ HTML::script('assets/js/jquery.min.js') }}
	{{ HTML::script('assets/js/bootstrap.min.js') }}
  {{ HTML::script('assets/css/main.css') }}
</head>
<body>
 @foreach($articles as $article)
    <h1><strong>{{ $article->judul }}</strong><small><i> di post oleh {{ $article->blogger->nama }}</i></small></h1>
    <p>{{ $article->body }}</p>
    <p>{{ $article->created_at->diffForHumans() }}</p>
    <p>{{ $article->blogger->email }} </p>
    <hr/>
 @endforeach
</body>
</html>
