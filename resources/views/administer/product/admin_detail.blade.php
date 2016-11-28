@extends('/administer/admin_template')

@section('css','/admin/product/edit')
@section('title','商品詳細')
@section('stock','class="active"')

@section('main')

    <h2>商品編集画面</h2>
    <form class="form-horizontal" action="/admin/stock/{{$id}}/edit" method="GET">
        {{csrf_field()}}
        <div class="input-group">
            <span class="input-group-addon" >商品ID</span>
            <input type="text" name="product_id" class="form-control"  value="{{$products->product_id}}" disabled>
        </div>
        <div class="input-group">
            <span class="input-group-addon" >商品名</span>
            <input type="text" name="product_name" class="form-control" placeholder="ProductName"  value="{{$products->product_name}}" disabled>
        </div>
        <div class="input-group">
            <span class="input-group-addon" >商品画像</span>
            <input type="text" name="product_image" class="form-control" placeholder="保留" value="" disabled>
        </div>
        <div class="input-group">
            <span class="input-group-addon" >値段</span>
            <input type="text" name="product_price" class="form-control" placeholder="ProductName"  value="{{$products->product_price}}" disabled>
            <span class="input-group-addon" >在庫数</span>
            <input type="text" name="product_stock" class="form-control" placeholder="ProductName"  value="{{$products->product_stock}}" disabled>
            <span class="input-group-addon" >翻訳者</span>
            <input type="text" name="trancelater_ID" class="form-control" placeholder="ProductName"  value="{{$products->trancelater_ID}}" disabled>
        </div>
        <div class="input-group">
            <span class="input-group-addon" >高さ</span>
            <input type="text" name="product_height" class="form-control" placeholder="ProductName"  value="{{$products->product_height}}" disabled>
            <span class="input-group-addon" >幅</span>
            <input type="text" name="product_width" class="form-control" placeholder="ProductName"  value="{{$products->product_width}}" disabled>
            <span class="input-group-addon" >奥行き</span>
            <input type="text" name="product_depth" class="form-control" placeholder="ProductName"  value="{{$products->product_depth}}" disabled>
        </div>
        <div class="input-group">
            <span class="input-group-addon" >ページ数</span>
            <input type="text" name="product_page" class="form-control" placeholder="ProductName"  value="{{$products->product_page}}" disabled>
        </div>
        <div class="input-group">
            <span class="input-group-addon" >発売日</span>
            <input type="datetime" name="product_start_day" class="form-control" placeholder="ProductName"  value="{{$products->product_start_day}}" disabled>
        </div>
        <div class="input-group">
            <span class="input-group-addon" >商品説明</span>
            <textarea id="textarea" type="textarea" name="product_explanation" class="form-control" placeholder="ProductName" disabled>{{$products->product_explanation}}</textarea>
        </div>

        <button class="btn btn-default" type="submit" name="submit">編集</button>
    </form>
@endsection
