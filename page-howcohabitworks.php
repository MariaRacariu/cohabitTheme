<?php
/*
Template Name: Custom Template for How Cohabit Works
*/

get_header(); 
?>

<div class="introContainer">
    <h1 class="introHeading">How <span class="introHighlight">Cohabit</span> Works</h1>
    <img src="<?php echo get_theme_file_uri( 'assets/images/howCohabitWorks.png' ); ?>" alt="" class="introImage">
</div>

<!-- Step One -->
<div class="stepsContainer">
    <div class="stepContainer">
        <div><img src="<?php echo get_theme_file_uri( 'assets/images/howCohabitWorksStep1.png' ); ?>" alt="" class="stepImage"></div>
        <div class="stepTextContainer">
            <h2>Choose your pre-loved furniture</h2>
            <p>Start by selecting the furniture you need on our order form.</p>
            <p>Our bundle provides the basics - a bed, desk, and chair. But you can  upgrade to a larger bed or table and have additional chairs or even add  accessories like a lamp, storage and carpet to make your home as cozy as  you want! You can find more details on the order form.</p>
        </div>
    </div>
    <!-- Step Two -->
    <div class="stepContainer">
        <div><img src="<?php echo get_theme_file_uri( 'assets/images/howCohabitWorksStep2.png' ); ?>" alt="" class="stepImage"></div>
        <div class="stepTextContainer">
            <h2>Get your furniture delivered</h2>
            <p>Cohabit delivers your furniture on your preferred date</p>
            <p>Worried about how to get your furniture into your new home? No need to stress! On your preferred date, Cohabit will deliver and assemble your furniture – right into your apartment.</p>
        </div>
    </div>
    <!-- Step Three -->
    <div class="stepContainer">
        <div><img src="<?php echo get_theme_file_uri( 'assets/images/howCohabitWorksStep3.png' ); ?>" alt="" class="stepImage"></div>
        <div class="stepTextContainer">
            <h2>Enjoy and relax in your new home</h2>
            <p>Enjoy your furniture and take time to explore your new city! <a href="https://visitsweden.com/where-to-go/southern-sweden/malmo/" class="howCohabitWorksLinks" target="_blank">Malmö City Guide</a>, <a href="" class="howCohabitWorksLinks" target="_blank">Lund Guide</a>.</p>
            <p>Let Cohabit take care of your furniture needs, so you can focus on what’s important.</p>
            <p>There’s so much amazing things to experience when moving into a new city – and we want you to have a great time!</p>
        </div>
    </div>
    <!-- Step Four -->
    <div class="stepContainer">
        <div><img src="<?php echo get_theme_file_uri( 'assets/images/howCohabitWorksStep4.png' ); ?>" alt="" class="stepImage"></div>
        <div class="stepTextContainer">
            <h2>Cohabit picks up your items</h2>
            <p>Cohabit will pick up your furniture at the end of your rental period.</p>
            <p>Time flies in your new city, and before you know it, its time to go!</p>
            <p>We know how stressful it could get during these last few weeks.In  between all the goodbyes and trying to pack you life back into your  suitcase, Cohabit will make life a bit easier for your by picking up  your furniture at the end your rental period.</p>
        </div>
    </div>
    <!-- Info Step 5 -->
    <div>
        <div>
            <h2>Cohabit’s circular approach</h2>
            <p>After we pick up your furniture, we clean and prepare it for the next customer, and the circular process starts again!</p>
            <p>You can read more about Cohabit’s approach to circular sourcing <a href="" class="howCohabitWorksLinks">here</a></p>
        </div>
    </div>
</div>


<div>
    <h2>FAQ</h2>
    <div>
        <div class="faqSectionButton">
            <button id="faqSectionButton">Rental duration</button>
            <h3>Rental duration</h3>
            <img src="<?php echo get_theme_file_uri( 'assets/images/arrowDown.png' ); ?>" alt="">
        </div>
        <div id="faqQAContainer">
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
                <ul>
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
<?php
get_footer(); 
?>