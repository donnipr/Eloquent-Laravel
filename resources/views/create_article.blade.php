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
 @if($errors->any())
 <div class="alert alert-danger alert-dismissible" role="alert">
 <button type="button" class="close" data-dismiss="alert" aria-label="close">
 <span aria-hidden="true">&times;</span>
</button><em>
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</em>
</div>
@endif

<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4><strong>Add </strong></h4></div>
			<div class="panel-body">
			<div class="form-group">
				{{ Form::open(['route' => 'article.store']) }}
				<input type="hidden" name="_token" value="<?= csrf_token(); ?>">

				<div class="form-group{{ $errors->has('blogger') ? ' has-error' : '' }}">
                            {!! Form::label('blogger_id', 'blogger_id') !!}
                            <select name="blogger_id" class="form-control">
                                <option value="">-- Pilih Jurusan --</option>
                                @foreach ($bloggers as $blogger)
                                <option value="{{ $blogger->id }}">{{ $blogger->nama }}</option>
                                @endforeach
                            </select>
                            {!! $errors->first('blogger_id', '<p class="help-block">:message</p>') !!}
                        </div>

				<!--<div class="form-group {{ $errors->has('blogger_id') ? 'has-error' : ''  }}"> 
					{{ Form::label('blogger_id','blogger_id') }}
					{{ Form::text('blogger_id','',['placeholder' => 'Masukkan blogger_id','class' => 'form-control']) }}
					{{ $errors->first('blogger_id', '<p class="help-block">:message</p>') }}
				</div>-->
				<div class="form-group {{ $errors->has('judul') ? 'has-error' : ''  }}"> 
					{{ Form::label('judul','judul') }}
					{{ Form::text('judul','',['placeholder' => '.......','class' => 'form-control']) }}
					{{ $errors->first('judul', '<p class="help-block">:message</p>') }}
				</div>
				<div class="form-group {{ $errors->has('body') ? 'has-error' : ''  }}"> 
					{{ Form::label('body','body') }}
					{{ Form::textarea('body','',['placeholder' => '........','class' => 'form-control']) }}
					{{ $errors->first('body', '<p class="help-block">:message</p>') }}
				</div>
					{{ Form::submit('Save',['class' => 'btn btn-primary']) }}
					{{ Form::reset('reset',['class' => 'btn btn-danger']) }}
				{{ Form::close() }}
			</div>
		</div>
		</div>
	</div>
</div>

</body>
</html>