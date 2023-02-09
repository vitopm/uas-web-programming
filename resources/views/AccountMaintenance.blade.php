@extends('layout.main')

@section('container')

<div class="container font-monospace">
    <h2 class="mb-4"><u> Account Maintenance</u></h2>
    <div class="row">
        <div class="col p-3">
            <h4><b>Account</b></h4>
        </div>

        <div class="col p-3">
            <h4><b>Action</b></h4>
        </div>
    </div>

    @foreach ($Prof as $p)
    <div class="row shadow mb-4" style="border-radius:10px;border: 1px solid black;">
        <div class="col p-3" >
            <p><b>Name:</b> {{ $p->FirstName }} </p>
            <p><b>Role:</b> {{ $p->Role==1?'User':'Admin' }}</p>
        </div>

        <div class="col p-3" style="flex-direction: column;">
            <a href="/UpdateRole/{{ $p->id }}">Update Role</a>
            <br><br>
            <a href="/action/DeleteRole/{{ $p->id }}" onclick="return confirm('Sure you want to delete this account?')">Delete</a>
        </div>
    </div>
    @endforeach
</div>

@endsection
