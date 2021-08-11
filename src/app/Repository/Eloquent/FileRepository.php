<?php

namespace App\Repository\Eloquent;

use App\Models\File;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Repository\Interfaces\FileRepositoryI;

class FileRepository extends BaseRepository implements FileRepositoryI
{
    private $path_files = "private/";

    public function __construct(File $model)
    {
        parent::__construct($model);
    }

    /**
     * Save file in local disk and return custom ID (DATE--ID-FILENAME)
     * @param Illuminate/Http/UploadedFile $file
     * @return string
     */

    public function save(UploadedFile $file): string
    {
        $filename = $file->getClientOriginalName();
        $new_id = now() . "--" . Auth::user()->id . "--" . $filename;

        return Storage::putFileAs($this->path_files, $file, $new_id)
            ? $new_id
            : false;
    }
}
