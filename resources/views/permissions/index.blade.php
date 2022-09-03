@extends('layouts.app')
@section('title')
    Permissions 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Permissions</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('permissions.create')}}" class="btn btn-primary form-btn">Permissions <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('permissions.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

