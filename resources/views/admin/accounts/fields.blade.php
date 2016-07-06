<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    {!! Form::number('id', null, ['class' => 'form-control']) !!}
</div>

<!-- Client Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('client_name', 'Client Name:') !!}
    {!! Form::text('client_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Client Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('client_address', 'Client Address:') !!}
    {!! Form::text('client_address', null, ['class' => 'form-control']) !!}
</div>

<!-- Client Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('client_email', 'Client Email:') !!}
    {!! Form::text('client_email', null, ['class' => 'form-control']) !!}
</div>

<!-- Client Numbers Field -->
<div class="form-group col-sm-6">
    {!! Form::label('client_numbers', 'Client Numbers:') !!}
    {!! Form::text('client_numbers', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Contract Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contract', 'Contract:') !!}
    {!! Form::text('contract', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Role Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('role_id', 'Role Id:') !!}
    {!! Form::number('role_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Company Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company_id', 'Company Id:') !!}
    {!! Form::number('company_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Confirmed Field -->
<div class="form-group col-sm-6">
    {!! Form::label('confirmed', 'Confirmed:') !!}
    {!! Form::text('confirmed', null, ['class' => 'form-control']) !!}
</div>

<!-- Confirmation Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('confirmation_code', 'Confirmation Code:') !!}
    {!! Form::text('confirmation_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Remember Token Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    {!! Form::text('remember_token', null, ['class' => 'form-control']) !!}
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
            <a href="{!! route('admin.accounts.index') !!}" class="btn btn-default">Cancel</a>
        </div>
    </div>
</div>
