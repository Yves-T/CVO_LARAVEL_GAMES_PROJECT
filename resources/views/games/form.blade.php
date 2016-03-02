@include('shared.errors')


<div class="form-group {{ $errors->has('title') ? 'has-error':'' }}">
    {!! Form::label('title', null, ['class'=>'control-label']) !!}
    {!! Form::text('title', null, ['class'=>'form-control']) !!}

    {!! $errors->first('title', '<span class="text-danger">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('publisher') ? 'has-error':'' }}">
    {!! Form::label('publisher', null, ['class'=>'control-label']) !!}
    {!! Form::text('publisher', null, ['class'=>'form-control']) !!}

    {!! $errors->first('publisher', '<span class="text-danger">:message</p>') !!}
</div>

<div class="checkbox">
    <label>
        {!! Form::checkbox('complete') !!} Complete?
    </label>
</div>

{!! Form::submit('Create',['class'=>'btn btn-primary']) !!}
<a href="{{ url()->previous() }}" class="btn btn-link"></a>
