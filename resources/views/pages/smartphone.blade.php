@extends('layouts.happyshopping')

@section('productview')


  <div class="products">
    <div class="container">
      <div class="agileinfo_single">

        <div class="col-md-4 agileinfo_single_left">
          <img id="example" src="/storage/smartphones/{{ $phone->m_photo_path }}" alt=" " class="img-responsive">
        </div>
        <div class="col-md-8 agileinfo_single_right">
        <h2>{{ $phone->name }}</h2>

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
                    <td>Storage</td>
                    <td>{{ $phone->in_storage }} GB</td>
                  </tr>
                  <tr>
                    <td>Primary Camera</td>
                    <td>{{ $phone->r_camera }} MP</td>
                  </tr>
                  <tr>
                    <td>Secondary Camera</td>
                    <td>{{ $phone->f_camera }} MP</td>
                  </tr>
                  <tr>
                    <td>Ram</td>
                    <td>{{ $phone->ram }} GB</td>
                  </tr>
                  <tr>
                    <td>Processor</td>
                    <td>{{ $phone->processor }}</td>
                  </tr>


                </tbody>
              </table>

          </div>

          <div class="snipcart-item block">
            <div class="snipcart-thumb agileinfo_single_right_snipcart">
              <h4 class="m-sing">&#8377;{{ $phone->price }}</h4>
            </div>

            <div class="snipcart-details agileinfo_single_right_details">
              <!--<form action="../cart/add/{{ $phone->id }}" method="get">
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
