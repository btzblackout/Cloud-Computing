<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Songs;

class CustomDBController extends Controller
{
    public function index()
    {
        LoggingController::info("Class: CustomDBController, Method: index, Entry");
        $songs = Songs::where('userid', Auth::id())->get();
        LoggingController::info("Class: CustomDBController, Method: index, Exit");
        return view('auth.home', ['songs' =>  $songs]);
    }

    public function action(Request $request)
    {
        LoggingController::info("Class: CustomDBController, Method: action, Entry");
        if($request->ajax())
        {
            if($request->action == 'edit')
            {

                $name = $request->name;
                $data = array(
                    'name' => $request->name,
                    'artist' => $request->artist,
                    'collab_artists' => $request->collab_artists,
                    'album' => $request->album,
                    'release_year' => $request->release_year,
                    'genre' => $request->genre
                );

                DB::table('songs')->where('id', $request->id)->update($data);
            }
            if($request->action == "delete")
            {
                DB::table('songs')->where('id', $request->id)->delete();

            }
            LoggingController::info("Class: CustomDBController, Method: action, Exit");
            return request()->json($request);

        }

    }

    public function AddSong()
    {
        LoggingController::info("Class: CustomDBController, Method: AddSong, Entry");
        LoggingController::info("Class: CustomDBController, Method: AddSong, Exit");
        return view('auth.addsong');
    }

    public function customAddSong(Request $request)
    {
        LoggingController::info("Class: CustomDBController, Method: customAddSong, Entry");
        Songs::create([
            'userid' => Auth::id(),
            'name' => $request->name,
            'artist' => $request->artist,
            'collab_artists' => $request->collab_artists,
            'album' => $request->album,
            'release_year' => $request->release_year,
            'genre' => $request->genre
        ]);
        LoggingController::info("Class: CustomDBController, Method: customAddSong, Exit");
        return redirect("home");
    }
}
