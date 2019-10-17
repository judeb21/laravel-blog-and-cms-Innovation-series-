@extends('layouts.admin.dashboard')

@section('content')

        <!--main contents start-->
        <main class="main-content">
            <!--page title start-->
            <div class="page-title">
                <h4 class="mb-0"> Draft</h4>
                @include('includes.messages')
            </div>
            <!--page title end-->


            <div class="container-fluid">
                <!-- state start-->
                <div class="row">
                    <div class=" col-sm-12">
                        <div class="card card-shadow mb-4">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <table id="bs4-table" class="table table-bordered table-striped" cellspacing="0" width="100% ">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Category</th>
                                            <th>Date Created</th>
                                            <th>Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($drafts as $draft)
                                        <tr>
                                            <td></td>
                                            <td>{{$draft->title}} </td>
                                            <td>{{$draft->user->name}}</td>
                                            @foreach($draft->categories as $category)
                                            <td>{{$category->title}}</td>
                                            @endforeach
                                            <td>{{ date('F d, Y',  strtotime($draft->created_at)) }}</td>
                                            <td>
                                            <a href="{{ route('draft.edit', $draft->id) }}"><button class="btn Edit success ">Edit </button></a>
                                                <button class="btn Delete danger ">
                                                <form id="delete-form-{{ $draft->id }}" method="POST" action="{{ route('draft.destroy', $draft->id) }}">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}
                                                </form>
                                                Delete </button>
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
        <!--main contents end-->

@endsection
@section('footer')
<script src="{{ asset('admin/assets/vendor/data-tables/dataTables.select.min.js') }}"></script>
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