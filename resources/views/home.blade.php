@extends('layouts.main')

@section('content')
<main>
    <section class="container-pasta">
        <h3>LE LUNGHE</h3>
        <div class="lunghe-holder">
            @foreach ($lunghe as $lunga)
                <div class="box">
                    <img src="{{ $lunga['src'] }}" alt="">
                </div>
            @endforeach
        </div>
    </section>

</main>
@endsection