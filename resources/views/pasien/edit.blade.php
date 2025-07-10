@extends('front.layout.main_front')
@section('title', 'Edit Pasien')

@section('content')
<div class="container">
    <h3 class="mb-3">Edit Pasien</h3>

    <form action="{{ route('pasien.update', $pasien->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('pasien.form')
    </form>
</div>
@endsection
