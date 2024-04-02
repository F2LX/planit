@extends('ui.user')

@section('content')
    <div class="p-5">
        <form action="/vendor/ads/add" method="post">
            @csrf
            <div class="w-100 d-flex flex-direction-column add-order-form">
                <h2>Add New Order</h2>
                    <label for="">Event Name:</label>
                    <div class="post-form">
                        <input placeholder="Input event name here" type="text" name="title" id="">
                    </div>
            
                    <p>Description:</p>
                    <div class="post-desc">
                        <textarea name="description" id="" cols="20" rows="10"></textarea>
                    </div>
        
                    <p>Upload image:</p>
                    <div class="drop-box">
                            <label for="input-file" id="drop-area">
                                <input type="file" name="image" accept="image/*" id="input-file" hidden>
                                <div id="img-view">
                                    <img src="{{asset("img/UploadIcon.png")}}" alt="">
                                    <p>Drag and drop or click here<br>to upload image</p>
                                    <span>Upload any image from desktop</span>
                                </div>
                            </label>
                    </div>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection