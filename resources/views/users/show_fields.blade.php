<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $user->name }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $user->email }}</p>
</div>

<!-- Email Verified At Field -->
<div class="form-group">
    {!! Form::label('email_verified_at', 'Email Verified At:') !!}
    <p>{{ $user->email_verified_at }}</p>
</div>

<!-- Password Field -->
<div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    <p>{{ $user->password }}</p>
</div>

<!-- Photo Field -->
<div class="form-group">
    {!! Form::label('photo', 'Photo:') !!}
    <p>{{ $user->photo }}</p>
</div>

<!-- Remember Token Field -->
<div class="form-group">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    <p>{{ $user->remember_token }}</p>
</div>

<!-- Agama Field -->
<div class="form-group">
    {!! Form::label('agama', 'Agama:') !!}
    <p>{{ $user->agama }}</p>
</div>

<!-- Jenis Kelamin Field -->
<div class="form-group">
    {!! Form::label('jenis_kelamin', 'Jenis Kelamin:') !!}
    <p>{{ $user->jenis_kelamin }}</p>
</div>

<!-- Tempat Lahir Field -->
<div class="form-group">
    {!! Form::label('tempat_lahir', 'Tempat Lahir:') !!}
    <p>{{ $user->tempat_lahir }}</p>
</div>

<!-- Tanggal Lahir Field -->
<div class="form-group">
    {!! Form::label('tanggal_lahir', 'Tanggal Lahir:') !!}
    <p>{{ $user->tanggal_lahir }}</p>
</div>

<!-- Telepon Field -->
<div class="form-group">
    {!! Form::label('telepon', 'Telepon:') !!}
    <p>{{ $user->telepon }}</p>
</div>

<!-- Alamat Field -->
<div class="form-group">
    {!! Form::label('alamat', 'Alamat:') !!}
    <p>{{ $user->alamat }}</p>
</div>

