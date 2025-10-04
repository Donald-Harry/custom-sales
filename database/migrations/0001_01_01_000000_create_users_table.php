<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('username');
            $table->string('securityquestion');
            $table->string('securityanswer');
            $table->string('fullname');
            $table->string('email')->unique();
            $table->timestamp('date')->nullable();
            $table->string('citizen');
            $table->string('country');
            $table->string('socialsecuritynumber');
            $table->string('mailbox');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zipcode');
            $table->string('daytimephone');
            $table->string('eveningtimephone');
            $table->string('auction');
            $table->string('bid');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('users')->insert([
            'type' => 'admin',
            'username' => 'admin',
            'securityquestion' => '',
            'securityanswer' => '',
            'fullname' => 'System Administrator',
            'email' => 'admin@gsaauction.com',
            'date' => null,
            'citizen' => '',
            'country' => '',
            'socialsecuritynumber' => '',
            'mailbox' => '',
            'address' => '',
            'city' => '',
            'state' => '',
            'zipcode' => '',
            'daytimephone' => '',
            'eveningtimephone' => '',
            'auction' => '',
            'bid' => '',
            'password' => bcrypt('admingsa123'),
            'remember_token' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
