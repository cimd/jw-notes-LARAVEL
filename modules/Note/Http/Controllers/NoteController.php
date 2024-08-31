<?php

namespace Modules\Note\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Modules\Note\Models\Note;

class NoteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index(Request $request): JsonResponse
    {
        $result = Note::query()
            ->where('user_id', auth()->user()->id)
            ->apiQuery($request);

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
