@extends('ui.admin')

@section('content')
    <div class="p-5">
        <div class="d-flex align-center header-home">
            <button class="back-to-without-back">
                <p>Home</p>
            </button>

            <h3>Hi, <span class="name-color">{{ auth()->user()->name }}</span> !</h3>
            <span class="material-symbols-outlined ml-5" id="zoom-ikon">
                notifications
            </span>   
        </div>

        <hr>

        <div class="d-flex align-center justify-content-between">
            <div>
                <h3 class="e-wallet-tulisan">Total Balance:</h3>
                <div class="d-flex wallet-tab align-center w-100 mt-0">
                    <span class="material-symbols-outlined">
                        account_balance_wallet
                    </span>
                    <h3 class="wallet-user">$999,999,999,999,999.00</h3>
                </div>

            </div>
            
            <div class="d-flex flex-direction-column align-center justify-content-between">
                <h3 class="e-wallet-tulisan">Event Package Name</h3>
                <h2 class="judul-tulisan mt-0">PARTY BOYS</h2>
            </div>
        </div>

        <h3 class="on-going-tulisan">Latest Complain</h3>

        <div class="d-flex align-center justify-content-between on-going-box w-100">
            <div class="d-flex clock-tab align-center">
                <span class="material-symbols-outlined">
                    alarm_on
                </span> 
                <h3 class="ml-5 on-going-text">Taylor Series Vendor | User name here </h3>
            </div>    
            <button class="contact-vendor">Contact Complain</button>
        </div>
        <h2 class="text-center">On Going Order</h2>
        <div class="d-flex w-100">
            <div class="w-100">
                <div class="carousel-container">
                    <div class="carousel-item-wrapper">
                        <div class="d-flex carousel-item align-center past">
                            <div class="d-flex flex-direction-column align-center justify-content-center tanggal-pelaksanaan">
                                <p class="bold tanggal">10</p>
                                <p class="bold bulan">JAN</p>
                            </div>
                            <div class="second">
                                <p class="bold schedule-name">Event Name:</p>
                                <p class="notes">JeTeLika Grand Prix</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="carousel-item-wrapper">
                        <div class="d-flex carousel-item align-center present">
                            <div class="d-flex flex-direction-column align-center justify-content-center tanggal-pelaksanaan">
                                <p class="bold tanggal">14</p>
                                <p class="bold bulan">JANUARY</p>
                            </div>
                            <div class="second">
                                <p class="bold schedule-name">Event Name:</p>
                                <p class="notes">First Online Meeting</p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item-wrapper">
                        <div class="d-flex carousel-item align-center future">
                            <div class="d-flex flex-direction-column align-center justify-content-center tanggal-pelaksanaan">
                                <p class="bold tanggal">8</p>
                                <p class="bold bulan">FEB</p>
                            </div>
                            <div class="second">
                                <p class="bold schedule-name">Event Name:</p>
                                <p class="notes">Go to Venue</p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item-wrapper">
                        <div class="d-flex carousel-item align-center future">
                            <div class="d-flex flex-direction-column align-center justify-content-center tanggal-pelaksanaan">
                                <p class="bold tanggal">20</p>
                                <p class="bold bulan">MAR</p>
                            </div>
                            <div class="second">
                                <p class="bold schedule-name">Event Name:</p>
                                <p class="notes">Rehearsal</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection