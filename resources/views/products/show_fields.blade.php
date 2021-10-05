<!-- Product Name Field -->
<div class="col-sm-12">
    {!! Form::label('product_name', 'Product Name:') !!}
    <p>{{ $product->product_name }}</p>
</div>

<!-- Brand Field -->
<div class="col-sm-12">
    {!! Form::label('brand', 'Brand:') !!}
    <p>{{ $product->brand }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $product->description }}</p>
</div>

