<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Crousal;
use Illuminate\Http\Request;

class CrousalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $crousal=Crousal::paginate(10);
      
       return view("admin.crousal.index",['items'=>$crousal]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.crousal.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'description' => ['required'],
            'image' => ['required'],
            'is_active' => ['required']
          ]);
          $imagePath = $request->file('image')
            ->store('crousals', 'public');
      
          Crousal::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'is_active' => $request->is_active
          ]);
         try{
           return redirect()->route('admin.crousals.index')->with('success','banner is successfully added');
         }
        catch(\Exception $e){
            return redirect()->route('admin.crousals.index')->with('errors',$e->getMessage());

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Crousal $crousal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Crousal $crousal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Crousal $crousal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Crousal $crousal)
    {
        //
    }
}
