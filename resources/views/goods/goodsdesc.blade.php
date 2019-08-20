<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>商品详情</title>
</head>
<body>
    <table>
        <tr>
            <td>商品名称</td>
            <td>商品图片</td>
            <td>商品描述</td>
            <td>商品添加时间</td>
            <td>操作</td>
        </tr>
        <tr>
            <td>{{$data['goods_name']}}</td>
            <td>{{$data['goods_img']}}</td>
            <td>{{$data['short_desc']}}</td>
            <td>{{$data['created_at']}}</td>
            <td><a href="/cart/{{$data['goods_id']}}">加入购物车</a></td>
        </tr>
    </table>
</body>
</html>