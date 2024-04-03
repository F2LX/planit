@extends('ui.vendor')

@section('content')
<div class="p-5">
    <form action="/vendor/details/add" method="post">
    @csrf
    <div class="w-100 d-flex flex-direction-column">
        <h2>Add new details</h2>
           
            <div class="add-order-form">
                <label for="">Title</label>
                <input placeholder="Input title here" type="text" name="title" id="">
            </div>
    
            <div class="add-order-form">
                <label for="">Description</label>
                <textarea name="description" id="" cols="20" rows="10"></textarea>
            </div>

            <div class="drop-box add-order-form">
                <label for="">Upload Image</label>
                    <label for="input-file" id="drop-area">
                        <input type="file" name="image" accept="image/*" id="input-file" hidden>
                        <div id="img-view">
                            <img src="{{asset("img/UploadIcon.png")}}" alt="">
                            <p>Drag and drop or click here<br>to upload image</p>
                            <span>Upload any image from desktop</span>
                        </div>
                    </label>
            </div>
            <div class="payment-methods flex-direction-row">
                <div class="drop-box add-order-form">
                    <label for="">Upload Image</label>
                        <label for="input-files" id="drop-areas">
                            <input type="file" name="image" accept="image/*" id="input-files" hidden>
                            <div id="img-views">
                                <img src="{{asset("img/UploadIcon.png")}}" alt="">
                                <p>Drag and drop or click here<br>to upload image</p>
                                <span>Upload any image from desktop</span>
                            </div>
                        </label>
                </div>
    
                <div class="drop-box add-order-form">
                    <label for="">Upload Image</label>
                        <label for="input-files-2" id="drop-areas-2">
                            <input type="file" name="image" accept="image/*" id="input-files-2" hidden>
                            <div id="img-views-2">
                                <img src="{{asset("img/UploadIcon.png")}}" alt="">
                                <p>Drag and drop or click here<br>to upload image</p>
                                <span>Upload any image from desktop</span>
                            </div>
                        </label>
                </div>
            </div>
    </div>
    <button class="submit" type="submit">Submit</button>
    
    </form>
</div>

@endsection