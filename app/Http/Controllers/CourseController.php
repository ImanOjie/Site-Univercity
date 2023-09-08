<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\xxx;
use App\Models\Usercourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;

class CourseController extends Controller
{

    public function list_course(){
        $page_title='صفحه انتخاب واحد';
        $lists=xxx::all();
        $all_selected= Usercourse::with('xxx')->where('user_id' , auth()->user()->id)->get();
        return view('pages.List_course',compact('page_title','lists','all_selected'));
    }
    public function get_course($id){
        $user_id = auth()->user()->id;
        $course_id = $id;
        $beforSelected=Usercourse::where('course_id',$course_id)
            ->where('user_id',$user_id)->get();

        if (!$beforSelected->isNotEmpty()) {

            if ($user_id > 0 && $course_id > 0) {

                Usercourse::create(['user_id' => $user_id, 'course_id' => $course_id]);

                return redirect()->route('List_course')->with(['success' => 'selected successfully']);

            } else {
                return response()->json(['error' => 'some data is null']);
            }
        } else{
            return response()->json(['error' => 'is selected before']);
        }
    }

    public function delete_getting_course($id){
        UserCourse::destroy($id);
        return redirect()->route('List_course');
    }
}
