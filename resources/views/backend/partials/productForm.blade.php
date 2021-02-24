@extends('layouts.backend')
@section('dashboard')

    <form style="width: 50%; margin: auto;" action="{{route('productFromData')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Product Name</label>
            <input class="form-control"type="name" name="product_name" id="exampleFormControlInput1" required>
        </div><br><br>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Price </label>
            <input class="form-control" type="number" name="price" id="exampleFormControlSelect1" required>
        </div><br><br>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Description</label>
            <textarea multiple class="form-control"  type="text" name="description" id="exampleFormControlSelect2" required>

            </textarea><br><br>
        </div>

        <div class="form-group">
            <label for="exampleFormControlFile1">Upload photo</label>
            <input type="file" class="form-control-file" name="photo" id="exampleFormControlFile1">
        </div><br><br>

        <div style="float: right">
            <input class="form-control btn-success" type="submit" value="Upload" required>
        </div>

    </form>


    @stop()
