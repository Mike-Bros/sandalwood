@extends('layouts.app')

@section('content')

    <div class="container" style="margin-bottom: 4em">
        <div class="row justify-content-center">
            <h1>
                <i class="fas fa-vial"></i> Candle ({{count($candles)}})
                <a type="button" class="btn btn-sm btn-primary"
                href="/candle/create"><i class="fas fa-plus"></i></a>
            </h1>
        <br>

        @if(count($candles)!=0)
            <table class="table table-bordered table-hover"  id="myTable">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Brand Name</th>
                    <th>Wax</th>
                    <th>Jar</th>
                </tr>
                </thead>
                <tbody>
                @foreach($candles as $candle)
                    <tr>
                        <td><a href="/candle/{{$candle->id}}" target="_blank">{{$candle->id}}</a></td>
                        <td>{{$candle->brand_name}}</td>
                        <td><a href="/wax/{{$candle->wax_id}}" target="_blank">{{\App\Models\Wax::select('name')->where('id', $candle->wax_id)->get()->first()->name . ' - ' . number_format($candle->wax_amount,1)}}oz</a></td>
                        <td><a href="/jar/{{$candle->jar_id}}" target="_blank">{{$jar = \App\Models\Jar::select('name')->where('id', $candle->jar_id)->get()->first()->name}} -
                            {{$jar = \App\Models\Jar::select('size')->where('id', $candle->jar_id)->get()->first()->size}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>There are no candles...</p>
        @endif
    </div>

@endsection
