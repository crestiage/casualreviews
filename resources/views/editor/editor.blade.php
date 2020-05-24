@extends('layouts.template')

@section("content")
<link href="resources/css/quill.snow.css" rel="stylesheet">
<form class="product_update_form" id="product_update_form" enctype='multipart/form-data' action='/saveProduct' method="post">
    {{ csrf_field() }}
    <div class="row">
        <div class="col">
            <label for="review_title">Review Title</label>
            <input class="form-control" name="review_title" id="review_title">
        </div>
    </div>
    <div class="row">
        <div class="col">

        </div>
    </div>
    <div class="row">
        <div class="col">

        </div>
    </div>
    <div class="row">
        <div class="col">

        </div>
    </div>

</form>
@endsection