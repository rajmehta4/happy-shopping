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

                <div class="panel-heading">New laptop entry</div>

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
                                    <option>Dell</option>
                                    <option>HP</option>
                                    <option>Asus</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
	                		      <label for="ram" class="col-md-4 control-label">RAM</label>

                            <div class="col-md-6">

                                <select id="ram" name="ram" class="form-control space">
                                    <option>4 GB</option>
                                    <option>8 GB</option>
                                    <option>16 GB</option>
                                </select>

                            </div>
                        </div>

                        <div class="form-group">
	                		<label for="hdd_capacity" class="col-md-4 control-label">HDD Capacity</label>

                            <div class="col-md-6">

                                <select id="hdd_capacity" name="hdd_capacity" class="form-control space">
                                    <option>500 GB</option>
                                    <option>1 TB</option>
                                </select>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="processor" class="col-md-4 control-label">Processor</label>

                            <div class="col-md-6">
                                <input id="processor" type="text" class="form-control space" name="processor" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="graphics_card" class="col-md-4 control-label">Graphics Card</label>

                            <div class="col-md-6">
                                <input id="graphics_card" type="text" class="form-control space" name="graphics_card" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="os" class="col-md-4 control-label">Operating System</label>

                            <div class="col-md-6">
                                <input id="os" type="text" class="form-control space" name="os" required>
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
