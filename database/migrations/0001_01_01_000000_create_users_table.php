<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
            $table->string('name')->comment('Имя');
            $table->string('surname')->nullable()->comment('Отчество');
            $table->string('lastname')->nullable()->comment('Фамилия');
            $table->enum('gender', ['male', 'female'])->nullable()->comment('Пол');
            $table->date('birthdate')->nullable()->comment('Дата рождения');
            $table->string('avatar')->nullable()->comment('URL аватарки пользователя');
            $table->string('email')->unique()->comment('Email');
            $table->timestamp('email_verified_at')->nullable()->comment('Подтвержденный email');
            $table->string('password')->comment('Пароль');
            $table->bigInteger('telegram_id')->nullable()->unique()->comment('Telegram ID');
            $table->string('push_token')->nullable()->comment('Push token');
            $table->rememberToken();
            $table->timestamps();
        });

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
