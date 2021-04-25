<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\levels ;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('levels')->delete() ;

        $i = new levels ;
        $i->grade_id = '3' ;
        $i->setTranslation('name', 'en', 'the first')
        ->setTranslation('name', 'ar', 'الصف الاول')
        
        ->save();

        $i = new levels ;
        $i->grade_id = '3' ;
        $i->setTranslation('name', 'en', 'the second')
        ->setTranslation('name', 'ar', 'الصف الثاني')
      
        ->save();

        $i = new levels ;
        $i->grade_id = '3' ;
        $i->setTranslation('name', 'en', 'the th 3')
        ->setTranslation('name', 'ar', 'الصف الثالث')
   
        ->save();
    }
}
