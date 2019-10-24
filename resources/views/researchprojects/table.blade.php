<div class="table-responsive">
    <table class="table" id="researchprojects-table">
        <thead>
            <tr>
                <th>User</th>
        <th>Project code </th>
        <th>Starting date</th>
        <th>Finish date</th>
        <th>Path</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($researchprojects as $researchproject)
            <tr>
                <td>{!! $researchproject->user->firstname !!}</td>
            <td>{!! $researchproject->title !!}</td>
            <td>{!! $researchproject->startDate !!}</td>
            <td>{!! $researchproject->endDate !!}</td>
            <td>{!! $researchproject->path !!}</td>
                <td>
                    {!! Form::open(['route' => ['researchprojects.destroy', $researchproject->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('researchprojects.show', [$researchproject->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('researchprojects.edit', [$researchproject->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
