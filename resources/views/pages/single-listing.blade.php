@extends('layouts/main')

@section('page-title', '23 Grand ave - Smith Realty')

@section('content')
    <div class="single-listing-page">
        <div class="listing-top">
            <img class="listing-top__img" src="/img/h1.jpg">
            <div class="listing-top__form-wrapper">
                <div class="container">
                    <form class="listing-top__form" action="" method="">

                        <label class="listing-top__form-label">Schedule A Tour</label>
                        <div class="listing-top__form-group listing-top__form-group--horz">
                            <div class="listing-top__form-option">In-Person</div>
                            <div class="listing-top__form-option">Video</div>
                        </div>

                        <label class="listing-top__form-label">Date</label>
                        <div class="listing-top__form-group listing-top__form-group--horz">
                            <div class="listing-top__form-option">February 22</div>
                        </div>

                        <label class="listing-top__form-label">Time</label>
                        <div class="listing-top__form-group">
                            <div class="listing-top__form-option">11 AM</div>
                        </div>

                        <label class="listing-top__form-label">Personal Info</label>
                        <div class="listing-top__form-group">
                            <div class="listing-top__form-option">Enter Phone</div>
                        </div>

                        <div class="listing-top__form-group">

                            <div class="listing-top__form-option">Enter Email</div>
                        </div>

                        <div class="listing-top__form-group">
                            <button type="submit" class="listing-top__form-button">Schedule A Tour</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <section class="listing-info">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>2123 Grand Ave<br>
                            Miami, FL 33456
                        </h1>
                        <div class="listing-info__details">
                            <span class="listing-info__details-text"><i class="fa-solid fa-bed"></i> 4 </span>
                            <span class="listing-info__details-text"><i class="fa-solid fa-bath"></i> 3 </span>
                            <span class="listing-info__details-text"><i class="fa-solid fa-ruler"></i> 2440 SQFT</span>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <span class="listing-info__agent-title">Realtor</span>
                        <span class="listing-info__agent-name">John Smith</span>
                        <p class="listing-info__agent-profile">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Atque impedit ratione doloremque possimus. Repellendus
                            pariatur modi esse harum dolorum odio doloribus excepturi 
                            veritatis, labore aspernatur voluptatibus, incidunt 
                            architecto assumenda itaque?
                        </p>

                    </div>
                </div>
            </div>
        </section>

        <section class="listing-extras">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="listing-extras__details">
                            <h2>More Info</h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                                Fuga magni, iusto iure beatae totam iste ducimus quam 
                                delectus ut veniam odit soluta exercitationem reiciendis ex, 
                                aliquam perspiciatis, eaque quis dignissimos.
                            </p>
                            <h3>Details</h3>
                            <ul>
                                <li>Test</li>
                                <li>Test</li>
                                <li>Test</li>
                                <li>Test</li>
                                <li>Test</li>
                                <li>Test</li>
                                <li>Test</li>
                                <li>Test</li>
                                <li>Test</li>
                                <li>Test</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="listing-extras__gallery">
                            <h2>Images</h2>
                            <img src='/img/h1.jpg'>
                            <img src='/img/h1.jpg'>
                            <img src='/img/h1.jpg'>
                            <img src='/img/h1.jpg'>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
