<div class="table-responsive">
    <table class="table" id="adresses-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Adress</th>
        <th>Commune</th>
        <th>Daira</th>
        <th>Wilaya</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($adresses as $adress)
            <tr>
                <td>{!! $adress->user_id !!}</td>
            <td>{!! $adress->adress !!}</td>
            <td>{!! $adress->commune !!}</td>
            <td>{!! $adress->daira !!}</td>
            <td>{!! $adress->wilaya !!}</td>
                <td>
                    {!! Form::open(['route' => ['adresses.destroy', $adress->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('adresses.show', [$adress->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('adresses.edit', [$adress->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
