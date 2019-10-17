@extends('layouts.admin.dashboard')

@section('content')

<main class="main-content">
            <!--page title start-->
            <div class="page-title">
                <h4 class="mb-0"> All Posts</h4>
                
            </div>
            <!--page title end-->


            <div class="container-fluid">
            @include('includes.messages')
                <!-- state start-->
                <div class="row">
                    <div class=" col-sm-12">
                        <div class="card card-shadow mb-4">
                            <div class="card-header">
                                <div class="addnew-btn">
                                    <a href="{{route('post.create')}}" class=" btn btn-primary New_post">Create New Post</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="bs4-table" class="table table-bordered table-striped" cellspacing="0 " width="100% ">
                                    <thead>
                                        <tr>
                                            <th>Description</th>
                                            <th>Title</th>
                                            <th>Post Date</th>
                                            <th>Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($posts as $post)
                                        <tr>
                                            <td>{{$post->description}} </td>
                                            <td>{{$post->title}}</td>
                                            <td>{{ date('F d, Y',  strtotime($post->created_at)) }}</td>
                                            <td>
                                            <a href="{{ route('post.edit', $post->id) }}"><button class="btn Edit success"> Edit </button></a>
                                            <form id="delete-form-{{ $post->id }}" method="POST" action="{{ route('post.destroy', $post->id) }}">
                                                {{method_field('DELETE')}}
                                                {{csrf_field()}}
                                                <input type="submit" class="btn Delete danger" value="Delete"/>
                                            </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- state end-->

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
       
    </script>
@endsection
