<?php

namespace App\Http\Controllers;

use App\Interfaces\UsersRepositoryInterface;
use App\Interfaces\VideosRepositoryInterface;
use App\Models\Videos;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function __construct(VideosRepositoryInterface $videosRepository, UsersRepositoryInterface $usersRepository)
    {
        $this->videosRepository = $videosRepository;
        $this->usersRepository = $usersRepository;
    }
    public function index()
    {
        return view('videos.list')
            ->with('videos', $this->videosRepository->getAllVideos());
    }
    public function create()
    {
        return view('videos.create')->with('users', $this->usersRepository->getAllUsers());
    }
    public function show($id)
    {
        return view('videos.video')
            ->with('video', $this->videosRepository->getVideoById($id));
    }
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $videoDetails = $request->only([
            'title',
            'description',
            'users'
        ]);

        $this->videosRepository->createVideo($videoDetails);

        return redirect('/');
    }
    public function destroy($id)
    {
        $this->videosRepository->deleteVideo($id);
        return redirect('/');
    }
    public function edit($id)
    {
        return view('videos.edit')
            ->with('video', $this->videosRepository->getVideoById($id));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $videoDetails = $request->only([
            'title',
            'description'
        ]);
        $this->videosRepository->updateVideo($id, $videoDetails);

        return redirect('/');
    }

    //    public function getList()
//    {
//        return view('videos.list')
//            ->with('videos', Videos::where('id', '<', 5)->get());
//    }
//
//    public function getVideo($id)
//    {
//        return view('videos.video')
//            ->with('video', Videos::where('id', '=', $id)->first());
//    }
//
//    public function deleteVideo(Request $request)
//    {
//        $id = $request->input('id');
//        dd($id);
//        return view('admin.list')->with('videos', Videos::where('id', '<', 5)->get());
//    }
}
