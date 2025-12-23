<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Filmtest extends TestCase
{
    /**
     * A basic feature test example.
     */

    public function test_menambahkan_film_ke_database() {
        $data = [
            'judul' => 'Interstellar',
            'sutradara' => 'Christopher Nolan',
            'tahun_rilis' => 2014,
            'genre' => 'Sci-Fi',
            'durasi' => 169
        ];
        
        $response = $this->post(route('films.store'), $data);
        $this->assertDatabaseHas('films', $data);
    }


    public function test_validasi_gagal_jika_data_tidak_lengkap() {
        $response = $this->post(route('films.store'), [
            'judul' => '',
            'sutradara' => '',
            'tahun_rilis' => '',
            'genre' => '',
            'durasi' => ''
        ]);
        
        $response->assertSessionHasErrors([
            'judul', 'sutradara', 'tahun_rilis', 'genre', 'durasi'
        ]);
    }
}
