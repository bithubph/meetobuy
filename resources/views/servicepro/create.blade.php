
@extends('layouts.admin')
@section('admin')
<section class="dashboard">
    <div class="dashboard_header">
        <h1 class="title">Hi, Benjamin</h1>
        <p class="sub">You are about to create a new service</p>
    </div>
    <div class="dashboard_body">
        <div class="dash_form_area">
            <form>
                <div class="row">
                    <div class="dash_form_group col-md-12">
                        <label>Service Name</label>
                        <input type="text" class="dash_form_field" name="">
                    </div>
                    <div class="dash_form_group col-md-12">
                        <label>Banner</label>
                        <input type="file" class="dash_form_field" name="">
                    </div>
                    <div class="dash_form_group col-md-12">
                        <label>Description</label>
                        <textarea class="dash_form_field"></textarea>
                    </div>
                    <div class="dash_form_group col-md-6">
                        <label>Average Price(NGN)</label>
                        <input type="text" class="dash_form_field" name="">
                    </div>
                    <div class="dash_form_group col-md-6">
                        <label>Minimum Price</label>
                        <input type="text" class="dash_form_field" name="">
                    </div>
                    <div class="dash_form_group col-md-12">
                        <input type="submit" class="submit" name="" value="Create Service">
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
</section>
@endsection