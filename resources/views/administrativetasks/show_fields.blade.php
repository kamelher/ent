<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{!! $administrativetask->user_id !!}</p>
</div>

<!-- Posttype Id Field -->
<div class="form-group">
    {!! Form::label('posttype_id', 'Posttype Id:') !!}
    <p>{!! $administrativetask->posttype_id !!}</p>
</div>

<!-- Startdate Field -->
<div class="form-group">
    {!! Form::label('startDate', 'Startdate:') !!}
    <p>{!! $administrativetask->startDate !!}</p>
</div>

<!-- Enddate Field -->
<div class="form-group">
    {!! Form::label('endDate', 'Enddate:') !!}
    <p>{!! $administrativetask->endDate !!}</p>
</div>

<!-- Path Field -->
<div class="form-group">
    {!! Form::label('path', 'Path:') !!}
    <p>{!! $administrativetask->path !!}</p>
</div>

