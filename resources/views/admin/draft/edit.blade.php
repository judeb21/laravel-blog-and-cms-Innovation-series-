@extends('layouts.admin.deashboard')

@section('headSection')
<link href="{{ asset ('admin/assets/textboxio/resources/css/textboxio.css') }}" rel="stylesheet">
<link href="{{ asset ('admin/assets/css/dropify.css')}}" rel="stylesheet">
<link href="{{ asset('admin/assets/vendor/date-picker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
@endsection

@section('content')

        <main class="main-content" id="app">
            <!--page title start-->
            <div class="row">
                <div class="col-md-6">
                    <div class="page-title">
                        <h4 class="mb-0"> Edit post
                        </h4>
                    </div>
                </div>
            </div>



            <!--page title end-->
            <div class="container-fluid">
            @include('includes.messages')
            
            <form class="category-form" action="{{ route('draft.update', $draft->id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{method_field('PUT')}}
                <div class="row">
                    <div class="col-sm-8">
                        <div class="card card-shadow mb-4">

                            <div class="card-body">
                                    <div class="form-group">
                                        <label for="Post Title" class="sr-only">Post Title</label>
                                        <input type="text" id="title" name="title" class="form-control" placeholder="Post Title" required="" autocomplete="off" style="height: 48px;" value="{{$draft->title}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Select Category</label>
                                        <select class="form-control select2 select2-hidden-accessible" name="categories[]">
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                            @foreach ($draft->categories as $postCategory)
                                            @if ($postCategory->id == $category->id)
                                            selected
                                            @endif
                                            @endforeach
                                            >{{ $category->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div>
                                    <textarea name="body" id="textbox" style="width: 100%; height: 400px;">{{$draft->body}} </textarea>
                                    </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                    <div class="form-group">
                            <p> Publish </p>
                                
                                    <input size="18" type="text" name="publish" value="{{$draft->publish}}" data-date="2018-08-14" id="datetimepicker">
                                    <span class="add-on"><i class="fa fa-calendar"></i></span>
                               
                        </div>
                        <div class="card lobicard-custom-control lobi-light  mb-4">
                            <div class="card-header bg-info">
                                <div class="card-title text-white">
                                    Featured Image
                                </div>
                            </div>
                            <div class="card-body">

                                <input type="file" name="image" id="edit_class" class="dropify" data-max-file-size="1M" />

                            </div>
                    </div>
                    <div>
                    <span>  <button class="btn btn-success Publish">Publish Post</button></span>
                        </div>
                    </div>
                </form>

                </div>


        </main>

@endsection

@section('footer')
<script src="{{ asset('admin/assets/js/dropify.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#bs4-table').DataTable({

            "ordering": false,
            "info": false
        });
    });

    $("#edit_image").addClass('dropify');
    $("#edit_image").attr("data-default-file", "/images/{{$draft->image}}");
    $('.dropify').dropify();
    var editor = textboxio.replace('#textbox');
</script>
@endsection