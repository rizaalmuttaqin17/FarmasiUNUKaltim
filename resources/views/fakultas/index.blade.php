@extends('layouts.app')
@section('title')
    Fakultas 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Fakultas</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('fakultas.create')}}" class="btn btn-primary form-btn">Fakultas <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('fakultas.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

