<?php

namespace App\Http\Controllers;

use App\Models\SomePrj;
use App\Models\Ability;
use App\Models\Category;
use App\Models\Feature;
use App\Models\Project;
use App\Models\Tech;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $someprjs = SomePrj::all();
        $abilities = Ability::all();
        $prj = Project::all();
        $feature = Feature::all();
        $tech = Tech::all();
        $category = Category::all();
        return view('admins.index', [
            'someprj' => $someprjs,
            'ability' => $abilities,
            'feature' => $feature,
            'project' => $prj,
            'tech' => $tech,
            'category' => $category
        ]);
    }
    public function detail($id) {
        $prj = Project::find($id);
        $category = Category::find($id);
        return view('admins.detail', [
            'project' => $prj,
            'category' => $category
        ]);
    }
    
}
