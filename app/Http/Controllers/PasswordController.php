<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('modules.settings.password');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }   
    public function change(Request $request)
    {
        $this->validate($request, [
 
            'oldpassword' => 'required',
            'newpassword' => 'required',
            ]);

            $hashedPassword = Auth::user()->password;
            if (\Hash::check($request->oldpassword , $hashedPassword )) {
 
                if (!\Hash::check($request->newpassword , $hashedPassword)) {
        
                     $users =admin::find(Auth::user()->id);
                     $users->password = bcrypt($request->newpassword);
                     admin::where( 'id' , Auth::user()->id)->update( array( 'password' =>  $users->password));
        
                     session()->flash('message','password updated successfully');
                     return redirect()->back();
                   }
        
                   else{
                         session()->flash('message','new password can not be the old password!');
                         return redirect()->back();
                       }
        
                  }
        
                 else{
                      session()->flash('message','old password doesnt matched ');
                      return redirect()->back();
                    }
        
              }
    }
}
