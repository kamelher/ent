<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
        <tr>
            <th>Photo</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>

            <th>Departement Id</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td><img src="{!! $user->Photo !!}" alt="" class="img-thumbnail" style="width: 70px;"></td>
                <td>{!! $user->firstname !!}</td>
                <td>{!! $user->lastname !!}</td>
                <td>{!! $user->email !!}</td>
                <td>{!! $user->Departement->name !!}</td>
                <td>
                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('users.show', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                        <a href="{!! route('users.edit', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
