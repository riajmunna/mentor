<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Symfony\Component\Translation\t;

class TrainerController extends Controller
{
    public $trainer, $image, $imageName, $directory, $imgUrl;

    public function addTrainer()
    {
        return view('admin.trainer.add-trainer',[
            'course' => Course::all(),
        ]);
    }

    public function saveTrainer(Request $request)
    {
        $request->validate([
            'trainer_name' => 'required',
            'trainer_email' => 'required',
            'trainer_image' => 'required',
        ]);
        $this->trainer = new Trainer();
        $this->trainer->trainer_name = $request->trainer_name;
        if(Trainer::where('trainer_email',$request->trainer_email)->exists()){
            return back()->with('warning', 'Email Already Taken..');
        }else{
            $this->trainer->trainer_email = $request->trainer_email;
        }
        $this->trainer->trainer_slug = preg_replace('/\s+/u','-',trim(strtolower($request->trainer_name).'-'.$request->trainer_email));
        $this->trainer->trainer_description = $request->trainer_description;
        $this->trainer->trainer_image = $this->saveImage($request);
        $this->trainer->save();
        return back()->with('status', 'Trainer added successfully');
    }

    private function saveImage($request)
    {
        $this->image = $request->file('trainer_image');
        $this->imageName = rand() . '.' . $this->image->getClientOriginalExtension();
        $this->directory = 'asset/admin/image/';
        $this->imgUrl = $this->directory . $this->imageName;
        $this->image->move($this->directory, $this->imageName);
        return $this->imgUrl;
    }

    public function manageTrainer()
    {
//        $trainers = DB::table('trainers')
//            ->join('courses','trainers.id','=','courses.trainer_id')
//            ->select('trainers.*','courses.course_name')
//            ->get();

        return view('admin.trainer.manage-trainer',[
            'trainers' => Trainer::all(),
//            'trainers' => $trainers,
        ]);
    }

    public function deleteTrainer(Request $request)
    {
        $this->trainer = Trainer::find($request->trainer_id);
        if($this->trainer->trainer_image){
            if(file_exists($this->trainer->trainer_image)){
                unlink($this->trainer->trainer_image);
            }
        }
        $this->trainer->delete();
        return redirect(route('manage.trainer'));
    }
}
