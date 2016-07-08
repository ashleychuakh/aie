@extends('layouts.app')

@section('content')
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-equalizer font-red-sunglo"></i>
            <span class="caption-subject font-red-sunglo bold uppercase">Location</span>
        </div>
    </div>
    <div>
        @include('metronic-templates::common.errors')
    </div>
    <div class="portlet-body form">
        <div class="row">
           {!! Form::model($location, ['route' => ['admin.locations.update', $location->id], 'method' => 'patch']) !!}

            @include('admin.locations.fields')

           {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection