<?php

namespace App\Http\Controllers\Video;

use App\Http\Controllers\Controller;
use App\Models\Lyric;
use App\Models\Video;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideosController extends Controller
{
    public function create()
    {
        return view('videos.create');
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $lyric = Lyric::create(['lyric' => $request->lyric]);

            foreach ($request->expressions as $expression) {
                $lyric->addExpression($expression);
            }

            $video = Video::create(['title' => $request->title, 'id_youtube' => $request->id_youtube, 'lyric_id' => $lyric->id]);

            DB::commit();
        } catch (QueryException $exception) {
            dd($exception->errorInfo());
            DB::rollBack();
        } catch (\Exception $exception) {
            dd($exception->getMessage());
            DB::rollBack();
        }

        return redirect($video->path());
    }
}
