<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Http\Requests\NoteRequest;
use Illuminate\Http\JsonResponse;

class NoteController extends Controller
{
    public function index():JsonResponse
    {
        return response()->json(Note::all(), 200);
    }

    public function store(NoteRequest $request):JsonResponse
    {
        $note = Note::create($request->all());
        return response()->json([
            'success'=> true,
            'data'=> $note
        ], 201);
    }


    public function show(string $id):JsonResponse
    {
        $note = Note::find($id);
        return response()->json($note, 200);
    }


    public function update(Request $request, string $id):JsonResponse
    {
        $note = Note::find($id);
        $note->title = $request->title;
        $note->content = $request->content;
        $note->save();

        return response()->json([
            'success'=>true,
            'data'=> $note
        ], 200);

    }

    public function destroy(string $id):JsonResponse
    {
        $note = Note::find($id)->delete();
        return response()->json([
            'success'=> true,
            'data'=> $note
        ], 200);
    }
}
