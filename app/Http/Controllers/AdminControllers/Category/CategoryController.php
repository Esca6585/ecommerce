<?php

namespace App\Http\Controllers\AdminControllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;


class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $lang, $categoryType, $pagination = 10)
    {
        if($request->pagination) {
            $pagination = (int)$request->pagination;
        }

        if($categoryType == 'all'){
            $categories = Category::orderBy('id')->paginate($pagination);
        } else if($categoryType == 'parent'){
            $categories = Category::whereNull('parent_id')->orderBy('id')->paginate($pagination);
        } else if($categoryType == 'sub'){
            $categories = Category::whereNotNull('parent_id')->orderBy('id')->paginate($pagination);
        } 
        
        if(request()->ajax()){
            if($request->search) {
                $searchQuery = trim($request->query('search'));
                
                $requestData = ['name_tm', 'name_en', 'name_ru', 'svg'];
    
                $categories = Category::where(function($q) use($requestData, $searchQuery) {
                                        foreach ($requestData as $field)
                                        $q->orWhere($field, 'like', "%{$searchQuery}%");
                                })->paginate($pagination);
            }
            
            return view('admin-panel.category.category-table', compact('categories', 'categoryType'))->render();
        }

        return view('admin-panel.category.category', compact('categories', 'categoryType'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($lang, $categoryType, Category $category)
    {
        $parentCategories = Category::whereNull('parent_id')->orderBy('id')->get();

        return view('admin-panel.category.category-form', compact('category', 'categoryType', 'parentCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($lang, $categoryType, Category $category)
    {
        return view('admin-panel.category.category-show', compact('category', 'categoryType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($lang, $categoryType, Category $category)
    {
        $parentCategories = Category::whereNull('parent_id')->orderBy('id')->get();

        return view('admin-panel.category.category-form', compact('category', 'categoryType', 'parentCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
