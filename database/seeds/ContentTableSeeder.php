<?php

use App\Content;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('content')->truncate();

        Content::create([
            'alias' => 'header-text',
            'content' => '<img src="assets/images/logos/logo-720.png"><span class="section-icon"><h1>(573) 693-9000<br>1104 Bagnell Dam Boulevard<br>Lake Ozark, Missouri</h1></span>'
        ]);

        Content::create([
            'alias' => 'the-grill-text',
            'content' => '<h2 class="section-heading">Lake Rat is a unique, fun and wild lakeside bar with good food and good times.</h2><h3 class="section-subheading">After spending time on the lake, come grab a drink and have a bite.</h3><div class="image col-lg-6 col-lg-offset-2 col-lg-no-padding"><img src="assets/images/bar.jpg"></div><div class="clearfix"></div><a href="#menus" class="page-scroll"><i class="fa fa-angle-double-down animated"></i></a>'
        ]);

        Content::create([
            'alias' => 'drinks-text',
            'content' => '<h2 class="section-heading wow fadeInDown animated" style="visibility: visible;">Get your drink on.</h2><h3 class="section-subheading wow fadeInDown animated" style="visibility: visible;">Choose a menu</h3><ul class="wow fadeInUp animated" style="visibility: visible;"><li><a href="#menuModal1" data-toggle="modal">Domestic Beers</a></li><li><a href="#menuModal2" data-toggle="modal">Imported Beers</a></li><li><a href="#menuModal3" data-toggle="modal">Cocktails</a></li></ul>'
        ]);

        // 

        Content::create([
            'alias' => 'events-text',
            'content' => '<h2 class="section-heading wow fadeInDown animated" style="visibility: visible;">It\'s party time.</h2><h3 class="section-subheading wow fadeInDown animated" style="visibility: visible;">Check out what happens over here at Lake Rat Bar &amp; Grill</h3><ul class="wow fadeInUp animated" style="visibility: visible;"><li><a href="#menuModal4" data-toggle="modal">Past Events</a></li><li><a href="#menuModal5" data-toggle="modal">Events this Month</a></li><li><a href="#menuModal6" data-toggle="modal">Future Events</a></li></ul>'
        ]);

        Content::create([
            'alias' => 'who-we-are-text',
            'content' => '<p>We\'re a fun loving Bar &amp; Grill dedicated to serving the best drinks and food around.</p>'
        ]);

        Content::create([
            'alias' => 'opening-times-text',
            'content' => '<p><em>Mon – Sat</em>&nbsp;&nbsp;<strong>11am – 2am</strong></p><p><em>Sunday</em>&nbsp;&nbsp;<strong>11am – Midnight</strong></p>'
        ]);

        Content::create([
            'alias' => 'get-in-touch-text',
            'content' => '<p>We\'re always answering the phone during normal business hours.</p><ul class="contacts"><li><i class="icon-location contact"></i> 1104 Bagnell Dam Boulevard, Lake Ozark, Missouri</li><li><i class="icon-mobile contact"></i> (573) 693-9000</li><li><a href="#"><i class="icon-mail-1 contact"></i> info@lake-rat.com</a></li></ul><!-- /.contacts -->'
        ]);

        Content::create([
            'alias' => 'domestic-beers',
            'content' => '<span class="section-icon">W</span><h2 class="section-heading">Domestic Beers</h2><h3 class="section-subheading">Our drink menu is coming soon</h3>'
        ]);

        Content::create([
            'alias' => 'imported-beers',
            'content' => '<span class="section-icon">W</span><h2 class="section-heading">Imported Beers</h2><h3 class="section-subheading">Our drink menu is coming soon</h3>'
        ]);

        Content::create([
            'alias' => 'cocktails',
            'content' => '<span class="section-icon">W</span><h2 class="section-heading">Cocktails</h2><h3 class="section-subheading">Our drink menu is coming soon</h3>'
        ]);

        Content::create([
            'alias' => 'past-events',
            'content' => '<span class="section-icon">a</span><h2 class="section-heading">Past Events</h2><h3 class="section-subheading">Check out what we have done</h3><h4 class="section-subsubheading">No past event yet</h4><p>We\'ve only just begun! Check out current events or future events for more information.</p>'
        ]);

        Content::create([
            'alias' => 'current-events',
            'content' => '<span class="section-icon">a</span><h2 class="section-heading">Current Events</h2><h3 class="section-subheading">Check out what we are doing</h3><h4 class="section-subsubheading">Grand Opening!</h4><p>The crew over here at Lake Rat Bar &amp; Grill are happy to invite you to our grand opening celebration. Come check out the new place, grab some drinks, and meet some new friends! It\'s sure to be an absolute blast.</p>'
        ]);

        Content::create([
            'alias' => 'future-events',
            'content' => '<span class="section-icon">a</span><h2 class="section-heading">Future Events</h2><h3 class="section-subheading">Check out what we have planned</h3><h4 class="section-subsubheading">No future event yet</h4><p>We\'ve only just begun! Check out current events or future events for more information.</p>'
        ]);

        Content::create([
            'alias' => 'meta-title',
            'content' => 'Lake Rat Bar &amp; Grill'
        ]);

        Content::create([
            'alias' => 'meta-keywords',
            'content' => 'lake rat bar grill, lake of the ozarks, bar, grill, restaurant, lake side bar, lake side grill'
        ]);

        Content::create([
            'alias' => 'meta-description',
            'content' => 'Lake Rat Bar and Grill is a lakeside restaurant located in the Lake of the Ozarks. Open weekdays and Saturdays from 11am to 2am and Sundays until midnight and located off of Bagnell Dam Blvd.'
        ]);

        Content::create([
            'alias' => 'page-load',
            'content' => '<h2 class="section-heading">Grilling the page</h2><h3 class="section-subheading">Please wait...</h3>'
        ]);

        Content::create([
            'alias' => 'full-menu',
            'content' => '<div class="col-lg-12 text-center">
                    <h2 class="section-heading">Appetizers</h2>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>Crab Cake Sliders - $9</h3>
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3 text-center">
                                    <p>4 crab cake sliders topped with malt vinegar slaw and fried onion -jalape&ntilde;o straws.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h3>Pulled Pork Sliders - $8</h3>
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3 text-center">
                                    <p>4 spiced, rubbed, and braised pulled pork sliders topped with spicy sriracha slaw and onion jalape&ntilde;o straws.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>Fajita Nachos - $10</h3>
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3 text-center">
                                    <p>Crispy chips topped with fajita steak or chicken, onions, peppers, queso, shredded lettuce, diced tomato, green onion, pico, sour cream and jalape&ntilde;os.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h3>Peel and Eat Shrimp <br> 1/2lbs - $13, 1lbs - $25</h3>
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3 text-center">
                                    <p>Lightly boiled split shelled shrimp served with lemons wedges and spicy cocktail sauce.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>Beer Battered Onion Rings - $9</h3>
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3 text-center">
                                    <p>Steak house style onion rings served with garlic aioli and Sriracha aioli.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h3>Chicken Tenders - $10</h3>
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3 text-center">
                                    <p>Real chicken tenderloin, either grilled or fried, tossed in your choice of wing sauce or plain-served with ranch.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>Chicken Wings - $10</h3>
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3 text-center">
                                    <p>Apple brined wings, lightly fried, in your choice of wing sauce, or plain. served with ranch and celery sticks. <em>Wing sauces </em>: Traditional Buffalo, spicy dry Cajun rub, butter and garlic, or sweet teriyaki/</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <p>&nbsp;</p>
                    </div>
                    <h2 class="section-heading">Fresh From the Garden</h2>
                    <p><em>Our dressings</em> - onion garlic ranch, blue cheese, creamy feta, French, basil Italian, balsamic vinaigrette or honey mustard -  add chicken or shrimp for $5</p>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>House Salad - $7, Side Salad $4</h3>
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3 text-center">
                                    <p>Fresh greens topped with thin sliced red onion, tomato wedges, and fresh grated carrot.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h3>Caesar Salad - $8</h3>
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3 text-center">
                                    <p>Half head of romaine, drizzled with our Caesar dressing, topped with toasted park flakes and croutons. Ask for the romaine grilled!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>Blue Apple Salad - $8</h3>
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3 text-center">
                                    <p>Fresh greens topped with thin slices of apple, red onion, blue cheese and candied nuts.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h3>Buffalo chicken salad - $9</h3>
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3 text-center">
                                    <p>Fresh greens topped with shredded carrot, celery, grilled or fried Buffalo chicken, blue cheese and onion-jalape&ntilde;o straws.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>Summer tomato salad - $9</h3>
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3 text-center">
                                    <p>Thick slices of local tomatoes, over bed of fresh greens, topped with thinly sliced red onion. Drizzled with basil Italian vinaigrette.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <p>&nbsp;</p>
                    </div>
                    <h2 class="section-heading">Burgers, Sandwiches, and Wraps</h2>
                    <p><em>Our Sides</em> - Sidewinder fries, skinny fries, slaw (malt vinegar, traditional, or spicy sriracha),cool cucumber salad, or side salad</p>
                    <p>All burgers topped with lettuce, tomato, red onion, and pickle. cheese selection-cheddar, swiss, pepper Jack and blue cheese. The following comes with one choice of our sides.</p>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>Big Burger - $11</h3>
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3 text-center">
                                    <p>8 oz. of sirloin grilled to your liking! Add any cheese for free.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h3>Black and Bleu Burger - $12</h3>
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3 text-center">
                                    <p>Blackened sirloin topped with bleu cheese sauce and our thick slice home made bacon.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>BBQ Burger - $12</h3>
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3 text-center">
                                    <p>Sirloin with grilled on BBQ sauce, cheddar cheese, then topped with our onion-jalape&ntilde;o straws.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h3>Chicken Sandwich - $10</h3>
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3 text-center">
                                    <p>Grilled, fried, or blackened, with your choice of cheese, our thick cut bacon and garlic aioli.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>Steak Sandwich - $12</h3>
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3 text-center">
                                    <p>Thinly sliced grilled flat iron steak smothered in your favorite cheese and grilled onion. Served with garlic aioli.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h3>Pulled pork sandwich - $10</h3>
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3 text-center">
                                    <p>Our spice rubbed, braised, and pulled pork piled high! Topped with your favorite slaw and onion-jalape&ntilde;o straws.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>Steak Sandwich - $12</h3>
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3 text-center">
                                    <p>Thinly sliced grilled flat iron steak smothered in your favorite cheese and grilled onion. Served with garlic aioli.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h3>Shrimp and Boudin Po&lsquo;Boy - $12</h3>
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3 text-center">
                                    <p>Lightly fried shrimp and grilled and sliced boudin sausage topped with shredded lettuce, tomato, red onion, and Cajun remoulade.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>Fried Grouper Po&lsquo;Boy - $10</h3>
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3 text-center">
                                    <p>Crunchy fried grouper topped with shredded lettuce, tomato, red onion and Cajun remoulade.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h3>Soft Shelled Crab Sandwich - $12</h3>
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3 text-center">
                                    <p>Whole soft shell crab, deep fried, topped with our malt vinegar slaw and sliced tomato.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>Chicken Lettuce Wraps - $10</h3>
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3 text-center">
                                    <p>2 lettuce wraps filled with chicken (fried, grilled, or blackened), tomato, red onion, candied nuts, and balsamic vinaigrette.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h3>Shrimp Lettuce Wraps - $10</h3>
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3 text-center">
                                    <p>Fried, grilled or blackened shrimp, tomato, red onion and Cajun remoulade inside 2 leaves of lettuce.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>Fish Lettuce Shell Tacos - $10</h3>
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3 text-center">
                                    <p>3 blackened fish tacos with a lettuce shell, topped with pico, sour cream, diced tomato, green onion and jalape&ntilde;os.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <p>&nbsp;</p>
                    </div>
                    <h2 class="section-heading">Entrees</h2>
                    <p>All entrees served with a side salad</p>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>16 oz. K.C. Strip - $24</h3>
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3 text-center">
                                    <p>Smothered in caramelized onion and melted blue cheese. with choice of fries, any of our slaw, or cool cucumber salad.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h3>Double Stuffed Pork Chop - $20</h3>
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3 text-center">
                                    <p>Bone in pork chops stuffed with saut&eacute;ed crab, and smothered in Bourbon butter sauce. Served with fries, any of our slaws, or cool cucumber salad.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>Blackened Chicken - $18</h3>
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3 text-center">
                                    <p>Carbonara-blackened chicken served over pasta with Alfredo sauce made with onion, garlic, chunks of our bacon and snap peas. Served with toast points.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h3>Black and Bleu Shrimp Pasta - $18</h3>
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3 text-center">
                                    <p>Spicy shrimp saut&eacute;ed with onions, peppers, over pasta with a special white wine, blue cheese, and butter sauce. Topped with green onion and served with toast points.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <p>&nbsp;</p>
                    </div>
                    <h2 class="section-heading">Kids Bites</h2>
                    <p>All kids bites items are served with chips, apple slices, or skinny fries</p>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>Chicken Tenders - $5</h3>
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3 text-center">
                                    <p>Two real chicken tenderloin, either grilled or fried.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h3>Grilled Cheese - $5</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>Kids Burger - $5</h3>
                        </div>
                        <div class="col-lg-6">
                            <h3>Mac and Cheese Bites - $5</h3>
                        </div>
                    </div>
                    <div class="row">
                        <p>&nbsp;</p>
                    </div>
                    <div class="row">
                        <p>&nbsp;</p>
                    </div>'
        ]);
    }
}