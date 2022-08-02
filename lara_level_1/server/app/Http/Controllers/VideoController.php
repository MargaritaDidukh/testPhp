<?php

namespace App\Http\Controllers;

use App\Models\Videos;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function getList()
    {
        return view('videos.list')
            ->with('videos', Videos::where('id', '<', 7)->get());
    }

    public function getVideo($id)
    {
        return view('videos.video')
            ->with('video', Videos::where('id', '=', $id)->first());
    }
}
