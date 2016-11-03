@extends('master')

@section('title', '| Mission')

@section('content')

<div class="container">
    <div id="mission_container" class="col-md-12">
        <div class="mission col-md-8">
            <h2>Our Vision</h2>
            <p class="text-left">A successful business that delights customers and team members.</p>
            <h2>Our Mission</h2>
            To teach and empower people to heal, and to provide the highest level of herbal products.
            <h2>Our Core Values</h2>
            <ul class="list-group">
                <li><i class="fa fa-envira" aria-hidden="true"></i>Professional advice and education. We are committed to providing top-level professional advice to all inquiries and in educational classes and other resources.</li>
                <li><i class="fa fa-envira" aria-hidden="true"></i>Quality Herbs and herbal products. We are committed to providing only the highest quality herbs and herbal products.</li>
                <li><i class="fa fa-envira" aria-hidden="true"></i>A welcoming and healing experience. We are committed to providing everyone with an experience that is relaxed, attentive to their needs, and self-empowering.</li>
                <li><i class="fa fa-envira" aria-hidden="true"></i>A successful organization. We are committed to working together to build Smile Herb into a financially successful business with: effective leadership and management, team members who are invested in achieving the success and in 
            reaching for their personal best, and with efficient systems and practices.</li>
            </ul>
        </div>

        <div class="remedies col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Interested in Herbal Remedies?</h3>
                </div>
                <div class="panel-body">
                    <img class="pull-left" src="{{ asset('snippets/postal.png')}}" alt="...">
                    <img class="pull-right" src="{{ asset('snippets/postal.png')}}" alt="...">
                    <p class="text-left">Discover Natural Herbal Remedies To Prevent Illness and Disease That Have Been Used For Thousands of Years</p>
                    <p class="text-center">
                        <a href="" class="btn btn-red">Sign me up</a>
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection