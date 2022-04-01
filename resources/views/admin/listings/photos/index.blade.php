@extends('layouts/admin')

@section('page-title', 'Show Photos Listings')

@section('content')
<div id="mainContent">
    <div class="row">
        <div class="col-md-10">
            <h1>Show Photos Listings</h1>
        </div>
        <div class="col-md-2">
            <a href="{{ route('admin/listings/edit', [
                'slug' => $slug,
                'id' => $id
                ])}}"
                class="btn cur-p btn-outline-success" style="margin-top: 1rem; width:100%;
                color: black;">Go back to Edit Page
            </a>
            <a href="{{ route('admin/listings/photos/create', [
                'slug' => $slug,
                'id' => $id
                ])}}"
                class="btn cur-p btn-primary" style="margin-top: 1rem; width:100%;
                color: black;">Add New Photo
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($photos as $photo)
                        <tr>
                            <th scope="row">{{ $photo->id }}</th>
                            <td>
                                <img src="/img/{{ $photo->name }}" style="width: 300px;">
                            </td>
                            <td>
                                {{ $photo->name }}
                            </td>
                            <td>
                                @if ($photo->featured)
                                    <div class="btn cur-p btn-success"
                                        style="width: 100px; text-transform: capitalize; font-size: 0.9rem">
                                        Featured Image
                                    </div>
                                @else

                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin/listings/photos/featured', [
                                    'slug' => $slug,
                                    'id' => $id,
                                    'photo_id' => $photo->id
                                    ])}}"
                                    onclick="return confirm('Are you sure?')"
                                    class="btn cur-p btn-outline-success" style="margin-top: 1rem; width:100%;
                                    color: black;"><i class="fa-solid fa-star"></i>
                                    Make Featured
                                </a>
                                <a href="{{ route('admin/listings/photos/delete', [
                                    'slug' => $slug,
                                    'id' => $id,
                                    'photo_id' => $photo->id
                                    ])}}"
                                    onclick="return confirm('Are you sure you want to delete this photo?')"
                                    class="btn btn-danger btn-color" style="margin-top: 1rem; width:100%;">Delete</a>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $photos->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
