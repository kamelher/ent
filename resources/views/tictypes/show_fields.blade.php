<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $tictype->name !!}</p>
</div>

<!-- Ticdescription Field -->
<div class="form-group">
    {!! Form::label('ticdescription', 'Ticdescription:') !!}
    <p>{!! $tictype->ticdescription !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $tictype->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $tictype->updated_at !!}</p>
</div>

