<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberList extends Controller
{
    //
    function showList()
    {
         $data = Member::paginate(3);
        return view ('list',['members'=>$data]);
    }
    function deleteList($id){
        $data=Member::find($id);
        $data->delete();
        return redirect("list");
    }
    function showId($id){
        $data = Member::find($id);
        return view('edit',['data'=>$data]);
        }
    function updateId(Request $req){
     $data=Member::find($req->id);
     $data->Name=$req->fullname;
     $data->Email=$req->email;
     $data->Password=$req->password;
     $data->save();
     
     return redirect("list"); 
    }
}
