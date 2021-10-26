<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->is_admin == true){
            
            $groups=Group::paginate(10);
            return view('group.index',compact('groups'));
        }else{
            return abort(403);
        }

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
        $validated = $request->validate([   
                'team_members'=>'required',                
                'category'=>'required',                
        ]);
        $group=new Group;
        $group->team_members=$request->team_members;
        $group->category=$request->category;
        $group->save();
        $group->name=$request->category.''.str_pad($group->id, 4, "0", STR_PAD_LEFT);
        $group->save();
        
        return redirect()->route('group.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        //
    }

    public function assign_group_with_user(Request $request){
        $validated = $request->validate([   
            'group_id'=>'required',                
            'user_id'=>'required',                
    ]);
        $user = User::find($request->user_id);
        $user->group_id=$request->group_id;
        $user->save();
        
     return redirect()->route('group.index')->with('assiign user with the group');
    }

    public function assignpage(Group $group)
    {
        $users=User::all();
        return view('group.asign',compact('users','group'));
    }
    public function UpdateGroupForm(Request $request)
    {
        $validated = $request->validate([   
            'id'=>'required',                
            'respond'=>'required',                
    ]);
        $user=User::findorfail($request->id);
        $user->form=$request->respond;
        $user->save();
        //check group
        if($user->group->form_submit == NULL){
            //update and return save
            $group=Group::find($user->group->id);
            $group->form_submit=$request->respond;
            $group->save();
            return response()->json(['message','Done']);
        }else{
            //response already have data and thanks
            return response()->json(['message','Sorry We Already Have Your Group Response']);
        }
        

    }
}
