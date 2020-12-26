@extends('frontend.master')

@section('title', 'Mental Pixel')

@section('content')

    <section id="pixel-index" class="pixel-index ">
        <div class="container">

            <div class="section-title-pixel" data-aos="fade-up">
                <h2>Moodmu Hari ini</h2>
            </div>

            <div class="row" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Moodku</h5>
                                    <span class="badge badge-info mt-3">
                                        @if (isset($y[0]['sangat_buruk']))
                                            {{ $y[0]['sangat_buruk'] }}
                                        @elseif(isset($y[0]['buruk']))
                                            {{ $y[0]['buruk'] }}
                                        @elseif(isset($y[0]['biasa']))
                                            {{ $y[0]['biasa'] }}
                                        @elseif(isset($y[0]['baik']))
                                            {{ $y[0]['baik'] }}
                                        @elseif(isset($y[0]['sangat_baik']))
                                            {{ $y[0]['sangat_baik'] }}
                                        @endif

                                    </span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                        <i class="fas fa-book"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm">

                                <span class="text-nowrap">
                                    @foreach ($pixel as $px)
                                        {{ $px->created_at->isoFormat('dddd') }}
                                    @endforeach
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Emosi</h5>
                                    @foreach ($pixel as $px)
                                        <span class="badge badge-info mt-3">{{ $px->emosi }}</span>
                                    @endforeach
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>
                            </div>

                            <p class="mt-3 mb-0 text-muted text-sm">
                                <span class="text-nowrap">
                                    @foreach ($pixel as $px)
                                        {{ $px->created_at->isoFormat('dddd') }}
                                    @endforeach
                                </span>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Faktor</h5>
                                    @foreach ($pixel as $px)
                                        <span class="badge badge-info mt-3">{{ $px->faktor }}</span>
                                    @endforeach
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                        <i class="fas fa-scroll"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-3 mb-0 text-muted text-sm">
                                <span class="text-nowrap">
                                    @foreach ($pixel as $px)
                                        {{ $px->created_at->isoFormat('dddd') }}
                                    @endforeach
                                </span>

                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="pixel-calendar" class="pixel-calendar">
        <div class="container">
            <div class="calendar shadow bg-white p-5">
                <div class="d-flex align-items-center"><i class="fa fa-calendar fa-3x mr-3"></i>
                    <h2 class="month font-weight-bold mb-0 text-uppercase">December 2019</h2>
                </div>
                <p class="font-italic text-muted mb-5">No events for this day.</p>
                <ol class="day-names list-unstyled">
                    <li class="font-weight-bold text-uppercase">Sun</li>
                    <li class="font-weight-bold text-uppercase">Mon</li>
                    <li class="font-weight-bold text-uppercase">Tue</li>
                    <li class="font-weight-bold text-uppercase">Wed</li>
                    <li class="font-weight-bold text-uppercase">Thu</li>
                    <li class="font-weight-bold text-uppercase">Fri</li>
                    <li class="font-weight-bold text-uppercase">Sat</li>
                </ol>

                <ol class="days list-unstyled">
                    <li>
                        <div class="date">1</div>
                        <div class="event bg-success">Event with Long Name</div>
                    </li>
                    <li>
                        <div class="date">2</div>
                    </li>
                    <li>
                        <div class="date">3</div>
                    </li>
                    <li>
                        <div class="date">4</div>
                    </li>
                    <li>
                        <div class="date">5</div>
                    </li>
                    <li>
                        <div class="date">6</div>
                    </li>
                    <li>
                        <div class="date">7</div>
                    </li>
                    <li>
                        <div class="date">8</div>
                    </li>
                    <li>
                        <div class="date">9</div>
                    </li>
                    <li>
                        <div class="date">10</div>
                    </li>
                    <li>
                        <div class="date">11</div>
                    </li>
                    <li>
                        <div class="date">12</div>
                    </li>
                    <li>
                        <div class="date">13</div>
                        <div class="event all-day begin span-2 bg-warning">Event Name</div>
                    </li>
                    <li>
                        <div class="date">14</div>
                    </li>
                    <li>
                        <div class="date">15</div>
                        <div class="event all-day end bg-success">Event Name</div>
                    </li>
                    <li>
                        <div class="date">16</div>
                    </li>
                    <li>
                        <div class="date">17</div>
                    </li>
                    <li>
                        <div class="date">18</div>
                    </li>
                    <li>
                        <div class="date">19</div>
                    </li>
                    <li>
                        <div class="date">20</div>
                    </li>
                    <li>
                        <div class="date">21</div>
                        <div class="event bg-primary">Event Name</div>
                        <div class="event bg-success">Event Name</div>
                    </li>
                    <li>
                        <div class="date">22</div>
                        <div class="event bg-info">Event with Longer Name</div>
                    </li>
                    <li>
                        <div class="date">23</div>
                    </li>
                    <li>
                        <div class="date">24</div>
                    </li>
                    <li>
                        <div class="date">25</div>
                    </li>
                    <li>
                        <div class="date">26</div>
                    </li>
                    <li>
                        <div class="date">27</div>
                    </li>
                    <li>
                        <div class="date">28</div>
                    </li>
                    <li>
                        <div class="date">29</div>
                    </li>
                    <li>
                        <div class="date">30</div>
                    </li>
                    <li>
                        <div class="date">31</div>
                    </li>
                    <li class="outside">
                        <div class="date">1</div>
                    </li>
                    <li class="outside">
                        <div class="date">2</div>
                    </li>
                    <li class="outside">
                        <div class="date">3</div>
                    </li>
                    <li class="outside">
                        <div class="date">4</div>
                    </li>
                </ol>
            </div>
        </div>
    </section>

    <section></section>

@endsection
