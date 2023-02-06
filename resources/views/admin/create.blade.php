@extends('layouts.head')
@section('content')
    <div class="posts-vivod-mass">
        <div class="container">
            <h1>Posts page</h1>
        </div>
        <div class="container">
            <form action="{{route('post.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="label-title">Title</label>
                    <input value="{{old('title')}}" type="text" name="title" class="form-control" id="label-title" placeholder="Enter title">
                    @error('title')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="label-decsr">Description</label>
                    <textarea value="{{old('description')}}" type="text" name="description" class="form-control" id="label-decsr"
                           placeholder="Enter Description"></textarea>
                    @error('description')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="label-content">Content</label>
                    <textarea value="{{old('content')}}" type="text" name="content" class="form-control" id="label-content"
                           placeholder="Enter Content"></textarea>
                    @error('content')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select type="text" name="category_id" class="form-control" id="category_id">
                        @foreach($cats as $cat)
                            <option value="{{$cat->id}}">{{$cat->title}}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">

                    <?php $cikl = 0; ?>
                    @foreach($tags as $tag)
                        <?php $cikl++; ?>
                        <div class="form-check form-check-inline">
                            <input name="tags[]" class="form-check-input" type="checkbox" id="tags{{$cikl}}"
                                   value="{{$tag->id}}">
                            <label class="form-check-label" for="tags{{$cikl}}">{{$tag->title}}</label>
                        </div>
                    @endforeach
                        @error('tags[]')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
