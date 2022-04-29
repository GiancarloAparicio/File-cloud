<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FileHandlingTest extends TestCase
{
    use RefreshDatabase;
    /**
     * 1. GIVEN: a logged in user
     * 2. WHEN: uploading a file
     * 3. THEN: response 201 code
     * @test
     */

    function save_uploaded_file()
    {
        $this->withoutExceptionHandling();

        Storage::fake("files");

        $user = User::factory()->create();
        $file = UploadedFile::fake()->image("avatar.png");

        $this->actingAs($user)
            ->post("/photo", [
                "photo" => $file,
            ])
            ->assertStatus(201);

        Storage::disk("files")->assertExists($file->hashName());
    }
}
