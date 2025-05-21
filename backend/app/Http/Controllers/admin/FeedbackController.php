<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Feedback;
use Exception;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;



class FeedbackController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth:admin');
    }

    public function index(Request $request)
    {
        $allfeedback = Feedback::orderBy('id', 'desc')->paginate(20);
        return view('admin.feedback.index', compact('allfeedback'));
    }


    public function create()
    {
        return view('admin.feedback.create');
    }

    public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name' => ['required', 'string', 'max:255'],
        'designation' => ['required', 'string', 'max:255'],
        'rating' => ['nullable', 'integer', 'between:1,5'], // Rating field is optional and should be between 1 and 5
        'feedback' => ['required', 'string'], // Feedback text is required
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Save the feedback data
    $feedback = new Feedback;
    $feedback->name = $request->name;
    $feedback->designation = $request->designation; // Email is optional
    $feedback->email = $request->email; // Email is optional
    $feedback->rating = $request->rating; // Rating is optional
    $feedback->feedback = $request->feedback;
    $feedback->status = $request->status ?? 0; // Default to 0 if not provided
    $feedback->created_at = now();
    $feedback->updated_at = now();
    $feedback->save();

    return redirect('admin/feedback')->with('success', 'Feedback uploaded successfully!');
}


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $feedback = Feedback::find($id);
        return view('admin.feedback.edit', compact('feedback'));
    }

    public function update(Request $request, $id)
{
    // Validate the incoming request
    $validator = Validator::make($request->all(), [
        'name' => ['required', 'string', 'max:255'],
        'designation' => ['required', 'string', 'max:255'],
        'rating' => ['nullable', 'integer', 'between:1,5'], // Rating field is optional
        'feedback' => ['required', 'string'], // Feedback text is required
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Find the existing feedback record
    $feedback = Feedback::find($id);
    if (!$feedback) {
        return redirect()->back()->with('error', 'Feedback not found');
    }

    // Prepare updated data
    $menuUpdate = [
        'name' => $request->name,
        'designation' => $request->designation, // Email is optional
        'email' => $request->email, // Email is optional
        'rating' => $request->rating, // Rating is optional
        'feedback' => $request->feedback,
        'status' => $request->status ?? 0, // Default to 0 if not provided
        'updated_at' => now(),
    ];

    // Update the feedback record
    try {
        $feedback->update($menuUpdate);
        return redirect('admin/feedback')->with('success', 'Feedback updated successfully');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Failed to update feedback: ' . $e->getMessage());
    }
}


    public function destroy($id)
    {
        $menuItem = Feedback::find($id);
        $menuItem->delete();
        return redirect('admin/feedback');
    }

    public function imageResize($file, $path, $filename, $width, $height)
    {
        $img = Image::make($file);
        $img->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        });

        $img->resizeCanvas($width, $height, 'center', false, array(255, 255, 255, 0));
        $img->save($path);
    }
}
