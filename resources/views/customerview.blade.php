@extends('layout.main')
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    @section('main-section')
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <form class="max-w-md mx-auto">   
            <div class="relative">
                <input type="search" name="search" id="search" value="{{$search}}" class="block w-full p-4 ps-10 text-sm border border-gray-300 rounded-lg bg-gray-50 kfocus:ring-blue-500" placeholder="Name or E-mail" required />
                <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-4 py-2">Search</button>
            </div>
    </form>
       <a href={{url('/view/data')}}>
          <button type="submit" class="text-white bg-red-700 hover:bg-red-800 font-medium rounded-lg text-sm px-4 py-2">Reset</button>
       </a>
      
    <table class="w-full text-sm text-left rtl:text-right mt-5">
        <thead class="text-xs bg-slate-300">
            <tr>
                <th scope="col" class="px-6 py-3">
                    UserProfile
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Contact No.
                </th>
                <th scope="col" class="px-6 py-3">
                   Adresss
                </th>
                <th scope="col" class="px-6 py-3">
                    Date of Birth
                 </th>
                 <th scope="col" class="px-6 py-3">
                    Gender
                 </th>
                 <th scope="col" class="px-6 py-3">
                    Course
                 </th>

                 <th scope="col" class="px-6 py-3">
                    Action
                 </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $data )
                {{-- {{dd($data->Profile);}} --}}
            <tr class="">
                <td  class="px-6 py-4 font-medium whitespace-nowrap">
                    <img src="{{ asset ($data->Profile) }}" alt="Profile Image" class="w-20 h-20 rounded-full">
                </td>
                <td class="px-6 py-4">
                    {{ $data->Name}}
                </td>
                <td class="px-6 py-4">
                    {{ $data->Email}}
                </td>
                <td class="px-6 py-4">
                    {{ $data->Contact}}
                </td>
                <td class="px-6 py-4">
                    {{ $data->Address}}
                </td>
                <td class="px-6 py-4">
                    {{ $data->Birtday}}
                </td>
                <td class="px-6 py-4">
                    {{ $data->Gender}}
                </td>
                <td class="px-6 py-4">
                    {{ $data->Course}}
                </td>
                <td class="px-6 py-4 space-x-5">
                    <a href="{{url('/edit/')}}/{{$data->User_ID}}" class="font-medium text-blue-600 hover:underline cursor-pointer">Edit</a>
                    <a href="{{url('/delete/')}}/{{$data->User_ID}}" class="font-medium text-red-600 hover:underline cursor-pointer">Delete</a>
                </td>
                
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
  @endsection
</body>
</html>