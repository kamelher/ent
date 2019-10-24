<div class="table-responsive">
    <table class="table" id="posttypes-table">
        <thead>
            <tr>
                <th>Postname</th>
        <th>Postdescription</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($posttypes as $posttype)
            <tr>
                <td>{!! $posttype->postname !!}</td>
            <td>{!! $posttype->postDescription !!}</td>
                <td>
                    {!! Form::open(['route' => ['posttypes.destroy', $posttype->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('posttypes.show', [$posttype->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('posttypes.edit', [$posttype->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
