 <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_parents', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('password');
 
            //father info
            $table->string('f_name');
            $table->bigInteger('father_Card_ID');
            $table->foreign('father_Card_ID')->references('parent_card_id')->on('card_ids')->onDelete('cascade');

            $table->string('f_mobile')->unique();
            $table->string('f_job');
            $table->unsignedBigInteger('f_bloode_id');
            $table->foreign('f_bloode_id')->references('id')->on('bloodes')->onDelete('cascade');
             $table->unsignedBigInteger('f_dayana_id');
            $table->foreign('f_dayana_id')->references('id')->on('dyanas')->onDelete('cascade');
            $table->string('f_address');



             //mother info
            $table->string('m_name');
            $table->bigInteger('m_Card_ID');
            $table->foreign('m_Card_ID')->references('parent_card_id')->on('card_ids')->onDelete('cascade');
            $table->string('m_mobile')->unique();
            $table->string('m_job');
            $table->unsignedBigInteger('m_bloode_id');
            $table->foreign('m_bloode_id')->references('id')->on('bloodes')->onDelete('cascade');
             $table->unsignedBigInteger('m_dayana_id');
            $table->foreign('m_dayana_id')->references('id')->on('dyanas')->onDelete('cascade');
            $table->string('m_address');

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('my_parents');
    }
}
