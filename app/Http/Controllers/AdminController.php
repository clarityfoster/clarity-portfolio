<?php

namespace App\Http\Controllers;

use App\Models\SomePrj;
use App\Models\Ability;
use App\Models\Category;
use App\Models\Feature;
use App\Models\Project;
use App\Models\Tech;
use App\Models\Essence;
use App\Models\Card;
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
    public function essence() {
        $essence = Essence::all();
        $card = Card::all();
        $project = Project::all();
        $ui = Project::where('category_id', 3)->get();
        $category = Category::all();
        return view('admins.essence', [
            'essence' => $essence,
            'card' => $card,
            'project' => $project,
            'ui' => $ui,
        ]);
    }
}
