@extends('layouts.app')
@section('title')
     @lang('Categories')
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@lang('Categories')</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('admin.categories.create')}}" class="btn btn-primary form-btn">@lang('Add_new')<i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('admin.categories.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection



