@extends('layout.main')

@section('container')

<div class="container font-monospace shadow p-4" style="border:1px solid black; border-radius:10px;">
    <h2>Register</h2>
    <form action="/Register" method="post" enctype='multipart/form-data'>
        @csrf
        <div class="row">
            <div class="col">
                {{-- first name --}}
                <div class="form-floating mb-2" style="display: flex">
                    First Name:
                    <div class="input-form">
                        <input type="text" name="FirstName" class="form-control-sm @error('name') is-invalid @enderror" id="FirstName" placeholder="First name"  style="background-color: transparent" required>
                    </div>
                </div>

                {{-- last name --}}
                <div class="form-floating mb-2" style="display: flex">
                    Last Name:
                    <div class="input-form">
                        <input type="text" name="LastName" class="form-control-sm @error('name') is-invalid @enderror" id="LastName" placeholder="Last name"  style="background-color: transparent" required>
                    </div>
                </div>

                {{-- email --}}
                <div class="form-floating mb-2"  style="display: flex">
                    Email:
                    <div class="input-form">
                        <input type="email" name="email" class="form-control-sm @error('email') is-invalid @enderror" id="Email" placeholder="Email" style="background-color: transparent" required>
                    </div>
                </div>

                {{-- gender --}}
                <div class="form-floating mb-3"  style="display: flex">
                    <p style="display: flex">Gender:</p>
                    <div class="input-form">
                        <input id="lk" name="gender" type="radio" name="jenis_kelamin" value='1'>
                        <label for="lk">Male</label>
                        <input id="lk" name="gender" type="radio" name="jenis_kelamin" value='2'>
                        <label for="lk">Female</label>
                    </div>
                </div>

            </div>

            <div class="col">
                {{-- Role --}}

                <div class="form-floating mb-2" style="display: flex">
                    Role:
                    <div class="input-form">
                        <select id="Role" name="Role" class="form-control-sm" style="background-color: transparent" required>
                            <option value="1">User</option>
                            <option value="2">Admin</option>
                        </select>
                    </div>
                </div>

                {{-- display pictures --}}
                <div class="form-floating mb-2"  style="display:flex">
                    <p>Display picture:</p>
                    <div class="input-form">
                        <input class="form-control-sm" type="file" name="Photo" id="formFile" accept="image/*" required>
                    </div>
                </div>

                {{-- password --}}
                <div class="form-floating mb-2"  style="display: flex">
                    <p>Password:</p>
                    <div class="input-form">
                        <input type="password" name="password" class="form-control-sm" id="floatingPassword" placeholder="Password" style="background-color: transparent" required>
                    </div>
                </div>

                {{-- confirm password --}}
                <div class="form-floating mb-2"  style="display: flex">
                    <p>Confirm password: </p>
                    <div class="input-form">
                        <input type="password" name="confirm-password" class="form-control-sm" id="floatingPasswordConfirmation" placeholder="Confirm password" style="background-color: transparent" required>
                    </div>
                </div>

            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
            </div>
            <div class="col-2">
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="Register-btn" type="submit">Register</button>
            </div>
            <div class="col">
            </div>
        </div>


    </form>

    {{-- have account --}}
    <div class="mt-5">
        <p>Already have an account?</p>
        <a href="/Login" style="color: black">Login Here</a>
    </div>
</div>



@endsection
