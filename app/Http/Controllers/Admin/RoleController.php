<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;

class RoleController extends Controller {
    public function index() {
        $roles = Role::orderBy('created_at', 'DESC')->paginate(10);
        return view('back.role', compact('roles'));
    }

    public function store(Request $request) {
        $this->validate($request, ['name' => 'required|string']);

        $role = Role::firstOrCreate(['name' => $request->name]);
        return redirect()->back()
            ->with(['success' => 'Role : ' . $role->name . ' has been added!']);
    }


    public function destroy($id) {
        $role = Role::findOrFail($id);
        $role->delete();
        return redirect()->back()
            ->with(['success' => 'Role:' . $role->name . ' has been delete!']);
    }
}
