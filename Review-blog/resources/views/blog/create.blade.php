@extends('dashboard.dashboard')
@section('blog')
<div class="page-wrapper bg-dark p-t-100 p-b-50">
    <div class="wrapper wrapper--w900">
        <div class="card card-6">
            <div class="card-heading">
                <h2 class="title">Add Blog</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('blog.store')}}">
                    @csrf
                    <div class="form-row">
                        <div class="name">Title</div>
                        <div class="value">
                            <input class="input--style-6" type="text" name="title">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">slug</div>
                        <div class="value">
                            <input class="input--style-6" type="text" name="slug">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Description</div>
                        <div class="value">
                            <div class="input-group">
                                <textarea class="textarea--style-6" name="description"
                                    placeholder="Type your blog"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Catagory</div>
                        <select name="catagory" id="" class="value">
                            <option >--select catagory--</option>
                            <option value="1">Catagory 1</option>
                            <option value="2">Catagory 2</option>
                            <option value="3">Catagory 3</option>
                        </select>
                    </div>
                    <div class="form-row">
                        <div class="name">Image</div>
                        <div class="value">
                            <div class="input-group js-input-file">
                                <input class="input-file" type="file" name="file_cv" id="file">
                                <label class="label--file" for="file">Choose file</label>
                                <span class="input-file__info">No file chosen</span>
                            </div>
                            <div class="label--desc">Upload your image. Max file size 10MB</div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn--radius-2 btn--blue-2" type="submit">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection