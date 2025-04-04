<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Projects;
use App\Models\QualificationCategories;
use App\Models\Qualifications;
use App\Models\SkillType;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //
    public function index()
    {
        $skilltypes = SkillType::with('skills')->get();

        $qualificationtype = QualificationCategories::with('qualifications')->get();
        $companyCount = Qualifications::where('_qualification_categories_id', 2)->count();
        $selectedCompanies = Qualifications::where('_qualification_categories_id', 2)
            ->take(2)
            ->get(['name', 'place']);

        $achievement = Achievement::all();

        $projects = Projects::all();
        $projectsCount = Projects::all()->count();

        return view('index', compact('skilltypes', 'qualificationtype', 'achievement', 'projects', 'companyCount', 'projectsCount', 'selectedCompanies'));
    }
}
