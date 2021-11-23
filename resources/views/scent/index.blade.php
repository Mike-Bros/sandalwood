@extends('layouts.app')

@section('content')

    <div class="container" style="margin-bottom: 4em">
        <div class="row justify-content-center">
            <h1><i class="fas fa-tint"></i> Scent ({{count($scents)}})</h1>
        </div>
        <br>

        @if(count($scents)!=0)
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Company</th>
                    <th>Amount</th>
                    <th>Price</th>
                </tr>
                </thead>
                <tbody>
                @foreach($scents as $scent)
                    <tr>
                        <td>{{$scent->id}}</td>
                        <td><a href="{{$scent->order_link}}" target="_blank">{{$scent->name}}</a></td>
                        <td>{{$scent->company}}</td>
                        <td>{{$scent->amount}} oz</td>
                        <td>${{number_format($scent->price/100, 2)}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>There is no wax...</p>
        @endif
    </div>

@endsection
