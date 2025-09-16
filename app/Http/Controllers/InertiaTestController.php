<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\InertiaTest;

class InertiaTestController extends Controller
{
    public function index()
    {
        return Inertia::render('Inertia/Index', [
            'blogs' => InertiaTest::all()
        ]);
    }

    public function create()
    {
        return Inertia::render('Inertia/Create');
    }

    public function show($id)
    {
        return Inertia::render('Inertia/Show', [
            'id' => $id,
            'blog' => InertiaTest::find($id)
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:20',
            'content' => 'required|string',
        ]);

        $interiaTest = new InertiaTest();
        $interiaTest->title = $request->input('title');
        $interiaTest->content = $request->input('content');
        $interiaTest->save();

        return to_route('inertia.index')->with(['message' => '登録しました。']);
    }

    public function delete($id)
    {
        $blog = InertiaTest::find($id);
        if ($blog) {
            $blog->delete();
            return to_route('inertia.index')->with(['message' => '削除しました。']);
        } else {
            return to_route('inertia.index')->with(['message' => 'データが見つかりません。']);
        }
    }
}
