<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->text('password');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            'id' => 1,
           //'role_id' => 1,
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'created_at' => null,
            'updated_at' => null,
            'email_verified_at' => null,
            'password' => Hash::make("admin"),
            'remember_token' => null
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
