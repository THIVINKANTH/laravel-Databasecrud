<?php

namespace App\Http\Controllers;

use App\Models\login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;


class Details extends Controller
{
    public function insert_form()
    {
        return view('insert_form');
    }

    public function insert(Request $request)
    {
        $name = $request->input('name');
        $password = $request->input('pass');
        $email = $request->input('email');
        // insert database


        DB::insert("insert into logindetails(name,password,email) values(?,?,?)",[$name,$password,$email]);
        return redirect('/list')->with('message', 'inserted');


    }
    public function userlist()
    {
        $list = login::all();
        return view('list_form',compact('list'));
    }

    public function delete($id)
    {
        // $id = $request->input('delete');
        //  $update = login::where('id',$id)->first();
        DB::delete('delete from logindetails where id=?',[$id]);
        // return view('list_form',compact('del'));
        return redirect('/list')->with('message', 'Deleted');

    }
    public function edit($id)
    {
        $edits = DB::select("select * from logindetails where id=?",[$id]);
        return view('edit_form',compact('edits'));
    }

    public function update(Request $request,$id)
    {
        $name = $request->input('uname');
        $password = $request->input('upass');
        $email = $request->input('uemail');
        DB::update('update logindetails set name=?,password=?, email=? where id=?',[$name,$password,$email,$id]);
        return redirect('/list')->with('message', 'Updated');
    }

}
