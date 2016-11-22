@extends('template')
@section('title','cart')
@section('css','cart')
@section('main')
<div class="container">
    <div class="title">
        <h2>ショッピングカート</h2></div>
    <div class="contents">
        <div class="content">
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th>商品名</th>
                        <th>著者</th>
                        <th>出版社</th>
                        <th>金額</th>
                        <th>数量</th>
                        <th>小計</th>
                        <th>削除</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="https://placehold.jp/150x150.png" alt="" /></td>
                        <td>しろくまちゃんのほっとけーき</td>
                        <td>テキストがはいりますテキストがはいりますテキストがはいりますテキストがはいりますテキストがはいります</td>
                        <td>hoge</td>
                        <td>2,200円</td>
                        <td class="btn">
                            <form class="" action="/cart/edit/" method="post">
                                <select class="sum" name="sum">
                                    @for ($i=1; $i <= 10; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </form>
                        </td>
                        <td>2,200円</td>
                        <td><form action="/cart/clear/2" method="post"><div class="form-bottom"><a>x</a></div></form></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="total">
            <div class="inner">
                合計金額 <span>2,200円</span>
            </div>
        </div>

        <div class="button">
            <div class="inner">
                <div class="back"><a href="top">買い物を続ける</a></div>
                <div class="next"><a href="buy">レジに進む</a></div>
            </div>
        </div>
    </div>
</div>
@endsection
