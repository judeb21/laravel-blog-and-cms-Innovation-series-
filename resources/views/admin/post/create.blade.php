@extends('layouts.admin.dashboard')

@section('headSection')
<link rel="shortcut icon" href="asset/img/favicon.png">
<link href="{{ asset ('admin/assets/css/dropify.css')}}" rel="stylesheet">
<link href="{{ asset ('admin/assets/textboxio/resources/css/textboxio.css') }}" rel="stylesheet">
<link href="{{ asset('admin/assets/css/animate.css')}}" media="all" rel="stylesheet" type="text/css" />
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')

        <main class="main-content">
            <!--page title start-->
            <div class="row">
                <div class="col-md-6">
                    <div class="page-title">
                        <h4 class="mb-0"> Create New post
                        </h4>
                        @include('includes.messages')
                    </div>
                </div>
            </div>


            <!--page title end-->
            <div class="container-fluid">
            <form class="category-form" id="form" name="form" action="{{route('post.store')}}" onsubmit = "return(validate());" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-8">
                        <div class="card card-shadow mb-4">

                            <div class="card-body">
                                    <div class="form-group">
                                        <label for="Keyword" class="sr-only">Keyword</label>
                                        <input type="text" id="description" name="description" class="form-control" placeholder="Enter Keyword" required autocomplete="on" style="height: 48px;">
                                    </div>
                                
                                    <div class="form-group">
                                        <label for="Post Title" class="sr-only">Title</label>
                                        <input type="text" id="PostTitle" name="title" class="form-control" v-model ="title" placeholder="Post Title" required="" autocomplete="on" style="height: 48px;">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="Post Excerpt" class="sr-only">Excerpt</label>
                                        <input type="text" id="PostExcerpt" name="excerpt" class="form-control" placeholder="A little description about the post" required="" autocomplete="on" style="height: 48px;">
                                    </div>

                                    <div class="form-group">
                                        <label for="Author" class="sr-only">Author</label>
                                        <input type="text" id="author" name="author" class="form-control" placeholder="Enter Guest Host" required autocomplete="on" style="height: 48px;">
                                    </div>

                                    <div class="form-group">
                                        <label for="Author Bio" class="sr-only">Author Bio</label>
                                        <input type="text" id="abio" name="bio" class="form-control" placeholder="Enter Guest Bio" required autocomplete="on" style="height: 48px;">
                                    </div>

                                    <div class="form-group">
                                        <label for="Author description" class="sr-only">Author Description</label>
                                        <input type="text" id="ades" name="authorDescription" class="form-control" placeholder="Write short description about the author" required autocomplete="on" style="height: 48px;">
                                    </div>

                                    <div>
                                        <textarea id="textbox" name="body" style="width: 100%; height: 400px;" placeholder="Place Body Text Here">
                                        </textarea>
                                    </div>

                            </div>
                              
                        </div>
                    </div>

                    <div class="col-sm-4">
    
                        <div class="card lobicard-custom-control lobi-light  mb-4">
                            <div class="card-header bg-info">
                                <div class="card-title text-white">
                                    Featured Image
                                </div>
                            </div>
                            <div class="card-body">

                                <input type="file" name="image" class="dropify" data-max-file-size="1M">

                            </div>
                        </div>
                        <div>
                               <!-- <span>  <input type="submit" name='publish' class="btn btn-success" value = "Publish"/></span>
                                <span>  <input type="submit" name='save' class="btn btn-default" value = "Save Draft" style="margin-left:10px;" /></span>-->
                                <input type="hidden"  value="" id="postStatus" name="status">
                                <button id="publish" class="btn btn-info"> Publish </button>
                                <button id="draft" class="btn btn-default" >Save Draft </button>                                 
                        </div>
                    </div>
                </div>
            </form>
            </div>

        </main>

@endsection

@section('footer')
<script src="{{ asset('admin/assets/js/dropify.js')}}"></script>
<!--summernote-->
<script src="{{ asset('admin/assets/textboxio/textboxio.js')}}"></script>
<script>

    var editor = textboxio.replace('#textbox');
    $('.dropify').dropify();

</script>
        
<script>

$(document).ready(function(){
    //$('#form').submit(function (e) {
        //e.preventDefault(); //**** to prevent normal form submission and page reload
        $("#draft").click(function(e){
            e.preventDefault();
            $("#postStatus").val(0);
            $("#form").submit();
        }),
        $("#publish").click(function(e){
            e.preventDefault();
            $("#postStatus").val(1);
            $("#form").submit();
        })

});

</script>

<script type = "text/javascript">
    var animationName = 'animated shake';
    var animationDuration = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
      // Form validation code will come here.
      function validate() {

         if( document.form.title.value == "" ) {
            document.form.title.focus();
            $('input[name=title]').addClass(animationName).one(animationDuration, function() {
                $(this).removeClass(animationName);
                document.getElementById("PostTitle").style.borderColor = "red";
            });
            return false;
         }
         if( document.form.excerpt.value == "" ) {
            document.form.excerpt.focus();
            $('input[name=excerpt]').addClass(animationName).one(animationDuration, function() {
                $(this).removeClass(animationName);
                document.getElementById("PostExcerpt").style.borderColor = "red";
            });
            return false;
         }
         if( document.form.author.value == "" ) {
            document.form.author.focus();
            $('input[name=author]').addClass(animationName).one(animationDuration, function() {
                $(this).removeClass(animationName);
                document.getElementById("author").style.borderColor = "red";
            });
            return false;
         }
         if( document.form.bio.value == "" ) {
            document.form.bio.focus();
            $('input[name=bio]').addClass(animationName).one(animationDuration, function() {
                $(this).removeClass(animationName);
                document.getElementById("abio").style.borderColor = "red";
            });
            return false;
         }
         if( document.form.authorDescription.value == "" ) {
            document.form.authorDescription.focus();
            $('input[name=authorDescription]').addClass(animationName).one(animationDuration, function() {
                $(this).removeClass(animationName);
                document.getElementById("ades").style.borderColor = "red";
            });
            return false;
         }
         /*if( document.form.materials.value == "" ) {
            document.form.materials.focus();
            $('input[name=materials]').addClass(animationName).one(animationDuration, function() {
                $(this).removeClass(animationName);
            });
            return false;
         }*/
         if( document.form.body.value == "" ) {
            document.form.body.focus();
            $('input[name=body]').addClass(animationName).one(animationDuration, function() {
                $(this).removeClass(animationName);
            });
            return false;
         }
         
         
         if( document.form.image.value == "" ) {
            document.form.image.focus();
            $('input[name=image]').addClass(animationName).one(animationDuration, function() {
                $(this).removeClass(animationName);
            });
            return false;
         }
         return( true );
      }

</script>
@endsection