@extends('layouts.app')

@section('content')

    <div class="container" style="margin-bottom: 4em">
        <div class="row justify-content-center">
            <h1><i class="fas fa-broom fa-rotate-180"></i> Wick ({{count($wicks)}})</h1>
        </div>
        <br>

        @if(count($wicks)!=0)
            <table class="table table-bordered table-hover" id="myTable">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Thickness</th>
                    <th>Length</th>
                    <th>Price</th>
                </tr>
                </thead>
                <tbody>
                @foreach($wicks as $wick)
                    <tr>
                        <td><a href="/wick/{{$wick->id}}" target="_blank">{{$wick->id}}</a></td>
                        <td><a href="{{$wick->order_link}}" target="_blank">{{$wick->name}}</a></td>
                        <td>{{$wick->type}}</td>
                        <td>{{$wick->thickness}} mm</td>
                        <td>{{$wick->length}} ft</td>
                        <td>${{number_format($wick->price/100, 2)}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>There are no wicks...</p>
        @endif
    </div>

@endsection
