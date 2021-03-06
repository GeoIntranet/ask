<?php

namespace App\Http\Controllers;

use App\Informations;
use App\Posts;
use App\Responses;
use Illuminate\Http\Request;

class AskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ask')
            ->with('responses',Posts::orderBy('created_at','DESC')->limit(0)->take(50)->get());
    }

    public function ask()
    {
        $array = preg_split('/\s+/', request('search'));

        $information = Posts::whereNotNull('title');
        $information = $information->where('title','LIKE','%'.request('search').'%');
        $information = $information->orWhere('content','LIKE','%'.request('search').'%');
         $information = $information->orderBy('created_at','DESC') ->limit(0)->take(50)->get();

         $information_['count'] = $information->count();
         $information_['data'] = $information;

         return $information_;
    }

    public function it()
    {
        return Posts::orderBy('created_at','DESC')->limit(0)->take(50)->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
    }
}
