@extends('ui.user')

@section('content')
    <div class="p-5">

        <div class="d-flex align-center header-home">
            <h2>Hi, <span class="name-color">McDidi</span> !</h2>
            <span class="material-symbols-outlined ml-5" id="zoom-ikon">
                notifications
            </span>            
        </div>

        <div class="on-going-box">
            <div class="d-flex align-center">
                <span class="material-symbols-outlined">
                    alarm_on
                </span> 
                <h2 class="ml-5 on-going-text">On Going</h2>
            </div>    

            <h3 class="jam">08.00 WIB</h3>
            <h3 class="subjudul-ongoing">First Offline Meeting</h3>
            <hr>
            <p class="krem-color"><span class="bold">Customer Service:</span> Natasya</p>
            <p class="krem-color"><span class="bold">Location:</span> Citra Mawar Street 20</p>
            <p class="krem-color"><span class="bold">Contact Person:</span> 0812-3453-6674</p>
        </div>
        
        <div class="d-flex align-center">
            <span class="material-symbols-outlined">
                calendar_today
            </span> 
            <h2 class="ml-5">Your Schedule</h2>
        </div>

        <div class="carousel-container">
            <div class="carousel-item-wrapper">
                <div class="carousel-item">
                    <p class="status-schedule-done">DONE</p>
                    <p><span class="bold name">January, 10</span> | Agreement and start scheduling</p>
                </div>
            </div>
            <div class="carousel-item-wrapper">
                <div class="carousel-item">
                    <p class="status-schedule-done">DONE</p>
                    <p><span class="bold name">January, 31</span> | Online Meeting Discussion for Concept</p>
                </div>
            </div>
            <div class="carousel-item-wrapper">
                <div class="carousel-item">
                    <p class="status-schedule-ongoing">ON GOING</p>
                    <p><span class="bold name">February, 15</span> | First Offline Meeting</p>
                </div>
            </div>
            <div class="carousel-item-wrapper">
                <div class="carousel-item">
                    <p class="status-schedule-soon">SOON</p>
                    <p><span class="bold name">March, 10</span> | Second Offline Meeting in Venue</p>
                </div>
            </div>
            <div class="carousel-item-wrapper">
                <div class="carousel-item">
                    <p class="status-schedule-soon">SOON</p>
                    <p><span class="bold name">March, 25</span> | Rehearsal</p>
                </div>
            </div>
        </div>
    </div>
@endsection