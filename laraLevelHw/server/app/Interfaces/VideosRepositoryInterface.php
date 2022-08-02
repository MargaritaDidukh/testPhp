<?php


namespace App\Interfaces;


interface VideosRepositoryInterface
{
    public function getAllVideos();
    public function getVideoById($videoId);
    public function deleteVideo($videoId);
    public function createVideo(array $videoDetails);
    public function updateVideo($videoId, array $newDetails);

}
