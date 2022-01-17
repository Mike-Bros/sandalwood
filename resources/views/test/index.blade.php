@extends('layouts.app')

@section('content')

    <div class="container" style="margin-bottom: 4em">
        <div class="row justify-content-center">
            <h1><i class="fas fa-tasks"></i> Test ({{count($tests)}})</h1>
        </div>
        <br>

        @if(count($tests)!=0)
            <table class="table table-bordered table-hover" id="myTable">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Conditions</th>
                    <th>Initial Light</th>
                    <th>Half Hour Progress</th>
                    <th>Four Hour Progress</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tests as $test)
                    <tr>
                        <td><a href="/test/{{$test->id}}" target="_blank">{{$test->id}}</a></td>
                        <td>{{$test->conditions}}</td>
                        <td>{{$test->init_light_img}}</td>
                        <td>{{$test->half_hour_progress_img}} lbs</td>
                        <td>{{$test->four_hour_progress_img}} lbs</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>There are no tests...</p>
        @endif
    </div>

@endsection
