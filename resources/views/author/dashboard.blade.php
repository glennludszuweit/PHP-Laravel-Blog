@extends('layouts.admin')

@section('title')
    Author Dashboard
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="card p-4">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <span class="h4 d-block font-weight-normal mb-2">{{ Auth::user()->todaysPosts->count() }}</span>
                                <span class="font-weight-light">Today's Posts</span>
                            </div>

                            <div class="h2 text-muted">
                                <i class="icon icon-paper-plane"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card p-4">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <span class="h4 d-block font-weight-normal mb-2">{{ Auth::user()->posts->count() }}</span>
                                <span class="font-weight-light">All Posts</span>
                            </div>

                            <div class="h2 text-muted">
                                <i class="icon icon-paper-clip"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card p-4">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <span class="h4 d-block font-weight-normal mb-2">{{ $todaysComments }}</span>
                                <span class="font-weight-light">Today's Comments</span>
                            </div>

                            <div class="h2 text-muted">
                                <i class="fa fa-comments"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card p-4">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <span class="h4 d-block font-weight-normal mb-2">{{ $allComments->count() }}</span>
                                <span class="font-weight-light">All Comments</span>
                            </div>

                            <div class="h2 text-muted">
                                <i class="icon icon-book-open"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row ">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Posts by Day
                        </div>

                        <div class="card-body p-0">
                            {!! $chart->container() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! $chart->script() !!}
@endsection
