@extends('layout.admin')
@section('content')
    <h1>Category list</h1>
    <ul>
        @foreach($list as $item)
            <li>
                {{$item->name}}
                <ul>
                    @foreach($item->products as $product)
                        <li>{{$product->name}}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
@endsection

@section('header')
    This is category list
@endsection

@section('script')
    <script>
        // alert('This is category list');
    </script>
@endsection