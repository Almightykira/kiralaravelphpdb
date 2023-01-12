<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class MahasiswaTest extends TestCase
{
    public function test_list_mahasiswa()
    {
        $response = $this->get('/api/db/mahasiswa/list');
        $response->assertOk();
        Log::info($response->content());
    }

    public function test_find_byid_mahasiswa()
    {
        $response = $this->get('/api/db/mahasiswa/'. '10511148');
        $response->assertOk();
        Log::info($response->content());
    }
}