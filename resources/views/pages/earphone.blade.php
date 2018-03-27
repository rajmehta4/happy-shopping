@extends('layouts.happyshopping')

@section('productview')


  <div class="products">
    <div class="container">
      <div class="agileinfo_single">

        <div class="col-md-4 agileinfo_single_left">
          <img id="example" src="/storage/earphones/{{ $ephone->m_photo_path }}" alt=" " class="img-responsive">
        </div>
        <div class="col-md-8 agileinfo_single_right">
        <h2>{{ $ephone->name }}</h2>

          <div class="w3agile_description">

            <table class="table">
                <thead>
                  <tr>
                    <th>Specs</th>
                    <th>Details</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Brand</td>
                    <td>{{ $brand->name }}</td>
                  </tr>
                  <tr>
                    <td>Driver Size</td>
                    <td>{{ $ephone->driver_size }} mm</td>
                  </tr>
									<tr>
                    <td>Sensitivity</td>
                    <td>{{ $ephone->sensitivity }} dB</td>
                  </tr>
                  <tr>
                    <td>Impedance</td>
                    <td>{{ $ephone->impedance }} Ohm</td>
                  </tr>
                  <tr>
                    <td>Waterproof</td>
                    <td>{{ $ephone->waterproof }}</td>
                  </tr>
                </tbody>
              </table>

          </div>

          <div class="snipcart-item block">
            <div class="snipcart-thumb agileinfo_single_right_snipcart">
              <h4 class="m-sing">&#8377;{{ $ephone->price }}</h4>
            </div>

            <div class="snipcart-details agileinfo_single_right_details">
              <!--<form action="#" method="post">
                  <input type="submit" name="submit" value="Add to cart" class="button">
              </form>-->
              <a class="cart-button" href="../cart/add/{{ $all_products_id }}">Add to cart</a>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>


@endsection
