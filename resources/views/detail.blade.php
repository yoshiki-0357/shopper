<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>画像詳細</title>
</head>
<body>
    <h1>詳細</h1>

    <table>
        <tr>
            <th>画像</th>
            <td><img src="{{ asset('storage/' . $item->image) }}" width="400"></td>
        </tr>
        <tr>
            <th>店名</th><td>{{ $item->shop_name }}</td></tr>
        <tr><th>色</th><td>{{ $item->color }}</td></tr>
        <tr><th>柄</th><td>{{ $item->pattern}}</td></tr>
        <tr><th>テキスト</th><td>{{ $item->text }}</td></tr>
     </table>

    <p><a href="{{ route('index') }}">← 一覧に戻る</a></p>
</body>
</html>
