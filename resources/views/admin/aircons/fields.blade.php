<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    {!! Form::number('id', null, ['class' => 'form-control']) !!}
</div>

<!-- Serial Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('serial_number', 'Serial Number:') !!}
    {!! Form::text('serial_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Model Field -->
<div class="form-group col-sm-6">
    {!! Form::label('model', 'Model:') !!}
    {!! Form::text('model', null, ['class' => 'form-control']) !!}
</div>

<!-- Brand Field -->
<div class="form-group col-sm-6">
    {!! Form::label('brand', 'Brand:') !!}
    {!! Form::text('brand', null, ['class' => 'form-control']) !!}
</div>

<!-- Service Performed Field -->
<div class="form-group col-sm-6">
    {!! Form::label('service_performed', 'Service Performed:') !!}
    {!! Form::text('service_performed', null, ['class' => 'form-control']) !!}
</div>

<!-- Purchased Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('purchased_date', 'Purchased Date:') !!}
    {!! Form::text('purchased_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Warranty Start Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('warranty_start_date', 'Warranty Start Date:') !!}
    {!! Form::text('warranty_start_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Warranty End Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('warranty_end_date', 'Warranty End Date:') !!}
    {!! Form::text('warranty_end_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Service History Field -->
<div class="form-group col-sm-6">
    {!! Form::label('service_history', 'Service History:') !!}
    {!! Form::text('service_history', null, ['class' => 'form-control']) !!}
</div>

<!-- In Door Location Field -->
<div class="form-group col-sm-6">
    {!! Form::label('in_door_location', 'In Door Location:') !!}
    {!! Form::text('in_door_location', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Location Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('location_id', 'Location Id:') !!}
    {!! Form::number('location_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'Created At:') !!}
    {!! Form::date('created_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'Updated At:') !!}
    {!! Form::date('updated_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Deleted At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    {!! Form::date('deleted_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <div class="form-actions">
        <div class="row  col-md-offset-0">
            {!! Form::submit('Save', ['class' => 'btn green']) !!}
            <a href="{!! route('admin.aircons.index') !!}" class="btn btn-default">Cancel</a>
        </div>
    </div>
</div>
