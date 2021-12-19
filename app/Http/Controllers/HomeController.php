<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

use app\Models\User;

use App\Models\add_doctor_visit;

use App\Models\AddProfessional;

use App\Models\edu;

use File;



class HomeController extends Controller
{
    public function redirect(){
        if(Auth::id())
    	{
    		if(Auth::user()->usertype=='0')
    		{

    			return view('user.home');
    		}
    		else
    		{
    			return view('admin.home');
    		}
    	}
    	else
    	{
    		return redirect()->back();
    	}
    }
	public function add_madical(){

		return view('user.addmadical');
	}
	public function view_mhistory(){

		return view('user.allmadicalhistory');
	}
	public function add_docapp(Request $request)
	{
		$viewvisitdoctor = new add_doctor_visit;

		$viewvisitdoctor->v_date=$request->v_date;

		$viewvisitdoctor->user_id = Auth::user()->id;

		$viewvisitdoctor->h_name=$request->h_name;

		$viewvisitdoctor->d_name=$request->d_name;

		$viewvisitdoctor->d_degination=$request->d_degination;

		$viewvisitdoctor->d_degination=$request->d_degination;


		if ($request->hasfile('v_card'))
		{
			$file =$request->file('v_card');

			$extenansion = $file ->getClientoriginalExtension();

			$filename = time().'.'.$extenansion;

			$file->move('doctorimage/card',$filename);

			$viewvisitdoctor->v_card = $filename;
		}

		$viewvisitdoctor->v_purpose=$request->v_purpose;

		$viewvisitdoctor->description=$request->description;
		
		if ($request->hasfile('image'))
		{
			$file =$request->file('image');

			$extenansion = $file ->getClientoriginalExtension();

			$filename = time().'.'.$extenansion;

			$file->move('doctorimage/pescription',$filename);

			$viewvisitdoctor->image = $filename;
		}


		$viewvisitdoctor->save();

		return redirect()->back()->with('massage','Your data add  sucessfully ');

	}


	public function show(){

		$data= DB::table('add_doctor_visits')
		->where('user_id',Auth::user()->id)
		->get();

		return view('user.allmadicalhistory',['alldata'=>$data]);
		
	}
	public function update_visite_d_list ($id){

		$data=add_doctor_visit::find($id);

        return view('user.update_doctor_visit_data',compact('data'));
	}
	public function updatedoctor(Request $request ,$id){
		
		$viewvisitdoctor =add_doctor_visit::find($id);

		$viewvisitdoctor->v_date=$request->v_date;

		$viewvisitdoctor->h_name=$request->h_name;

		$viewvisitdoctor->user_id = Auth::user()->id;

		$viewvisitdoctor->d_name=$request->d_name;

		$viewvisitdoctor->d_degination=$request->d_degination;

		if ($request->hasfile('v_card'))
		{
			$file =$request->file('v_card');

			$extenansion = $file ->getClientoriginalExtension();

			$filename = time().'.'.$extenansion;

			$file->move('doctorimage/card',$filename);

			$viewvisitdoctor->v_card = $filename;
		}

		$viewvisitdoctor->v_purpose=$request->v_purpose;

		$viewvisitdoctor->description=$request->description;
		
		if ($request->hasfile('image'))
		{
			$file =$request->file('image');

			$extenansion = $file ->getClientoriginalExtension();

			$filename = time().'.'.$extenansion;

			$file->move('doctorimage/pescription',$filename);

			$viewvisitdoctor->image = $filename;
		}
		$viewvisitdoctor->save();

		return redirect()->back()->with('massage','your data add sucessfully ');
		

	}
	public function delate($id)
    {
        $data=add_doctor_visit::find($id);

		$path = 'doctorimage/pescription/' . $data->image;

		$path2 = 'doctorimage/card/' . $data->image;


		$value =  File::delete($path);

		$value =  File::delete($path2);
       
        $data->delete();

        return redirect()->back();
       
    }
// this is profession coding
	public function profesional(){
		return view('user.professional');
	}

	public function addpro(Request $request){

		$AddProfessional = new AddProfessional;

		$AddProfessional->j_date=$request->j_date;

		$AddProfessional->user_id = Auth::user()->id;

		$AddProfessional->C_name=$request->C_name;
		
		$AddProfessional->y_degination=$request->y_degination;

		if ($request->hasfile('v_card'))
		{
			$file =$request->file('v_card');

			$extenansion = $file ->getClientoriginalExtension();

			$filename = time().'.'.$extenansion;

			$file->move('doctorimage/yourcard',$filename);

			$AddProfessional->v_card = $filename;
		}
		if ($request->hasfile('image'))
		{
			$file =$request->file('image');

			$extenansion = $file ->getClientoriginalExtension();

			$filename = time().'.'.$extenansion;

			$file->move('doctorimage/appoinmentlatter',$filename);

			$AddProfessional->image = $filename;
		}


		$AddProfessional->resp=$request->resp;

		$AddProfessional->save();

		return redirect()->back()->with('massage','Your data add  sucessfully ');


	}
	public function allphistory (){

		$data= DB::table('add_professionals')
		->where('user_id',Auth::user()->id)
		->get();

		return view('user.informatinall',['alldata'=>$data]);
	}
	public function update_p_info($id){

		$data=AddProfessional::find($id);

        return view('user.update_pro_visit_data',compact('data'));

	}
	public function delate_pro($id){

		$data = AddProfessional::find($id);

        
		$path = 'doctorimage/appoinmentlatter/' . $data->image;

		$path2 = 'doctorimage/yourcard/' . $data->image;
		
		$value =  File::delete($path);

		$value =  File::delete($path2);
		  
		  $data->delete();

         return redirect()->back();
	}
	public function update_pro_info(Request $request ,$id){

		$AddProfessional = new AddProfessional;

		$viewvisitdoctor =add_doctor_visit::find($id);
		

	}

	public function addEducation(){

		return view('user.addEducation');

	}
	public function add_edu(Request $request)
	{
		
		$edu = new edu;

		$edu->title=$request->title;

		$edu->i_name=$request->i_name;

		$edu->department=$request->department;

		$edu->pass_year=$request->pass_year;

		$edu->role=$request->role;

		$edu->register=$request->register;

		if ($request->hasfile('r_card'))
		{
			$file =$request->file('r_card');

			$extenansion = $file ->getClientoriginalExtension();

			$filename = time().'.'.$extenansion;

			$file->move('doctorimage/r_card',$filename);

			$edu->r_card = $filename;
		}

		if ($request->hasfile('markset'))
		{
			$file =$request->file('markset');

			$extenansion = $file ->getClientoriginalExtension();

			$filename = time().'.'.$extenansion;

			$file->move('doctorimage/markset',$filename);

			$edu->markset = $filename;
		}
		if ($request->hasfile('certificate'))
		{
			$file =$request->file('certificate');

			$extenansion = $file ->getClientoriginalExtension();

			$filename = time().'.'.$extenansion;

			$file->move('doctorimage/certificate',$filename);

			$edu->certificate = $filename;
		}

		$edu->user_id = Auth::user()->id;
		
		
		$edu->save();

		return redirect()->back()->with('massage','Your data add  sucessfully ');
	}

	public function view_edu(){

		$data= DB::table('edus')
		->where('user_id',Auth::user()->id)
		->get();

		return view('user.alleduhistory',['alldata'=>$data]);
	}
	public function eduupdata($id){

		$data=edu::find($id);

		return view('user.updateeduall',['alldata'=>$data]);
	}
	public function update_select_edu(Request $request ,$id)
	{
		$edu =edu::find($id);

		$edu->title=$request->title;

		$edu->i_name=$request->i_name;

		$edu->pass_year=$request->pass_year;

		$edu->role=$request->role;

		$edu->register=$request->register;

		if ($request->hasfile('r_card'))
		{
			$file =$request->file('r_card');

			$extenansion = $file ->getClientoriginalExtension();

			$filename = time().'.'.$extenansion;

			$file->move('doctorimage/r_card',$filename);

			$edu->r_card = $filename;
		}

		if ($request->hasfile('markset'))
		{
			$file =$request->file('markset');

			$extenansion = $file ->getClientoriginalExtension();

			$filename = time().'.'.$extenansion;

			$file->move('doctorimage/markset',$filename);

			$edu->markset = $filename;
		}
		if ($request->hasfile('certificate'))
		{
			$file =$request->file('certificate');

			$extenansion = $file ->getClientoriginalExtension();

			$filename = time().'.'.$extenansion;

			$file->move('doctorimage/certificate',$filename);

			$edu->certificate = $filename;
		}

		$edu->user_id = Auth::user()->id;
		
		 return view('$edu');
		// $edu->save();

		// return redirect()->back()->with('massage','Your data add  sucessfully ');
	}
	public function delate_edu($id)
	{

		$edu = edu::find($id);

        
		$path = 'doctorimage/r_card/' .$edu->r_card;

		$path1 = 'doctorimage/markset/' . $edu->markset;

		$path2 = 'doctorimage/certificate/' . $edu->certificate;
		
		$value =  File::delete($path);

		$value =  File::delete($path1);

		$value =  File::delete($path2);

		  
		$edu->delete();

		 return redirect()->back();
	}
	

	

}