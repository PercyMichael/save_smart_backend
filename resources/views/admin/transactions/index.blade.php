@extends('layouts.app')
@section('title')
     @lang('Transactions')
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>@lang('Transactions')</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('admin.transactions.create')}}" class="btn btn-primary form-btn">@lang('add_new')<i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('admin.transactions.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection



