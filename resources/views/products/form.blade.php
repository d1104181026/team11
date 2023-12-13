<div class="form-group">
    {!! Form::label('name', '商品名稱：') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('tid', '所屬商店：') !!}
    <!-- 待設計一下拉式選單 -->
</div>

<div class="form-group">
    {!! Form::label('price','價格:') !!}
    {!! Form::text('price',null ,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('discount', '優惠：') !!}
    {!! Form::text('discount', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('tid', '連鎖便利店：') !!}
    {!! Form::text('tid', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('inventory', '庫存量：') !!}
    {!! Form::text('inventory', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>
