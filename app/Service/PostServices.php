<?php

namespace App\Service;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostServices
{
    public function store($data){
        try {
            DB::beginTransaction();
            if(isset($data['tag_ids'])){
                $tags_ids = $data['tag_ids'];
                unset($data['tag_ids']);
            }
            if(isset($data['main_image'])){
                $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
            }
            $post = Post::firstOrCreate($data);
            if(isset($tags_ids)){
                $post->tags()->attach($tags_ids);
            }

            DB::commit();
        }catch(\Exception $exception){
            DB::rollBack();
            abort(500);
        }
    }
    public function update($data, $post){
        try {
            DB::beginTransaction();
            if(isset($data['tag_ids'])){
                $tags_ids = $data['tag_ids'];
                unset($data['tag_ids']);
            }
            if(isset($data['main_image'])){
                $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
            }
            $post->update($data);
            if(isset($tags_ids)){
                $post->tags()->sync($tags_ids);
            }
            DB::commit();
        }catch (\Exception $exception){
            DB::rollBack();
            abort(500);
        }
        return $post;
    }
}
