{!! Form::open(['route' => ['admin.accountaddresses.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{!! route('admin.accountaddresses.show', $id) !!}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-eye-open"></i>
    </a>
    <a href="{!! route('admin.accountaddresses.edit', $id) !!}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-edit"></i>
    </a>
    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
</div>
{!! Form::close() !!}
