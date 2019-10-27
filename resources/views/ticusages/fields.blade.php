<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Title', 'Title:') !!}
    {!! Form::text('Title', null, ['class' => 'form-control','minlength' => 5]) !!}
</div>

<!-- Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('link', 'Link:') !!}
    {!! Form::text('link', null, ['class' => 'form-control','minlength' => 4]) !!}
</div>

<!-- Certificatlink Field -->
<div class="form-group col-sm-6">
    {!! Form::label('certificatlink', 'Certificatlink:') !!}
    {!! Form::text('certificatlink', null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::select('user_id', $userItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Tictype Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tictype_id', 'Tictype Id:') !!}
    {!! Form::select('tictype_id', $tictypeItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('ticusages.index') !!}" class="btn btn-default">Cancel</a>
</div>
