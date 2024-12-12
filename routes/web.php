<?php

use App\Models\Course;
use App\View\Components\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/course', function () {
    $courses = Course::all();
    // return $courses;


    return view('course', compact('courses'));
});
Route::post('/save-course', function (Request $request) {

    $course = new Course();
    $course->name = $request->name;
    $course->price = $request->price;
    $course->duration = $request->duration;

    if ($request->hasFile('image')) {
        # code...
        $file = $request->file('image');
        $fileName = time().'.'. $file->getClientOriginalExtension();
        $file->move('images', $fileName);
        $course->image = 'images/'.$fileName;
    }

    $course-> save();

    return 'Course saved';
});

Route::delete('/course-delete/{id}', function ($id){
    $course = Course::find($id);
    $course->delete();
    return redirect('/course');
});


