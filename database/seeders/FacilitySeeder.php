<?php

namespace Database\Seeders;

use App\Models\Facility;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $facilities = [
            
            ['name' => '1000 Housing Estate PHC'],
            ['name' => '202 PHC'],
            ['name' => 'Abbaganaram PHC'],
            ['name' => 'Abuja Sharaton'],
            ['name' => 'Ajilari Cross PHC'],
            ['name' => 'Algon PHCC'],
            ['name' => 'Askira Family Support Clinic'],
            ['name' => 'Auno PHC'],
            ['name' => 'Baga PHC'],
            ['name' => 'Baga Road Bayan Texaco'],
            ['name' => 'Balbaya PHC'],
            ['name' => 'Banki PHC'],
            ['name' => 'Bargu MCH'],
            ['name' => 'Benishiek Mch'],
            ['name' => 'Biu Mch'],
            ['name' => 'Biu Town PHC'],
            ['name' => 'Bolori Gonimi PHCC'],
            ['name' => 'Briyel MCH'],
            ['name' => 'Bulabulin Dispensary'],
            ['name' => 'Bulabulin Ngarannam'],
            ['name' => 'Buratai Hf'],
            ['name' => 'Cbda'],
            ['name' => 'Dala Clinic'],
            ['name' => 'Dalaram Clinic'],
            ['name' => 'Dalori Clinic'],
            ['name' => 'Damasak Mch'],
            ['name' => 'Damboa PHC'],
            ['name' => 'Dikwa Mch'],
            ['name' => 'Dikwa PHCC'],
            ['name' => 'Dille HF'],
            ['name' => 'Dusman Clinic'],
            ['name' => 'FSP Bilngwi'],
            ['name' => 'FSP Tandazi MCH'],
            ['name' => 'Family Support Clinic'],
            ['name' => 'Fatima Ali Sheiff Mch'],
            ['name' => 'Fatima Ali Sheriff Mch'],
            ['name' => 'Fikahyel PHC'],
            ['name' => 'Fori Hc'],
            ['name' => 'Fsp Clinic Biu'],
            ['name' => 'GH MULAI'],
            ['name' => 'Gajiganna Health Clinic'],
            ['name' => 'Gamadadi PHC'],
            ['name' => 'Gamboru MCH'],
            ['name' => 'Gamboru MCH clinic'],
            ['name' => 'Gamboru Male'],
            ['name' => 'Gamboru Male Dispensary'],
            ['name' => 'Garu HC'],
            ['name' => 'Garubula PHC'],
            ['name' => 'Garubula Sabo Hf'],
            ['name' => 'Gatamarwa PHC'],
            ['name' => 'General Hospital Rann'],
            ['name' => 'Gomari Clinic'],
            ['name' => 'Gongulong PHC'],
            ['name' => 'Goni Damgari'],
            ['name' => 'Gunda PHC'],
            ['name' => 'Gusi PHC'],
            ['name' => 'Guzam Clinic'],
            ['name' => 'Gwange Chc'],
            ['name' => 'Gwange I PHC'],
            ['name' => 'Gwange II PHC'],
            ['name' => 'Gwange Maternity'],
            ['name' => 'Gwaskara PHCC'],
            ['name' => 'Gwoza PHC'],
            ['name' => 'Gwoza Town PHCC'],
            ['name' => 'Herwa Peace Hc'],
            ['name' => 'Hussara HF'],
            ['name' => 'Jaradali PHC'],
            ['name' => 'Jiddari Comp. Hc'],
            ['name' => 'Kaalmari PHC'],
            ['name' => 'Kachallaburari PHCC'],
            ['name' => 'Kaleri MCH'],
            ['name' => 'Kareram PHCC'],
            ['name' => 'Kawuri PHCC'],
            ['name' => 'Kida PHC'],
            ['name' => 'Kidang PHC'],
            ['name' => 'Kirbutu PHCC'],
            ['name' => 'Kubo CHC'],
            ['name' => 'Kubodeno PHC'],
            ['name' => 'Kubuku PHC'],
            ['name' => 'Kupurku PHC'],
            ['name' => 'Kurbagayi PHC'],
            ['name' => 'Kuva PHC'],
            ['name' => 'Kuya PHCC'],
            ['name' => 'Kwaya Bura MCH'],
            ['name' => 'Kwaya Kusar MCH'],
            ['name' => 'Lakundum PHC'],
            ['name' => 'Likama PHCC'],
            ['name' => 'MCH Bama'],
            ['name' => 'MCH Gajiram'],
            ['name' => 'MCH Gubio'],
            ['name' => 'MCH referral centre'],
            ['name' => 'Mafa MCH'],
            ['name' => 'Magumeri Mch'],
            ['name' => 'Maimusari Clinic'],
            ['name' => 'Mainok PHC'],
            ['name' => 'Mairi Clinic'],
            ['name' => 'Mala Kachalla Mch'],
            ['name' => 'Malakyariri MCH'],
            ['name' => 'Mashamari Clinic'],
            ['name' => 'Mbalala PHC'],
            ['name' => 'Mch Konduga'],
            ['name' => 'Miringa PHC'],
            ['name' => 'Monguno Mch'],
            ['name' => 'Nana Kashim PHC'],
            ['name' => 'New GRA PHC'],
            ['name' => 'New Marte PHC'],
            ['name' => 'Ngala Health Clinic'],
            ['name' => 'Ngamdu PHC'],
            ['name' => 'Njimtilo PHC'],
            ['name' => 'Nzuda Mairi PHC'],
            ['name' => 'PHC Dalori'],
            ['name' => 'PHC Goni Damgari'],
            ['name' => 'PHC Jakana'],
            ['name' => 'PHC Wulari'],
            ['name' => 'Peta PHC'],
            ['name' => 'Pulka PHC'],
            ['name' => 'Rumirgo PHCc'],
            ['name' => 'Sakwa PHC'],
            ['name' => 'Samuwa HC'],
            ['name' => 'Shaffa PHC'],
            ['name' => 'Shani MCH'],
            ['name' => 'Teli PHC'],
            ['name' => 'Tum PHC'],
            ['name' => 'Uba Town PHC'],
            ['name' => 'Vinadam PHC'],
            ['name' => 'Wada PHC'],
            ['name' => 'Walama PHC'],
            ['name' => 'Wamdeo Model'],
            ['name' => 'Wamdeo PHC'],
            ['name' => 'Wandali PHC'],
            ['name' => 'Wawa PHC'],
            ['name' => 'Wuyo PHC'],
            ['name' => 'Yawi PHCC'],
            ['name' => 'Yerwa Mch'],
            ['name' => 'Yimirdalang PHC'],
            ['name' => 'Zabarmari Clinic'],
            ['name' => 'Zadawa HF'],
            ['name' => 'Zara PHC'],
            ['name' => 'Zejeri PHCc'],
            ['name' => 'goni damgari'],
        ];
        DB::transaction(function () use ($facilities) {
            foreach($facilities as $facility) {
                Facility::create([
                    'name' => $facility['name']
                ]);
            }
        });
    }
}
