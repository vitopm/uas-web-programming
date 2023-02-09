@extends('layout.main')

@section('container')

<div class="container font-monospace">
    <h2 class="mb-4"><u>Cart</u></h2>
    {{-- kalau kosong tidak perlu nampilih pilihan --}}
    @if ($orders->isEmpty())
        <div class="row shadow p-3 mb-3" style="border-radius:10px;border: 1px solid black;">
            <h2>No product in cart</h2>
        </div>
    @else
    {{-- loop --}}
        @foreach ($orders as $order)
            <div class="row shadow p-3 mb-3" style="border-radius:10px;border: 1px solid black;">
                <div class="col-2">
                    <img src="https://farm2forkdirect.co.uk/wp-content/uploads/2021/01/PAK-CHOI-scaled.jpeg" class="card-img-top" alt="..." style="border-radius:10px;border: 1px solid black;">
                </div>
                <div class="col">
                    <h4>{{ $order->product->Name }}</h4>
                    <p>Rp {{ $order->product->Price }}</p>
                </div>
                <div class="col">
                    <form action="/deleteProduct/{{ $order->id }}" method="post">
                        @method('delete')
                        @csrf
                    <p><button style="font-size:18px" onclick="return confirm('Are You Sure?')">Delete</button></p>
                    </form>
                </div>
            </div>
        @endforeach

        <h3 class="mt-5">Total Price: Rp{{ $total }}</h3>
        <form action="/orderAll" method="post">
            @csrf
            <button type="submit" class="btn btn-light btn-lg mt-4" href='/Success'>Check out</button>
        </form>
    @endif
</div>
@endsection
