<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>商品列表</title>
</head>
<body>
    <table>
        <tr>
            <td>商品名称</td>
            <td>商品描述</td>
            <td>查看详情</td>
        </tr>
        @foreach($data as $k=>$v)
            <tr>
                <td>{{$v['goods_name']}}</td>
                <td>{{$v['short_desc']}}</td>
                <td><a href="/goodsList/{{$v['goods_id']}}">商品详情</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>