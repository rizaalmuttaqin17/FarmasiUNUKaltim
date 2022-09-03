<!-- Fakultas Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fakultas_id', 'Fakultas Id:') !!}
    {!! Form::number('fakultas_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Kode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kode', 'Kode:') !!}
    {!! Form::text('kode', null, ['class' => 'form-control','maxlength' => 15,'maxlength' => 15]) !!}
</div>

<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('programStudis.index') }}" class="btn btn-light">Cancel</a>
</div>
