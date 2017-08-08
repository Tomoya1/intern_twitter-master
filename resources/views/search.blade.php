@extends('layouts.app')

@section('content')
    <div class="container pt-4">
        <div class="row">
            <div class="col-lg-3">
                <div class="card card-link-list mb-4">
                    <div class="card-block">
                        <h6 class="card-title">Search</h6>
                        first, second, third
                    </div>
                </div>

                @include('fragments.footer')
            </div>

            <div class="col-lg-6">
                <ul class="list-group media-list-stream mb-4">
                    @include('fragments.tweet')
                </ul>
            </div>
        </div>
    </div>
@endsection
