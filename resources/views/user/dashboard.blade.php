@extends('ui.user')

@section('content')
    <div class="wrapper p-5">
        <h2>Hello User!</h2>
        <div class="d-flex">
            <div class="side d-flex flex-direction-column">
                <label for="">Wallet:</label>
                <input type="text" name="" id="" value="$999,999,999,999,999.00" disabled>
            </div>
            <div class="side d-flex flex-direction-column">
                <label for="">Favourite Vendor:</label>
                <input type="text" name="" id="" value="Taylor Series" disabled>

                <label for="">Last Event:</label>
                <input type="text" name="" id="" value="Summer Event" disabled>

                <label for="">Total Spent:</label>
                <input type="text" name="" id="" value="$10000000" disabled>

                <label for="">Phone:</label>
                <input type="text" name="" id="" value="0822-5678-1234" disabled>

                <label for="">Email:</label>
                <input type="text" name="" id="" value="McDidi@gmail.com" disabled>
            </div>
            
        </div>
    </div>
@endsection