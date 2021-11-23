@extends('layouts.app')

@section('content')

    <div class="container" style="margin-bottom: 4em">
        <div class="row justify-content-center">
            <h1><i class="fas fa-magic"></i> Process ({{count($processes)}})</h1>
        </div>
        <br>

        @if(count($processes)!=0)
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Max Temp</th>
                    <th>Pour Temp</th>
                </tr>
                </thead>
                <tbody>
                @foreach($processes as $process)
                    <tr>
                        <td>{{$process->id}}</td>
                        <td>{{$process->name}}</td>
                        <td>{{$process->description}}</td>
                        <td>{{$process->max_temp}} F</td>
                        <td>{{$process->pour_temp}} F</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>There are no processes...</p>
        @endif
    </div>

@endsection
