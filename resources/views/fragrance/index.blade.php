@extends('layouts.app')

@section('content')

    <div class="container" style="margin-bottom: 4em">
        <div class="row justify-content-center">
            <h1><i class="fas fa-tint"></i> Fragrance ({{count($fragrances)}})</h1>
        </div>
        <br>

        @if(count($fragrances)!=0)
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Scent 1</th>
                    <th>Scent 1 Amount</th>
                    <th>Scent 2</th>
                    <th>Scent 2 Amount</th>
                    <th>Scent 3</th>
                    <th>Scent 3 Amount</th>
                    <th>Scent 4</th>
                    <th>Scent 4 Amount</th>
                </tr>
                </thead>
                <tbody>
                @foreach($fragrances as $fragrance)
                    <tr>
                        <td>{{$fragrance->id}}</td>
                        <td>{{\App\Models\Scent::select('name')->where('id',$fragrance->scent_id_1)->get()->first()->name}}</td>
                        <td>{{number_format($fragrance->amount_1 * 100, 2)}}%</td>
                        @if (isset($fragrance->scent_id_2))
                            <td>{{App\Models\Scent::select('name')->where('id',$fragrance->scent_id_2)->get()->first()->name}}</td>
                            <td>{{number_format($fragrance->amount_2 * 100, 2)}}%</td>
                        @else
                            <td>NA</td>
                            <td>NA</td>
                        @endif
                        @if (isset($fragrance->scent_id_3))
                            <td>{{App\Models\Scent::select('name')->where('id',$fragrance->scent_id_3)->get()->first()->name}}</td>
                            <td>{{number_format($fragrance->amount_3 * 100, 2)}}%</td>
                        @else
                            <td>NA</td>
                            <td>NA</td>
                        @endif
                        @if (isset($fragrance->scent_id_4))
                            <td>{{App\Models\Scent::select('name')->where('id',$fragrance->scent_id_4)->get()->first()->name}}</td>
                            <td>{{number_format($fragrance->amount_4 * 100, 2)}}%</td>
                        @else
                            <td>NA</td>
                            <td>NA</td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>There is no wax...</p>
        @endif
    </div>

@endsection
