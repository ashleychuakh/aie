@extends('layouts.app')

@section('content')
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-equalizer font-red-sunglo"></i>
            <span class="caption-subject font-red-sunglo bold uppercase">Aircon</span>
        </div>
    </div>
    <div>
        @include('metronic-templates::common.errors')
    </div>
    <div class="portlet-body form">
        <div class="row">
           {!! Form::model($aircon, ['route' => ['admin.aircons.update', $aircon->id], 'method' => 'patch']) !!}

            @include('admin.aircons.fields')

           {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection