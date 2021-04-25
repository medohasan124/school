<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\grade ;
class gradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('grades')->delete() ;

         $i = new grade ;
        $i->setTranslation('name', 'en', 'hight school')
        ->setTranslation('name', 'ar', 'ثانوي')
        ->save();

        $i = new grade ;
        $i->setTranslation('name', 'en', 'second school')
        ->setTranslation('name', 'ar', 'اعدادي')
        ->save();

        $i = new grade ;
        $i->setTranslation('name', 'en', 'first school')
        ->setTranslation('name', 'ar', 'ابتدائي')
        ->save();

        
    }
}
