<?php get_header(); ?>

<!-- ////////////////////  Hero Section How cohabit works  //////////////////// -->
<div class="introContainer">
    <h1 class="introHeading"><?php echo get_theme_mod('cohabit-hcw-hero-heading'); ?></h1>
    <img src="<?php echo esc_url(get_theme_mod('cohabit-hcw-hero-image')); ?>" alt="<?php echo get_post_meta(attachment_url_to_postid(get_theme_mod('cohabit-hcw-hero-image')),'_wp_attachment_image_alt', true) ?>" class="introImage">
</div>

<!-- ////////////////////  Steps Section How cohabit works  //////////////////// -->
<div class="stepsContainer">
    <!-- Step One -->
    <div class="stepContainer">
        <div class="imageContainer"><img src="<?php echo get_theme_file_uri( 'assets/images/howCohabitWorksStep1.png' ); ?>" alt="" class="stepImage"></div>
        <div class="stepTextContainer">
            <h2>Choose your pre-loved furniture</h2>
            <p>Start by selecting the furniture you need on our order form.</p>
            <p>Our bundle provides the basics - a bed, desk, and chair. But you can  upgrade to a larger bed or table and have additional chairs or even add  accessories like a lamp, storage and carpet to make your home as cozy as  you want! You can find more details on the order form.</p>
        </div>
    </div>
    <!-- Step Two -->
    <div class="stepContainer">
        <div class="imageContainer"><img src="<?php echo get_theme_file_uri( 'assets/images/howCohabitWorksStep2.png' ); ?>" alt="" class="stepImage"></div>
        <div class="stepTextContainer">
            <h2>Get your furniture delivered</h2>
            <p>Cohabit delivers your furniture on your preferred date</p>
            <p>Worried about how to get your furniture into your new home? No need to stress! On your preferred date, Cohabit will deliver and assemble your furniture – right into your apartment.</p>
        </div>
    </div>
    <!-- Step Three -->
    <div class="stepContainer">
        <div class="imageContainer"><img src="<?php echo get_theme_file_uri( 'assets/images/howCohabitWorksStep3.png' ); ?>" alt="" class="stepImage"></div>
        <div class="stepTextContainer">
            <h2>Enjoy and relax in your new home</h2>
            <p>Enjoy your furniture and take time to explore your new city! <a href="https://visitsweden.com/where-to-go/southern-sweden/malmo/" class="howCohabitWorksLinks" target="_blank">Malmö City Guide</a>, <a href="" class="howCohabitWorksLinks" target="_blank">Lund Guide</a>.</p>
            <p>Let Cohabit take care of your furniture needs, so you can focus on what’s important.</p>
            <p>There’s so much amazing things to experience when moving into a new city – and we want you to have a great time!</p>
        </div>
    </div>
    <!-- Step Four -->
    <div class="stepContainer">
        <div class="imageContainer"><img src="<?php echo get_theme_file_uri( 'assets/images/howCohabitWorksStep4.png' ); ?>" alt="" class="stepImage"></div>
        <div class="stepTextContainer">
            <h2>Cohabit picks up your items</h2>
            <p>Cohabit will pick up your furniture at the end of your rental period.</p>
            <p>Time flies in your new city, and before you know it, its time to go!</p>
            <p>We know how stressful it could get during these last few weeks.In  between all the goodbyes and trying to pack you life back into your  suitcase, Cohabit will make life a bit easier for your by picking up  your furniture at the end your rental period.</p>
        </div>
    </div>
    <!-- Info Step 5 -->
    <div class="lastStepContainer">
        <div>
            <h2>Cohabit’s circular approach</h2>
            <p>After we pick up your furniture, we clean and prepare it for the next customer, and the circular process starts again!</p>
            <p>You can read more about Cohabit’s approach to circular sourcing <a href="" class="howCohabitWorksLinks">here</a></p>
        </div>
    </div>
</div>

<!-- ////////////////////  FAQ Section How cohabit works  //////////////////// -->
<div class="faqAllContainer" id="faq">
    <h2 class="faqTitle">FAQ</h2>
    <div>
        <div class="faqSectionButton">
            <div class="faqHeadingContainer">
                <!-- <i class="fa-solid fa-plus fa-xl"></i> -->
                <i class="fa-solid fa-hand-pointer fa-xl"></i>
                <h3>Furniture Selection</h3>
            </div>
            <div class="faqQAContainer">
                <div>
                    <h4>Why can’t I see or select the exact type of furniture I’ll receive?</h4>
                    <p>Our business is rooted in the principles of the circular economy, which means we source furniture from various pre-loved sources to give it a new life in your home or office. Because of this, the specific pieces we have in stock can vary greatly depending on what is available at any given time. While we cannot show you the exact type of furniture you will get, it will be similar to what is shown in the product images when you select the item.</p>
                    <p>You can check out blogs about our customer experiences <a href="https://cohabit.se/experiences-at-cohabit/">here.</a></p>
                </div>
                <div>
                    <h4>What if I don’t like the furniture I receive?</h4>
                    <p>Your satisfaction is our priority. If the piece you receive does not meet your expectations, we have a flexible return and exchange policy. </p>
                </div>
                <div>
                    <h4>Returns/Exchange Policy:</h4>
                    <ul class="faqBulletList">
                        <li>All requests for exchange or return must be sent by email to hello@cohabit.se</li>
                        <li>Requests for the exchange of furniture within 5 days from delivery will be charged 50% of the transport fee. (Refer to Table 1.2 for Transportation Classification).</li>
                        <li>The exchange of furniture will be confirmed based on availability.</li>
                        <li>Exchange/returns made outside the 5-day exchange window will be charged 100% of the transportation charges.</li>
                        <li>A joint inspection is conducted with the rentee at the time of return to assess any damage to the items.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="faqSectionButton">
            <div class="faqHeadingContainer">
                <!-- <i class="fa-solid fa-plus fa-xl"></i> -->
                <i class="fa-regular fa-clock fa-xl"></i>
                <h3>Rental duration</h3>
            </div>
            <div class="faqQAContainer">
                <div>
                    <h4>Is there a minimum rental duration ?</h4>
                    <p>The minimum rental period is 3 months. Items could be rented for a shorter duration, however the 3 month charges still apply.</p>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="faqSectionButton">
            <div class="faqHeadingContainer">
                <!-- <i class="fa-solid fa-plus fa-xl"></i> -->
                <i class="fa-solid fa-bell-concierge fa-xl"></i>
                <h3>Rental service</h3>
            </div>
            <div class="faqQAContainer">
                <div>
                    <h4>Can I rent individual items or only bundles ?</h4>
                    <p>You can choose to rent individual items or bundles. It’s fully based on your preference and requirement. We have had customers only asking for double beds or setting up their whole villa with our pre-loved furniture.</p>
                </div>
                <div>
                    <h4>What can I expect with Cohabit’s rental services ?</h4>
                    <p>The rental service includes sourcing based on customer preference, quality assurance, cleaning, delivery into the apartment, installation of the furniture when the assembly is required, and collection of the furniture at the end of the rental period.</p>
                </div>
                <div>
                    <h4>If you am not sure what kind of furniture will fit into my apartment, How to proceed?</h4>
                    <p>Cohabit team will discuss with you to understand your furniture needs and based on the room size and your preference for movement space, we can make suitable furniture recommendations. We have curated the bundles based on popular choices made by International students moving into unfurnished apartments.</p>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="faqSectionButton">
            <div class="faqHeadingContainer">
                <!-- <i class="fa-solid fa-plus fa-xl"></i> -->
                <i class="fa-solid fa-calendar-days fa-xl"></i>
                <h3>Booking / Customisation / Cancellation</h3>
            </div>
            <div class="faqQAContainer">
                <div>
                    <h4>How do I book items for rent ?</h4>
                    <p>If you are interested in renting furniture with Cohabit, please fill out the <a href="#">wishlist</a> on our website and our team will reach out to you to discuss your requirements, the product selection, delivery options available, and the terms of renting.</p>
                    <p>If you want to rent an item that is not listed on the wishlist, you can contact us by providing details of your preference and we will get in touch with you to make it work.</p>
                </div>
                <div>
                    <h4>What happens after I fill the wishlist?</h4>
                    <p>Once you fill out the wishlist, the Cohabit team will reach out to you by email to connect over a call to understand your requirements better and explain how our services work. When you are happy with the details, order confirmation happens over email and a payment of the refundable deposit.</p>
                    <p>The Cohabit team will reach out to you three days before the scheduled delivery date to confirm the delivery preference. On the day of delivery, Cohabit will set up the furniture in your apartment and conduct a joint inspection before the furniture is handed over to you.</p>
                </div>
                <div>
                    <h4>When will I get the deposit back?</h4>
                    <p>The refundable deposit collected at the time of order confirmation is returned to the customer upon the completion of the rental period. The deposit is refunded after the collection of the furniture by the Cohabit team.</p>
                </div>
                <div>
                    <h4>Can I customize my orders and packages ?</h4>
                    <p>Cohabit offers a unique selection of individual furniture and bundles that are mainly sourced to meet the basic needs of incoming students. If you have specific needs or requests, our team would gladly discuss this with you. In case of any updates such as adding preferences, adding new items or removing items, the customer is expected to communicate atleast 3 days before the scheduled delivery date by mail to hello@cohabit.se . Changes or updates made with less than 3 days to delivery will be treated as a new request and additional charges may apply.</p>
                </div>
                <div>
                    <h4>Can I cancel my confirmed booking ?</h4>
                    <p>Customers can cancel their bookings until 3 days before their scheduled delivery date. </p>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="faqSectionButton">
            <div class="faqHeadingContainer">
                <!-- <i class="fa-solid fa-plus fa-xl"></i> -->
                <i class="fa-regular fa-credit-card fa-xl"></i>
                <h3>Payment</h3>
            </div>
            <div class="faqQAContainer">
                <div>
                    <h4>How and when can I pay the rent at Cohabit ?</h4>
                    <p>We offer flexible ways of making payment. We currently use Revolut as our primary account. However, Swish/ Paypal are also available. We will discuss the most suitable option for you and your preferences during our rental confirmation call. </p>
                    <p>Rental invoice is generated towards the end of the month for the upcoming month. Rental payment is expected within 10 days from the receipt of the invoice.</p>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="faqSectionButton">
            <div class="faqHeadingContainer">
                <!-- <i class="fa-solid fa-plus fa-xl"></i> -->
                <i class="fa-solid fa-truck fa-xl"></i>
                <h3>Delivery / Collection</h3>
            </div>
            <div class="faqQAContainer">
                <div>
                    <h4>How does “Delivery at your convenience” work ?</h4>
                    <p>The customer selects the date of delivery upon placing the order. 5-7 days before the scheduled delivery date, Cohabit team reaches out to the customer for the preferred delivery time and we schedule the delivery accordingly. Any changes to the scheduled delivery time have to be requested 3 days before the delivery time.</p>
                    <p>Changes made within the last 3 days from confirmed delivery date and time will be treated as a new and special request.</p>
                </div>
                <div>
                    <h4>Does Cohabit collect the furniture ?</h4>
                    <p>After the rental period, Cohabit will collect the furniture based on the customer’s schedule preferences. </p>
                </div>
                <div>
                    <h4>Are there charges on transportation?</h4>
                    <p>Standard charges applicable on transportation request are 400 SEK. Special requests charges are extra.</p>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="faqSectionButton">
            <div class="faqHeadingContainer">
                <!-- <i class="fa-solid fa-plus fa-xl"></i> -->
                <i class="fa-solid fa-rotate-left fa-xl"></i>
                <h3>Exchange / Return</h3>
            </div>
            <div class="faqQAContainer">
                <div>
                    <h4>Can I exchange any items during the duration of my rent ?</h4>
                    <p>Customers can request an exchange within 5 days upon delivery, free of charge, subject to item availability. Exchange/ Returns made outside the 5-day exchange window will be charged for transportation.</p>
                </div>
                <div>
                    <h4>What happens if the furniture gets damaged during the rental period ?</h4>
                    <p>We encourage customers to handle Cohabit furniture with love and care, but in case of damage, please report it to us immediately so that we can assess the damage and make the necessary repairs or exchange the item if needed.</p>
                    <p>The repair cost will vary depending on the damage and a part of the repair is charged to the customer.</p>
                </div>
                <div>
                    <h4>Can I return the furniture before the end of the rental period ?</h4>
                    <p>Customers can terminate their rental contract at any time they choose. Pre-closure charges equivalent of one months’ rent and transportation charges are applied.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>