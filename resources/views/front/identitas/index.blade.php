@extends('front.layout.main_front')

@section('content')

<h2 class="mb-4">Visi dan Misi Rumah Sakit</h2>

<div class="row align-items-center">
    <div class="col-md-6">
        <img src="{{ asset('img/hospital2.jpg') }}" alt="Rumah Sakit" class="img-fluid rounded shadow">
    </div>
    <div class="col-md-6 mt-4 mt-md-0">
        <p>
            Visi dan Misinya adalah .....
        </p>
        <ul>
            @foreach($identitas as $item)
            <li>{{ $item->misi}}</li>
            @endforeach
        </ul>
    </div>
</div>

@endsection
