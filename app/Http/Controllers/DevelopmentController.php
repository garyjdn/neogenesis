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

class DevelopmentController extends Controller
{
  public function dump_data_product()
  {
      $product = new Product();
      $product->category_id = 1;
      $product->name = 'Flashdisk Kingston 32GB';
      $product->desc = 'Lorem ipsum dolor sit amet, erat civibus quo et, legere eirmod facilis mei no, mea tantas neglegentur mediocritatem et. Feugait detraxit an quo, vocibus referrentur no quo. Meis harum postea ea sit, no dicant accumsan recusabo mea, tota antiopam est no. Nam latine concludaturque ad.';
      $product->price = 87000;
      $product->weight = 500;
      $product->image = 'fdkingstone.jpg';
      $product->rating = 4;
      $product->brand = 'Kingston';
      $product->memory = '32';
      $product->save();
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

}
