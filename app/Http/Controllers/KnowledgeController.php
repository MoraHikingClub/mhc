<?php

namespace App\Http\Controllers;

use App\Knowledge;
use Illuminate\Http\Request;
use Session;

class KnowledgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $knowledges = Knowledge::all()->sortByDesc('id');
        return view('knowledge')->with('knowledges',$knowledges);
    }

    public function list()
    {
        $knowledges = Knowledge::orderBy('id','desc')->paginate(10);
        return view('knowledge.list')->with('knowledges',$knowledges);
    }

    public function singleCard($id){
        $knowledge = Knowledge::find($id);
        $knowledge->visit_count += 1;
        $knowledge->save();

        return view('knowledge.singleCard')->with('knowledge',$knowledge);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('knowledge.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'     => 'required|max:255',
            'content'   => 'required',
            'type'      => 'required|max:255'
        ]);

        $knowledge = new Knowledge;
        $knowledge->title = $request->title;
        $knowledge->type = $request->type;
        $knowledge->featured_img = $request->featured_img;
        $knowledge->content = str_replace('&nbsp;',' ',$request->content);

        $knowledge->save();

        Session::flash('success', 'Knowledge card saved successfully!');
        return redirect()->route('knowledge.show',$knowledge->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $knowledge = Knowledge::find($id);
        return view('knowledge.show')->with('knowledge',$knowledge);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $knowledge = Knowledge::find($id);
        return view('knowledge.edit')->with('knowledge',$knowledge);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $knowledge = Knowledge::find($id);
        $knowledge->title = $request->title;
        $knowledge->type = $request->type;
        $knowledge->featured_img = $request->featured_img;
        $knowledge->content = str_replace('&nbsp;',' ',$request->content);

        $knowledge->save();

        Session::flash('success', 'Knowledge card updated successfully!');
        return redirect()->route('knowledge.show',$knowledge->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $knowledge = Knowledge::find($id);
        $knowledge->delete();

        Session::flash('success', 'Knowledge card deleted successfully');
        return redirect()->route('knowledge.list');
    }
}
