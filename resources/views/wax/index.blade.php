@extends('layouts.app')

@section('content')

    <div class="container" style="margin-bottom: 4em">
        <div class="row justify-content-center">
            <h1><i class="fas fa-fill-drip"></i> Waxes ({{count($waxes)}})</h1>
        </div>
        <br>

        @if(count($waxes)!=0)
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Weight</th>
                    <th>Price</th>
                    <th>Price/7oz Candle</th>
                </tr>
                </thead>
                <tbody>
                @foreach($waxes as $wax)
                    <tr>
                        <td>{{$wax->id}}</td>
                        <td><a href="{{$wax->order_link}}" target="_blank">{{$wax->name}}</a></td>
                        <td>{{$wax->type}}</td>
                        <td>{{$wax->weight}} lbs</td>
                        <td>${{number_format($wax->price/100, 2)}}</td>
                        <td>${{number_format(($wax->price/100)/($wax->weight*16/5.1), 2)}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>There is no wax...</p>
        @endif
    </div>

@endsection
