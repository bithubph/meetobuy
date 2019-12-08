@extends('layouts.app')
@section('app')
<section class="intro__hero">
    <div class="section_padding col-md-6">
        <h1>Find the best local services<br>
            around you</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>
        <div class="search text-center">
            <form action="/api/search" method="POST">
                @csrf
                <div class="row">
                    {{-- <div class="col-md-6 form-group">
                        <select class="m_field" required>
                            <option disabled selected>Choose State</option>
                            <option value="Rivers">Rivers</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <select class="m_field" required>
                            <option disabled selected>Choose City</option>
                            <option value="Alakahia">Alakahia</option>
                            <option value="Aluu">Aluu</option>
                            <option value="Boc">Back of Chem</option>
                            <option value="Choba">Choba</option>
                        </select>
                    </div> --}}
                    <div class="col-md-12 form-group">
                        <input type="text" class="m_field" name="search" placeholder="Try 'Barber'" required>
                    </div>
                    <div class=" col-md-12 pl-2 ml-1">
                        <button type="submit" name="" class="default_btn" value="">Find Service</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
    
@endsection