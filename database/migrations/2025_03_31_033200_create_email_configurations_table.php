<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('email_configurations', function (Blueprint $table) {
            $table->id();
            
            // Mail Server Settings
            $table->string('mail_driver')->default('smtp');
            $table->string('mail_host')->nullable();
            $table->string('mail_port')->nullable();
            $table->string('mail_username')->nullable();
            $table->string('mail_password')->nullable();
            $table->string('mail_encryption')->nullable();
            
            // Mail From Settings
            $table->string('mail_from_address')->nullable();
            $table->string('mail_from_name')->nullable();
            
            // Additional Settings
            $table->boolean('is_active')->default(true);
            
            $table->timestamps();
        });

        // Insert default configuration
        DB::table('email_configurations')->insert([
            'mail_driver' => 'smtp',
            'mail_host' => 'smtp.mailtrap.io',
            'mail_port' => '2525',
            'mail_username' => 'null',
            'mail_password' => 'null',
            'mail_encryption' => 'tls',
            'mail_from_address' => 'noreply@example.com',
            'mail_from_name' => 'Smart Education Web',
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('email_configurations');
    }
};
