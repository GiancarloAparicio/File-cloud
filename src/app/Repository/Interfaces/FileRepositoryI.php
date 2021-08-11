<?php

namespace App\Repository\Interfaces;

use Illuminate\Http\UploadedFile;
use App\Repository\Interfaces\EloquentRepositoryI;

interface FileRepositoryI extends EloquentRepositoryI
{
    /**
     * Save file in disk local with custom id
     * @param UploadedFile $file
     * @return string
     */
    public function save(UploadedFile $file): string;
}
