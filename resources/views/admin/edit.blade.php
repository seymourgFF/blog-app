@extends('layouts.head')
@section('content')
    <div class="posts-vivod-mass">
        <div class="container">
            <h1>Posts page</h1>
        </div>
        <div class="container">
            <form action="{{route('post.update',$post->id)}}" method="post">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label for="label-title">Title</label>
                    <input type="text" name="title" class="form-control" id="label-title" placeholder="Enter title"
                           value="{{$post->title}}">
                </div>
                <div class="form-group">
                    <label for="label-decsr">Description</label>
                    <input type="text" name="description" class="form-control" id="label-decsr"
                           value="{{$post->description}}" placeholder="Enter Description">
                </div>
                <div class="form-group">
                    <label for="label-content">Content</label>
                    <input type="text" name="content" class="form-control" id="label-content" value="{{$post->content}}"
                           placeholder="Enter Content">
                </div>
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select type="text" name="category_id" class="form-control" id="category_id">
                        @foreach($cats as $cat)

                            <option  {{ $cat->id === $post->category->id ? 'selected' : '' }} value="{{$cat->id}}">{{$cat->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">

                    <?php $cikl = 0; ?>
                    @foreach($tags as $tag)
                        <?php $cikl++; ?>
                        <div class="form-check form-check-inline">
                            <input @foreach($post->tags as $t)
                                       {{ $tag->id === $t->id ? 'checked' : '' }}
                                   @endforeach
                                 name="tags[]" class="form-check-input" type="checkbox" id="tags{{$cikl}}"
                                   value="{{$tag->id}}">
                            <label class="form-check-label" for="tags{{$cikl}}">{{$tag->title}}</label>
                        </div>
                    @endforeach

                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
