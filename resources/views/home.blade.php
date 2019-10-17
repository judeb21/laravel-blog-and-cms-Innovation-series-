@extends('layouts.admin.dashboard') 

@section('headSection')
<link href="{{asset('admin/assets/css/anime.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="preloader">
        <div class="lines">
            <div class="line line-1"></div>
            <div class="line line-2"></div>
            <div class="line line-3"></div>
        </div>

        <div class="loading-text">HANG ON</div>
</div>
           
<main class="main-content">
            <!--page title start-->
            <div class="container-fluid">
                <div class="content-wrapper">
                    <div class="text-buttons-wrapper">
                        <h1><span>Good afternoon</span></h1>
                        <h2>What do you want to do today ? </h2>

                    </div>

                </div>
                <div class="row">
                    <div class="col-xl-4 col-sm-6 mb-4 dashboard">
                        <a href="{{route('post.create')}}">
                            <div class="card card-shadow text-center">
                                <div class="card-body">
                                    <i class="ti-plus text-primary f50"></i>
                                    <h6 class="mb-0 mt-3 ">New Post</h6>

                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-xl-4 col-sm-6 mb-4 dashboard">
                        <a href="{{ route('logout') }}"onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                            <div class="card card-shadow  text-center">
                                <div class="card-body">
                                    <i class="ti-power-off text-success f50"></i>
                                    <h6 class="mb-0 mt-3"> Logout </h6>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form> 
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            </div>



        </main>

@endsection
@section('footer')
<script>
        $(document).ready(function() {
            $('#bs4-table').DataTable({

                "ordering": false,
                retrieve: true,
                "info": false

            });
        });
        $('.Delete').on('click', function() {
            swal({
                title: 'Are you sure?',
                text: "This category cant be reverted back!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    event.preventDefault(); document.getElementById('').submit();
                    swal(
                        'Deleted!',
                        'This User has been deleted.',
                        'success'
                    )
                }
            })
        });
       
    </script>
        <script>
        // Greetings Text

        $(function() {
            var now = new Date();
            var hours = now.getHours();
            var msg;
            if (hours < 12) {
                msg = "Good Morning {{Auth::user()->name}},";
            } else if (hours < 16) {
                msg = "Good Afternoon {{Auth::user()->name}},";
            } else {
                msg = "Good Evening {{Auth::user()->name}},";
            }
            $(".text-buttons-wrapper h1 span").html(msg);

        });
    </script>
@endsection
