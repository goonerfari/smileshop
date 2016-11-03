@extends('master')

@section('title', '| Quality')

@section('content')

<div id="quality_container" class="container">
    <div class="col-md-12">
        <h1 class="text-center">Quality Assurance</h1>
    </div>
    <div class="mission col-md-7">
        <p>Here at Smile Herb Shop, our products are carefully selected by professional herbalists; real practitioners with real experience fulfilling the needs of people like you. We don’t just sell the hottest new fad in alternative medicine, we offer the products we trust and use for ourselves and our families.</p>
        <p>Many of our product lines are founded by members of the American Herbalists Guild, folks who, like Tom Wolfe, co-owner of Smile, have been studying and practicing herbalism for 40+ years. In fact Tom knows many of these founding herbalists personally, and he knows the thought behind their formulations and standards. We feel confident that our friends and fellow practitioners are the people behind many of the products on our shelves.</p>
        <p>As well as being well-grounded in the long-standing herbal community, Smile Herb Shop is also committed to staying informed of the newest and most exciting breakthroughs in herbal medicine and alternative healing today. Always open to what’s best for the client, we look for the best and brightest of new upcoming companies, formulations, and plant extracts to bring to our customers.</p>
    </div>

    
    <div class="remedies col-md-4 col-md-offset-1">
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
    <div class="quality col-md-12">
        <h2>What we look for:</h2>
        <ul class="list-group">
            <li><i class="fa fa-envira" aria-hidden="true"></i>
                <b>Experience:</b>Traditional herbal knowledge, clinical experience, western scientific research, and tried and true real world usage are all taken into consideration when choosing a company or particular product.
            </li>

            <li><i class="fa fa-envira" aria-hidden="true"></i>
                <b>Great Formulations:</b>We look for the most effective herbal formulas available for specific needs and conditions. Our herbalists try out our new products, making sure that they have a place among our favorites.
            </li>

            <li><i class="fa fa-envira" aria-hidden="true"></i>
                <b>Organic/Sustainably Harvested: </b>Whenever possible, we choose the Organic and/or Sustainably Harvested option. Many of our companies pledge that all or at least a high percentage of their ingredients are Organic and/or Sustainably Harvested.
                </li>

            <li><i class="fa fa-envira" aria-hidden="true"></i>
                <b>Fair Trade:</b>Fair Trade practices support the healthy, independent lifestyles of the farmers and craftspeople who produce the products we sell. Not only are Fair Trade products healthy for you, the consumer, but they are healthy for people all over the world.
            </li>

            <li><i class="fa fa-envira" aria-hidden="true"></i>
                <b>Quality Control Testing:</b>We support companies that commit to quality control and assurance, testing the raw materials that come into their factories as well as the end-product coming out. No sawdust capsules here! We are confident that the products we sell to you are what they say they are. We, as herbalists, use these products in our own clinical practices and our own homes.
            </li>

            <li><i class="fa fa-envira" aria-hidden="true"></i>
                <b>Eco-friendly Practices:</b>We believe that sustainability is essential to promoting health across the globe. We support growers and manufacturers who commit to protecting our natural resources through their practices.
            </li>
        </ul>
    </div>
</div>

@endsection