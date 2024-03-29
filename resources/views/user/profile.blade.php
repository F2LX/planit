@extends('ui.user')

@section('content')
    <div class="p-5">
        <button class=" d-flex align-center back-to">
            <span class="material-symbols-outlined" id="arrow-ikon">
                arrow_back_ios
            </span>
            <p class="ml-5">Profile</p>
        </button>
        @if($profile->address==null)
            <p>Please fill your address</p>
        @endif
        <div class="d-flex align-center justify-content-center profile-container">
            <div class="d-flex flex-direction-column align-center justify-center avatar-profile">
                <img src="https://images.unsplash.com/photo-1462062651745-495db7fa268a?q=80&w=2264&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Avatar" class="avatar2">
                <button class="changeavatar-button">Change Avatar</button>
            </div>
    
            <div class=" profile-desc">
                <label for="">Name:</label>
                <br>
                <input type="text" name="" id="" value="{{ $profile->name }}" >
    
                <br>
                <br>
                
                <label for="">Address:</label>
                <br>
                <input type="text" name="" id="" value="{{ $profile->address }}" >
    
                <br>
                <br>
    
                <label for="">Phone:</label>
                <br>
                <input type="text" name="" id="" value="{{ $profile->phonenumber }}" >
    
                <br>
                <br>
    
                <label for="">Email:</label>
                <br>
                <input type="text" name="" id="" value="{{ $profile->email }}" >

                <div class="d-flex flex-direction-row profile-button">
                    <button class="btn btn-green mt-70">Update Profil</button>
                    
                        <button class="btn btn-red d-flex mt-70 align-center ml-5">
                            <span class="material-symbols-outlined">
                                logout
                            </span>
                            Sign Out
                        </button>
        
                </div>

            </div>
        </div>
    </div>
@endsection