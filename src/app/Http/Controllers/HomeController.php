<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ValidateFileRequest;
use App\Repository\Interfaces\FileRepositoryI;
use App\Repository\Interfaces\UserRepositoryI;

class HomeController extends Controller
{
    private $fileRepository;

    /**
     * @param UserRepositoryI $userRepository
     * @param FileRepositoryI $fileRepository
     */

    public function __construct(
        FileRepositoryI $fileRepository,
        UserRepositoryI $userRepository
    ) {
        $this->userRepository = $userRepository;
        $this->fileRepository = $fileRepository;
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = $this->userRepository->getAuth()->files;
        return view("dashboard", compact("files"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidateFileRequest $request)
    {
        $file = $request->file("file");
        $new_name_file = $this->fileRepository->save($file);
        $current_user = $this->userRepository->getAuth();

        $current_user->files()->save(
            File::create([
                "private" => false,
                "original_name" => $file->getClientOriginalName(),
                "path" => $new_name_file,
                "user_id" => $current_user->id,
                "route_id" => $path_id ?? 1,
            ])
        );

        return Redirect::back()->with("status", "Success");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
