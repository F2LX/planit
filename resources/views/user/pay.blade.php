@extends('ui.user')

@section('content')
    <div class="p-5">
        <div class="d-flex align-center header-home">
            <button class="back-to-without-back">
                <p>Payment</p>
            </button>

            <h3>Hi, <span class="name-color">{{ auth()->user()->name }}</span> !</h3>
            <span class="material-symbols-outlined ml-5" id="zoom-ikon">
                notifications
            </span>   
        </div>
        <hr>

        <div class="wrapper-payment">
            <div class="total-cost-information">
                <h3>Total Cost</h3>
                <hr>
                <h2>$1500.00</h2>
            </div>
            
            <h2>Select Payment Method</h2>

            <div class="payment-methods">
                <button class="payment-button" data-method="bank">
                    <img src="{{asset("img/Logo-BCA-PNG.png")}}" alt="">
                    Bank Transfer
                </button>
                <button class="payment-button" data-method="gopay">
                    <img src="{{asset("img/gopay-logo.png")}}" alt="">
                    GoPay
                </button>
                <button class="payment-button" data-method="mastercard">
                    <img src="{{asset("img/MasterCard-logo.png")}}" alt="">
                    Mastercard
                </button>
            </div>

            <div id="bankDetails" class="paymentDetails">
                <p>PlanIt Account Number: 0812345678</p>

                <h6>Complete your payment information below !</h6>
                <label for="">Account Bank Name</label>
                <input placeholder="Input account name here" type="text" name="bank-name" id="" required>

                <label for="">Upload Payment Screenshot</label>
                <input type="file" id="" name="bank-screenshot" required>
            </div>

            <div id="gopayDetails" class="paymentDetails">
                <p>PlanIt GoPay Number: 0812345678</p>

                <h6>Complete your payment information below !</h6>
                <label for="">GoPay Number:</label>
                <input placeholder="Input Gopay number here" type="text" name="gopay-number" id="" required>

                <label for="">Account Bank Name</label>
                <input placeholder="Input account name here" type="text" name="bank-name" id="" required>

                <label for="">Upload Payment Screenshot</label>
                <input type="file" id="" name="bank-screenshot" required>
            </div>

            <div id="mastercardDetails" class="paymentDetails">
                <h6>Complete your payment information below !</h6>
                
                <label for="">Cardholder Name</label>
                <input placeholder="Input cardholder number here" type="text" id="" name="cardholder-name" required>
                
                <label for="">Card Number</label>
                <input placeholder="Input card number here" type="text" id="" name="card-number" required>

                <label for="">Expiry Date</label>
                <input type="date" name="date" id="" required>

                <label for="ccv">CCV</label>
                <input placeholder="Input CCV here (3 digits only)" type="text" pattern="\d{3}" id="" name="ccv" required>
            </div>

            <button id="payButton" class="btn btn-green mt-10">Pay</button>
        </div>
    </div>
@endsection