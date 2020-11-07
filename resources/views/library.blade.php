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
        @foreach($courses as $course)
        <div class="col-lg-4 mb-3">
            <div class="card m-0 bg-white" style="max-height: 300px; height:300px;">
                <div class="card-header" style="background-color:{{$course->language === 'JavaScript' ? '#3659a2' : ($course->language === 'Python' ? '#008297' : ($course->language === 'iOS' ? '#30826C' : ($course->language === 'C#' ? '#008297' : ($course->language === 'PHP' ? '#008297' : '#9F4B84'))))}}">
                    <p class="float-right text-white" ><b>{{$course->duration >= 120 ? round($course->duration / 60) . ' hours' : $course->duration . ' min'}}</b></p>
                </div>

                <div class="card-body" style="max-height:175px; height:175px">
                    <h6 class="m-0">Course</h6>
                    <h5 class="m-0">{{$course->title}}</h5>
                    <p style="overflow:hidden; text-overflow:ellipsis; height:75px; max-height:75px" >{{$course->summary}}</p>
                </div>
                <div class="card-footer bg-white">
                    <button class="btn rounded bg-white border-dark" style="border-radius:2em !important; color:{{$course->language === 'JavaScript' ? '#3659a2' : ($course->language === 'Python' ? '#008297' : ($course->language === 'iOS' ? '#30826C' : '#9F4B84'))}}" ><b>{{$course->language}}</b></button> <button class="btn rounded bg-white border-dark" style="border-radius:2em !important;"><b>{{$course->difficulty}}</b></button></h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
