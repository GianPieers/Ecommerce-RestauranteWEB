<div class="form-group">
    {!! Form::label('name','Nombre') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>   


<div class="form-group">
    {!! Form::label('module','Modulo') !!}

    {!! Form::select('module', getModulesArray(),0, ['class'=>'form-control']) !!}

    {!! Form::text('module',null, ['class'=>'form-control']) !!}
    
</div>
