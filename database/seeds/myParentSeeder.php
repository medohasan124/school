<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\card_id;
class myParentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         \DB::table('levels')->delete() ;
         \DB::table('card_ids')->delete() ;

         card_id::create(['parent_card_id' => '12344567892']);
         card_id::create(['parent_card_id' => '78945612365']);

         \DB::table('my_parents')->insert([
         	'username' => 'ahmed' ,
         	'password' => MD5('ahmed') ,

         	//father info
         	'f_name' => 'mohamed' ,
         	'father_Card_ID' => '12344567892' ,
         	'f_mobile' => '0109776534' ,
         	'f_job' => 'teacher' ,
         	'f_bloode_id' => '1' ,
         	'f_dayana_id' => '1' ,
         	'f_address' => '22 street - egypt ' ,

         	//mother ingo
         	'm_name' => 'mai' ,
         	'm_Card_ID' => '78945612365' ,
         	'm_mobile' => '014576534' ,
         	'm_job' => 'in home' ,
         	'm_bloode_id' => '1' ,
         	'm_dayana_id' => '1' ,
         	'm_address' => '22 street - egypt ' ,
         	'created_at' => Carbon::now() ,
         	'updated_at' => Carbon::now() ,
         ]);
    }
}
