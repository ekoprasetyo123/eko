@extends('layouts.app')
@section('content')

{!! Form::open(['route' => 'berita.store']) !!}
<div class="body m-10">
    <div class="form-group">
        {!! Form::label('judul', 'Judul'); !!}
        {!! Form::text('judul','', ['class' => 'from-control','placehoder'=>'judul berita']); !!}
</div>
<div class="form-group">
        {!! Form::label('isi', 'Isi'); !!}
        {!! Form::textarea('isi','', ['class' => 'from-control','placehoder'=>'isi berita']); !!}
</div>
<buttom class="btn btn-success">Simpan</button>
<a href="{!! route('berita.index') !!}" class="btn btn-danger">Cancel</a>

</div>
</div>
{!! Form::close() !!}
@endsection