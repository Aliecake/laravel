@extends('treehouse')
@section('body')
    <div class="row mb-5">
        <div class="col-12 mb-3">
            <div class="card bg-white">
                <div class="card-body ">
                    <h3 class="card-title">Welcome to the Library</h3>
                    <div class="row mb-5">
                        <p class="col-6 card-text d-none d-lg-block">This is a complete catalog of all the content we offer. Browse by topic, type or difficulty.</p>
                        <div class="col-6">
                            <img src="{{asset('images/welcome-truck.png')}}" alt="welcome truck">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
