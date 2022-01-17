@extends('layouts.app')

@section('content')

    <div class="container" style="margin-bottom: 4em">
        <div class="row justify-content-center">
            <h1><i class="fas fa-vials"></i> Batch ({{count($batches)}})</h1>
        </div>
        <br>

        @if(count($batches)!=0)
            <table class="table table-bordered table-hover"  id="myTable">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Candle Name</th>
                    <th>Num Candles</th>
                    <th>Process</th>
                    <th>Test</th>
                    <th>Notes</th>
                </tr>
                </thead>
                <tbody>
                @foreach($batches as $batch)
                    <tr>
                        <td>{{$batch->id}}</td>
                        <td>{{$batch->candle_id}}</td>
                        <td>{{$batch->candles_made}}</td>
                        @if (isset($batch->process_id))
                            <td><a href="/process/{{$batch->process_id}}">{{\App\Models\Process::select('name')->where('id', $batch->process_id)->get()->first()->name}}</a></td>
                        @else
                            <td>NA</td>
                        @endif
                        @if (isset($batch->test_id))
                            <td><a href="/test/{{$batch->test_id}}">{{$batch->test_id}}</td>
                        @else
                            <td>NA</td>
                        @endif
                        @if (isset($batch->notes))
                            <td>{{$batch->notes}}</td>
                        @else
                            <td>NA</td>
                        @endif

                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>There are no batches...</p>
        @endif
    </div>

@endsection
