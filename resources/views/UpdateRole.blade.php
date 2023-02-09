@extends('layout.main')

@section('container')

<div class="container shadow font-monospace p-4" style="border-radius:10px; border:1px solid black">
    <h2 class="mb-4">Update Role</h2>
    @foreach ($Prof as $tag)
    <form action="/action/UpdateRole/{{ $tag->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="row">
        <div class="col">
            <h4><b>{{ $tag->FirstName }}</b></h4>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <div class="form-floating form-control-sm mb-2" style="display: flex;align-items:center">
                <h5>Role:</h5>
                <select id="Role" name="Role" class="form-control-sm" style="background-color: transparent" required>
                    <option value="1" {{ $tag->Role=='1'? 'selected':''}}>User</option>
                    <option value="2" {{ $tag->Role=='2'? 'selected': ''}}>Admin</option>
                </select>
            </div>
        </div>
        <div class="col">
            <p><button style="font-size:18px;" onclick="return confirm('Update continue?')">Save</button></p>
        </div>
    </div>
    @endforeach
    </form>
</div>









@endsection
