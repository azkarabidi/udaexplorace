<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

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

            // dd($request->all());
            
        //validate request

        // save new user for team leader 
        // save user for team assistant
        // member 3 and 4
        //cretea group
        // assign user with group
        //only admin can change
        if(auth()->user()->is_admin == true){
        $validated = $request->validate([   
            'team_leader_name'=>'required',          
            'team_leader_email'=>'required|string|email|max:255|unique:users,email',          
            'team_leader_password'=>'required',
            'team_assistant_name'=>'required',
            'team_assistant_email'=>'required |string | email | max:255 | unique:users,email',
            'team_assistant_password'=>'required',
            'team_member_3'=>'required',      
            'team_member_4'=>'required',      
            'category'=>'required',                
        ]);
        //create user 
        // dd($request->all());
            $teamleader = new User;
            $teamleader->name = $request->team_leader_name ;
            $teamleader->email = $request->team_leader_email;
            $teamleader->password = Hash::make($request->team_leader_password);
            $teamleader->save();
            //create team assistant
            $teamassitant = new User;
            // $teamassitant->username = new User;
            $teamassitant->name = $request->team_assistant_name;
            $teamassitant->email = $request->team_assistant_email;
            $teamassitant->password = Hash::make($request->team_assistant_password) ;
            $teamassitant->save();


        //create group
        $group=new Group;
        // //save team members base on full value of team 
        $group->team_members='  <p>
        <b>Team Leader:</b><br>
        '.$request->team_leader_name.'<br><br>

         <b>Team Assistant:</b><br>
         '.$request->team_assistant_name.'<br><br>

        <b>Team Member 3:</b><br>
            '.$request->team_member_3.'<br><br>

        <b>Team Member 4:</b><br>
        '.$request->team_member_4.'<br><br>
        </p> ';
        $group->category=$request->category;
        $group->save();
        $group->name=$request->category.''.str_pad($group->id, 3, "0", STR_PAD_LEFT);
        $group->save();

        // addteam leader and assistand to group
        $teamleader->group_id=$group->id;
        $teamassitant->group_id=$group->id;
        //set username;
        $teamleader->username = $request->team_leader_name.'_'.$group->name;
        $teamassitant->username = $request->team_assistant_name.'_'.$group->name;
        $teamleader->save();
        $teamassitant->save();
        
        return redirect()->route('group.index')->with('message','Success Create Group and User Team');
    }else{
        return abort(403);
    }
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
            
            
            //http client
            $response = Http::withToken('Cdwc9bjhyqhSNHM9iEkngFGfbLUFyiGiHiiGF4rXxnQT')->
            get('https://api.typeform.com/forms/JxX0VQCC/responses?included_response_ids='.$request->respond);
            $nice =$response->object(); 
            $group=Group::find($user->group->id);
            $group->form_submit=$request->respond;
            $group->outcome=json_encode($nice->items[0]->calculated);
            $group->save();
            return response()->json(['message','Done']);
        }else{
            //response already have data and thanks
            return response()->json(['message','Sorry We Already Have Your Group Response']);
        }
        

    }
}
