<div class="table-responsive">
    <table class="table" id="departements-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Name Ar</th>
        <th>Faculty Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($departements as $departement)
            <tr>
                <td>{!! $departement->name !!}</td>
            <td>{!! $departement->name_ar !!}</td>
            <td>{!! $departement->faculty->name !!}</td>
                <td>
                    {!! Form::open(['route' => ['departements.destroy', $departement->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('departements.show', [$departement->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                        <a href="{!! route('departements.edit', [$departement->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
