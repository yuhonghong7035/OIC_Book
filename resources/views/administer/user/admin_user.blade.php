@extends('/administer/admin_template')

@section('css','/admin/employee')
@section('title','ユーザ情報')
@section('user','class="active"')

@section('main')
    <div class="row container">
        <div class="col-md-11"></div>
        <div class="col-md-1 right">
            <button class="btn btn-default" type="button" onclick="location.href='/admin/user/create'">新規登録</button>
        </div>
    </div>
  <div class="searchform">
    <form class="search" action="/admin/user" method="GET">
      <div class="input-group">
        <span class="input-group-addon">ユーザID</span>
        <input type="text" name="id" class="form-control"  value="{{ array_get($request,'id','') }}">
      </div>
      <div class="input-group">
        <span class="input-group-addon">名前</span>
        <input type="text" name="name" class="form-control"  value="{{array_get($request,'name','') }}">
      </div>
      <div class="input-group">
        <span class="input-group-addon">電話番号</span>
        <input type="text" name="tel" class="form-control"  value="{{array_get($request,'tel','') }}">
      </div>

      <input class="btn btn-default" type="submit" name="search" value="検索">
    </form>
  </div>

  <table class="table">
    <tr>
      <th>ユーザID</th>
      <th>名前</th>
      <th>メールアドレス</th>
      <th>郵便番号</th>
      <th>住所</th>
      <th>電話番号</th>
      <th>ポイント</th>
      <th>作成日時</th>
      <th>更新日時</th>
        <th>ユーザ詳細</th>
    </tr>
    @foreach ($user as $key => $value)
      <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->name}}</td>
        <td>{{$value->email}}</td>
        <td>{{$value->user_post_code}}</td>
        <td>{{$value->user_address}}</td>
        <td>{{$value->user_phone_number}}</td>
        <td>{{$value->user_point}}</td>
        <td>{{$value->created_at}}</td>
        <td>{{$value->updated_at}}</td>
          <td>
              <button class="btn btn-default" type="button" name="button" onclick="location
                      .href='/admin/user/{{$value->id}}'">ユーザ詳細</button>
          </td>
      </tr>
    @endforeach
    {{$user->appends($request->toArray())->links()}}
  </table>

@endsection
