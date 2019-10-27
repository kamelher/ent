<div class="table-responsive">
    <table class="table" id="formations-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Title</th>
        <th>Startdate</th>
        <th>Enddate</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($formations as $formation)
            <tr>
                <td>{!! $formation->user_id !!}</td>
            <td>{!! $formation->title !!}</td>
            <td>{!! $formation->startDate !!}</td>
            <td>{!! $formation->endDate !!}</td>
                <td>
                    {!! Form::open(['route' => ['formations.destroy', $formation->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('formations.show', [$formation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('formations.edit', [$formation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
