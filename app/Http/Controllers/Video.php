<?php

namespace App\Http\Controllers;

use App\Models\PlaylistModel;
use App\Models\VideoModel;
use Illuminate\Http\Request;

class Video extends Controller
{
    //

    public function tampilVideo(Request $request){
        $playlist = PlaylistModel::paginate(10);
        // $video = VideoModel::paginate(10);

        $data = VideoModel::join('playlist', 'playlist.id_playlist', '=', 'video.id_playlist')
        ->select(['video.*','playlist.jdl_playlist as playlist']);

        $video = $data->get();

        return view("administrator.modul-video.video", compact(['playlist', 'video']));


        // $data = Book::join('categories', 'categories.id', '=', 'books.category_id')
        // ->join('bookshelves', 'bookshelves.id', '=', 'books.bookshelf_id')
        // ->select(['books.*','categories.name as category', 'bookshelves.bookshelf as bookshelf']);
        // if(!empty($request->bookshelf)){
        //    $data->where('bookshelves.id', $request->bookshelf);
        // }
        // if(!empty($request->category)){
        //    $data->where('categories.id', $request->category);
        // }

        // $books = $data->get();
    }
}
