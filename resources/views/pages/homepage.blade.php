@extends('layouts.happyshopping')

@section('homeview')

  <!-- main-slider -->
@include('module.slider')
  	<!-- //main-slider -->
  	<!-- //top-header and slider -->





  	<!-- top-brands -->
  	<div class="top-brands">
  		<div class="container">
  		<h2>Top selling offers</h2>
  			<div class="grid_3 grid_5">
  				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
  					<div id="myTabContent" class="tab-content">
  						<div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
  							<div class="agile-tp">
  								<h5>Advertised this week</h5>
  								<p class="w3l-ad">We've pulled together all our advertised offers into one place, so you won't miss out on a great deal.</p>
  							</div>
  							<div class="agile_top_brands_grids">


                  <!--=========Product links=========-->



                  <div class="col-md-4 top_brand_left">
                    <div class="hover14 column">
                      <div class="agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid_pos">
                          <img src="images/offer.png" alt=" " class="img-responsive" />
                        </div>
                        <div class="agile_top_brand_left_grid1">
                          <figure>
                            <div class="snipcart-item block" >
                              <div class="snipcart-thumb">
                                <a href="{{url('/smartphones/apple-iphone-x-64-gb')}}"><img class="ingrid" title=" " alt=" " src="/storage/smartphones/{{ $phone1->m_photo_path }}" /></a>
                                <p>{{ $phone1->name }}</p>
                                <h4>{{ $phone1->price }}</h4>
                              </div>
                              <div class="snipcart-details top_brand_home_details">
                                <form action="#" method="post">
                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                </form>
                              </div>
                            </div>
                          </figure>
                        </div>
                      </div>
                    </div>
                  </div>



                  <div class="col-md-4 top_brand_left">
                    <div class="hover14 column">
                      <div class="agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid_pos">
                          <img src="images/offer.png" alt=" " class="img-responsive" />
                        </div>
                        <div class="agile_top_brand_left_grid1">
                          <figure>
                            <div class="snipcart-item block" >
                              <div class="snipcart-thumb">
                                <a href="{{url('/smartphones/oneplus-5t-128-gb')}}"><img class="ingrid" title=" " alt=" " src="/storage/smartphones/{{ $phone2->m_photo_path }}" /></a>
                                <p>{{ $phone2->name }}</p>
                                <h4>{{ $phone2->price }}</h4>
                              </div>
                              <div class="snipcart-details top_brand_home_details">
                                <form action="#" method="post">
                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                </form>
                              </div>
                            </div>
                          </figure>
                        </div>
                      </div>
                    </div>
                  </div>



                  <div class="col-md-4 top_brand_left">
                    <div class="hover14 column">
                      <div class="agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid_pos">
                          <img src="images/offer.png" alt=" " class="img-responsive" />
                        </div>
                        <div class="agile_top_brand_left_grid1">
                          <figure>
                            <div class="snipcart-item block" >
                              <div class="snipcart-thumb">
                                <a href="{{url('/laptops/dell-inspiron-7570')}}"><img class="ingrid" title=" " alt=" " src="/storage/laptops/{{ $laps1->m_photo_path }}" /></a>
                                <p>{{ $laps1->name }}</p>
                                <h4>{{ $laps1->price }}</h4>
                              </div>
                              <div class="snipcart-details top_brand_home_details">
                                <form action="#" method="post">
                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                </form>
                              </div>
                            </div>
                          </figure>
                        </div>
                      </div>
                    </div>
                  </div>



                  <div class="col-md-4 top_brand_left">
                    <div class="hover14 column">
                      <div class="agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid_pos">
                          <img src="images/offer.png" alt=" " class="img-responsive" />
                        </div>
                        <div class="agile_top_brand_left_grid1">
                          <figure>
                            <div class="snipcart-item block" >
                              <div class="snipcart-thumb">
                                <a href="{{url('/laptops/hp-15')}}"><img class="ingrid" title=" " alt=" " src="/storage/laptops/{{ $laps2->m_photo_path }}" /></a>
                                <p>{{ $laps2->name }}</p>
                                <h4>{{ $laps2->price }}</h4>
                              </div>
                              <div class="snipcart-details top_brand_home_details">
                                <form action="#" method="post">
                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                </form>
                              </div>
                            </div>
                          </figure>
                        </div>
                      </div>
                    </div>
                  </div>



                  <div class="col-md-4 top_brand_left">
                    <div class="hover14 column">
                      <div class="agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid_pos">
                          <img src="images/offer.png" alt=" " class="img-responsive" />
                        </div>
                        <div class="agile_top_brand_left_grid1">
                          <figure>
                            <div class="snipcart-item block" >
                              <div class="snipcart-thumb">
                                <a href="{{url('/earphones/mdr-xb55-extrabass')}}"><img class="ingrid" title=" " alt=" " src="/storage/earphones/{{ $ephone1->m_photo_path }}" /></a>
                                <p>{{ $ephone1->name }}</p>
                                <h4>{{ $ephone1->price }}</h4>
                              </div>
                              <div class="snipcart-details top_brand_home_details">
                                <form action="#" method="post">
                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                </form>
                              </div>
                            </div>
                          </figure>
                        </div>
                      </div>
                    </div>
                  </div>



                  <div class="col-md-4 top_brand_left">
                    <div class="hover14 column">
                      <div class="agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid_pos">
                          <img src="images/offer.png" alt=" " class="img-responsive" />
                        </div>
                        <div class="agile_top_brand_left_grid1">
                          <figure>
                            <div class="snipcart-item block" >
                              <div class="snipcart-thumb">
                                <a href="{{url('/earphones/cx-180-street-2')}}"><img class="ingrid" title=" " alt=" " src="/storage/earphones/{{ $ephone2->m_photo_path }}" /></a>
                                <p>{{ $ephone2->name }}</p>
                                <h4>{{ $ephone2->price }}</h4>
                              </div>
                              <div class="snipcart-details top_brand_home_details">
                                <form action="#" method="post">
                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                </form>
                              </div>
                            </div>
                          </figure>
                        </div>
                      </div>
                    </div>
                  </div>



                  <!--x-x-x-x-x-Product links-x-x-x-x-x--->


  								<div class="clearfix"> </div>
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>


    <style>
      .ingrid {
        height: 30vh;
      }
    </style>
@endsection
