<?php
// gkc_hash_code : 01EVG95DW7QAQ1JGDS2T68TPC6v

namespace Modules\User\Admin;

use App\User;
use Illuminate\Http\Request;

class UserController
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $search =  $request->input('search');
        
        if ($search != "") {
            $users = User::where(function ($query) use ($search){
                $query->where('email', 'like', '%'.$search.'%');
            })
            ->get();
        } else {
            $users = User::all();
        }

        return view('admin.index', compact('users', 'search'));
    }

    /** @param Request $request
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('admin.detail', compact('user'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        return User::create($data)
            ? redirect()->route('user.index')
            : redirect()->back();
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('admin.edit', compact('user'));
    }

    public function update($id, Request $request)
    {
        $user = User::findOrFail($id);

        return $user->update($request->all())
            ? redirect()->route('user.index')
            : redirect()->back();
    }
}
