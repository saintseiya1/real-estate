@extends('layouts/admin')

@section('page-title', 'Edit a Listing')

@section('content')
<div id="mainContent">
    <form method="POST" action="{{ route('admin/listings/update', ['slug' => $listing->slug, 'id' => $listing->id]) }}">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-9">
                <div class="bgc-white p-20 bd">
                    <h3>Edit Listing</h3>
                    <div class="mT-30">
                        <div class="mb-3">
                            <h3>Address</h3>
                            <label class="form-label" for="address">Address</label>
                            <input type="text"
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

                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="state">State</label>
                                <select
                                    name="state" id="state" class="form-control">
                                    <option value="FL" @selected(old('state') == 'FL' ) == 'FL' )>Florida</option>
                                    <option value="NY" @selected(old('state') == 'NY' ) == 'NY' )>New York</option>
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

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <h3>Details</h3>
                                <label class="form-label" for="description">Description</label>
                                <textarea class="form-control" name="description" id="description"
                                    placeholder="EX: talk about property">
                                    {{ old('description', $listing->description) }}
                                </textarea>
                            </div>
                            @error('description')
                                <div class="error-sub-text">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="bgc-white p-20 bd">
                    <div class="mT-30">
                        <h3>Settings</h3>
                        <div class="form-group">
                            <label class="form-label" for="status">Status</label>
                            <select
                                name="status" id="status" class="form-control">
                                <option value="draft" @selected(old('status', $listing->status) == 'draft')>Draft</option>
                                <option value="published" @selected(old('status', $listing->status) == 'published')>Published</option>
                            </select>
                            @error('status')
                                <div class="error-sub-text">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group" style="display:flex; margin-top: 1rem; flex-direction: column;">

                            <a href="{{ route('admin/listings/delete', ['slug' => $listing->slug, 'id' => $listing->id])}}"
                                onclick="return confirm('Are you sure you want to delete this listing?')"
                                class="btn cur-p btn-outline-success" style="margin-top: 1rem; width:100%; color: black;">Gallery</a>
                        </div>

                        <div class="form-group" style="display:flex; margin-top: 1rem; flex-direction: column;">
                            <button type="submit" class="btn btn-primary btn-color" style="width:100%;">Save</button>
                            <a href="{{ route('admin/listings/delete', ['slug' => $listing->slug, 'id' => $listing->id])}}"
                                onclick="return confirm('Are you sure you want to delete this listing?')"
                                class="btn btn-danger btn-color" style="margin-top: 1rem; width:100%;">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
