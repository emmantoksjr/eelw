<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Student;
use Validator;
use App\Schedule;
use App\Facilitator;
use App\Guest;
use App\Feedback;
use App\Date;

class AuthController extends BaseController {

    public function Login(Request $request) {
        $phone = $request->phone;
        $password = md5($request->password);
        $check = Student::where('phone', '=', $phone)
                        ->where('password', '=', $password)
                        ->get()->first();
        if ($check == NULL) {
            return $this->generateJSON('error', 401, 'Wrong User Details', null);
        } else {
            $response['details'] = Student::where('phone', '=', $phone)
                            ->where('password', '=', $password)
                            ->get()->first();
            return $this->generateJSON('success', 200, null, $response);
        }
    }

    public function register(Request $request) {

        $validator = Validator::make($request->all(), [
                    'phone' => 'required',
        ]);

        $check = Student::where('phone', '=', $request->phone)->get(['id'])->first();
        if ($check != null) {
            return $this->generateJSON('error', 401, 'Number registered already', null);
        } else {
            if ($validator->fails()) {
                return $this->generateJSON('error', 301, 'Number required', null);
            } else {
                $input = $request->all();
                $input['password'] = md5($input['password']);
                Student::create($input);
                $response['message'] = 'Student registered Successfully';
                return $this->generateJSON('success', 200, null, $response);
            }
        }
    }

    public function check(Request $request) {
        $phone = $request->phone;
        if ($phone != null && $phone != '') {
            try {
                $student = \DB::table('students')->where('phone', '=', $phone)->get()->first();
                if ($student != '' || $student != null) {
                    $result['success'] = 'Valid User';
                    $result['data'] = $student->phone;
                    return $this->generateJSON('success', 200, null, $result);
                } else {
                    return $this->generateJSON('error', 400, 'Invalid User', null);
                }
            } catch (\Illuminate\Database\QueryException $e) {
                return $this->generateJSON('error', 500, $e->errorInfo[2], null);
            }
        } else {
            return $this->generateJSON('error', 304, 'Phone number required', null);
        }
    }

    public function save(Request $request) {
        $phone = $request->phone;
        $student = Student::where('phone', '=', $phone)->get()->first();
        $student->password = $request->password;
        try {
            $student->save();
            return $this->generateJSON('success', 200, null, 'Password Reset Successful');
        } catch (\Illuminate\Database\QueryException $e) {
            return $this->generateJSON('error', 500, $e->errorInfo[2], null);
        }
    }

    public function schedules() {
        $schedules = Schedule::all();
        return $this->generateJSON('success', 200, null, $schedules);
    }

    public function facilitators() {
        $facilitators = Facilitator::all();
        return $this->generateJSON('success', 200, null, $facilitators);
    }

    public function guests() {
        $guests = Guest::all();
        return $this->generateJSON('success', 200, null, $guests);
    }

    public function feedback(Request $request) {
        $feedback = new Feedback(array(
            'phone' => $request->get('phone'),
            'date' => $request->get('date'),
            'speaker' => $request->get('speaker'),
            'topic' => $request->get('topic'),
            'feed1' => $request->get('feed1'),
            'feed2' => $request->get('feed2'),
            'feed3' => $request->get('feed3'),
        ));
        $feedback->save();
        $response['message'] = 'Feedback created Successfully';
        return $this->generateJSON('success', 200, null, $response);
    }

    public function view_feedback() {
        $id = 1;
        $feedbacks = Feedback::all()->sortByDesc('date');
        $names = \DB::table('feedback')
                ->join('students', 'students.phone', '=', 'feedback.phone')
                ->select('name', 'students.name', 'students.phone')
                ->get();
        return view('feedbacks.view', compact('feedbacks', 'id', 'names'));
    }
    
    public function dates(){
         $dates = Date::all();
        return $this->generateJSON('success', 200, null, $dates);
    }
    
    public function events($date){
       $events = Schedule::all()
              ->where('date', '=', $date);
      return $this->generateJSON('success', 200, null, $events);
    }
}
