@extends('layouts.admin.dashboard')
<link href="{{ asset ('admin/assets/textboxio/resources/css/textboxio.css') }}" rel="stylesheet">

@section('content')

        <main class="main-content">
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
            
            <form class="category-form" action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            {{ method_field('PUT') }}
            {{ csrf_field() }}
                <div class="row">
                    <div class="col-sm-8">
                        <div class="card card-shadow mb-4">

                            <div class="card-body">
                                    <div class="form-group">
                                        <label for="Description" class="sr-only">Keyword</label>
                                        <input type="text" id="description" name="description" class="form-control"  value="{{$post->description}}" placeholder="Description" required autocomplete="off" style="height: 48px;">
                                    </div>

                                    <div class="form-group">
                                        <label for="Title" class="sr-only">Title</label>
                                        <input type="text" id="title" name="title" class="form-control" value="{{$post->title}}" placeholder="Title" required autocomplete="off" style="height: 48px;">
                                    </div>

                                    <div class="form-group">
                                        <label for="Post Title" class="sr-only">Title</label>
                                        <input type="text" id="PostTitle" name="excerpt" class="form-control" value="{{$post->excerpt}}" placeholder="Describe this tool" required="" autocomplete="off" style="height: 48px;">
                                        
                                    </div>

                                    <div class="form-group">
                                        <label for="Author" class="sr-only">Author</label>
                                        <input type="text" id="author" name="author" class="form-control" value="{{$post->author}}" placeholder="Enter Guest Host" required autocomplete="on" style="height: 48px;">
                                    </div>

                                    <div class="form-group">
                                        <label for="Author Bio" class="sr-only">Author Bio</label>
                                        <input type="text" id="abio" name="bio" class="form-control" value="{{$post->bio}}" placeholder="Enter Guest Bio" required autocomplete="on" style="height: 48px;">
                                    </div>

                                    <div class="form-group">
                                        <label for="Author description" class="sr-only">Author Description</label>
                                        <input type="text" id="ades" name="authorDescription" class="form-control" value="{{$post->authorDescription}}" placeholder="Write short description about the author" required autocomplete="on" style="height: 48px;">
                                    </div>
                                    <!--<div class="form-group">
                                        <label for="exampleFormControlFile1">Upload PDF</label>
                                        <input type="file" class="form-control-file" name="files" value="/downloadables/{{$post->files}}" id="exampleFormControlFile1">
                                    </div>-->

                                    <div>
                                        <textarea id="textbox" name="body" style="width: 100%; height: 400px;" placeholder="Place Body Text Here">{{$post->body}} 
                                        </textarea>
                                    </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <a href="/" class="btn btn-info Publish" style="margin-left:0; margin-bottom: 20px;" target="_blank">View Post</a>
                   
                        <div class="card lobicard-custom-control lobi-light  mb-4">
                            <div class="card-header bg-info">
                                <div class="card-title text-white">
                                    Slider Image
                                </div>
                            </div>
                            <div class="card-body">

                                <input type="file" name="image" value="{{$post->image}}" id="edit_image" class="dropify" data-max-file-size="1M" />

                            </div>
                    </div>
                                        
                    <div>
                    <span>  <button class="btn btn-default Publish">Update</button></span>
                        </div>          
                    </div>
                </form>
                    <div class="col-md-12 text-right">
                    <form id="delete-form-{{ $post->id }}" method="POST" action="{{ route('post.destroy', $post->id) }}">
                        {{method_field('DELETE')}}
                        {{csrf_field()}}
                        <input type="submit" style="margin-top: -65px; margin-right: 18%;" class="btn Delete danger" value="Delete"/>
                    </form>
                    </div>                    

                </div>


        </main>

@endsection

@section('footer')
<script src="{{ asset('admin/assets/js/dropify.js')}}"></script>
<script src="{{ asset('admin/assets/textboxio/textboxio.js')}}"></script>

<script>
        
            $("#edit_image").addClass('dropify');
            $("#edit_image").attr("data-default-file", "/images/{{$post->image}}");
            $('.dropify').dropify();
            var editor = textboxio.replace('#textbox');
            
</script>

<script>
    $('.delete-post').click(function(e){
        e.preventDefault() // Don't post the form, unless confirmed
        if (confirm('Are you sure?')) {
            // Post the form
            $(e.target).closest('form').submit() // Post the surrounding form
        }
    });
</script>

@endsection