<!-- Name Field -->
<div class="row">
    <div class="col-6">
        <div class="form-group">
            <h5>{!! Form::label('name', 'Name:') !!}
                {!! $faculty->name !!}</h5>
        </div>
    </div>
    <div class="col-6" dir="rtl">
        <!-- Name Ar Field -->
        <div class="form-group pull-right pr-5">
           <h5>{!! Form::label('name_ar', 'الكلية  :') !!}
               {!! $faculty->name_ar !!}</h5>
        </div>
    </div>
    <hr />
    <div class="col-12">
        <h6 class="text-capitalize text-black-50 text-danger"> About faculty </h6>
        <p>
            {!! $faculty->desription !!}
        </p>
    </div>
    <div class="card col-6">
        <h6 class="text-capitalize text-black-50 text-danger"> Departments</h6>
        <ul>
            @foreach($faculty->deparetements as $dep)
                <li>{{$dep->name}}</li>
            @endforeach
        </ul>
    </div>
</div>

