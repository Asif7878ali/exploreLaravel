<?php

namespace App\Http\Controllers;

use App\Models\Userinfo;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\File;


class UserController extends Controller
{
    function store(Request $formData) {
        $serverSideValidation = [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'name' => 'required|string|min:3|max:50',
            'email' => 'required|email',
            'contact' => 'required|digits:10', 
            'address' => 'required|string',
            'birthday' => 'required|date',
            'gender' => 'required|string',
            'course' => 'required|array',
            'password' => 'required|string',
            'confirm_password' => 'required|string|same:password',
            'terms' => 'required|accepted', // For checkbox
        ];
        // dd($formData->all());

        // Validate the request
        $validator = Validator::make($formData->all(), $serverSideValidation);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }
          // Handle the image upload
          if($formData->has('image')) {
            $file = $formData->file('image');
            //get extension
            $ext = $file->getClientOriginalExtension();
            //create a file name
           $filename = time().'.'.$ext;
           //file move to folder
           $path = 'profiles/';
           $file->move($path, $filename);
       } else {
           return response()->json(['error' => ['image' => ['The image failed to upload.']]], 422);
       }

        // Save user data into the database
        $userTable = new Userinfo();
        $userTable->Profile = $path . $filename;
        $userTable->Name = $formData->name;
        $userTable->Email = $formData->email;
        $userTable->Contact = $formData->contact;
        $userTable->Address = $formData->address;
        $userTable->Birtday = $formData->birthday;
        $userTable->Gender = $formData->gender;
        $userTable->Course = json_encode($formData->course); 
        $userTable->Password = bcrypt($formData->password);

        $userTable->save();

        return response()->json(['success' => 'User data successfully saved'], 200);
    }

    function view(){
        $user = Userinfo::all();
        // dd($user);
        return view('customerview', compact('user'));

    }

    function delete($id){
        $user = Userinfo::find($id);
        if(isset($user)){
             // id is found
             $user->delete();
        }
           // id is not found
        return redirect('/view/data');
    }

    function edit($id){
        $user = Userinfo::find($id);
        if(isset($user)){
             //id is found
             $data = compact('user');
             return view('updateForm')->with($data);
        }  else  {
               //id is not found
            return redirect('/view/data');
        }
    }

    function update($id , Request $request){
        // dd($request->all());
        $user = Userinfo::find($id);
        // Validate the request
        $serverSideValidation = [
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif',
            'name' => 'required|string|min:3|max:50',
            'email' => 'required|email',
            'contact' => 'required|digits:10',
            'address' => 'required|string',
            'birthday' => 'required|date',
            'gender' => 'required|string',
            'course' => 'required|array'
        ];

        $validator = Validator::make($request->all(), $serverSideValidation);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }
        
          // Handle the image upload if present
          if ($request->hasFile('image')) {
            $file = $request->file('image');
            //get extension
            $ext = $file->getClientOriginalExtension();
            //create a file name
            $filename = time() . '.' . $ext;
            //file move to folder
            $path = 'profiles/';
            $file->move($path, $filename);
            $user->Profile = $path . $filename;
        }

        // dd($user);
        $user->Name = $request->name;
        $user->Email = $request->email;
        $user->Contact = $request->contact;
        $user->Address = $request->address;
        $user->Birtday = $request->birthday;
        $user->Gender = $request->gender;
        $user->Course = json_encode($request->course); 
        $user->save();
        return redirect('/view/data');

    }
}

