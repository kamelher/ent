<div class="table-responsive">
    <table class="table" id="ticusages-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Link</th>
        <th>Certificatlink</th>
        <th>User Id</th>
        <th>Tictype Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ticusages as $ticusage)
            <tr>
                <td>{!! $ticusage->Title !!}</td>
            <td>{!! $ticusage->link !!}</td>
            <td>{!! $ticusage->certificatlink !!}</td>
            <td>{!! $ticusage->user_id !!}</td>
            <td>{!! $ticusage->tictype_id !!}</td>
                <td>
                    {!! Form::open(['route' => ['ticusages.destroy', $ticusage->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('ticusages.show', [$ticusage->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('ticusages.edit', [$ticusage->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
