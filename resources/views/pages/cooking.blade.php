@extends('master')

@section('title', '| Cooking')

@section('content')

    <div id="cooking_container" class="container">
        <div class="col-md-12">
            <h1 class="text-center">Cooking with Herbs</h1>
        </div>
        <div id="cooking" class="hidden-sm hidden-xs " style="position:fixed;">
            <ul class="nav" id="cooking-nav" role="navigation">
                
                <li><a href="#thanksgiving">Thanksgiving Dinner</a></li>
                <li><a href="#kale">Steamed Kale or Collards</a></li>
                <li><a href="#carrots_onions">Carmelized Carrots and Onions</a></li>
                <li><a href="#chutney">Mint Chutney</a></li>
            </ul>
        </div>

        <div class="col-md-8 col-md-offset-4">
            
            <div class="dish" id="thanksgiving">
                <h2>Bringing Balance To Your Thanksgiving Dinner</h2>
                <p>Bringing Balance To Your Thanksgiving Dinner
                Thanksgiving is a wonderful time to gather with family and friends, to eat, talk, laugh, and feel grateful for the blessings in our lives. All too often, however, we are so overjoyed by the menu that we eat ourselves into misery. This discomfort is easily remedied with a little attention to the balance of the tastes in our meal planning. Both Traditional Chinese Medicine and Ayurveda stress the importance of balancing the tastes—sweet, bitter, sour, salty, pungent, and astringent—in our meals.</p>

                <p>According to this ancient wisdom, our traditional Thanksgiving meal tends to consist mainly of Sweet and Astringent foods. Included in this list are: turkey, chicken, tofu, squash, white potato, sweet potato, green beans, and corn. In order to balance out this meal we need to look for foods that are sour, bitter, and pungent to keep the digestive system from getting over-stressed.</p>

                <p>The traditional cranberry sauce, with its primary sour taste, is a great addition. Pomegranate, more traditional for later in the season, is available now and is another excellent sour digestive. If fresh pomegranate is too much trouble, pomegranate juice makes an excellent pre-dinner drink.</p>
                <p>Kale and collards are both considered bitter vegetables, and should be included as a side.</p>
            </div>

            <div class="dish" id="kale">
                <div class="col-md-12">
                    <img class="img-responsive" src="{{ asset('images/cooking/kale.jpeg') }}" alt="" style="margin-bottom: 35px;">
                </div>
                <h2>Steamed Kale or Collards with Slivered Almonds and Vinegrette. Serves 2-4</h2>
                <h3>Ingredients:</h3>
                <ul>
                    <li>1 large bunch kale or collards</li>
                    <li>¼ cup slivered almonds</li>
                    <li>2-3 tablespoons balsamic vinegrette (or to taste)</li>
                </ul>
                <h3>To prepare:</h3>
                <ul>
                    <li>Wash and stem kale or collard leaves, chop finely, and add to steamer basket.</li>
                    <li>In bottom of saucepan, add about 1/2 inch of water, bring to a boil</li>
                    <li>Place basket in saucepan, cover and cook over medium heat for 3-5 minutes.</li>
                    <li>Mix cooked greens, slivered almonds, and vinegrette in large bowl.</li>
                    <li>Serve warm or cold.</li>
                </ul>
                <p>Tempeh is a nice alternative for vegetarian/vegan folks, as it is Pungent, as opposed to Sweet, for the main course, and can help balance out all those Sweet sides. Carrot is also a pungent vegetable and can make an excellent addition to your table.</p>
            </div>

            <div class="dish" id="carrots_onions">
                <div class="col-md-12">
                    <img class="img-responsive" src="{{ asset('images/cooking/carrots.jpeg') }}" alt="" style="margin-bottom: 35px;">
                </div>
                <h2>Simple Carmelized Carrots and Onions. Serves 2 – 4</h2>
                <h3>Ingredients:</h3>
                <ul>
                    <li>1 large vidalia onion</li>
                    <li>6 medium sized carrots</li>
                    <li>2-4 tablespoons butter or oil</li>
                    <li>Water for drizzling</li>
                    <li>Salt and pepper to taste</li>
                </ul>
                <h3>To prepare:</h3>
                <ul>
                    <li>This is best done in a heavy cast iron or stainless steel pan.</li>
                    <li>Chop onions into medium pieces</li>
                    <li>Scrub carrots thoroughly, peel if desired, and cut into medium pieces</li>
                    <li>Add butter or oil to your pan and heat to medium-high</li>
                    <li>Saute onions and carrots together, stirring frequently, until the onions become translucent</li>
                    <li>Add about a tablespoon of water to the pan. This will cause a bunch of steam.</li>
                    <li>Keep stirring, letting the water cook off,</li>
                    <li>Then add another tablespoon.</li>
                    <li>Do this several more times until the carrots and onions are soft, slightly golden, and smell just heavenly—sweet and pungent.</li>
                    <li>Add a little salt and pepper, and serve.</li>

                </ul>
                <p>But it’s the spices that really shine for protecting your digestion from all that heavy, sweet holiday food. Rosemary and Sage, traditional herbs for the stuffing, are pungent and bitter. Oregano, Thyme, Marjoram, Parsely and Bay Leaf are all simply pungent. But one of my favorites to add to the meal is a Mint Chutney.</p>
            </div>

            <div class="dish" id="chutney">
                <div class="col-md-12">
                    <img class="img-responsive" src="{{ asset('images/cooking/chutney.jpeg') }}" alt="" style="margin-bottom: 35px;">
                </div>
                <h2>Mint Chutney</h2>
                <h3>Ingredients:</h3>
                <ul>
                    <li>½ bunch fresh cilantro</li>
                    <li>½ bunch fresh mint</li>
                    <li>2 Tbs lemon juice</li>
                    <li>½ tsp (or more, to taste) roasted sunflower seeds</li>
                    <li>¼ tsp fine sea salt</li>
                    <li>2 Tbs plain yogurt</li>
                    <li>½ tsp roasted whole cumin and/or coriander seeds (optional)</li>
                </ul>
                <h3>To prepare:</h3>
                <ul>
                    <li>Grind all ingredients together, except yogurt, in suribachi or electric grinder.</li>
                    <li>Add yogurt just before serving, mix well.</li>
                </ul>
                <p>With a few simple additions to your holiday table, you can eat heartily without over-taxing your digestion. With the wisdom of Ayurveda we can treat ourselves and take good care of our bodies all at the same time.</p>
                <h2>Have a wonderful holiday!</h2>
            </div>

        </div>
        
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script>

    $(document).ready(function() {
        $(window).scroll(function() {
            if($(this).scrollTop() > 101) {
                $("#cooking").css('margin-top', '-50px');
            }
            else {
                $("#cooking").css('margin-top', '80px');   
            }   
        }); 
         
    });
    $(document).ready(function () {     
        $('#cooking .nav li a[href^="#"]').on('click', function (e) {
            e.preventDefault();
            $(document).off("scroll");
            
            var target = this.hash,
                menu = target;
            $target = $(target);
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top-10
            }, 500, 'swing', function () {
                window.location.hash = target;
                $(document).on("scroll", onScroll);
            });
        });
    });

    
</script>
    </div>
@endsection