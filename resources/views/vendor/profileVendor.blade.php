@extends('ui.vendor')

@section('content')
    <div class="p-5">
        <button class=" d-flex align-center back-to">
            <span class="material-symbols-outlined" id="arrow-ikon">
                arrow_back_ios
            </span>
            <p class="ml-5">Profile</p>
        </button>
        {{-- @if($profile->address==null) --}}
            <p>Please fill your address</p>
        {{-- @endif --}}
        <form action="/user/profile/post" method="post">
        <div class="d-flex align-center justify-content-center profile-container">
                <div class="drop-box-2">
                    <label for="masukin-file" id="drop-area-2">
                        <input type="file" accept="image/*" id="masukin-file" hidden>
                        <div id="img-view-2">
                            <img src="https://images.unsplash.com/photo-1462062651745-495db7fa268a?q=80&w=2264&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Avatar" class="avatarUp">
                        </div>
                            {{-- <div id="img-view-2">
                                <img src="{{asset("img/UploadIcon.png")}}" alt="">
                                <p>Drag and drop or click here<br>to upload image</p><span>Upload any image from desktop</span>
                            </div> --}}

                    </label>
                </div>            
            <div class=" profile-desc">
                
                    @csrf
                    <label for="">Name:</label>
                    <br>
                    <input type="text" name="name" id="" value="{{ $profile->name }}" required>
        
                    <br>
                    <br>
                    
                    <label for="">Address:</label>
                    <br>
                    <input type="text" name="address" id="" value="{{ $profile->address }}" required>
        
                    <br>
                    <br>
        
                    <label for="">Phone:</label>
                    <br>
                    <input type="text" name="phonenumber" id="" value="{{ $profile->phonenumber }}" required>
        
                    <br>
                    <br>
        
                    <label for="">Email:</label>
                    <br>
                    <input type="email" name="email" id="" value="{{ $profile->email }}" required>

                    <div class="d-flex flex-direction-row profile-button">
                        <button type="submit" class="btn btn-green mt-70">Update Profile</button>
                        
                            <button class="btn btn-red d-flex mt-70 align-center ml-5">
                                <span class="material-symbols-outlined">
                                    logout
                                </span>
                                Sign Out
                            </button>
            
                    </div>
                
            </div>
        </div>
        </form>
    </div>
@endsection

