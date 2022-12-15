@extends('app')


@section('telephonat')
    @foreach ($arts as $art)
        <div class="col-11 col-md-6 col-lg-3 mx-0 mb-4">
            <div class="card p-0 overflow-hidden h-100 shadow">
                <li>{{ $art->get_nom() }}</li>
                <li>{{ $art->get_prix() }}</li>
            </div>
        </div>
    @endforeach
@endsection
