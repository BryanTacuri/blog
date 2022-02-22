@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Crear nueva categoria</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route'=> 'admin.categories.store']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese nombre categoria']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('slug', 'Slug') !!}
            {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese slug']) !!}
        </div>

        {!! Form::submit('Crear categoria', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop

@section('js')
<script src="{{asset('vender/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
<script>
    $(document).ready( function() {
  $("#title").stringToSlug({
    setEvents: 'keyup keydown blur',
    getPut: '#permalink',
    space: '-'
  });
});
</script>
@endsection