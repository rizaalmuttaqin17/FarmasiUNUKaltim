{!! Form::open(['route' => ['fakultas.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('fakultas.show', $id) }}" class='btn btn-success btn-xs'>
        <i class="fa fa-eye"></i>
    </a>
    <a href="{{ route('fakultas.edit', $id) }}" class='btn btn-info btn-xs'>
        <i class="fa fa-pencil-alt"></i>
    </a>
    {!! Form::button('<i class="fa fa-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
</div>
{!! Form::close() !!}
