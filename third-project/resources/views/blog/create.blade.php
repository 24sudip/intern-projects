<!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
@extends('layouts.dashboardMaster')

@section('content')
    @if (Auth::user()->role != 'blocked')
    <div class="row pt-3">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog Add</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-info pb-0">
                    <p class="text-white">Add Blog</p>
                </div>
                <div class="card-body">
                    @if (session('BlgAdMsg'))
                    <div class="alert alert-success">{{ session('BlgAdMsg') }}</div>
                    @endif

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @if($errors->any())
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                    @endif
                    <form class="forms-sample" onsubmit='return getItReady()' action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2">
                            <label for="exampleInput2" class="form-label">Blog Category</label>
                            <select class="form-control" name="category_id" id="exampleInput2">
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="exampleInput3" class="form-label">Blog Title</label>
                            <input type="text" name="blog_title" placeholder="Blog Title" class="form-control" id="exampleInput3">
                        </div>
                        <div class="mb-2">
                            <label for="exampleInput4" class="form-label">Blog Introduction</label>
                            <input type="text" name="blog_intro" placeholder="Blog Introduction" class="form-control" id="exampleInput4">
                        </div>
                        <div>
                            <label class="form-label">Blog Details</label>
                            <div id="snow-editor" style="height: 200px;" required>
                                <h3><span class="ql-size-large">Hello World!</span></h3>
                                <p><br></p>
                                <h3>This is an simple editable area.</h3>
                                <p><br></p>
                                <ul>
                                    <li>
                                        Select a text to reveal the toolbar.
                                    </li>
                                    <li>
                                        Edit rich document on-the-fly, so elastic!
                                    </li>
                                </ul>
                                <p><br></p>
                                <p>
                                    End of simple area
                                </p>
                            </div> <!-- end Snow-editor-->
                        </div>
                         <textarea id='txtEditorContent' name="blog_detail" style='visibility:hidden;height:0px' tabindex="-1"></textarea>
                        <div class="mb-2">
                            <label for="exampleInput5" class="form-label">Blog Icon</label>
                            <select name="blog_icon" class="form-control" id="exampleInput5">
                                <option value="">Select a Icon</option>
                                <option value="icon-picture">icon-picture</option>
                                <option value="icon-earphones">icon-earphones</option>
                                <option value="icon-camrecorder">icon-camrecorder</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label class="mb-2">Thumbnail Upload</label>
                            <div class="input-group col-xs-12">
                                <input type="file" name="blog_photo" class="form-control file-upload-info" placeholder="Upload Blog Thumbnail" onchange="document.getElementById('web').src = window.URL.createObjectURL(this.files[0])">
                            </div>
                            <div class="input-group col-xs-12">
                                <img style="width:120px;" src="" id="web" alt="thumbnail">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
    function getItReady() {
        let snowEditor = document.querySelector("#snow-editor");
        let txtEditorContent = document.querySelector("#txtEditorContent");
        txtEditorContent.value = snowEditor.innerHTML;
        return true;
    }
    </script>
    @else
    <h1>Valid User Is Allowed To See This Page</h1>
    @endif
@endsection
