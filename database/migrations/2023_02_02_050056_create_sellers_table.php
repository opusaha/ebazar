<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('shop')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('business_type')->nullable();
            $table->text('about_us')->nullable();
            $table->string('logo')->nullable();
            $table->enum('status', ['pending', 'approved', 'deactive','suspended'])->default('pending');
            $table->timestamps();
        });
    }


    // \Mail::send('email-forgot',['action_link'=>$action_link,'body'=>$body], function($message) use ($request){
    //       $message->from('fromMail','mail head');
    //       $message->to($request->email,'Your name')
    //               ->subject('Reset Password');

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sellers');
    }
};
