<?php

namespace Database\Seeders;

use App\Models\House;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        // svuota ogni volta la tabella
        DB::table('houses')->truncate();


        $data = $this->getCSVData(__DIR__ . '/houses.csv');

        // dump($data);

        foreach ($data as $index => $row) {

            if ($index !== 0) {
                $house = new House();

                $house->reference = $row[1]; // 'AF-125645659'
                $house->address = $row[2];
                $house->postal_code = $row[3];
                $house->city = $row[4];
                $house->state = $row[5];
                $house->square_meters = $row[6];
                $house->rooms = $row[7];
                $house->bathrooms = $row[8];
                $house->type = $row[9];
                $house->description = $row[10];
                $house->price = $row[11];
                $house->energy_rating = $row[13];
                $house->is_available = $row[12];

                $house->save();
            }
        }


        // $types = ['monolocale', 'bilocale', 'villetta a schiera', 'bifamiliare', 'villa indipendente', 'rudere'];

        // $rating = ['a+++', 'a++', 'a+', 'a', 'b', 'c', 'd', 'e', 'f', 'g'];

        // for ($i = 0; $i < 1000; $i++) {

        //     // creaimo l'istanza del model House
        //     $new_house = new House();

        //     // popolare le proprietà dell'istanza
        //     $new_house->reference = $faker->unique()->bothify('??-#########'); // 'AF-125645659'
        //     $new_house->address = $faker->streetAddress();
        //     $new_house->postal_code = $faker->postcode();
        //     $new_house->city = $faker->city();
        //     $new_house->state = $faker->state();
        //     $new_house->square_meters = $faker->numberBetween(30, 1000);
        //     $new_house->rooms = $faker->numberBetween(2, 30);
        //     $new_house->bathrooms = $faker->numberBetween(1, 6);
        //     $new_house->type = $faker->randomElement($types);
        //     $new_house->description = $faker->optional()->text(rand(150, 300));
        //     $new_house->price = $faker->randomFloat(2, 15000, 5000000);
        //     $new_house->energy_rating = $faker->randomElement($rating);
        //     $new_house->is_available = $faker->randomElement([true, false]);

        //     // salviamo i dati con il metodo save()
        //     $new_house->save();
        // }


        // $houses = [
        //     [
        //         'reference' => 'AF-125645659',
        //         'address' => 'Via Bologna 125',
        //         'postal_code' => '44121',
        //         'city' => 'Ferrara',
        //         'state' => 'Emilia Romagna',
        //         'square_meters' => 125,
        //         'rooms' => 5,
        //         'bathrooms' => 1,
        //         'type' => 'Appartamento',
        //         'description' => null,
        //         'price' => 525000.00,
        //         'energy_rating' => 'a++',
        //         'is_available' => true
        //     ],
        //     [
        //         'reference' => 'AG-456265892',
        //         'address' => 'Via Mazzini 12',
        //         'postal_code' => '44121',
        //         'city' => 'Ferrara',
        //         'state' => 'Emilia Romagna',
        //         'square_meters' => 75,
        //         'rooms' => 3,
        //         'bathrooms' => 1,
        //         'type' => 'Appartamento',
        //         'description' => null,
        //         'price' => 338000.00,
        //         'energy_rating' => 'g',
        //         'is_available' => true
        //     ],
        //     [
        //         'reference' => 'HF-125125659',
        //         'address' => 'Via Cavour 125',
        //         'postal_code' => '44121',
        //         'city' => 'Ferrara',
        //         'state' => 'Emilia Romagna',
        //         'square_meters' => 100,
        //         'rooms' => 6,
        //         'bathrooms' => 2,
        //         'type' => 'Appartamento',
        //         'description' => null,
        //         'price' => 428000.00,
        //         'energy_rating' => 'c',
        //         'is_available' => true
        //     ],
        // ];

        // foreach ($houses as $house) {
        //     // generiamo i nostri dati

        //     // creaimo istanza House
        //     $new_house = new House();

        //     // popolando l'istanza con i dati
        //     $new_house->reference = $house['reference'];
        //     $new_house->address = $house['address'];
        //     $new_house->postal_code = $house['postal_code'];
        //     $new_house->city = $house['city'];
        //     $new_house->state = $house['state'];
        //     $new_house->square_meters = $house['square_meters'];
        //     $new_house->rooms = $house['rooms'];
        //     $new_house->bathrooms = $house['bathrooms'];
        //     $new_house->type = $house['type'];
        //     $new_house->description = $house['description'];
        //     $new_house->price = $house['price'];
        //     $new_house->energy_rating = $house['energy_rating'];
        //     $new_house->is_available = $house['is_available'];

        //     // salviamo i dati nel db...
        //     $new_house->save();

        //     // dump($new_house);
        // }
    }

    public function getCSVData(string $path)
    {
        // conterrà tutte le righe che leggiamo dal file CSV
        $data = [];

        $file_stream = fopen($path, 'r');

        if ($file_stream === false) {
            exit('Cannot open the file ' . $path);
        }

        while (($row = fgetcsv($file_stream)) !== false) {
            $data[] = $row;
        }

        fclose($file_stream);

        // ritornaimo le righe
        return $data;
    }
}
