@extends('ui.vendor')

@section('content')
<div class="p-5">
    <form action="/vendor/ads/add" method="post">
    @csrf
    <div class="w-100 d-flex flex-direction-column">
        <h2>Post New ads</h2>
           
            <div class="add-order-form">
                <label for="">Title</label>
                <input placeholder="Input title here" type="text" name="title" id="">
            </div>
    
            <div class="add-order-form">
                <label for="">Description</label>
                <textarea name="description" id="" cols="20" rows="10"></textarea>
            </div>

            <div class="add-order-form">
                <label for="category">Category</label>
                <Select name="category">
                    <option value="Wedding">Wedding</option>
                    <option value="Birthday Party">Birthday Party</option>
                    <option value="Summer Party">Summer Party</option>
                </Select>
            </div>

            <div class="add-order-form">
                <label for="">Price</label>
                <input placeholder="Input title here" type="text" name="title" id="">
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
    </div>
    <button class="submit" type="submit">Submit</button>
    
    </form>
</div>

@endsection