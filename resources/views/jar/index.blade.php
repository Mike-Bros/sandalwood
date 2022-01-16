@extends('layouts.app')

@section('content')

    <div class="container" style="margin-bottom: 4em">
        <div class="row justify-content-center">
            <h1><i class="fas fa-glass-whiskey"></i> Jar ({{count($jars)}})</h1>
        </div>
        <br>

        @if(count($jars)!=0)
            <table class="table table-bordered table-hover" id="myTable">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Size</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
                </thead>
                <tbody>
                @foreach($jars as $jar)
                    <tr>
                        <td>{{$jar->id}}</td>
                        <td><a href="{{$jar->order_link}}" target="_blank">{{$jar->name}}</a></td>
                        <td>{{$jar->size}} oz</td>
                        <td>{{$jar->quanity}}</td>
                        <td>${{number_format($jar->price/100, 2)}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>There are no jars...</p>
        @endif
    </div>

@endsection
