@extends('ui.admin')

@section('content')
    <div class="p-5">
        @if($profile->address==null)
            <p>Please fill your address</p>
        @endif
        <form action="/user/profile/post" method="post" enctype="multipart/form-data">
        <div class="d-flex align-center justify-content-center profile-container">
                <div class="drop-box-2">
                    <label for="masukin-file" id="drop-area-2">
                        <input type="file" accept="image/*" name="image" id="masukin-file" hidden>
                        <div id="img-view-2">
                            <img src="{{ Storage::url($profile->image) }}" alt="Picture" class="avatarUp">

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
                            <a href="/logout" class="btn btn-red d-flex mt-70 align-center ml-5">
                                <span class="material-symbols-outlined">
                                    logout
                                </span>
                                Sign Out
                            </a>
            
                    </div>
                
            </div>
        </div>
        </form>
    </div>
@endsection

