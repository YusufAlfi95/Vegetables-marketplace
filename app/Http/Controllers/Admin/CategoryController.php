<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use App\Http\Requests\Admin\CategoryRequest;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //cek jika request ajax maka actionnya berbeda  
        if(request()->ajax()) {
            //panggil model category
            $query = Category::query();

            return Datatables::of($query)
                   ->addColumn('action', function($item) {
                    return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle mr-1 mb-1"
                                        type="button"
                                        data-toggle="dropdown">
                                        Aksi
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="' .  route('category.edit', $item->id) .'">Sunting</a>
                                    <form action="'. route('category.destroy', $item->id) .'" method="POST">
                                        '. method_field('delete'). csrf_field(). '
                                        <button type="submit" class="dropdown-item text-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    ';
                   })
                   //edit column foto di db & lengkapi url foto
                   ->editColumn('photo', function($item) {
                       return $item->photo ? '<img src="'. Storage::url($item->photo).'" style="max-height: 40px;" />' : '';
                   })
                   ->rawColumns(['action', 'photo'])
                   ->make();
        }
        return view('pages.admin.category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('pages.admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        //input request nama dan foto dan slug
        $data = $request->all();

        //slug
        $data['slug'] = Str::slug($request->name);
        $data['photo'] = $request->file('photo')->store('assets/category','public');

        //create

        Category::create($data);

        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $item = Category::findOrFail($id);

        return view('pages.admin.category.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        //
         //input request nama dan foto dan slug
        $data = $request->all();

        //slug
        $data['slug'] = Str::slug($request->name);
        $data['photo'] = $request->file('photo')->store('assets/category','public');

        //temukan id
        $item = Category::findOrFail($id);
        //lalu update
        $item->update($data);

        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $item = Category::findOrFail($id);
        $item->delete();

        return redirect()->route('category.index');
    }
}
