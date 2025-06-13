<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>一覧</title>
    </head>
	<body>
        <h1>一覧</h1>
        <div class="container">
            @forelse($items as $value)
                <div class="item">
                    <a href="{{ route('detail', $value->id) }}"><img src="{{ asset('storage/' . $value->image) }}" width="200"></a>
                </div>
            @empty
                <div>画像がありません<div>
            @endforelse
        </div>

		<a href="{{route('create')}}">新規登録</a>
    </body>
</html>
