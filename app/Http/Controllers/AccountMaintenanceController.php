<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AccountMaintenanceController extends Controller
{
    public function showProfile()
    {
        return view('AccountMaintenance',[
            "Prof" => User::all()
        ]);
    }

    public function destroy($id)
    {
        DB::table('Users')->where('id','like',$id)->delete();
        return redirect()->back();
    }
}
