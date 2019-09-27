<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sex;
use App\User;
use App\Religion;
use App\Marital;
use App\LG;
use App\State;
use DB;
use Image;
use Session;

class PersonalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sexes = DB::table('sex')
            ->get();
        $religions = DB::table('religions')
            ->get();
        $maritals = DB::table('marital_status')
            ->get();
        $states = DB::table('states')
            ->get();
        $faculties = DB::table('faculties')
            ->get();

        return view('personal.index', [
            'sex' => $sexes,
            'religions' => $religions,
            'maritals' => $maritals,
            'states' => $states,
            'faculties' => $faculties
        ]);
    }

    public function getLG(Request $request)
    {
        $lg_id = $request->state_id;
        $lgs = DB::table('local_governments')
            ->where('state_id', $lg_id)
            ->get();
        return $lgs;
    }

    public function getDept(Request $request)
    {
        $department_id = $request->faculty_id;

        $departments = DB::table('departments')
            ->where('faculty_id', $department_id)
            ->get();

        return $departments;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        // validate data

        $this->validate($request, array(
            'image' => 'sometimes|image|max:1024',
            'dob' => 'date',
            'sex' => 'not_in:Select sex',
            'address' => 'max:255',
            'mobile' => 'regex:/^([0-9\s\-\+\(\)]*)$/|size:11',
            'state' => 'not_in:Select State',
            'lg' => 'not_in:Select local government',
            'status' => 'not_in:Select marital status',
            'religion' => 'not_in:Select religion',
            'faculty' => 'not_in:Select faculty',
            'department' => 'not_in:Select department'
        ));

        // store in database
        $user = new User;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/'.$filename);
            Image::make($image)->resize(800, 400)->save($location);

            $user->image = $filename;
        }

//        exit(var_dump($user->image));

        $user->dob = $request->dob;
        $user->sex = $request->sex;
        $user->address = $request->address;
        $user->mobile = $request->mobile;
        $user->state = $request->state;
        $user->lg = $request->lg;
        $user->status = $request->status;
        $user->religion = $request->religion;
        $user->faculty = $request->faculty;
        $user->department = $request->department;

        $user->save();

        Session::flash('success', 'Profile Updated');
        return redirect()->route('personal.show', $user->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('personal.show')->with('user', $user);
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