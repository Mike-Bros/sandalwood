@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <h1>Wax: {{$wax->name}}</h1>
        </div>
        <div>
            <table class="table table-bordered table-hover">
                <tbody>
                <tr>
                    <th>Property</th>
                    <th>Value</th>
                </tr>
                @foreach($wax->getAttributes() as $key=>$value)
                    <tr>
                        <td>{{$key}}</td>
                        <td style="word-wrap: break-word;min-width: 160px;max-width: 160px">{{$value}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

@endsection
