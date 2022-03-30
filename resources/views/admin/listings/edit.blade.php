@extends('layouts/admin')

@section('page-title', 'Edit a Listing')

@section('content')
<div id="mainContent">
    <div class="col-md-6">
        <div class="bgc-white p-20 bd">
            <h1>Edit Listing</h1>
            <div class="mT-30">
                <form method="POST" action="{{ route('admin/listings/update', ['slug' => $listing->slug, 'id' => $listing->id]) }}">
                    @csrf
                    <div class="mb-3"><label class="form-label" for="address">Address</label> <input type="text"
                            class="form-control" name="address" id="address" placeholder="EX: 1234 Main St"
                            value="{{ old('address', $listing->address) }}">
                        @error('address')
                            <div class="error-sub-text">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3"><label class="form-label" for="address2">Address 2</label> <input type="text"
                            class="form-control" name="address2" id="address2" placeholder="EX: Apartment, studio, or floor"
                            value="{{ old('address2', $listing->address2) }}">
                            @error('address2')
                                <div class="error-sub-text">
                                    {{ $message }}
                                </div>
                            @enderror

                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6"><label class="form-label" for="city">City</label> <input type="text"
                                class="form-control" name="city" id="city" placeholder="EX: New York" value="{{ old('city', $listing->city) }}">
                                @error('city')
                                    <div class="error-sub-text">
                                        {{ $message }}
                                    </div>
                                @enderror

                        </div>

                        <div class="mb-3 col-md-4"><label class="form-label" for="state">State</label> <select
                                name="state" id="state" class="form-control">
                                <option value="FL" @selected(old('state', $listing->state) == 'FL' )>Florida</option>
                                <option value="NY" @selected(old('state', $listing->state) == 'NY' )>New York</option>
                            </select>
                            @error('state')
                                <div class="error-sub-text">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        <div class="mb-3 col-md-2"><label class="form-label" for="zipcode">Zip</label> <input
                                type="text" class="form-control" name="zipcode" id="zipcode" placeholder="EX: 12345"
                                value="{{ old('zipcode', $listing->zipcode) }}">
                                @error('zipcode')
                                    <div class="error-sub-text">
                                        {{ $message }}
                                    </div>
                                @enderror

                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6"><label class="form-label" for="bedrooms">Bedrooms</label> <input
                                type="text" class="form-control" name="bedrooms" id="bedrooms" placeholder="EX: 4"
                                value="{{ old('bedrooms', $listing->bedrooms) }}">
                                @error('bedrooms')
                                    <div class="error-sub-text">
                                        {{ $message }}
                                    </div>
                                @enderror

                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6"><label class="form-label" for="bathrooms">Bathrooms</label> <input
                                type="text" class="form-control" name="bathrooms" id="bathrooms" placeholder="EX: 2"
                                value="{{ old('bathrooms', $listing->bathrooms) }}">
                                @error('bathrooms')
                                    <div class="error-sub-text">
                                        {{ $message }}
                                    </div>
                                @enderror

                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6"><label class="form-label" for="squarefootage">SQFT</label> <input
                                type="text" class="form-control" name="squarefootage" id="squarefootage"
                                placeholder="EX: 2000" value="{{ old('squarefootage', $listing->squarefootage) }}">
                        </div>
                        @error('squarefootage')
                            <div class="error-sub-text">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <button type="submit" class="btn btn-primary btn-color">Create Listing</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
