<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Province;
use App\Models\Product;
use App\Models\City;
use App\Models\Shipper;
use App\Models\Category;
use App\Models\Attribute;
use App\Models\AttributeDetail;
use App\Models\CategoryDetail;

class DevelopmentController extends Controller
{
  public function dump_data_product()
  {

      $datas = [
        [
          'category_id' => 8,
          'name' => 'Topup 10.000',
          'desc' => 'Topup nominal 10.000',
          'price' => 10000,
          'weight' => 0,
          'image' => '',
        ],
        [
          'category_id' => 8,
          'name' => 'Topup 50.000',
          'desc' => 'Topup nominal 50.000',
          'price' => 50000,
          'weight' => 0,
          'image' => '',
        ],
        [
          'category_id' => 8,
          'name' => 'Topup 100.000',
          'desc' => 'Topup nominal 100.000',
          'price' => 100000,
          'weight' => 0,
          'image' => '',
        ],
        [
          'category_id' => 8,
          'name' => 'Topup 250.000',
          'desc' => 'Topup nominal 250.000',
          'price' => 250000,
          'weight' => 0,
          'image' => '',
        ],
        [
          'category_id' => 8,
          'name' => 'Topup 500.000',
          'desc' => 'Topup nominal 500.000',
          'price' => 500000,
          'weight' => 0,
          'image' => '',
        ]
      ];
      $data = [
        [
          'category_id' => 1,
          'name' => 'Flashdisk Kingston 8GB',
          'desc' => 'Lorem ipsum dolor sit amet, erat civibus quo et, legere eirmod facilis mei no, mea tantas neglegentur mediocritatem et. Feugait detraxit an quo, vocibus referrentur no quo. Meis harum postea ea sit, no dicant accumsan recusabo mea, tota antiopam est no. Nam latine concludaturque ad.',
          'price' => 40000,
          'weight' => 200,
          'image' => 'fdkingstone.jpg',
          'brand' => 'Kingston',
          'memory' => '8GB'
        ],
        [
          'category_id' => 1,
          'name' => 'Flashdisk Kingston 16GB',
          'desc' => 'Lorem ipsum dolor sit amet, erat civibus quo et, legere eirmod facilis mei no, mea tantas neglegentur mediocritatem et. Feugait detraxit an quo, vocibus referrentur no quo. Meis harum postea ea sit, no dicant accumsan recusabo mea, tota antiopam est no. Nam latine concludaturque ad.',
          'price' => 56000,
          'weight' => 200,
          'image' => 'fdkingstone2.jpg',
          'brand' => 'Kingston',
          'memory' => '16GB'
        ],
        [
          'category_id' => 1,
          'name' => 'Flashdisk Kingston 32GB',
          'desc' => 'Lorem ipsum dolor sit amet, erat civibus quo et, legere eirmod facilis mei no, mea tantas neglegentur mediocritatem et. Feugait detraxit an quo, vocibus referrentur no quo. Meis harum postea ea sit, no dicant accumsan recusabo mea, tota antiopam est no. Nam latine concludaturque ad.',
          'price' => 89000,
          'weight' => 200,
          'image' => 'fdkingstone.jpg',
          'brand' => 'Kingston',
          'memory' => '32GB'
        ],
        [
          'category_id' => 1,
          'name' => 'Flashdisk Kingston 64GB',
          'desc' => 'Lorem ipsum dolor sit amet, erat civibus quo et, legere eirmod facilis mei no, mea tantas neglegentur mediocritatem et. Feugait detraxit an quo, vocibus referrentur no quo. Meis harum postea ea sit, no dicant accumsan recusabo mea, tota antiopam est no. Nam latine concludaturque ad.',
          'price' => 125000,
          'weight' => 200,
          'image' => 'fdkingstone2.jpg',
          'brand' => 'Kingston',
          'memory' => '64GB'
        ],
        [
          'category_id' => 1,
          'name' => 'Flashdisk Kingston 64GB USB 3.0',
          'desc' => 'Lorem ipsum dolor sit amet, erat civibus quo et, legere eirmod facilis mei no, mea tantas neglegentur mediocritatem et. Feugait detraxit an quo, vocibus referrentur no quo. Meis harum postea ea sit, no dicant accumsan recusabo mea, tota antiopam est no. Nam latine concludaturque ad.',
          'price' => 225000,
          'weight' => 200,
          'image' => 'fdkingstone3.jpg',
          'brand' => 'Kingston',
          'memory' => '64GB'
        ],
        [
          'category_id' => 1,
          'name' => 'Flashdisk Sandisk 4GB',
          'desc' => 'Lorem ipsum dolor sit amet, erat civibus quo et, legere eirmod facilis mei no, mea tantas neglegentur mediocritatem et. Feugait detraxit an quo, vocibus referrentur no quo. Meis harum postea ea sit, no dicant accumsan recusabo mea, tota antiopam est no. Nam latine concludaturque ad.',
          'price' => 35000,
          'weight' => 200,
          'image' => 'fdsandisk.jpg',
          'brand' => 'Sandisk',
          'memory' => '4GB'
        ],
        [
          'category_id' => 1,
          'name' => 'Flashdisk Sandisk 8GB',
          'desc' => 'Lorem ipsum dolor sit amet, erat civibus quo et, legere eirmod facilis mei no, mea tantas neglegentur mediocritatem et. Feugait detraxit an quo, vocibus referrentur no quo. Meis harum postea ea sit, no dicant accumsan recusabo mea, tota antiopam est no. Nam latine concludaturque ad.',
          'price' => 55000,
          'weight' => 200,
          'image' => 'fdsandisk.jpg',
          'brand' => 'Sandisk',
          'memory' => '8GB'
        ],
        [
          'category_id' => 1,
          'name' => 'Flashdisk Sandisk 16GB',
          'desc' => 'Lorem ipsum dolor sit amet, erat civibus quo et, legere eirmod facilis mei no, mea tantas neglegentur mediocritatem et. Feugait detraxit an quo, vocibus referrentur no quo. Meis harum postea ea sit, no dicant accumsan recusabo mea, tota antiopam est no. Nam latine concludaturque ad.',
          'price' => 80000,
          'weight' => 200,
          'image' => 'fdsandisk.jpg',
          'brand' => 'Sandisk',
          'memory' => '16GB'
        ],
        [
          'category_id' => 1,
          'name' => 'Flashdisk Sandisk 32GB',
          'desc' => 'Lorem ipsum dolor sit amet, erat civibus quo et, legere eirmod facilis mei no, mea tantas neglegentur mediocritatem et. Feugait detraxit an quo, vocibus referrentur no quo. Meis harum postea ea sit, no dicant accumsan recusabo mea, tota antiopam est no. Nam latine concludaturque ad.',
          'price' => 109000,
          'weight' => 200,
          'image' => 'fdsandisk.jpg',
          'brand' => 'Sandisk',
          'memory' => '32GB'
        ],
        [
          'category_id' => 1,
          'name' => 'Flashdisk Sandisk 64GB',
          'desc' => 'Lorem ipsum dolor sit amet, erat civibus quo et, legere eirmod facilis mei no, mea tantas neglegentur mediocritatem et. Feugait detraxit an quo, vocibus referrentur no quo. Meis harum postea ea sit, no dicant accumsan recusabo mea, tota antiopam est no. Nam latine concludaturque ad.',
          'price' => 145000,
          'weight' => 200,
          'image' => 'fdsandisk.jpg',
          'brand' => 'Sandisk',
          'memory' => '64GB'
        ],
        [
          'category_id' => 1,
          'name' => 'Flashdisk Toshiba 4GB',
          'desc' => 'Lorem ipsum dolor sit amet, erat civibus quo et, legere eirmod facilis mei no, mea tantas neglegentur mediocritatem et. Feugait detraxit an quo, vocibus referrentur no quo. Meis harum postea ea sit, no dicant accumsan recusabo mea, tota antiopam est no. Nam latine concludaturque ad.',
          'price' => 36000,
          'weight' => 200,
          'image' => 'fdtoshiba.jpg',
          'brand' => 'Toshiba',
          'memory' => '4GB'
        ],
        [
          'category_id' => 1,
          'name' => 'Flashdisk Toshiba 8GB',
          'desc' => 'Lorem ipsum dolor sit amet, erat civibus quo et, legere eirmod facilis mei no, mea tantas neglegentur mediocritatem et. Feugait detraxit an quo, vocibus referrentur no quo. Meis harum postea ea sit, no dicant accumsan recusabo mea, tota antiopam est no. Nam latine concludaturque ad.',
          'price' => 50000,
          'weight' => 200,
          'image' => 'fdtoshiba.jpg',
          'brand' => 'Toshiba',
          'memory' => '8GB'
        ],
        [
          'category_id' => 1,
          'name' => 'Flashdisk Toshiba 16GB',
          'desc' => 'Lorem ipsum dolor sit amet, erat civibus quo et, legere eirmod facilis mei no, mea tantas neglegentur mediocritatem et. Feugait detraxit an quo, vocibus referrentur no quo. Meis harum postea ea sit, no dicant accumsan recusabo mea, tota antiopam est no. Nam latine concludaturque ad.',
          'price' => 75000,
          'weight' => 200,
          'image' => 'fdtoshiba.jpg',
          'brand' => 'Toshiba',
          'memory' => '16GB'
        ],
        [
          'category_id' => 1,
          'name' => 'Flashdisk Toshiba 32GB',
          'desc' => 'Lorem ipsum dolor sit amet, erat civibus quo et, legere eirmod facilis mei no, mea tantas neglegentur mediocritatem et. Feugait detraxit an quo, vocibus referrentur no quo. Meis harum postea ea sit, no dicant accumsan recusabo mea, tota antiopam est no. Nam latine concludaturque ad.',
          'price' => 100000,
          'weight' => 200,
          'image' => 'fdtoshiba.jpg',
          'brand' => 'Toshiba',
          'memory' => '32GB'
        ],
        [
          'category_id' => 1,
          'name' => 'Flashdisk Toshiba 64GB',
          'desc' => 'Lorem ipsum dolor sit amet, erat civibus quo et, legere eirmod facilis mei no, mea tantas neglegentur mediocritatem et. Feugait detraxit an quo, vocibus referrentur no quo. Meis harum postea ea sit, no dicant accumsan recusabo mea, tota antiopam est no. Nam latine concludaturque ad.',
          'price' => 140000,
          'weight' => 200,
          'image' => 'fdtoshiba2.jpg',
          'brand' => 'Toshiba',
          'memory' => '64GB'
        ],
      ];
      $dataa = [
        [
          'category_id' => 3,
          'name' => 'Mouse Logitech Wireless A1',
          'desc' => 'Lorem ipsum dolor sit amet, erat civibus quo et, legere eirmod facilis mei no, mea tantas neglegentur mediocritatem et. Feugait detraxit an quo, vocibus referrentur no quo. Meis harum postea ea sit, no dicant accumsan recusabo mea, tota antiopam est no. Nam latine concludaturque ad.',
          'price' => 85000,
          'weight' => 450,
          'image' => 'mouselogitech1.jpeg',
          'brand' => 'Logitech'
        ],
        [
          'category_id' => 3,
          'name' => 'Mouse Logitech Wireless B100',
          'desc' => 'Lorem ipsum dolor sit amet, erat civibus quo et, legere eirmod facilis mei no, mea tantas neglegentur mediocritatem et. Feugait detraxit an quo, vocibus referrentur no quo. Meis harum postea ea sit, no dicant accumsan recusabo mea, tota antiopam est no. Nam latine concludaturque ad.',
          'price' => 99000,
          'weight' => 450,
          'image' => 'mouselogitech2.png',
          'brand' => 'Logitech'
        ],
        [
          'category_id' => 3,
          'name' => 'Mouse Logitech C103',
          'desc' => 'Lorem ipsum dolor sit amet, erat civibus quo et, legere eirmod facilis mei no, mea tantas neglegentur mediocritatem et. Feugait detraxit an quo, vocibus referrentur no quo. Meis harum postea ea sit, no dicant accumsan recusabo mea, tota antiopam est no. Nam latine concludaturque ad.',
          'price' => 116000,
          'weight' => 450,
          'image' => 'mouselogitech3.png',
          'brand' => 'Logitech'
        ],
        [
          'category_id' => 3,
          'name' => 'Mouse Logitech C113',
          'desc' => 'Lorem ipsum dolor sit amet, erat civibus quo et, legere eirmod facilis mei no, mea tantas neglegentur mediocritatem et. Feugait detraxit an quo, vocibus referrentur no quo. Meis harum postea ea sit, no dicant accumsan recusabo mea, tota antiopam est no. Nam latine concludaturque ad.',
          'price' => 125000,
          'weight' => 450,
          'image' => 'mouselogitech4.png',
          'brand' => 'Logitech'
        ],
        [
          'category_id' => 3,
          'name' => 'Mouse Logitech AA2',
          'desc' => 'Lorem ipsum dolor sit amet, erat civibus quo et, legere eirmod facilis mei no, mea tantas neglegentur mediocritatem et. Feugait detraxit an quo, vocibus referrentur no quo. Meis harum postea ea sit, no dicant accumsan recusabo mea, tota antiopam est no. Nam latine concludaturque ad.',
          'price' => 12000,
          'weight' => 450,
          'image' => 'mouselogitech5.png',
          'brand' => 'Logitech'
        ],
      ];

      $keyboard = [
        [
          'category_id' => 2,
          'name' => 'Keyboard Logitech K380',
          'desc' => 'Lorem ipsum dolor sit amet, erat civibus quo et, legere eirmod facilis mei no, mea tantas neglegentur mediocritatem et. Feugait detraxit an quo, vocibus referrentur no quo. Meis harum postea ea sit, no dicant accumsan recusabo mea, tota antiopam est no. Nam latine concludaturque ad.',
          'price' => 350000,
          'weight' => 950,
          'image' => 'keyboardlogitechk380.png',
          'brand' => 'Logitech',
        ],
        [
          'category_id' => 2,
          'name' => 'Keyboard Logitech K400 Plus',
          'desc' => 'Lorem ipsum dolor sit amet, erat civibus quo et, legere eirmod facilis mei no, mea tantas neglegentur mediocritatem et. Feugait detraxit an quo, vocibus referrentur no quo. Meis harum postea ea sit, no dicant accumsan recusabo mea, tota antiopam est no. Nam latine concludaturque ad.',
          'price' => 500000,
          'weight' => 950,
          'image' => 'keyboardlogitechk400.png',
          'brand' => 'Logitech',
        ],
        [
          'category_id' => 2,
          'name' => 'Keyboard Logitech K480',
          'desc' => 'Lorem ipsum dolor sit amet, erat civibus quo et, legere eirmod facilis mei no, mea tantas neglegentur mediocritatem et. Feugait detraxit an quo, vocibus referrentur no quo. Meis harum postea ea sit, no dicant accumsan recusabo mea, tota antiopam est no. Nam latine concludaturque ad.',
          'price' => 430000,
          'weight' => 950,
          'image' => 'keyboardlogitechk480.png',
          'brand' => 'Logitech',
        ],
        [
          'category_id' => 2,
          'name' => 'Keyboard Logitech NT200',
          'desc' => 'Lorem ipsum dolor sit amet, erat civibus quo et, legere eirmod facilis mei no, mea tantas neglegentur mediocritatem et. Feugait detraxit an quo, vocibus referrentur no quo. Meis harum postea ea sit, no dicant accumsan recusabo mea, tota antiopam est no. Nam latine concludaturque ad.',
          'price' => 120000,
          'weight' => 950,
          'image' => 'keyboardlogitechnt200.jpg',
          'brand' => 'Logitech',
        ]
      ];

      // foreach($datas as $d){
      //   Product::create([
      //     'category_id' => $d['category_id'],
      //     'name' => $d['name'],
      //     'desc' => $d['desc'],
      //     'price' => $d['price'],
      //     'weight' => $d['weight'],
      //     'image' => $d['image']
      //   ]);
      // }
      // foreach($data as $d){
      //   Product::create([
      //     'category_id' => $d['category_id'],
      //     'name' => $d['name'],
      //     'desc' => $d['desc'],
      //     'price' => $d['price'],
      //     'weight' => $d['weight'],
      //     'image' => $d['image'],
      //     'brand' => $d['brand'],
      //     'memory' => $d['memory']
      //   ]);
      // }

      // foreach($dataa as $d){
      //   Product::create([
      //     'category_id' => $d['category_id'],
      //     'name' => $d['name'],
      //     'desc' => $d['desc'],
      //     'price' => $d['price'],
      //     'weight' => $d['weight'],
      //     'image' => $d['image'],
      //     'brand' => $d['brand']
      //   ]);
      // }

      foreach($keyboard as $d){
        Product::create([
          'category_id' => $d['category_id'],
          'name' => $d['name'],
          'desc' => $d['desc'],
          'price' => $d['price'],
          'weight' => $d['weight'],
          'image' => $d['image'],
          'brand' => $d['brand']
        ]);
      }
  }

  public function dump_data_user()
  {
    $user = new User();
    $user->name = 'gary';
    $user->email = 'calvine.tanuwidjaja@gmail.com';
    $password = 'secret';
    $user->password = Hash::make($password);
    $user->birthdate = Carbon::createFromFormat('Y-m-d', '1995-01-01');
    $user->gender = 'male';
    $user->phone = '081333345589';
    $user->image = 'unknown.png';
    $user->saldo = 30000;
    $user->status = 1;
    $user->save();
  }

  public function api_province()
  {
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => "http://api.rajaongkir.com/starter/province",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "key: bfc382ec47d7944e87d6211c58e944d4"
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      $res = json_decode($response);
      // echo "<pre>";
      // print_r($res->rajaongkir->results);
      // echo "</pre>";
      $results = $res->rajaongkir->results;
      foreach($results as $r){
        $prov = $r->province;
        Province::create(['value' => $prov]);
      }
    }
  }

  public function api_city()
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "http://api.rajaongkir.com/starter/city",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "key: bfc382ec47d7944e87d6211c58e944d4"
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      //echo $response;
      $res = JSON_DECODE($response);
      $results = $res->rajaongkir->results;
      foreach($results as $r){
        echo "<pre>";
        print_r($r->city_name);
        echo "</pre>";
        $province = $r->province_id;
        $city = $r->city_name;
        City::create(['province_id' => $province, 'value' => $city]);
      }

    }

  }

  public function dump_data_shipper()
  {
    $data = ['jne', 'pos', 'tiki'];
    foreach($data as $d)
    {
      Shipper::create(['name' => $d]);
    }
  }

  public function dump_data_category()
  {
    $data = ['Flashdisk', 'Keyboard', 'Mouse', 'Fan', 'Speaker', 'Headset', 'Charger', 'Topup'];
    foreach($data as $d)
    {
      Category::create(['value' => $d]);
    }
  }

  public function dump_data_attribute()
  {
    $data = ['Brand', 'Memory'];
    foreach($data as $d)
    {
      Attribute::create(['value' => $d]);
    }
  }

  public function dump_data_attribute_detail()
  {
    $data = [
      [1, 'Kingston'],
      [1, 'Toshiba'],
      [1, 'Seagate'],
      [1, 'Sandisk'],
      [1, 'Logitech'],
      [1, 'LG'],
      [1, 'Transcend'],
      [1, 'Universal'],
      [1, 'Maxell'],
      [1, 'Vandisk'],
      [1, 'V-Gen'],
      [1, 'HP'],
      [1, 'Mini'],
      [1, 'Team'],
      [1, 'Titanium'],
      [1, 'Xiaomi'],
      [1, 'Apacer'],
      [1, 'Logitech'],
      [1, 'Rexus'],
      [1, 'E-Blue'],
      [1, 'Razer'],
      [1, 'Steelseries'],
      [1, 'Genius'],
      [1, 'Mediatech'],
      [1, 'Prolink'],
      [1, 'Votre'],
      [1, 'Advance'],
      [1, 'Lenovo'],
      [1, 'Alcatroz'],
      [1, 'Asus'],
      [1, 'Corsair'],
      [1, 'Verbatim'],
      [2, '4GB'],
      [2, '8GB'],
      [2, '16GB'],
      [2, '32GB'],
      [2, '64GB'],
      [2, '120GB'],
      [2, '128GB'],
      [2, '240GB'],
      [2, '250GB'],
      [2, '256GB'],
      [2, '500GB'],
      [2, '512GB'],
      [2, '1TB'],
      [2, '2TB']
    ];
    foreach($data as $d)
    {
      AttributeDetail::create(['attribute_id' => $d[0], 'value' => $d[1]]);
    }
  }

  public function dump_data_category_detail()
  {
    $data = [
      [1, 1],
      [1, 2],
      [2, 1],
      [3, 1],
      [4, 1],
      [5, 1],
      [6, 1],
      [7, 1]
    ];
    foreach($data as $d)
    {
      CategoryDetail::create(['category_id' => $d[0], 'attribute_id' => $d[1]]);
    }
  }

}
