<div class="table-responsive">
    <table class="table" id="interstings-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>User Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($interstings as $intersting)
            <tr>
                <td>{!! $intersting->name !!}</td>
            <td>{!! $intersting->user->firstname !!}</td>
                <td>
                    {!! Form::open(['route' => ['interstings.destroy', $intersting->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('interstings.show', [$intersting->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('interstings.edit', [$intersting->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
