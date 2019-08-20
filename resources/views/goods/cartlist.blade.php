<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>购物车</title>
</head>
<body>
    <table border="">
        <tr>
            <td>商品名称</td>
            <td>购买数量</td>
            <td>购买价格</td>
            <td>添加时间</td>
            <td>操作</td>
        </tr>
        @foreach($data as $k=>$v)
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        @endforeach
    </table>
</body>
</html>