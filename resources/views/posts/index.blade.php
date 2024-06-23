@extends('layout')

@section('title')
    記事一覧
@endsection

@section('content')
    <div class="row">
        <h2>記事一覧</h2>
        <table class="table table-bordered table-hover ">
            <thead class="bg-info text-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">タイトル</th>
                    <th scope="col">内容</th>
                    <th scope="col">日付</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->title }}</td>
                        <td>{{ $p->content }}</td>
                        <td>{{ $p->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
