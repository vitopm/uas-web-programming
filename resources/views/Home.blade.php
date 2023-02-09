@extends('layout.main')

@section('container')

<div class="container font-monospace">
    <h2 class="mb-4"><u>Home</u></h2>
    <div class="row pb-5" style="border-bottom: 1px solid black">
        {{-- start looping product --}}
        @foreach ($products as $p)
        @if($products->count() > 0)
        <div class="col-sm-2 mb-4 shadow mx-3" style="border: 1px solid black; border-radius:10px">
            {{-- a href buat klik detail dari cardnya --}}
            <a href="/ProductDetail/{{ $p->id }}"> {{-- redirect ke halaman detail produk --}}
                <div class="thumb-wrapper p-3" >
                    {{-- foto --}}
                    <div class="img-box mb-3">
                        <img src="https://farm2forkdirect.co.uk/wp-content/uploads/2021/01/PAK-CHOI-scaled.jpeg"
                            class="img-fluid" style="border: 1px solid black; border-radius:10px" alt="">
                    </div>
                    <div class="thumb-content" style="color:black;">
                        {{-- nama --}}
                        <h5>{{ $p->Name }}</h5>
                    </div>
                </div>
            </a>
        </div>
        @endif
        @endforeach
        {{-- end looping product --}}
    </div>
    <div class="mt-5">
        {{ $products->links() }}
    </div>
</div>

@endsection
