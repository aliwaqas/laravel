@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-3 ">
		     <div class="list-group ">
              <a href="#" class="list-group-item list-group-item-action active">Dashboard</a>

              <a href="{{ url('/profile/edit') }}" class="list-group-item list-group-item-action">Update Profile</a>
              <a href="{{ url('/profile/password') }}" class="list-group-item list-group-item-action">Update Password</a>


            </div>
		</div>
		<div class="col-md-9">
		    <div class="p-3 bg-white rounded-xl max-w-lg hover:shadow">
                <div class="flex justify-between w-full"> <img src="https://i.imgur.com/CeVfZyY.jpg" width="150" class="rounded-lg">
                    <div class="ml-2">
                        <div class="p-3">
                            <h3 class="text-2xl">Elliot Thombson</h3> <span>Associate developer</span>
                        </div>
                        <div class="flex justify-between items-center p-3 bg-gray-200 rounded-lg">
                            <div class="mr-3"> <span class="text-gray-400 block">Article</span> <span class="font-bold text-black text-xl">34</span> </div>
                            <div class="mr-3"> <span class="text-gray-400 block">Followers</span> <span class="font-bold text-black text-xl">940</span> </div>
                            <div> <span class="text-gray-400 block">Ratings</span> <span class="font-bold text-black text-xl">8.9</span> </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-between items-center mt-2 gap-2"> <button class="w-full h-12 rounded-md border-2 text-md hover:shadow hover:bg-red-700 hover:border-red-700 hover:text-white ">Chat</button> <button class="w-full h-12 rounded-md bg-blue-700 text-white text-md hover:shadow hover:bg-blue-800">Chat</button> </div>
            </div>
		</div>
	</div>
</div>
@endsection
