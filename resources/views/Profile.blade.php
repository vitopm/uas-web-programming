@extends('layout.main')

@section('container')

<div class="container font-monospace">
    <h2 class="mb-4"><u>Profile</u></h2>
    <form action="action/Profile" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="row p-4" style="border-radius:10px;border: 1px solid black;">
            <div class="col-3">
                <img src="{{ asset('storage/'.auth()->user()->Photo) }}" alt="Your Display Picture" style="width:100%">
            </div>
            <div class="col">
                <div class="form-floating mb-2" style="display: flex">
                    <p>First Name</p>
                    <div class="input-form">
                        <input type="text" name="FirstName" class="form-control-sm @error('name') is-invalid @enderror" id="FirstName" value="{{auth()->user()->FirstName}}"   style="background-color: transparent" required>
                    </div>
                </div>
                <div class="form-floating mb-2"  style="display: flex">
                    <p>Email:</p>
                    <div class="input-form">
                        <input type="email" name="email" class="form-control-sm @error('email') is-invalid @enderror" id="Email" value="{{auth()->user()->email}}" style="background-color: transparent" required>
                    </div>
                </div>
                <div class="form-floating mb-2"  style="display: flex">
                    <p>Gender: </p>
                    <div class="input-form">
                        <input id="lk" name="gender" type="radio" name="jenis_kelamin" value="1" {{ auth()->user()->gender==1?'checked':'' }}>
                        <label for="lk">Male</label>
                        <input id="lk" name="gender" type="radio" name="jenis_kelamin" value="2" {{ auth()->user()->gender==2?'checked':'' }}>
                        <label for="lk">Female</label>
                    </div>
                </div>
                <div class="form-floating mb-2"  style="display: flex">
                    <p>Password: </p>
                    <div class="input-form">
                        <input type="password" name="password" class="form-control-sm" id="floatingPassword" placeholder="Password" style="background-color: transparent" required>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="form-floating mb-2" style="display: flex">
                    <p>Last name:</p>
                    <div class="input-form">
                        <input type="text" name="LastName" class="form-control-sm @error('name') is-invalid @enderror" id="LastName" value="{{auth()->user()->LastName}}"  style="background-color: transparent" required>
                    </div>
                </div>
                <div class="form-floating mb-2" style="display: flex">
                    <p>Role:</p>
                    <div class="input-form">
                        <select id="Role" name="Role" class="form-control-sm" style="background-color: transparent" required>
                            <option value="1" {{ auth()->user()->Role==1?'selected':'' }}>User</option>
                            <option value="2" {{ auth()->user()->Role==2?'selected':'' }}>Admin</option>
                        </select>
                    </div>
                </div>
                <div class="form-floating mb-2"  style="display: flex">
                    <p>Display picture:</p>
                    <div class="input-form">
                        <input class="form-control-sm" type="file" name="Photo" id="formFile" required>
                    </div>
                </div>
                <div class="form-floating mb-2"  style="display: flex">
                    <p>Confirm password:</p>
                    <div class="input-form">
                        <input type="password" name="confirm-password" class="form-control-sm" id="floatingPasswordConfirmation" placeholder="Re-Type Password" style="background-color: transparent" required>
                    </div>
                </div>

                <div class="mt-4" style="text-align:right">
                    <p><button style="font-size:18px;" onclick="return confirm('Update, Continue?')">Save Edit</button></p>
                </div>
            </div>
        </div>

    </form>
</div>
@endsection
