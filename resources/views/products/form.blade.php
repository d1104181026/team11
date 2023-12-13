<div class="form-group">
    {!! Form::label('name', '商品姓名：') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('tid', '所屬商店：') !!}
    <!-- 待設計一下拉式選單 -->
</div>
<div class="form-group">
    {!! Form::label('birthdate','名稱:') !!}
    {!! Form::date('birthdate',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('onboarddate','價格:') !!}
    {!! Form::date('onboarddate',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('position', '優惠：') !!}
    {!! Form::text('position', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('height', '連鎖便利店：') !!}
    {!! Form::text('height', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('weight', '庫存量：') !!}
    {!! Form::text('weight', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>
