<?php

namespace Database\Seeders;

use App\Models\Lga;
use App\Models\Ward;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LgaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lgas = [
            [
                'name' => 'Abadam',
                'wards' => [
                    [
                        'name' =>	'ARERE',
                    ],
                    [
                        'name' =>	'BANOWA',
                    ],
                    [
                        'name' =>	'FUGUWA',
                    ],
                    [
                        'name' =>	'JABULLAM',
                    ],
                    [
                        'name' =>	'KUDOKURGU',
                    ],
                    [
                        'name' =>	'MALLAM FOTORI KESA’A',
                    ],
                    [
                        'name' =>	'MALLAM KANURARI',
                    ],
                    [
                        'name' =>	'YAU',
                    ],
                    [
                        'name' =>	'YAWA KURA',
                    ],
                    [
                        'name' =>	'YITUWA',
                    ],
                ],
            ],
            [
                'name' => 'Askira/Uba',
                'wards' => [
                    [
                        'name' => 'ASKIRA EAST',
                    ],
                    [
                        'name' => 'CHUL/RUMIRGO',
                    ],
                    [
                        'name' => 'DILLE/HUYUM',
                    ],
                    [
                        'name' => 'HASARA/TAMPUL',
                    ],
                    [
                        'name' => 'KOPA MULTHAFU',
                    ],
                    ['name' => 'LASSA',],
                    [
                        'name' => 'MUSSA',
                    ],
                    [
                        'name' => 'NGOHI',
                    ],
                    [
                        'name' => 'NGULDE',
                    ],
                    [
                        'name' => 'UBA',
                    ],
                    [
                        'name' => 'UVU UDA',
                    ],
                    [
                        'name' => 'WAMDEO/GIWI',
                    ],
                    [
                        'name' => 'ZADAWA/HAUSARI',
                    ],
                ],
            ],
            [
                'name' => 'Bama',
                'wards' => [
                    [
                        'name' => 'ANDARA/AJIRI/WULBA',
                    ],
                    [
                        'name' => 'BUDUWA/BULACHIRABE',
                    ],
                    [
                        'name' => 'DIPCHARI/JERE/KOTEMBE/DARAJ AMAL',
                    ],
                    [
                        'name' => 'GULUMBA/JUKKURI/BATRA',
                    ],
                    [
                        'name' => 'KASUGULA',
                    ],
                    [
                        'name' => 'KUMSHE/NDUGUNO',
                    ],
                    [
                        'name' => 'LAWANTI/MAL MASTARI/ABBARAM',
                    ],
                    [
                        'name' => 'MARKA/MALGE/AMCHAKA',
                    ],
                    [
                        'name' => 'MBULIYA/GONIRI/SIRAJA',
                    ],
                    [
                        'name' => 'SABSABWA/SOYE/BULAONGU',
                    ],
                    [
                        'name' => 'SHEHURI/HAUSARI/MAIRI',
                    ],
                    [
                        'name' => 'WULBARI/NDINE/CHACHILE',
                    ],
                    [
                        'name' => 'YABIRI KURA/YABI RIGANA/CHONGOLO',
                    ],
                    [
                        'name' => 'ZANGERII/KASH KASH',
                    ],
                ],
            ],
            [
                'name' => 'Bayo',
                'wards' => [
                    [
                        'name' => 'BALBAYA',
                    ],
                    [
                        'name' => 'BRIYEL',
                    ],
                    [
                        'name' => 'FIKAYEL',
                    ],
                    [
                        'name' => 'GAMADADI',
                    ],
                    [
                        'name' => 'JARA GOL',
                    ],
                    [
                        'name' => 'JARA DALI',
                    ],
                    [
                        'name' => 'LIMANTI',
                    ],
                    [
                        'name' => 'TELI',
                    ],
                    [
                        'name' => 'WUYO',
                    ],
                    [
                        'name' => 'ZARA',
                    ],
                ],
            ],
            [
                'name' => 'Biu',
                'wards' => [
                    [
                        'name' => 'BURANTAI',
                    ],
                    [
                        'name' => 'DADIN KOWA',
                    ],
                    [
                        'name' => 'DUDJA',
                    ],
                    [
                        'name' => 'GURUBULA',
                    ],
                    [
                        'name' => 'GUR',
                    ],
                    [
                        'name' => 'KENKEN',
                    ],
                    [
                        'name' => 'MANDARA GIRAU',
                    ],
                    [
                        'name' => 'MIRINGA',
                    ],
                    [
                        'name' => 'SULUMTHLA',
                    ],
                    [
                        'name' => 'YAWI',
                    ],
                    [
                        'name' => 'ZARAWUYAKU',
                    ],
                ],
            ],
            [
                'name' => 'Chibok',
                'wards' => [
                    [
                        'name' => 'GARU',
                    ],
                    [
                        'name' => 'LIKAMA',
                    ],
                    [
                        'name' => 'WHISNTAKU',
                    ],
                    [
                        'name' => 'GATAMARWA',
                    ],
                    [
                        'name' => 'KAUTIKARI',
                    ],
                    [
                        'name' => 'KORONGILIM',
                    ],
                    [
                        'name' => 'KUBURMBULA',
                    ],
                    [
                        'name' => 'MBALALA',
                    ],
                    [
                        'name' => 'MBOA KURA',
                    ],
                    [
                        'name' => 'SHIKAKIR',
                    ],
                    [
                        'name' => 'PEMI',
                    ],
                ],
            ],
            [
                'name' => 'Damboa',
                'wards' => [
                    [
                        'name' => 'AJIGIN (A)'
                    ],
                    [
                        'name' => 'AJIGIN (B)'
                    ],
                    [
                        'name' => 'AZUR/MULTE/FORFOR'
                    ],
                    [
                        'name' => 'BEGO/YERWA/NGIRNA'
                    ],
                    [
                        'name' => 'DAMBOA'
                    ],
                    [
                        'name' => 'GUMSURI/MISA/KURBUTU'
                    ],
                    [
                        'name' => 'KAFA/MAFI'
                    ],
                    [
                        'name' => 'MULGWAI/KOPCHI'
                    ],
                    [
                        'name' => 'NZUDA/WUYARAM'
                    ],
                    [
                        'name' => 'WAMA/KOREDE'
                    ],
                ],
            ],
            [
                'name' => 'Dikwa',
                'wards' => [
                    [
                        'name' => 'BOBOSHE'
                    ],
                    [
                        'name' => 'DIKWA'
                    ],
                    [
                        'name' => 'GAJIBO'
                    ],
                    [
                        'name' => 'UFAYE/GUJILE'
                    ],
                    [
                        'name' => 'MULIYE/JEMURI'
                    ],
                    [
                        'name' => 'MUDU/KAZA'
                    ],
                    [
                        'name' => 'MALLAM MAJA'
                    ],
                    [
                        'name' => 'NGUDORAM'
                    ],
                    [
                        'name' => 'MAGARTA/SHEFFRI'
                    ],
                    [
                        'name' => 'SOGOMA/AFUYE'
                    ],
                ],
            ],
            [
                'name' => 'Gubio',
                'wards' => [
                    [
                        'name' => 'ARDIMINI'
                    ],
                    [
                        'name' => 'DABIRA'
                    ],
                    [
                        'name' => 'FELO'
                    ],
                    [
                        'name' => 'GAMOWO'
                    ],
                    [
                        'name' => 'GAZABURE'
                    ],
                    [
                        'name' => 'GUBIO TOWN I'
                    ],
                    [
                        'name' => 'GUBIO TOWN II'
                    ],
                    [
                        'name' => 'KINGOWA'
                    ],
                    [
                        'name' => 'NGETRA'
                    ],
                    [
                        'name' => 'ZOWO'
                    ],
                ],
            ],
            [
                'name' => 'Guzamala',
                'wards' => [
                    [
                        'name' => 'ADUWA'
                    ],
                    [
                        'name' => 'GUDUMBALI EAST'
                    ],
                    [
                        'name' => 'GUDUMBALI WEST'
                    ],
                    [
                        'name' => 'GUWORAM'
                    ],
                    [
                        'name' => 'GUZAMALA EAST'
                    ],
                    [
                        'name' => 'GUZAMALA WEST'
                    ],
                    [
                        'name' => 'KINGARWA'
                    ],
                    [
                        'name' => 'MAIJARI'
                    ],
                    [
                        'name' => 'MODURI'
                    ],
                    [
                        'name' => 'WAMIRI'
                    ],
                ],
            ],
            [
                'name' => 'Gwoza',
                'wards' => [
                    [
                        'name' => 'ASHIGASHIYA'
                    ],
                    [
                        'name' => 'BITA/IZGE'
                    ],
                    [
                        'name' => 'DURE/WALA/WARABE'
                    ],
                    [
                        'name' => 'GAVVA AGAPALWA'
                    ],
                    [
                        'name' => 'GUDUF/NAGADIYO'
                    ],
                    [
                        'name' => 'GWOZA TOWN/GADA MAYO'
                    ],
                    [
                        'name' => 'GWOZA WAKAN/BULABULIN'
                    ],
                    [
                        'name' => 'HAMBAGDA/LIMANKARA'
                    ],
                    [
                        'name' => 'JOHADE/CHIKIDE/KUGHUM'
                    ],
                    [
                        'name' => 'KIRAWA/JIMINI'
                    ],
                    [
                        'name' => 'KURA NABASSA NGOSHESAMA’A'
                    ],
                    [
                        'name' => 'NGOSHE'
                    ],
                    [
                        'name' => 'PULKE/BOKKO'
                    ],
                ],
            ],
            [
                'name' => 'Hawul',
                'wards' => [
                    [
                        'name' => 'BULUNGURI'
                    ],
                    [
                        'name' => 'GRIM/DZAR/VINADUM/BIRNINI/D LADI'
                    ],
                    [
                        'name' => 'GWANGANG/PUSDA'
                    ],
                    [
                        'name' => 'HIZHI'
                    ],
                    [
                        'name' => 'KIDA'
                    ],
                    [
                        'name' => 'KWAJJAFA/HAARANG'
                    ],
                    [
                        'name' => 'KWAYA-BURA/TANGA RAMTA'
                    ],
                    [
                        'name' => 'MARAMA/KIDANG'
                    ],
                    [
                        'name' => 'PAMA/WHIT AMBAYA'
                    ],
                    [
                        'name' => 'PUBA/VIDAU LOKOJA'
                    ],
                    [
                        'name' => 'SAKWA/HEMA'
                    ],
                    [
                        'name' => 'SHAFF'
                    ],
                ],
            ],
            [
                'name' => 'Jere',
                'wards' => [
                    [
                        'name' => 'ALAU'
                    ],
                    [
                        'name' => 'BALE GALTIMARI'
                    ],
                    [
                        'name' => 'DALA LAWANTI'
                    ],
                    [
                        'name' => 'DUSUMAN'
                    ],
                    [
                        'name' => 'GONGULONG'
                    ],
                    [
                        'name' => 'MAIMUSARI'
                    ],
                    [
                        'name' => 'MASHAMARI'
                    ],
                    [
                        'name' => 'NGUDDA/ADDAMARI'
                    ],
                    [
                        'name' => 'OLD MAIDUGURI'
                    ],
                    [
                        'name' => 'TUBA'
                    ],
                    [
                        'name' => 'MAIRA'
                    ],
                    [
                        'name' => 'GOMARI'
                    ],
                ],
            ],
            [
                'name' => 'Kaga',
                'wards' => [
                    [
                        'name' => 'AFA/DIG MAUDORI'
                    ],
                    [
                        'name' => 'BENISHEIKH'
                    ],
                    [
                        'name' => 'BORGOZO'
                    ],
                    [
                        'name' => 'DOGOMA/JALORI'
                    ],
                    [
                        'name' => 'DONGO'
                    ],
                    [
                        'name' => 'GALANGI'
                    ],
                    [
                        'name' => 'GUWO'
                    ],
                    [
                        'name' => 'KARAGAWARU'
                    ],
                    [
                        'name' => 'MAINOK'
                    ],
                    [
                        'name' => 'MARGUBA'
                    ],
                    [
                        'name' => 'NGAMDU'
                    ],
                    [
                        'name' => 'SHETTIMARI'
                    ],
                    [
                        'name' => 'TOBOLO'
                    ],
                    [
                        'name' => 'WAJIRO/BURGUMMA'
                    ],
                    [
                        'name' => 'WASSARAM'
                    ],
                ],
            ],
            [
                'name' => 'Kala/Balge',
                'wards' => [
                    [
                        'name' => 'BALGE',
                    ],
                    [
                        'name' => 'JILBE (A)',
                    ],
                    [
                        'name' => 'JILBE (B)',
                    ],
                    [
                        'name' => 'JARAWA',
                    ],
                    [
                        'name' => 'KALA',
                    ],
                    [
                        'name' => 'KUMAGA',
                    ],
                    [
                        'name' => 'RANN (A)',
                    ],
                    [
                        'name' => 'RANN (B)',
                    ],
                    [
                        'name' => 'SABKARA',
                    ],
                    [
                        'name' => 'SIGNAL',
                    ],
                ],
            ],
            [
                'name' => 'Konduga',
                'wards' => [
                    [
                        'name' => 'AUNO/CHABBOL'
                    ],
                    [
                        'name' => 'DALORI/WANORI'
                    ],
                    [
                        'name' => 'DALWA EAST/MALARI/KANGAMARI'
                    ],
                    [
                        'name' => 'JEWU/LAMBOA'
                    ],
                    [
                        'name' => 'KAWURI'
                    ],
                    [
                        'name' => 'KELUMIRI/NGALBIMARI/YALE'
                    ],
                    [
                        'name' => 'KONDUGA'
                    ],
                    [
                        'name' => 'MAIRAMRI/YALERI/BAZAMRI'
                    ],
                    [
                        'name' => 'MASBA/DALWA WEST'
                    ],
                    [
                        'name' => 'NYALERI/SANDIA/YEJIWA'
                    ],
                    [
                        'name' => 'SOJIRI/NGURO-NGURO'
                    ],
                ],
            ],
            [
                'name' => 'Kukawa',
                'wards' => [
                    [
                        'name' => 'ALAGARNO'
                    ],
                    [
                        'name' => 'BAGA'
                    ],
                    [
                        'name' => 'BUNDUR'
                    ],
                    [
                        'name' => 'DOGOSHI'
                    ],
                    [
                        'name' => 'DORO/DUGURI'
                    ],
                    [
                        'name' => 'KALUWA'
                    ],
                    [
                        'name' => 'KEKENO'
                    ],
                    [
                        'name' => 'KUKAWA'
                    ],
                    [
                        'name' => 'MODUARI/BARWATI'
                    ],
                    [
                        'name' => 'YOYO'
                    ],
                ],
            ],
            [
                'name' => 'Kwaya Kusar',
                'wards' => [
                    ['name' => 'GONDI'],
                    ['name' => 'GUSI/BILLA'],
                    ['name' => 'GUWAL'],
                    ['name' => 'KUBUKU'],
                    ['name' => 'KURBA'],
                    ['name' => 'KWAYA KUSAR'],
                    ['name' => 'PETA'],
                    ['name' => 'WADA'],
                    ['name' => 'WAWA'],
                    ['name' => 'YIMIRTHLALANG'],
                ],
            ],
            [
                'name' => 'Mafa',
                'wards' => [
                    ['name' => 'ABBARI'],
                    ['name' => 'ANADUA'],
                    ['name' => 'GAWA'],
                    ['name' => 'KOSHEBE'],
                    ['name' => 'LAJE'],
                    ['name' => 'LAWANTI'],
                    ['name' => 'LOSKURI'],
                    ['name' => 'MA’AFA'],
                    ['name' => 'MAFA'],
                    ['name' => 'MASU'],
                    ['name' => 'MAJIGINE'],
                    ['name' => 'TAMSU-NGAMDUA'],
                ],
            ],
            [
                'name' => 'Magumeri',
                'wards' => [
                    ['name' => 'ARDORAM'],
                    ['name' => 'AYI/YASKU'],
                    ['name' => 'BORNO YESU'],
                    ['name' => 'FURRAM'],
                    ['name' => 'GAJIGANNA I'],
                    ['name' => 'GAJIGANNA II'],
                    ['name' => 'YOYO/CHINGOWA'],
                    ['name' => 'KALIZORAM/BANORAM'],
                    ['name' => 'KARERAM'],
                    ['name' => 'KUBTI'],
                    ['name' => 'MAGUMERI'],
                    ['name' => 'NGAMMA'],
                    ['name' => 'NGUBALA'],
                ],
            ],
            [
                'name' => 'Maiduguri',
                'wards' => [
                    ['name' => 'BOLORI I'],
                    ['name' => 'BOLORI II'],
                    ['name' => 'BULABLIN'],
                    ['name' => 'FEZZAN'],
                    ['name' => 'GAMBORU LIBERTY'],
                    ['name' => 'GWANGE I'],
                    ['name' => 'GWANGE II'],
                    ['name' => 'GWANGE III'],
                    ['name' => 'HAUSARI/ZANGO'],
                    ['name' => 'LAMISULA/JABBAMARI'],
                    ['name' => 'LIMANTI'],
                    ['name' => 'MAFONI'],
                    ['name' => 'MAISANDARI'],
                    ['name' => 'SHEHURI NORTH'],
                    ['name' => 'SHEHURI SOUTH'],
                ],
            ],
            [
                'name' => 'Marte',
                'wards' => [
                    ['name' => 'ALA'],
                    ['name' => 'ALLA LAWANTI'],
                    ['name' => 'BORSORI'],
                    ['name' => 'GUMNA'],
                    ['name' => 'KABULAWA'],
                    ['name' => 'KIRENOWA'],
                    ['name' => 'KULLI'],
                    ['name' => 'MARTE'],
                    ['name' => 'MAWULLI'],
                    ['name' => 'MUSUNE'],
                    ['name' => 'NGELEIWA'],
                    ['name' => 'NJINE'],
                    ['name' => 'ZAGA'],
                ],
            ],
            [
                'name' => 'Mobbar',
                'wards' => [
                    ['name' => 'ASAGA'],
                    ['name' => 'BOGUM'],
                    ['name' => 'CHAMBA'],
                    ['name' => 'DAMASAK'],
                    ['name' => 'DUJI'],
                    ['name' => 'CASHAAGAR'],
                    ['name' => 'KARETO'],
                    ['name' => 'LAYI'],
                    ['name' => 'ZANWA UMARTI'],
                    ['name' => 'ZARI'],
                ],
            ],
            [
                'name' => 'Monguno',
                'wards' => [
                    ['name' => 'DAMAKULLI'],
                    ['name' => 'KAGURAM'],
                    ['name' => 'KUMALIA'],
                    ['name' => 'MAFIO'],
                    ['name' => 'MANDALA'],
                    ['name' => 'MINTAR'],
                    ['name' => 'MONGUNO'],
                    ['name' => 'NGURNO'],
                    ['name' => 'SURE'],
                    ['name' => 'WULO'],
                    ['name' => 'YELE'],
                    ['name' => 'ZULUM'],
                ],
            ],
            [
                'name' => 'Ngala',
                'wards' => [
                    ['name' => 'DARRAK'],
                    ['name' => 'FUYE'],
                    ['name' => 'GAMBORU (B)'],
                    ['name' => 'GAMBORU (C)'],
                    ['name' => 'LOGUMANE'],
                    ['name' => 'NDUFU'],
                    ['name' => 'NGALA'],
                    ['name' => 'OLD GAMBORU ‘A’'],
                    ['name' => 'TUNOKALIA'],
                    ['name' => 'WARSHELLE'],
                    ['name' => 'WULGO'],
                ],
            ],
            [
                'name' => 'Nganzai',
                'wards' => [
                    ['name' => 'ALARGE'],
                    ['name' => 'BADU'],
                    ['name' => 'DAMARAM'],
                    ['name' => 'GAJIRAM'],
                    ['name' => 'GADAI'],
                    ['name' => 'JIGALTA'],
                    ['name' => 'DUKA'],
                    ['name' => 'KURNAWA'],
                    ['name' => 'MAIWA'],
                    ['name' => 'MIYE'],
                    ['name' => 'SABSABUWA'],
                    ['name' => 'SUBUNDURE'],
                ],
            ],
            [
                'name' => 'Shani',
                'wards' => [
                    ['name' => 'BURGU/BURASHIKA'],
                    ['name' => 'BUMA'],
                    ['name' => 'GASI/SALIFAWA'],
                    ['name' => 'GORA'],
                    ['name' => 'GWALASHO'],
                    ['name' => 'GWASKARA'],
                    ['name' => 'KOMBO'],
                    ['name' => 'KUBO'],
                    ['name' => 'KWABA'],
                    ['name' => 'SHANI'],
                    ['name' => 'WALAMA,'],
                ],
            ]
        ];

        
        DB::transaction(function () use ($lgas) {
            foreach ($lgas as $lga) {
                $createdLga = Lga::create([
                'name' => $lga['name'],
                ]);

                foreach ($lga['wards'] as $ward) {
                    Ward::create([
                        'lga_id' => $createdLga->id,
                        'name' => $ward['name'],
                    ]);
                }
            }
        });
        
    }
}
