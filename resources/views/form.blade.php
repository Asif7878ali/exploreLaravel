@extends('layout.main')
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script defer src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script defer src="{{ asset('js/formclientvalidation.js') }}"></script>
</head>

<body>
    @section('main-section')
        <div class="max-w-md mx-auto mb-5">
             <h1 class="text-2xl font-bold text-center mb-3">Registration Form</h1>
            <form action="{{url('/')}}/register" method="POST" enctype="multipart/form-data" class="bg-gray-200 shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                         {{-- profile --}}
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="profile">Profile</label>
                       <input type="file" id="image" name="image" accept="image/*" value="">
                       <div>
                        <span class="text-red-600">
                            @error('image')
                                {{$message}}
                            @enderror
                         </span>
                       </div>                    
                </div>

                <div class="flex space-x-2">
                     {{-- name --}}
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter Name" value="{{old('name')}}"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <span class="text-red-600">
                                @error('name')
                                    {{$message}}
                                @enderror
                             </span>
                    </div>
                    {{-- email --}}
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter Email"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  value="{{old('email')}}">
                            <span class="text-red-600">
                                @error('email')
                                    {{$message}}
                                @enderror
                             </span>
                    </div>
                </div>


                <div class="flex space-x-2">
                       {{-- contact --}}
                    <div class="mb-4">
                        <label for="contact" class="block text-gray-700 text-sm font-bold mb-2">Contact</label>
                        <input type="text" id="contact" name="contact" placeholder="Enter Contact"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  value="{{old('contact')}}">
                            <span class="text-red-600">
                                @error('contact')
                                    {{$message}}
                                @enderror
                             </span>
                    </div>
                      {{-- adresss --}}
                    <div class="mb-4">
                        <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Address</label>
                        <input type="text" id="address" name="address" placeholder="Enter Address"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  value="{{old('address')}}">
                            <span class="text-red-600">
                                @error('address')
                                    {{$message}}
                                @enderror
                             </span>
                    </div>

                </div>

                     {{-- dob --}}
                     <div class="mb-4 flex">
                        <label class="text-gray-700 text-sm font-bold" for="birthday">Date Of Birthday</label>
                        <div class="pl-10">
                            <input class="leading-tight" type="date" id="birthday" name="birthday" value="{{ old('birthday')}}">
                            <div>
                                <span class="text-red-600">
                                    @error('birthday')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                    </div>
                    
                       
                        
                                                     {{-- gender --}}
                <div class="mb-4">
                   <label class="block text-gray-700 text-sm font-bold mb-2" for="Gender">Gender</label>
                    <input type="radio" id="male" name="gender" value="male" class="mr-2 leading-tight">
                    {{-- {{$user->Gender == "male" ? "checked" : ''}} --}}
                    <label for="male" class="text-sm">
                        Male
                    </label>
                    <input type="radio" id="female" name="gender" value="female" class="mr-2 ml-4 leading-tight">
                    {{-- {{$user->Gender == "female" ? "checked" : ''}} --}}
                    <label for="female" class="text-sm">
                        Female
                    </label>

                    <div>
                        <span class="text-red-600">
                            @error('gender')
                                {{$message}}
                            @enderror
                         </span>
                    </div>
                  
                </div>
                    {{-- Courses --}}
                    <div class="mb-4">
                        <p class="block text-gray-700 text-sm font-bold mb-2">Courses</p>
                        <div class="flex flex-wrap">
                           
                            <div class="w-full md:w-1/2 lg:w-1/3 mb-2">
                                <input type="checkbox" id="React" name="course[]" value="React" class="mr-2 leading-tight">                
                                <label for="React" class="text-sm">
                                    React
                                </label>
                            </div>
                            <div class="w-full md:w-1/2 lg:w-1/3 mb-2">
                                <input type="checkbox" id="Laravel" name="course[]" value="Laravel" class="mr-2 leading-tight">                               
                                <label for="Laravel" class="text-sm">
                                   Laravel
                                </label>
                            </div>
                            <div class="w-full md:w-1/2 lg:w-1/3 mb-2">
                                <input type="checkbox" id="Django" name="course[]" value="Django" class="mr-2 leading-tight">                            
                                <label for="Django" class="text-sm">
                                    Django
                                </label>
                                <div>
                                    <span class="text-red-600">
                                        @error('course')
                                            {{$message}}
                                        @enderror
                                     </span>
                                </div>
                               
                            </div>
                            <!-- Add more checkboxes for other courses as needed -->
                        </div>
                    </div>
                    

                <div class="flex space-x-2">
                       {{-- password --}}
                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter Password"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <span class="text-red-600">
                                @error('password')
                                    {{$message}}
                                @enderror
                             </span>
                             <div class="mt-1">
                                <input type="checkbox" id="see_pwd" name="see_pwd" class="mr-2 leading-tight">
                                <label for="see_pwd" class="text-sm">
                                    Show Password
                                </label>
                                
                            </div>
                    </div>
                    {{-- cpassword --}}
                    <div class="mb-6">
                        <label for="confirm_password" class="block text-gray-700 text-sm font-bold mb-2">Confirm Password</label>
                        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <span class="text-red-600">
                                @error('confirm_password')
                                    {{$message}}
                                @enderror
                             </span>
                             <div class="mt-1">
                                <input type="checkbox" id="see_confirm_pwd" name="see_confirm_pwd" class="mr-2 leading-tight">
                                <label for="see_pwd" class="text-sm">
                                    Show Password
                                </label>
                                
                            </div>
                    </div>
                </div>
                            {{-- termr&contion --}}
                <div class="mb-4">
                    <input type="checkbox" id="terms" name="terms" class="mr-2 leading-tight">
                    <label for="terms" class="text-sm">
                        I agree to the terms and conditions
                    </label>
                    <div>
                        <span class="text-red-600">
                            @error('terms')
                                {{$message}}
                            @enderror
                         </span>
                    </div>
                    
                </div>

                          {{-- buttons --}}
                <div class="flex items-center justify-between">
                    <button type="submit"
                        class="bg-black hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Save</button>
                </div>
            </form>
        </div>
    @endsection
</body>

</html>
