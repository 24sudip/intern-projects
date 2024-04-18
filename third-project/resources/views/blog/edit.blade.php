<!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
@extends('layouts.dashboardMaster')

@section('content')
<div class="row pt-3">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blog Edit</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-info pb-0">
                <p class="text-white">Edit Blog</p>
            </div>
            <div class="card-body">
                @if (session('BlgEdtMsg'))
                <div class="alert alert-success">{{ session('BlgEdtMsg') }}</div>
                @endif

                <form class="forms-sample" onsubmit='return getItReady()' action="{{ route('blog.update',$blog->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="mb-2">
                        <label for="exampleInput2" class="form-label">Blog Category</label>
                        <select class="form-control" name="category_id" id="exampleInput2">
                            <option value="">Select One Category</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ $category->id == $blog->category_id ? 'selected' : '' }}>{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="exampleInput3" class="form-label">Blog Title</label>
                        <input type="text" name="blog_title" value="{{ $blog->blog_title }}" class="form-control" id="exampleInput3">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInput4" class="form-label">Blog Introduction</label>
                        <input type="text" name="blog_intro" value="{{ $blog->blog_intro }}" class="form-control" id="exampleInput4">
                    </div>
                    <div>
                        <label class="form-label">Blog Details</label>
                        <div id="snow-editor" style="height: 200px;" required>
                            {!! $blog->blog_detail !!}
                        </div> <!-- end Snow-editor-->
                    </div>
                     <textarea id='txtEditorContent' name="blog_detail" style='visibility:hidden;height:0px' tabindex="-1"></textarea>
                    <div class="mb-2">
                        <label for="exampleInput5" class="form-label">Blog Icon</label>
                        <select name="blog_icon" class="form-control" id="exampleInput5">
                            <option value="">Select a Icon</option>
                            <option value="icon-picture" {{ $blog->blog_icon == 'icon-picture' ? 'selected' : ''}}>
                                icon-picture</option>
                            <option value="icon-earphones" {{ $blog->blog_icon == 'icon-earphones' ? 'selected' : ''}}>
                                icon-earphones</option>
                            <option value="icon-camrecorder" {{ $blog->blog_icon == 'icon-camrecorder' ? 'selected' : ''}}>
                                icon-camrecorder</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label class="mb-2">Old Thumbnail</label>
                        <div class="input-group col-xs-12">
                            <img style="width:120px;" src="{{ asset('upload/blog_photos') }}/{{ $blog->blog_photo }}" alt="old_thumbnail">
                        </div>
                        <label class="mb-2">New Thumbnail Upload</label>
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
@endsection
