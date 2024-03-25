@extends('ui.user')

@section('content')
    <div class="w-100" id="profile-user-container">
        <div class="d-flex flex-direction-row foto-profile">
            <h2>Hi, <span class="user-name">Didi Mulyanto</span> !</h2>
            <span class="material-symbols-outlined" id="people-ikon">
                account_circle
            </span>
        </div>

        <h3>E-Wallet:</h3>
        <div class="d-flex wallet-tab align-center w-100">
            <span class="material-symbols-outlined wallet-ikon">
                wallet
            </span>
            <h3 class="wallet-user">$999,999,999,999,999.00</h3>
        </div>

        <h3 class="personal-judul">Personal Information</h3>
        <hr>
        <div class="d-flex flex-direction-row">
            <div class="profile-desc">
    
                <label for="">Name:</label>
                <br>
                <input type="text" name="" id="" value="Taylor Series" disabled>
    
                <br>
                <br>
                
                <label for="">Address:</label>
                <br>
                <input type="text" name="" id="" value="Summer Event" disabled>
    
                <br>
                <br>
    
                <label for="">Phone:</label>
                <br>
                <input type="text" name="" id="" value="0822-5678-1234" disabled>
    
                <br>
                <br>
    
                <label for="">Email:</label>
                <br>
                <input type="text" name="" id="" value="McDidi@gmail.com" disabled>

            </div>
        </div>
        <br>
        <br>
        <div class="d-flex flex-direction-row profile-button">
            <button class="btn btn-green">Update Profil</button>
            
                <button class="btn btn-red d-flex align-center ml-5">
                    <span class="material-symbols-outlined">
                        logout
                    </span>
                    Sign Out
                </button>

        </div>
        
    </div>
@endsection