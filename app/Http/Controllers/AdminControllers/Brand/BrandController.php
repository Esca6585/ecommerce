<?php

namespace App\Http\Controllers\AdminControllers\Brand;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Requests\BrandRequest;
use Image;
use Str;

class BrandController extends Controller
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
    public function index(Request $request, $lang, $pagination = 10)
    {
        if($request->pagination) {
            $pagination = (int)$request->pagination;
        }

        $brands = Brand::orderByDesc('id')->paginate($pagination);
        
        if(request()->ajax()){
            if($request->search) {
                $searchQuery = trim($request->query('search'));
                
                $requestData = ['name'];
    
                $brands = Brand::where(function($q) use($requestData, $searchQuery) {
                                        foreach ($requestData as $field)
                                        $q->orWhere($field, 'like', "%{$searchQuery}%");
                                })->paginate($pagination);
            }
            
            return view('admin-panel.brand.brand-table', compact('brands', 'pagination'))->render();
        }

        return view('admin-panel.brand.brand', compact('brands', 'pagination'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($lang, Brand $brand)
    {
        $parentCategories = Category::all();

        return view('admin-panel.brand.brand-form', compact('brand', 'parentCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandRequest $request)
    {
        if($request->file('image')){
            $image = $request->file('image');
            
            $date = date("d-m-Y H-i-s");
            
            $fileRandName = Str::random(10);
            $fileExt = $image->getClientOriginalExtension();

            $fileName = $fileRandName . '.' . $fileExt;
            
            $path = 'assets/brand/' . Str::slug($request->name . '-' . $date ) . '/';

            $image->move($path, $fileName);
            
            $originalImage = $path . $fileName;
        }
        
        $brand = new Brand;
        
        $brand->name = ucfirst($request->name);
        $brand->image = $originalImage ?? null;
        $brand->category_id = $request->category_id;
        
        $brand->save();
        
        return redirect()->route('brand.index', [ app()->getlocale() ])->with('success-create', 'The resource was created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show($lang, Brand $brand)
    {
        return view('admin-panel.brand.brand-show', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit($lang, Brand $brand)
    {
        $parentCategories = Category::all();

        return view('admin-panel.brand.brand-form', compact('brand', 'parentCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update($lang, BrandRequest $request, Brand $brand)
    {
        if($request->file('image')){
            
            $this->deleteFolder($brand);

            $image = $request->file('image');
            
            $date = date("d-m-Y H-i-s");
            
            $fileRandName = Str::random(10);
            $fileExt = $image->getClientOriginalExtension();

            $fileName = $fileRandName . '.' . $fileExt;
            
            $path = 'assets/brand/' . Str::slug($request->name_tm . '-' . $date . '-updated' ) . '/';

            $image->move($path, $fileName);
            
            $originalImage = $path . $fileName;

            $brand->image = $originalImage;
        }

        $brand->name = ucfirst($request->name);
        $brand->category_id = $request->category_id;
        
        $brand->update();
        
        return redirect()->route('brand.index', [ app()->getlocale() ])->with('success-update', 'The resource was updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy($lang, Brand $brand)
    {
        $this->deleteFolder($brand);
    
        $brand->delete();
    
        return redirect()->route('brand.index', [ app()->getlocale() ])->with('success-delete', 'The resource was deleted!');
    }

    public function deleteFolder($brand)
    {
        if($brand->image){
            $folder = explode('/', $brand->image);

            if($folder[2] != 'brand-seeder'){
                \File::deleteDirectory($folder[0] . '/' . $folder[1] . '/' . $folder[2]);
            }
        }
    }
}
