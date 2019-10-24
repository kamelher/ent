<div class="table-responsive">
    <table class="table" id="administrativetasks-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Posttype Id</th>
        <th>Startdate</th>
        <th>Enddate</th>
        <th>Path</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($administrativetasks as $administrativetask)
            <tr>
                <td>{!! $administrativetask->user->firstname !!} {!! $administrativetask->user->lastname !!}</td>
                <td>{!! $administrativetask->posttype->postDescription!!}</td>
                <td>{!! $administrativetask->startDate !!}</td>
                <td>{!! $administrativetask->endDate !!}</td>
                <td>{!! $administrativetask->path !!}</td>
                <td>
                    {!! Form::open(['route' => ['administrativetasks.destroy', $administrativetask->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('administrativetasks.show', [$administrativetask->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('administrativetasks.edit', [$administrativetask->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
