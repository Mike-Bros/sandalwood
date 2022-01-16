@extends('layouts.app')

@section('content')

    <div class="container" style="margin-bottom: 4em">
        <div class="row justify-content-center">
            <h1><i class="fas fa-vial"></i> Candle ({{count($candles)}})</h1>
        </div>
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
                        <td>{{$candle->id}}</td>
                        <td>{{$candle->brand_name}}</td>
                        <td>{{\App\Models\Wax::select('name')->where('id', $candle->wax_id)->get()->first()->name . ' - ' . number_format($candle->wax_amount,1)}}oz</td>
                        <td>{{$jar = \App\Models\Jar::select('name')->where('id', $candle->jar_id)->get()->first()->name}} -
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
