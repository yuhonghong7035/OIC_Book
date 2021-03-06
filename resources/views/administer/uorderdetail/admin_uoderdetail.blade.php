@extends('/administer/admin_template')

@section('css','/admin/uorder_detail')
@section('title', '売上')
@section('uoderdetail','class="active"')
@section('main')

    @if(session()->get('authority') == 1)

        <h1 style="text-align: center">権限がありません</h1>

    @else

  <div class="searchform">
    <form class="search" action="/admin/uoderdetail" method="GET">
      <div class="input-group">
        <span class="input-group-addon">注文ID</span>
        <input type="text" name="uorder_id" class="form-control"  value="{{ array_get($request,'uorder_id','') }}">
      </div>
      <div class="input-group">
        <span class="input-group-addon">注文日付</span>
        <input type="date" name="uorder_day_from" class="form-control"  value="{{array_get($request,'uorder_day_from','') }}">
        <span class="input-group-addon">〜</span>
        <input type="date" name="uorder_day_to"   class="form-control"  value="{{array_get($request,'uorder_day_to','') }}">
      </div>
      <div class="input-group">
        <span class="input-group-addon">注文者名</span>
        <input type="text" name="uorder_name" class="form-control"  value="{{ array_get($request,'uorder_name','') }}">
      </div>
      <input class="btn btn-default" type="submit" name="search" value="検索">
    </form>
  </div>

  <table class="table">
    <tr>
      <th>注文ID</th>
      <th>注文日付</th>
      <th>注文者名</th>
      <th>合計金額</th>
      <th>利用ポイント</th>
      <th>付加ポイント</th>
      <th>購入商品名</th>
      <th>商品個数</th>
    </tr>
    @foreach ($sales as $key => $value)
      <tr>
        <td>{{$value->uorder_id}}</td>
        <td>{{$value->uorder_day}}</td>
        <td>{{$value->uorderUser["name"]}}</td>
        <td>{{$value->uorder_price}}</td>
        <td>{{$value->uorder_use_point}}</td>
        <td>{{$value->uorder_add_point}}</td>
        <td>
          @foreach($value->uorderDetail as $uorderProduct)
            <li>{{$uorderProduct["uorderProduct"]["product_name"]}}</li>
          @endforeach
        </td>
        <td>
          @foreach($value->uorderDetail as $uorderProduct)
            <li style="list-style: none;">{{$uorderProduct["uorder_number"]}}</li>
          @endforeach
        </td>
      </tr>
    @endforeach
    {{$sales->appends($request->toArray())->links()}}
  </table>

    @endif

@endsection
