<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
		<title>登録</title>
	</head>
	<body>
		<h1>登録</h1>
		
		<form method="POST" action="{{route('store')}}" enctype="multipart/form-data">
        @csrf
            <table>
                <tr>
                    <td>画像イメージ</td>
				    <td><input type="file" name="image"></td>
			    </tr>
                <tr>
				    <td>店名</td>
				    <td><input name="shop_name" type="text" value={{old("shop_name")}}></input></td>
                </tr>
                <tr>
			        <td>色</td>
				    <td><input name="color" type="text" value={{old("color")}}></input></td>
                </tr>
                <tr>
				    <td>柄・模様</td>
				    <td><input name="pattern" type="text" value={{old("pattern")}}></input></td>
                </tr>
                <tr>
				    <td>テキスト</td>
				    <td><input name="text" type="text" value={{old("text")}}></input></td>
                </tr>
            </table>
            <button type="submit">アップロード</button>
		</form>
		
	</body>
    <a href="index"><button type="cancel">戻る</button></a>
</html>
