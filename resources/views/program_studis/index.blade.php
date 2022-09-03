@extends('layouts.app')
@section('title')
    Program Studis 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Program Studis</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('programStudis.create')}}" class="btn btn-primary form-btn">Program Studi <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('program_studis.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

