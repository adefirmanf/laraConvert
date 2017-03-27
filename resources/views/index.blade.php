@extends('template')

@section('body')
	<h1 class="logo-name">AF+</h1>
	<h2>TXT to CSV Converter</h2>
		<div class="form-group">
			{!!Form::open([
				'url' => 'api/uploadfile',
				'files' => true
				]) !!}
			<h3> Drop your .csv in here </h3>
			{!!Form::file('document', ['accept' => ".txt"])!!}
		</div>
			{!!Form::submit('Convert now', ['class'=> 'btn btn-primary btn-sm'])!!}
			{!!Form::close()!!}
		</div>
@endsection