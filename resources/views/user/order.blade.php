@extends('ui.user')

@section('content')
    <div class="p-5">
        <form action="/vendor/ads/add" method="post">
            @csrf
            <div class="w-100 d-flex flex-direction-column add-order-form">
                <h2 class="judul-form">Add New Order</h2>
                    <label for="">Event Name</label>
                    <input placeholder="Input event name here" type="text" name="event-name" id="" required>
            
                    <label for="">Description</label>
                    <textarea name="description" id="" cols="20" rows="10" placeholder="Input event description here"></textarea>

                    <label for="">Date</label>
                    <input type="date" name="date" id="" required>
        
                    <label for="">Time</label>
                    <input type="time" name="time" id="" required>

            </div>
            <button type="submit" class="btn btn-green mt-50">Submit</button>
        </form>
    </div>
@endsection