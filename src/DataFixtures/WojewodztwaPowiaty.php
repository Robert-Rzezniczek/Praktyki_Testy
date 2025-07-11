<?php

namespace App\DataFixtures;

use App\Entity\Powiat;
use App\Entity\Wojewodztwo;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class WojewodztwaPowiaty extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $data = [
            'Dolnośląskie' => [
                'Wrocław',
                'Jelenia Góra',
                'Legnica',
                'Wałbrzych',
                'bolesławiecki',
                'dzierżoniowski',
                'głogowski',
                'górowski',
                'jaworski',
                'jeleniogórski',
                'kamiennogórski',
                'kłodzki',
                'legnicki',
                'lubański',
                'lubiński',
                'lwówecki',
                'milicki',
                'oleśnicki',
                'oławski',
                'polkowicki',
                'strzeliński',
                'średzki',
                'świdnicki',
                'trzebnicki',
                'wałbrzyski',
                'wołowski',
                'wrocławski',
                'ząbkowicki',
                'zgorzelecki',
                'złotoryjski',
            ],
            'Kujawsko-Pomorskie' => [
                'Bydgoszcz',
                'Toruń',
                'Włocławek',
                'Grudziądz',
                'aleksandrowski',
                'brodnicki',
                'bydgoski',
                'chełmiński',
                'golubsko-dobrzyński',
                'grudziądzki',
                'inowrocławski',
                'lipnowski',
                'mogileński',
                'nakielski',
                'radziejowski',
                'rypiński',
                'sępoleński',
                'świecki',
                'toruński',
                'tucholski',
                'wąbrzeski',
                'włocławski',
                'żniński',
            ],
            'Lubelskie' => [
                'Lublin',
                'Biała Podlaska',
                'Chełm',
                'Zamość',
                'bialski',
                'biłgorajski',
                'chełmski',
                'hrubieszowski',
                'janowski',
                'krasnostawski',
                'kraśnicki',
                'lubartowski',
                'lubelski',
                'łęczyński',
                'łukowski',
                'opolski',
                'parczewski',
                'puławski',
                'radzyński',
                'rycki',
                'świdnicki',
                'tomaszowski',
                'włodawski',
                'zamojski',
            ],
            'Lubuskie' => [
                'Gorzów Wielkopolski',
                'Zielona Góra',
                'gorzowski',
                'krośnieński',
                'międzyrzecki',
                'nowosolski',
                'słubicki',
                'strzelecko-drezdenecki',
                'sulęciński',
                'świebodziński',
                'wschowski',
                'zielonogórski',
                'żagański',
                'żarski',
            ],
            'Łódzkie' => [
                'Łódź',
                'Piotrków Trybunalski',
                'Skierniewice',
                'bełchatowski',
                'brzeziński',
                'kutnowski',
                'łaski',
                'łęczycki',
                'łowicki',
                'łódzki wschodni',
                'opoczyński',
                'pabianicki',
                'pajęczański',
                'piotrkowski',
                'poddębicki',
                'radomszczański',
                'rawski',
                'sieradzki',
                'skierniewicki',
                'tomaszowski',
                'wieluński',
                'wieruszowski',
                'zduńskowolski',
                'zgierski',
            ],
            'Ma Dolnośląskiełopolskie' => [
                'Kraków',
                'Nowy Sącz',
                'Tarnów',
                'bocheński',
                'brzeski',
                'chrzanowski',
                'dąbrowski',
                'gorlicki',
                'krakowski',
                'limanowski',
                'miechowski',
                'myślenicki',
                'nowosądecki',
                'nowotarski',
                'olkuski',
                'oświęcimski',
                'proszowicki',
                'suski',
                'tarnowski',
                'tatrzański',
                'wadowicki',
                'wielicki',
            ],
            'Mazowieckie' => [
                'Warszawa',
                'Ostrołęka',
                'Płock',
                'Radom',
                'Siedlce',
                'białobrzeski',
                'ciechanowski',
                'garwoliński',
                'gostyniński',
                'grodziski',
                'grójecki',
                'kozienicki',
                'legionowski',
                'lipski',
                'łosicki',
                'makowski',
                'miński',
                'mławski',
                'nowodworski',
                'ostrołęcki',
                'ostrowski',
                'otwocki',
                'piaseczyński',
                'płocki',
                'płoński',
                'pruszkowski',
                'przasnyski',
                'przysuski',
                'pułtuski',
                'radomski',
                'siedlecki',
                'sierpecki',
                'sochaczewski',
                'sokołowski',
                'szydłowiecki',
                'warszawski zachodni',
                'węgrowski',
                'wołomiński',
                'wyszkowski',
                'zwoleński',
                'żuromiński',
                'żyrardowski',
            ],
            'Opolskie' => [
                'Opole',
                'brzeski',
                'głubczycki',
                'kędzierzyńsko-kozielski',
                'kluczborski',
                'krapkowicki',
                'namysłowski',
                'nyski',
                'oleski',
                'opolski',
                'prudnicki',
                'strzelecki',
            ],
            'Podkarpackie' => [
                'Rzeszów',
                'Krosno',
                'Przemyśl',
                'Tarnobrzeg',
                'bieszczadzki',
                'brzozowski',
                'dębicki',
                'jarosławski',
                'jasielski',
                'kolbuszowski',
                'krośnieński',
                'leski',
                'leżajski',
                'lubaczowski',
                'łańcucki',
                'mielecki',
                'niżański',
                'przemyski',
                'przeworski',
                'ropczycko-sędziszowski',
                'rzeszowski',
                'sanocki',
                'stalowowolski',
                'strzyżowski',
                'tarnobrzeski',
            ],
            'Podlaskie' => [
                'Białystok',
                'Łomża',
                'Suwałki',
                'augustowski',
                'białostocki',
                'bielski',
                'grajewski',
                'hajnowski',
                'kolneński',
                'łomżyński',
                'moniecki',
                'sejneński',
                'siemiatycki',
                'sokólski',
                'suwalski',
                'wysokomazowiecki',
                'zambrowski',
            ],
            'Pomorskie' => [
                'Gdańsk',
                'Gdynia',
                'Słupsk',
                'Sopot',
                'bytowski',
                'chojnicki',
                'człuchowski',
                'kartuski',
                'kościerski',
                'kwidzyński',
                'lęborski',
                'malborski',
                'nowodworski',
                'gdański',
                'pucki',
                'słupski',
                'starogardzki',
                'sztumski',
                'tczewski',
                'wejherowski',
            ],
            'Śląskie' => [
                'Katowice',
                'Bielsko-Biała',
                'Bytom',
                'Chorzów',
                'Częstochowa',
                'Dąbrowa Górnicza',
                'Gliwice',
                'Jastrzębie-Zdrój',
                'Jaworzno',
                'Mysłowice',
                'Piekary Śląskie',
                'Ruda Śląska',
                'Rybnik',
                'Siemianowice Śląskie',
                'Sosnowiec',
                'Świętochłowice',
                'Tychy',
                'Zabrze',
                'Żory',
                'będziński',
                'bielski',
                'bieruńsko-lędziński',
                'cieszyński',
                'częstochowski',
                'gliwicki',
                'kłobucki',
                'lubliniecki',
                'mikołowski',
                'myszkowski',
                'pszczynski',
                'raciborski',
                'rybnicki',
                'tarnogórski',
                'wodzisławski',
                'zawierciański',
                'żywiecki',
            ],
            'Świętokrzyskie' => [
                'Kielce',
                'buski',
                'jędrzejowski',
                'kazimierski',
                'kielecki',
                'konecki',
                'opatowski',
                'ostrowiecki',
                'pińczowski',
                'sandomierski',
                'skarżyski',
                'starachowicki',
                'staszowski',
                'włoszczowski',
            ],
            'Warmińsko-Mazurskie' => [
                'Olsztyn',
                'Elbląg',
                'bartoszycki',
                'braniewski',
                'działdowski',
                'elbląski',
                'ełcki',
                'giżycki',
                'gołdapski',
                'iławski',
                'kętrzyński',
                'lidzbarski',
                'mrągowski',
                'nidzicki',
                'nowomiejski',
                'olecki',
                'olsztyński',
                'ostródzki',
                'piski',
                'szczycieński',
                'węgorzewski',
            ],
            'Wielkopolskie' => [
                'Poznań',
                'Kalisz',
                'Konin',
                'Leszno',
                'chodzieski',
                'czarnkowsko-trzcianecki',
                'gnieźnieński',
                'gostyński',
                'grodziski',
                'jarociński',
                'kaliski',
                'kępiński',
                'kolski',
                'koniński',
                'kościański',
                'krotoszyński',
                'leszczyński',
                'międzychodzki',
                'nowotomyski',
                'obornicki',
                'ostrowski',
                'ostrzeszowski',
                'pilski',
                'pleszewski',
                'poznański',
                'rawicki',
                'słupecki',
                'szamotulski',
                'średzki',
                'śremski',
                'turecki',
                'wągrowiecki',
                'wolsztyński',
                'wrzesiński',
                'złotowski',
            ],
            'Zachodniopomorskie' => [
                'Szczecin',
                'Koszalin',
                'Świnoujście',
                'białogardzki',
                'choszczeński',
                'drawski',
                'goleniowski',
                'gryficki',
                'gryfiński',
                'kamieński',
                'kołobrzeski',
                'koszaliński',
                'łobeski',
                'myśliborski',
                'policki',
                'pyrzycki',
                'sławieński',
                'stargardzki',
                'szczecinecki',
                'świdwiński',
                'wałecki',
            ],
        ];

        foreach ($data as $wojewodztwoName => $powiaty) {
            $wojewodztwo = new Wojewodztwo();
            $wojewodztwo->setName($wojewodztwoName);
            $manager->persist($wojewodztwo);

            foreach ($powiaty as $powiatName) {
                $powiat = new Powiat();
                $powiat->setName($powiatName);
                $powiat->setWojewodztwo($wojewodztwo);
                $manager->persist($powiat);
            }
        }

        $manager->flush();
    }
}
