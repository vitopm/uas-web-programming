<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="p-5 .bg-success.bg-gradient font-monospace" style="background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%); text-align: center; color: black"><h1>Amazing E-Grocery</h1></div>

@if (Illuminate\Support\Facades\Auth::check() && Illuminate\Support\Facades\Auth::user()->role_id == '1')
<a href="/role" class="nav-item nav-link">@lang('navbar.Account')</a>
    <li class="dropdown-item">
        <a href="/AddProduct" style="color:black;">Add Product</a>
    </li>
    <li class="dropdown-item">
        <a href="/AccountMaintenance" style="color:black;"><u>Account Maintenance</u></a>
    </li>
@endif

<nav class="navbar navbar-expand-lg navbar-light bg-light font-monospace mb-5" style="background: linear-gradient(to top, #0099ff 0%, #ff99cc 100%); border-bottom: 1px solid black;">
    <div class="container" style="">
        {{-- jadi button kalo lebar layar mengecil --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center " id="navbarNavDropdown">
            <ul class="navbar-nav" style = "color: black">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Hello, {{auth()->user()->FirstName}}
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i><u>Logout</u></button>
                            </form>
                        </li>
                    </ul>
                </li>

                {{-- kalau belum login --}}
                @else
                <div class="">
                    <a href="/Register" style="color:black">Register</a>
                    <a href="/Login" style="color:black">Login</a>
                </div>
                @endauth
            </ul>
        </div>
    </div>
</nav>

@if (Illuminate\Support\Facades\Auth::check())
    <div class="container font-monospace mb-5 p-3 shadow" style="display:flex;justify-content:space-around; border:1px solid black; border-radius:10px">
        <a href="/Home" style="color:black;">Home</a>
        <a href="/CartPage" style="color:black;">Cart</a>
        <a href="/Profile" style="color:black;">Profile</a>
        @if (Illuminate\Support\Facades\Auth::check() && Illuminate\Support\Facades\Auth::user()->Role == 2)
            <a href="/AccountMaintenance" style="color:black;">Account Maintenance</a>
        @endif
    </div>
@endif
