<?php

namespace App\Service;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserServices
{
    public function update($data, $user){
        try {
            DB::beginTransaction();
            $user =Auth::user();
            $user->name = $data['name'];
            $user->description = $data['description'];
            $user->phone = $data['phone'];
            if(isset($data['main_image'])){
                $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
                $user->main_image = $data['main_image'];
            }


            $user->save();
            DB::commit();
        }catch (\Exception $exception){
            DB::rollBack();
            abort(500);
        }
        return $user;
    }
}
