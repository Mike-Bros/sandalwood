@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <h1>
                <a type="button" class="btn btn-lg btn-primary" href="/candle">
                    <i class="fas fa-arrow-left"></i>
                </a>
                Create Candle
            </h1>
        </div>

        <div class="row justify-content-center">
            <form autocomplete="off" action="/candle/create" method="post">

                <div class="form-group">
                    <label>Brand Name
                        <input class="form-control" name="brand_name" required>
                    </label>
                </div>

                <div class="mt-2 form-group">
                    <label>Wax
                        <select class="form-control" name="wax_id" required>
                            @foreach($waxes as $wax)
                                <option value="{{$wax->id}}">{{$wax->name}}</option>
                            @endforeach
                        </select>
                    </label>
                </div>

                <div class="mt-2 form-group">
                    <label class="">Wax Amount
                        <input type="text" class="form-control" placeholder="14.6" required>
                        <div class="text-warning" style="font-size: small">**Should be ounces in decimal format up to 2
                            decimals, ####.##
                        </div>
                    </label>
                </div>

                <div class="mt-2 form-group">
                    <label>Jar
                        <select class="form-control" name="jar_id" required>
                            @foreach($jars as $jar)
                                <option value="{{$jar->id}}">{{$jar->name}}</option>
                            @endforeach
                        </select>
                    </label>
                </div>

                <div class="mt-2 form-group">
                    <label>Wick
                        <select class="form-control" name="wick_id" required>
                            @foreach($wicks as $wick)
                                <option value="{{$wick->id}}">{{$wick->name}}</option>
                            @endforeach
                        </select>
                    </label>
                </div>

                <div class="mt-2 form-group">
                    <label>Fragrance
                        <select class="form-control" name="fragrance_id" required>
                            @foreach($fragrances as $fragrance)
                                <option value="{{$fragrance->id}}">{{$fragrance->id}}</option>
                            @endforeach
                        </select>
                    </label>
                </div>

                @csrf
                <div class="mt-3">
                    <button class="btn btn-primary" type="submit"> Save</button>
                </div>

            </form>
        </div>

    </div>

@endsection
