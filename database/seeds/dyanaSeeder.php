<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\dyana ;
class dyanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('dyanas')->delete() ;
         $i = new dyana ;
        $i->setTranslation('name', 'en', 'muslim')
        ->setTranslation('name', 'ar', 'مسلم')
        ->save();

        $i = new dyana ;
        $i->setTranslation('name', 'en', 'chirest')
        ->setTranslation('name', 'ar', 'مسيحي')
        ->save();

         $i = new dyana ;
        $i->setTranslation('name', 'en', 'another')
        ->setTranslation('name', 'ar', 'اخري')
        ->save();
    }
}
