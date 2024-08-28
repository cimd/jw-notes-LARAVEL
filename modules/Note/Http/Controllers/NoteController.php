<?php

namespace Modules\Note\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Note\Models\Note;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum')->except(['index']);
    }

    public function index(Request $request): JsonResponse
    {
        $result = Note::apiQuery($request);

        return response()->index($result);
    }

    public function store(Request $request): JsonResponse
    {
        $note = Note::create($request->all());

        return response()->store($note);
    }

    public function show(Note $note): JsonResponse
    {
        return response()->show($note);
    }

    public function update(Request $request, Note $note): JsonResponse
    {
        $note->fill($request->all())->save();

        return response()->update($note);
    }

    public function destroy(Note $note): JsonResponse
    {
        $note->delete();

        return response()->destroy($note);
    }
}
