@extends('layouts.template')

@section("template-content")
<br />
<h3>Create Review</h3>
<hr />
<link href="resources/css/quill.snow.css" rel="stylesheet">
<form class="product_update_form" id="product_update_form" enctype='multipart/form-data' action='/saveProduct' method="post">
    {{ csrf_field() }}
    <div class="row">
        <div class="col">
            <label for="review_title">Review Title</label>
            <input class="form-control" name="review_title" id="review_title" placeholder="An awesome review title!">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="review_tags">Tags</label>
            <input class="form-control" name="review_tags" id="review_tags">
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