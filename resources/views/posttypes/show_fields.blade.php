<!-- Postname Field -->
<div class="form-group">
    {!! Form::label('postname', 'Postname:') !!}
    <p>{!! $posttype->postname !!}</p>
</div>

<!-- Postdescription Field -->
<div class="form-group">
    {!! Form::label('postDescription', 'Postdescription:') !!}
    <p>{!! $posttype->postDescription !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $posttype->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $posttype->updated_at !!}</p>
</div>

