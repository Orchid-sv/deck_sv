<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->actingAs(User::find(1))->get('/user/1');

        $response->assertStatus(200)
        ->assertViewIs('mypage.user_page')
        ->assertSee('編集する')
        ->assertSee('コメントする')
        ->assertSee('新規デッキ投稿')
        ->assertDontSee('するとコメントすることが出来ます');
    }
}
