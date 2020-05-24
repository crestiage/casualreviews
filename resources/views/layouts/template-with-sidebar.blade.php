@extends('layouts.template')

@section("template-content")
<div class="row" style="margin-top: 20px;">
    <div class="col-2">
        <div class="row margin-bot-10">
            <div class="col">
                <!-- <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search Tags" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                </form> -->
            </div>
        </div>

        <div class="row margin-bot-10">
            <div class="col">
                <h5>Popular Tags</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Technology</li>
                    <li class="list-group-item">Gaming</li>
                    <li class="list-group-item">Food</li>
                    <li class="list-group-item">Kingston</li>
                    <li class="list-group-item">Grammar</li>
                </ul>
            </div>
        </div>

    </div>
    <div class="col-8">
        <!-- Content -->
        @yield("content")
    </div>
    <div class="col-2">
        <div class="row margin-bot-10">
            <div class="col bg-casual-reviews" style="height: 700px;">
                ADS
            </div>
        </div>
        <div class="row margin-bot-10">
            <div class="col">
                <a href="#">
                    <img src="resources/img/site/paypal-donate-button.png" class="img-fluid">
                </a>
            </div>
        </div>
        
    </div>
</div>
@endsection