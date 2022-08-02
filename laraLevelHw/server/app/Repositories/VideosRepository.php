<?php

namespace App\Repositories;


use App\Interfaces\VideosRepositoryInterface;
use App\Models\User;
use App\Models\Videos;

class VideosRepository implements VideosRepositoryInterface
{
    public function getAllVideos()
    {
        return Videos::orderBy('updated_at', 'DESC')->get();
    }

    public function getVideoById($videoId)
    {
        return Videos::where('id', '=', $videoId)->first();
    }

    public function deleteVideo($videoId)
    {
        return Videos::destroy($videoId);
    }

    public function createVideo(array $userDetails)
    {
        return  Videos::create([
            'status' => "active",
            'user_id' => $userDetails['users'],
            'title' => $userDetails['title'],
            'description' => $userDetails['description'],
            'content' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/lAyWhJ6tr9E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
        ]);
    }

    public function updateVideo($videoId, array $newDetails)
    {
        return Videos::where('id', $videoId)
            ->update([
                'title' => $newDetails['title'],
                'description' => $newDetails['description'],
            ]);
    }


}
