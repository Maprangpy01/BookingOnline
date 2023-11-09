@extends('main')

@section('style')
.carousel-inner {
height: 20pc;
}

.carousel-item {
width: 100%;
height: 100%;
}

.carousel-item img {
width: 100%;
height: 100%;
object-fit: cover;
}

.custom-btn {
color: #EC161D;
cursor: pointer;
text-align: left;
padding-left: 10%;
}

.custom-btn.active {
color: #EC161D;
border-left: 5px solid #FF656A;
}

.custom-btn:hover {
color: #EC161D;
background-color: #FFF1F180;
}

.card {
width: 100%;
margin: 0;
}

.image-card {
width: 100%;
}
@endsection

@section('content')
<div id="carousel">
    @include("components.Account.template.carousel")
</div>
<div class="container">
    <div class="row mt-3">
        <div class="col-md-2">
            <div class="d-flex align-items-start">
                <nav class="nav flex-column w-100">
                    <a class="nav-link custom-btn active" role="button" id="edit-profile-tab" data-bs-toggle="pill" data-bs-target="#edit-profile" type="button" aria-selected="true">Edit Profile</a>
                    <a class="nav-link custom-btn" role="button" id="change-password-tab" data-bs-toggle="pill" data-bs-target="#change-password" type="button" aria-selected="false">Change Password</a>
                    <a class="nav-link custom-btn" role="button" id="booking-history-tab" data-bs-toggle="pill" data-bs-target="#booking-history" type="button" aria-selected="false">Booking History</a>
                    <a class="nav-link custom-btn" role="button" id="interest-tab" data-bs-toggle="pill" data-bs-target="#interest" type="button" aria-selected="false">Interest</a>
                    <a class="nav-link custom-btn" role="button" id="my-favorite-tab" data-bs-toggle="pill" data-bs-target="#my-favorite" type="button" aria-selected="false">My Favorite</a>
                    <a class="nav-link custom-btn" role="button" id="logout-tab" data-bs-toggle="pill" data-bs-target="#logout" type="button" aria-selected="false">Logout</a>
                </nav>
            </div>
        </div>
        <div class="col-md-10">
            <div class="tab-content" id="tabContent">
                <div class="tab-pane fade show active" id="edit-profile" role="tabpanel" aria-labelledby="edit-profile-tab" tabindex="0">Edit Profile</div>
                <div class="tab-pane fade" id="change-password" role="tabpanel" aria-labelledby="change-password-tab" tabindex="0">3</div>
                <div class="tab-pane fade" id="booking-history" role="tabpanel" aria-labelledby="booking-history-tab" tabindex="0">4</div>
                <div class="tab-pane fade" id="interest" role="tabpanel" aria-labelledby="interest-tab" tabindex="0">
                    ...
                </div>
                <div class="tab-pane fade" id="my-favorite" role="tabpanel" aria-labelledby="my-favorite-tab" tabindex="0">
                    <div id="favorite">
                        @include("components.Account.template.interesting")
                    </div>
                </div>
                <div class="tab-pane fade" id="logout" role="tabpanel" aria-labelledby="logout-tab" tabindex="0">7</div>
            </div>
        </div>
    </div>
</div>
@endsection
