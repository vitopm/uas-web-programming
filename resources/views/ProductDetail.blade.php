@extends('layout.main')

@section('container')

<div class="container">
    <h2><u>{{ $Detail["Name"] }}</u></h2>
    <div class="row p-4 shadow" style="border-radius:10px;border: 1px solid black;">
        <div class="col-3">
            <img src="https://farm2forkdirect.co.uk/wp-content/uploads/2021/01/PAK-CHOI-scaled.jpeg" class="card-img-top" alt="..." style="border-radius:10px; border:1px solid black">
        </div>
        <div class="col">
            <h4><b>Price : Rp. {{ $Detail->Price }},-</b></h4>
            <p><b>Description:</b></p>
            <p>{{ $Detail->Detail }}</p>

            <div class="mt-4" style="text-align:right">
                <form action="/addToCart" method="POST">
                    @csrf
                    <div class="Detail-Button-Detail">
                        <input type="hidden" name="id" id="" value="{{ $Detail->id }}">
                        <button type="submit" class="btn btn-light">Buy</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection
