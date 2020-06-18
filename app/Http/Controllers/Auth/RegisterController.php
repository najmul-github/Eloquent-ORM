<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Student;
use App\Course;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'id' => ['required','integer'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:students'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],
            'course_id' => ['required', 'integer'],
            'course_name' => ['required', 'string'],
            'section' => ['required', 'integer'],
            'class_start' => ['required', 'string'],
            'class_end' => ['required', 'string']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Student
     */
    protected function create(array $data)
    {
        // $student = Student::create([
        //     'id' => $data['id'],
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        // ]);

        // $course = Course::create([
        //     'student_id' => $data['id'],
        //     'course_id' => $data['course_id'],
        //     'course_name' => $data['course_name'],
        //     'section' => $data['section'],
        //     'class_start' => $data['class_start'],
        //     'class_end' => $data['class_end'],
        // ]);

    }

    public function store(Request $request)
    {
        $user = Student::create([
            'name' => $request->input('name'),
            'id' => $request->input('id'),
            'email' => $request->input('email'),
            'password' => Hash::make($request['password']),
        ]);

        $id=$request->id;
        if (count($request->course_name)>0) {
            foreach($request->course_name as $item => $value)
                $data[$value]=array(
                    'student_id'=>$id,
                    'course_id'=>$request->course_id[$item],
                    'course_name'=>$request->course_name[$item],
                    'section'=>$request->section[$item],
                    'class_start'=>$request->class_start[$item],
                    'class_end'=>$request->class_end[$item],
                );
                Course::insert($data);
        }
        return redirect()->to('/login'); 
        
    }
}
