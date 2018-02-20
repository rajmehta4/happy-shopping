@extends('layouts.app')

@section('custom_css')

<style>

    .space {
        margin-bottom: 15px;
    }

</style>

@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">

                <div class="panel-heading">New earphones entry</div>

                <div class="panel-body">

                	<form method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                		<div class="form-group">
	                		<label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control space" name="name" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="price" class="col-md-4 control-label">Price</label>

                            <div class="col-md-6">
                                <input id="price" type="number" class="form-control space" name="price" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="brand" class="col-md-4 control-label">Brand</label>

                            <div class="col-md-6">
                                <select id="brand" name="brand" class="form-control space">
                                    <option>Sony</option>
                                    <option>Sennheiser</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
	                		<label for="driver_size" class="col-md-4 control-label">Driver Size</label>

                            <div class="col-md-6">

                                <select id="driver_size" name="driver_size" class="form-control space">
                                    <option>9 mm</option>
                                    <option>10 mm</option>
                                    <option>12 mm</option>
                                </select>

                            </div>
                        </div>

                        <div class="form-group">
	                		      <label for="sensitivity" class="col-md-4 control-label">Sensitivity</label>

                            <div class="col-md-6">
                                <input id="sensitivity" type="number" class="form-control space" name="sensitivity" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="impedance" class="col-md-4 control-label">Impedance</label>

                            <div class="col-md-6">
                                <input id="impedance" type="number" class="form-control space" name="impedance" required>
                            </div>  
                        </div>

                        <div class="form-group">
                            <label for="waterproof" class="col-md-4 control-label">Waterproof</label>

                            <div class="col-md-6">
                                <input id="waterproof" type="text" class="form-control space" name="waterproof" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="m_photo" class="col-md-4 control-label">Main photo</label>

                            <div class="col-md-6">
                                <input id="m_photo" type="file" class="form-control-file space" name="m_photo" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="brand" class="col-md-4 control-label">More photos</label>

                            <div class="col-md-6">
                                <input id="m_photos" type="file" class="form-control-file space" name="m_photos[]" multiple required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <br />
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>

                	</form>

                </div>
		    </div>
	   </div>
    </div>
</div>

@endsection
