@extends('layouts.happyshopping')

@section('productview')


  <div class="products">
    <div class="container">
      <div class="agileinfo_single">

        <div class="col-md-4 agileinfo_single_left">
          <img id="example" src="/storage/laptops/{{ $laps->m_photo_path }}" alt=" " class="img-responsive">
        </div>
        <div class="col-md-8 agileinfo_single_right">
        <h2>{{ $laps->name }}</h2>

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
                    <td>HDD Capacity</td>
                    <td>{{ $laps->hdd_capacity }} TB</td>
                  </tr>
									<tr>
                    <td>OS</td>
                    <td>{{ $laps->os }}</td>
                  </tr>
                  <tr>
                    <td>Ram</td>
                    <td>{{ $laps->ram }} GB</td>
                  </tr>
                  <tr>
                    <td>Processor</td>
                    <td>{{ $laps->processor }}</td>
                  </tr>
									<tr>
                    <td>Graphics card</td>
                    <td>{{ $laps->graphics_card }}</td>
                  </tr>
                </tbody>
              </table>

          </div>

          <div class="snipcart-item block">
            <div class="snipcart-thumb agileinfo_single_right_snipcart">
              <h4 class="m-sing">&#8377;{{ $laps->price }}</h4>
            </div>

            <div class="snipcart-details agileinfo_single_right_details">
              <form action="#" method="post">
                  <input type="submit" name="submit" value="Add to cart" class="button">
              </form>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>


@endsection
