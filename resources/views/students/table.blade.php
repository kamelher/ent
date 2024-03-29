<div class="table-responsive">
    <table class="table" id="students-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Suppervisingyear</th>
        <th>Link</th>
        <th>Firststudent</th>
        <th>Secondstudent</th>
        <th>Thirdstudent</th>
        <th>User Id</th>
        <th>Typeencarement Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
            <tr>
             <td>{!! $student->Title !!}</td>
            <td>{!! $student->suppervisingYear !!}</td>
            <td>{!! $student->link !!}</td>
            <td>{!! $student->firststudent !!}</td>
            <td>{!! $student->secondstudent !!}</td>
            <td>{!! $student->thirdstudent !!}</td>
            <td>{!! $student->supervisor->firstname !!}</td>
            <td>{!! $student->diplome->name !!}</td>
                <td>
                    {!! Form::open(['route' => ['students.destroy', $student->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('students.show', [$student->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('students.edit', [$student->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
