@extends('layouts.app')

@section('content')
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-equalizer font-red-sunglo"></i>
            <span class="caption-subject font-red-sunglo bold uppercase">Appointment</span>
        </div>
    </div>
    <div>
        @include('metronic-templates::common.errors')
    </div>
    <div class="portlet-body form">
        <div class="row">
           {!! Form::model($appointment, ['route' => ['admin.appointments.update', $appointment->id], 'method' => 'patch']) !!}

            @include('admin.appointments.fields')

           {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection