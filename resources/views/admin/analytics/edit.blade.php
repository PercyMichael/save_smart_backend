@extends('layouts.app')
@section('title')
    @lang('Edit') @lang('Analytics')
@endsection
@section('content')
    <section class="section">
            <div class="section-header">
                <h3 class="page__heading m-0">@lang('Edit') @lang('Analytics')</h3>
                <div class="filter-container section-header-breadcrumb row justify-content-md-end">
                    <a href="{{ route('admin.analytics.index') }}"  class="btn btn-primary">@lang('Back')</a>
                </div>
            </div>
  <div class="content">
              @include('stisla-templates::common.errors')
              <div class="section-body">
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="card">
                             <div class="card-body ">
                                    {!! Form::model($analytics, ['route' => ['analytics.update', $analytics->id], 'method' => 'patch']) !!}
                                        <div class="row">
                                            @include('admin.analytics.fields')
                                        </div>

                                    {!! Form::close() !!}
                            </div>
                         </div>
                    </div>
                 </div>
              </div>
   </div>
  </section>
@endsection
