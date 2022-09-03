<!-- Users Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('users_id', 'Users Id:') !!}
    {!! Form::number('users_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Kategori Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kategori_id', 'Kategori Id:') !!}
    {!! Form::number('kategori_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Program Studi Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('program_studi_id', 'Program Studi Id:') !!}
    {!! Form::number('program_studi_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Banner Field -->
<div class="form-group col-sm-6">
    {!! Form::label('banner', 'Banner:') !!}
    {!! Form::text('banner', null, ['class' => 'form-control','maxlength' => 150,'maxlength' => 150]) !!}
</div>

<!-- Judul Field -->
<div class="form-group col-sm-6">
    {!! Form::label('judul', 'Judul:') !!}
    {!! Form::text('judul', null, ['class' => 'form-control','maxlength' => 254,'maxlength' => 254]) !!}
</div>

<!-- Isi Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('isi', 'Isi:') !!}
    {!! Form::textarea('isi', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('beritas.index') }}" class="btn btn-light">Cancel</a>
</div>
