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

                <div class="panel-heading">New smartphone entry</div>

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
                                    <option>Apple</option>
                                    <option>Mi</option>
                                    <option>OnePlus</option>
                                    <option>Motorola</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
	                		<label for="ram" class="col-md-4 control-label">RAM</label>

                            <div class="col-md-6">

                                <select id="ram" name="ram" class="form-control space">
                                    <option>1 GB</option>
                                    <option>2 GB</option>
                                    <option>3 GB</option>
                                    <option>4 GB</option>
                                    <option>8 GB</option>
                                    <option>16 GB</option>
                                </select>

                            </div>
                        </div>

                        <div class="form-group">
	                		<label for="in_storage" class="col-md-4 control-label">Internal storage</label>

                            <div class="col-md-6">

                                <select id="in_storage" name="in_storage" class="form-control space">
                                    <option>1 GB</option>
                                    <option>2 GB</option>
                                    <option>4 GB</option>
                                    <option>8 GB</option>
                                    <option>16 GB</option>
                                    <option>64 GB</option>
                                    <option>128 GB</option>
                                </select>

                            </div>
                        </div>

                        <div class="form-group">
	                		<label for="f_camera" class="col-md-4 control-label">Front camera (in MP)</label>

                            <div class="col-md-6">
                                <input id="f_camera" type="number" class="form-control space" name="f_camera" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="r_camera" class="col-md-4 control-label">Rear camera (in MP)</label>

                            <div class="col-md-6">
                                <input id="r_camera" type="number" class="form-control space" name="r_camera" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="processor" class="col-md-4 control-label">Processor</label>

                            <div class="col-md-6">
                                <input id="processor" type="text" class="form-control space" name="processor" required>
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