<?php
/**
 * About Us page template.
 *
 * @package Estatein
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main class="about-page">

    <!-- =====================================================
        OUR JOURNEY
    ====================================================== -->

    <section class="about-journey section">

        <div class="container">

            <div class="about-journey__inner">

                <!-- LEFT CONTENT -->
                <div class="about-journey__content">

                    <div class="section-decoration" aria-hidden="true">
                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri()
                                . '/assets/images/abstract-design.png'
                            ); ?>"
                            alt=""
                        >
                    </div>

                    <h1>Our Journey</h1>

                    <p class="about-journey__description">
                        Our story is one of constant growth and evolution. We started
                        with a small team of passionate real estate professionals,
                        driven by a shared vision to redefine the real estate industry.
                        Over the years, we've expanded our reach, forged valuable
                        partnerships, and gained the trust of thousands of clients.
                    </p>


                    <!-- Statistics -->
                    <div class="about-journey__stats">

                        <article class="about-journey__stat">
                            <strong>200+</strong>
                            <span>Happy Customers</span>
                        </article>

                        <article class="about-journey__stat">
                            <strong>10k+</strong>
                            <span>Properties For Clients</span>
                        </article>

                        <article class="about-journey__stat">
                            <strong>16+</strong>
                            <span>Years of Experience</span>
                        </article>

                    </div>

                </div>


                <!-- RIGHT IMAGE -->
                <div class="about-journey__visual">

                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri()
                            . '/assets/images/about-banner.png'
                        ); ?>"
                        alt="House held in a hand representing Estatein"
                    >

                </div>

            </div>

        </div>

    </section>

    <!-- =====================================================
        OUR VALUES
    ====================================================== -->

    <section class="about-values section">

        <div class="container">

            <div class="about-values__layout">

                <!-- LEFT CONTENT -->
                <div class="about-values__intro">

                    <div class="section-decoration" aria-hidden="true">
                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri() . '/assets/images/abstract-design.png'
                            ); ?>"
                            alt=""
                        >
                    </div>

                    <h2>Our Values</h2>

                    <p>
                        Our story is one of continuous growth and evolution.
                        We started as a small team with big dreams, determined
                        to create a real estate platform that transcends the ordinary.
                    </p>

                </div>


                <!-- RIGHT VALUES BOX -->
                <div class="about-values__box">

                    <!-- VALUE 1 -->
                    <article class="about-value">

                        <div class="about-value__title">

                            <div class="about-value__icon">
                                <i class="fa-solid fa-star" aria-hidden="true"></i>
                            </div>

                            <h3>Trust</h3>

                        </div>

                        <p>
                            Trust is the cornerstone of every successful real
                            estate transaction.
                        </p>

                    </article>


                    <!-- VALUE 2 -->
                    <article class="about-value">

                        <div class="about-value__title">

                            <div class="about-value__icon">
                                <i class="fa-solid fa-graduation-cap" aria-hidden="true"></i>
                            </div>

                            <h3>Excellence</h3>

                        </div>

                        <p>
                            We set the bar high for ourselves. From the properties
                            we list to the services we provide.
                        </p>

                    </article>


                    <!-- VALUE 3 -->
                    <article class="about-value">

                        <div class="about-value__title">

                            <div class="about-value__icon">
                                <i class="fa-solid fa-users" aria-hidden="true"></i>
                            </div>

                            <h3>Client-Centric</h3>

                        </div>

                        <p>
                            Your dreams and needs are at the center of our universe.
                            We listen, understand.
                        </p>

                    </article>


                    <!-- VALUE 4 -->
                    <article class="about-value">

                        <div class="about-value__title">

                            <div class="about-value__icon">
                                <i class="fa-solid fa-star" aria-hidden="true"></i>
                            </div>

                            <h3>Our Commitment</h3>

                        </div>

                        <p>
                            We are dedicated to providing you with the highest
                            level of service, professionalism, and support.
                        </p>

                    </article>

                </div>

            </div>

        </div>

    </section>

    <!-- =====================================================
        OUR ACHIEVEMENTS
    ====================================================== -->

    <section class="about-achievements section">

        <div class="container">

            <!-- Section Heading -->
            <div class="about-achievements__heading">

                <div class="section-decoration" aria-hidden="true">
                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri() . '/assets/images/abstract-design.png'
                        ); ?>"
                        alt=""
                    >
                </div>

                <h2>Our Achievements</h2>

                <p>
                    Our story is a testament to our dedication and excellence.
                    We have achieved remarkable milestones and built a strong
                    reputation in the real estate industry.
                </p>

            </div>


            <!-- Achievement Cards -->
            <div class="about-achievements__grid">

                <!-- Achievement 1 -->
                <article class="achievement-card">

                    <h3>3+ Years of Excellence</h3>

                    <p>
                        With over 3 years in the industry, we've established a
                        reputation for excellence and a strong track record of
                        delivering exceptional real estate experiences.
                    </p>

                </article>


                <!-- Achievement 2 -->
                <article class="achievement-card">

                    <h3>Happy Clients</h3>

                    <p>
                        Our dedication to client satisfaction has resulted in
                        numerous successful transactions and long-lasting
                        relationships with our clients.
                    </p>

                </article>


                <!-- Achievement 3 -->
                <article class="achievement-card">

                    <h3>Industry Recognition</h3>

                    <p>
                        We've earned the respect of our peers and industry leaders,
                        reflecting our commitment to excellence and innovation.
                    </p>

                </article>

            </div>

        </div>

    </section>

    <!-- =====================================================
        NAVIGATING THE ESTATEIN EXPERIENCE
    ====================================================== -->

    <section class="about-experience section">

        <div class="container">

            <!-- Section Heading -->
            <div class="about-experience__heading">

                <div class="section-decoration" aria-hidden="true">
                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri() . '/assets/images/abstract-design.png'
                        ); ?>"
                        alt=""
                    >
                </div>

                <h2>Navigating the Estatein Experience</h2>

                <p>
                    At Estatein, we've designed a straightforward process to help
                    you find and purchase your dream property with ease.
                    Here's a step-by-step guide to how it all works.
                </p>

            </div>


            <!-- Experience Steps -->
            <div class="about-experience__grid">

                <!-- Step 01 -->
                <article class="experience-card">

                    <div class="experience-card__step">
                        Step 01
                    </div>

                    <div class="experience-card__content">

                        <h3>Discover a World of Possibilities</h3>

                        <p>
                            Your journey begins with exploring our carefully
                            curated property listings. Use our intuitive search
                            tools to filter properties based on your preferences,
                            including location, type, size, and budget.
                        </p>

                    </div>

                </article>


                <!-- Step 02 -->
                <article class="experience-card">

                    <div class="experience-card__step">
                        Step 02
                    </div>

                    <div class="experience-card__content">

                        <h3>Narrowing Down Your Choices</h3>

                        <p>
                            Once you've found properties that catch your eye,
                            save them to your account or make a shortlist.
                            This allows you to compare and revisit your
                            favorites as you make your decision.
                        </p>

                    </div>

                </article>


                <!-- Step 03 -->
                <article class="experience-card">

                    <div class="experience-card__step">
                        Step 03
                    </div>

                    <div class="experience-card__content">

                        <h3>Personalized Guidance</h3>

                        <p>
                            Have questions about a property or need more
                            information? Our dedicated team of real estate
                            experts is just a call or message away.
                        </p>

                    </div>

                </article>


                <!-- Step 04 -->
                <article class="experience-card">

                    <div class="experience-card__step">
                        Step 04
                    </div>

                    <div class="experience-card__content">

                        <h3>See It for Yourself</h3>

                        <p>
                            Arrange viewings of the properties you're interested
                            in. We'll coordinate with the property owners and
                            accompany you to ensure you get a firsthand look
                            at your potential new home.
                        </p>

                    </div>

                </article>


                <!-- Step 05 -->
                <article class="experience-card">

                    <div class="experience-card__step">
                        Step 05
                    </div>

                    <div class="experience-card__content">

                        <h3>Making Informed Decisions</h3>

                        <p>
                            Before making an offer, our team will assist you
                            with due diligence, including property inspections,
                            legal checks, and market analysis. We want you to
                            be fully informed and confident in your choice.
                        </p>

                    </div>

                </article>


                <!-- Step 06 -->
                <article class="experience-card">

                    <div class="experience-card__step">
                        Step 06
                    </div>

                    <div class="experience-card__content">

                        <h3>Getting the Best Deal</h3>

                        <p>
                            We'll help you negotiate the best terms and prepare
                            your offer. Our goal is to secure the property at
                            the right price and on favorable terms.
                        </p>

                    </div>

                </article>

            </div>

        </div>

    </section>

    <!-- =====================================================
        MEET THE ESTATEIN TEAM
    ====================================================== -->

    <section class="about-team section">

        <div class="container">

            <!-- Section Heading -->
            <div class="about-team__heading">

                <div class="section-decoration" aria-hidden="true">
                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri() . '/assets/images/abstract-design.png'
                        ); ?>"
                        alt=""
                    >
                </div>

                <h2>Meet the Estatein Team</h2>

                <p>
                    At Estatein, our success is driven by the dedication and
                    expertise of our team. Get to know the people behind our
                    mission to make your real estate dreams a reality.
                </p>

            </div>


            <!-- Team Grid -->
            <div class="about-team__grid">


                <!-- Team Member 1 -->
                <article class="team-card">

                    <div class="team-card__image">

                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri() . '/assets/images/about-team-1.png'
                            ); ?>"
                            alt="Max Mitchell"
                        >

                        <a
                            href="#"
                            class="team-card__social"
                            aria-label="Max Mitchell on Twitter"
                        >
                            <i class="fa-brands fa-twitter" aria-hidden="true"></i>
                        </a>

                    </div>


                    <div class="team-card__info">

                        <h3>Max Mitchell</h3>

                        <p>Founder</p>

                    </div>


                    <a
                        href="#"
                        class="team-card__contact"
                        aria-label="Say hello to Max Mitchell"
                    >

                        <span>Say Hello 👋</span>

                        <span class="team-card__contact-icon">
                            <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
                        </span>

                    </a>

                </article>


                <!-- Team Member 2 -->
                <article class="team-card">

                    <div class="team-card__image">

                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri() . '/assets/images/about-team-2.png'
                            ); ?>"
                            alt="Sarah Johnson"
                        >

                        <a
                            href="#"
                            class="team-card__social"
                            aria-label="Sarah Johnson on Twitter"
                        >
                            <i class="fa-brands fa-twitter" aria-hidden="true"></i>
                        </a>

                    </div>


                    <div class="team-card__info">

                        <h3>Sarah Johnson</h3>

                        <p>Chief Real Estate Officer</p>

                    </div>


                    <a
                        href="#"
                        class="team-card__contact"
                        aria-label="Say hello to Sarah Johnson"
                    >

                        <span>Say Hello 👋</span>

                        <span class="team-card__contact-icon">
                            <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
                        </span>

                    </a>

                </article>


                <!-- Team Member 3 -->
                <article class="team-card">

                    <div class="team-card__image">

                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri() . '/assets/images/about-team-3.png'
                            ); ?>"
                            alt="David Brown"
                        >

                        <a
                            href="#"
                            class="team-card__social"
                            aria-label="David Brown on Twitter"
                        >
                            <i class="fa-brands fa-twitter" aria-hidden="true"></i>
                        </a>

                    </div>


                    <div class="team-card__info">

                        <h3>David Brown</h3>

                        <p>Head of Property Management</p>

                    </div>


                    <a
                        href="#"
                        class="team-card__contact"
                        aria-label="Say hello to David Brown"
                    >

                        <span>Say Hello 👋</span>

                        <span class="team-card__contact-icon">
                            <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
                        </span>

                    </a>

                </article>


                <!-- Team Member 4 -->
                <article class="team-card">

                    <div class="team-card__image">

                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri() . '/assets/images/about-team-4.png'
                            ); ?>"
                            alt="Michael Turner"
                        >

                        <a
                            href="#"
                            class="team-card__social"
                            aria-label="Michael Turner on Twitter"
                        >
                            <i class="fa-brands fa-twitter" aria-hidden="true"></i>
                        </a>

                    </div>


                    <div class="team-card__info">

                        <h3>Michael Turner</h3>

                        <p>Legal Counselor</p>

                    </div>


                    <a
                        href="#"
                        class="team-card__contact"
                        aria-label="Say hello to Michael Turner"
                    >

                        <span>Say Hello 👋</span>

                        <span class="team-card__contact-icon">
                            <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
                        </span>

                    </a>

                </article>

            </div>

        </div>

    </section>

    <!-- =====================================================
        OUR VALUED CLIENTS
    ====================================================== -->

    <section class="about-clients section">

        <div class="container">

            <!-- Section Heading -->
            <div class="about-clients__heading">

                <div class="section-decoration" aria-hidden="true">
                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri() . '/assets/images/abstract-design.png'
                        ); ?>"
                        alt=""
                    >
                </div>

                <h2>Our Valued Clients</h2>

                <p>
                    At Estatein, we have had the privilege of working with a diverse
                    range of clients across various industries. Here are some of the
                    clients we've had the pleasure of serving.
                </p>

            </div>


            <!-- =================================================
                CLIENT CAROUSEL
            ================================================== -->

            <div class="clients-carousel">

                <div class="clients-carousel__viewport">

                    <div class="clients-carousel__track">


                        <!-- Client 1 -->
                        <article class="client-card">

                            <div class="client-card__header">

                                <div>

                                    <span class="client-card__year">
                                        Since 2019
                                    </span>

                                    <h3>
                                        ABC Corporation
                                    </h3>

                                </div>

                                <a
                                    href="#"
                                    class="client-card__website"
                                >
                                    Visit Website
                                </a>

                            </div>


                            <div class="client-card__details">

                                <div class="client-card__detail">

                                    <span class="client-card__detail-label">
                                        <i class="fa-solid fa-border-all" aria-hidden="true"></i>
                                        Domain
                                    </span>

                                    <strong>
                                        Commercial Real Estate
                                    </strong>

                                </div>


                                <div class="client-card__detail">

                                    <span class="client-card__detail-label">
                                        <i class="fa-solid fa-bolt" aria-hidden="true"></i>
                                        Category
                                    </span>

                                    <strong>
                                        Luxury Home Development
                                    </strong>

                                </div>

                            </div>


                            <div class="client-card__testimonial">

                                <span class="client-card__testimonial-label">
                                    What They Said 🤗
                                </span>

                                <p>
                                    Estatein's expertise in finding the perfect office
                                    space for our expanding operations was invaluable.
                                    They truly understand our business needs.
                                </p>

                            </div>

                        </article>


                        <!-- Client 2 -->
                        <article class="client-card">

                            <div class="client-card__header">

                                <div>

                                    <span class="client-card__year">
                                        Since 2018
                                    </span>

                                    <h3>
                                        GreenTech Enterprises
                                    </h3>

                                </div>

                                <a
                                    href="#"
                                    class="client-card__website"
                                >
                                    Visit Website
                                </a>

                            </div>


                            <div class="client-card__details">

                                <div class="client-card__detail">

                                    <span class="client-card__detail-label">
                                        <i class="fa-solid fa-border-all" aria-hidden="true"></i>
                                        Domain
                                    </span>

                                    <strong>
                                        Commercial Real Estate
                                    </strong>

                                </div>


                                <div class="client-card__detail">

                                    <span class="client-card__detail-label">
                                        <i class="fa-solid fa-bolt" aria-hidden="true"></i>
                                        Category
                                    </span>

                                    <strong>
                                        Retail Space
                                    </strong>

                                </div>

                            </div>


                            <div class="client-card__testimonial">

                                <span class="client-card__testimonial-label">
                                    What They Said 🤗
                                </span>

                                <p>
                                    Estatein's ability to identify prime retail
                                    locations helped us expand our brand presence.
                                    They are a trusted partner in our growth.
                                </p>

                            </div>

                        </article>


                        <!-- Client 3 -->
                        <article class="client-card">

                            <div class="client-card__header">

                                <div>

                                    <span class="client-card__year">
                                        Since 2020
                                    </span>

                                    <h3>
                                        Skyline Properties
                                    </h3>

                                </div>

                                <a
                                    href="#"
                                    class="client-card__website"
                                >
                                    Visit Website
                                </a>

                            </div>


                            <div class="client-card__details">

                                <div class="client-card__detail">

                                    <span class="client-card__detail-label">
                                        <i class="fa-solid fa-border-all" aria-hidden="true"></i>
                                        Domain
                                    </span>

                                    <strong>
                                        Property Investment
                                    </strong>

                                </div>


                                <div class="client-card__detail">

                                    <span class="client-card__detail-label">
                                        <i class="fa-solid fa-bolt" aria-hidden="true"></i>
                                        Category
                                    </span>

                                    <strong>
                                        Residential Development
                                    </strong>

                                </div>

                            </div>


                            <div class="client-card__testimonial">

                                <span class="client-card__testimonial-label">
                                    What They Said 🤗
                                </span>

                                <p>
                                    Estatein provided us with exceptional guidance
                                    throughout our property investment journey.
                                    Their knowledge and support were invaluable.
                                </p>

                            </div>

                        </article>


                        <!-- Client 4 -->
                        <article class="client-card">

                            <div class="client-card__header">

                                <div>

                                    <span class="client-card__year">
                                        Since 2021
                                    </span>

                                    <h3>
                                        Urban Living Group
                                    </h3>

                                </div>

                                <a
                                    href="#"
                                    class="client-card__website"
                                >
                                    Visit Website
                                </a>

                            </div>


                            <div class="client-card__details">

                                <div class="client-card__detail">

                                    <span class="client-card__detail-label">
                                        <i class="fa-solid fa-border-all" aria-hidden="true"></i>
                                        Domain
                                    </span>

                                    <strong>
                                        Urban Development
                                    </strong>

                                </div>


                                <div class="client-card__detail">

                                    <span class="client-card__detail-label">
                                        <i class="fa-solid fa-bolt" aria-hidden="true"></i>
                                        Category
                                    </span>

                                    <strong>
                                        Mixed-Use Development
                                    </strong>

                                </div>

                            </div>


                            <div class="client-card__testimonial">

                                <span class="client-card__testimonial-label">
                                    What They Said 🤗
                                </span>

                                <p>
                                    Working with Estatein gave our team confidence
                                    throughout every stage of our development
                                    project.
                                </p>

                            </div>

                        </article>


                        <!-- Client 5 -->
                        <article class="client-card">

                            <div class="client-card__header">

                                <div>

                                    <span class="client-card__year">
                                        Since 2017
                                    </span>

                                    <h3>
                                        Prime Estates
                                    </h3>

                                </div>

                                <a
                                    href="#"
                                    class="client-card__website"
                                >
                                    Visit Website
                                </a>

                            </div>


                            <div class="client-card__details">

                                <div class="client-card__detail">

                                    <span class="client-card__detail-label">
                                        <i class="fa-solid fa-border-all" aria-hidden="true"></i>
                                        Domain
                                    </span>

                                    <strong>
                                        Commercial Real Estate
                                    </strong>

                                </div>


                                <div class="client-card__detail">

                                    <span class="client-card__detail-label">
                                        <i class="fa-solid fa-bolt" aria-hidden="true"></i>
                                        Category
                                    </span>

                                    <strong>
                                        Office Development
                                    </strong>

                                </div>

                            </div>


                            <div class="client-card__testimonial">

                                <span class="client-card__testimonial-label">
                                    What They Said 🤗
                                </span>

                                <p>
                                    Estatein helped us find the right location and
                                    structure for our growing commercial portfolio.
                                </p>

                            </div>

                        </article>


                        <!-- Client 6 -->
                        <article class="client-card">

                            <div class="client-card__header">

                                <div>

                                    <span class="client-card__year">
                                        Since 2019
                                    </span>

                                    <h3>
                                        Horizon Developers
                                    </h3>

                                </div>

                                <a
                                    href="#"
                                    class="client-card__website"
                                >
                                    Visit Website
                                </a>

                            </div>


                            <div class="client-card__details">

                                <div class="client-card__detail">

                                    <span class="client-card__detail-label">
                                        <i class="fa-solid fa-border-all" aria-hidden="true"></i>
                                        Domain
                                    </span>

                                    <strong>
                                        Luxury Real Estate
                                    </strong>

                                </div>


                                <div class="client-card__detail">

                                    <span class="client-card__detail-label">
                                        <i class="fa-solid fa-bolt" aria-hidden="true"></i>
                                        Category
                                    </span>

                                    <strong>
                                        Residential Development
                                    </strong>

                                </div>

                            </div>


                            <div class="client-card__testimonial">

                                <span class="client-card__testimonial-label">
                                    What They Said 🤗
                                </span>

                                <p>
                                    Their team consistently delivered thoughtful
                                    solutions and helped us make informed property
                                    decisions.
                                </p>

                            </div>

                        </article>


                        <!-- Client 7 -->
                        <article class="client-card">

                            <div class="client-card__header">

                                <div>

                                    <span class="client-card__year">
                                        Since 2022
                                    </span>

                                    <h3>
                                        Metro Holdings
                                    </h3>

                                </div>

                                <a
                                    href="#"
                                    class="client-card__website"
                                >
                                    Visit Website
                                </a>

                            </div>


                            <div class="client-card__details">

                                <div class="client-card__detail">

                                    <span class="client-card__detail-label">
                                        <i class="fa-solid fa-border-all" aria-hidden="true"></i>
                                        Domain
                                    </span>

                                    <strong>
                                        Property Management
                                    </strong>

                                </div>


                                <div class="client-card__detail">

                                    <span class="client-card__detail-label">
                                        <i class="fa-solid fa-bolt" aria-hidden="true"></i>
                                        Category
                                    </span>

                                    <strong>
                                        Commercial Space
                                    </strong>

                                </div>

                            </div>


                            <div class="client-card__testimonial">

                                <span class="client-card__testimonial-label">
                                    What They Said 🤗
                                </span>

                                <p>
                                    Estatein's property management expertise has
                                    helped us maintain and grow our real estate
                                    portfolio.
                                </p>

                            </div>

                        </article>


                        <!-- Client 8 -->
                        <article class="client-card">

                            <div class="client-card__header">

                                <div>

                                    <span class="client-card__year">
                                        Since 2020
                                    </span>

                                    <h3>
                                        Green Valley Group
                                    </h3>

                                </div>

                                <a
                                    href="#"
                                    class="client-card__website"
                                >
                                    Visit Website
                                </a>

                            </div>


                            <div class="client-card__details">

                                <div class="client-card__detail">

                                    <span class="client-card__detail-label">
                                        <i class="fa-solid fa-border-all" aria-hidden="true"></i>
                                        Domain
                                    </span>

                                    <strong>
                                        Sustainable Development
                                    </strong>

                                </div>


                                <div class="client-card__detail">

                                    <span class="client-card__detail-label">
                                        <i class="fa-solid fa-bolt" aria-hidden="true"></i>
                                        Category
                                    </span>

                                    <strong>
                                        Residential Space
                                    </strong>

                                </div>

                            </div>


                            <div class="client-card__testimonial">

                                <span class="client-card__testimonial-label">
                                    What They Said 🤗
                                </span>

                                <p>
                                    Estatein understood our vision and helped us
                                    transform it into a successful property project.
                                </p>

                            </div>

                        </article>


                        <!-- Client 9 -->
                        <article class="client-card">

                            <div class="client-card__header">

                                <div>

                                    <span class="client-card__year">
                                        Since 2018
                                    </span>

                                    <h3>
                                        Capital Realty
                                    </h3>

                                </div>

                                <a
                                    href="#"
                                    class="client-card__website"
                                >
                                    Visit Website
                                </a>

                            </div>


                            <div class="client-card__details">

                                <div class="client-card__detail">

                                    <span class="client-card__detail-label">
                                        <i class="fa-solid fa-border-all" aria-hidden="true"></i>
                                        Domain
                                    </span>

                                    <strong>
                                        Commercial Real Estate
                                    </strong>

                                </div>


                                <div class="client-card__detail">

                                    <span class="client-card__detail-label">
                                        <i class="fa-solid fa-bolt" aria-hidden="true"></i>
                                        Category
                                    </span>

                                    <strong>
                                        Investment Properties
                                    </strong>

                                </div>

                            </div>


                            <div class="client-card__testimonial">

                                <span class="client-card__testimonial-label">
                                    What They Said 🤗
                                </span>

                                <p>
                                    Estatein's market knowledge gave our investment
                                    team the confidence to move forward.
                                </p>

                            </div>

                        </article>


                        <!-- Client 10 -->
                        <article class="client-card">

                            <div class="client-card__header">

                                <div>

                                    <span class="client-card__year">
                                        Since 2019
                                    </span>

                                    <h3>
                                        Northstar Properties
                                    </h3>

                                </div>

                                <a
                                    href="#"
                                    class="client-card__website"
                                >
                                    Visit Website
                                </a>

                            </div>


                            <div class="client-card__details">

                                <div class="client-card__detail">

                                    <span class="client-card__detail-label">
                                        <i class="fa-solid fa-border-all" aria-hidden="true"></i>
                                        Domain
                                    </span>

                                    <strong>
                                        Property Investment
                                    </strong>

                                </div>


                                <div class="client-card__detail">

                                    <span class="client-card__detail-label">
                                        <i class="fa-solid fa-bolt" aria-hidden="true"></i>
                                        Category
                                    </span>

                                    <strong>
                                        Luxury Properties
                                    </strong>

                                </div>

                            </div>


                            <div class="client-card__testimonial">

                                <span class="client-card__testimonial-label">
                                    What They Said 🤗
                                </span>

                                <p>
                                    Estatein has been a reliable partner and an
                                    important part of our continued growth.
                                </p>

                            </div>

                        </article>

                    </div>

                </div>


                <!-- =================================================
                    CAROUSEL PAGINATION
                ================================================== -->

                <div class="clients-pagination">

                    <span class="clients-pagination__count">
                        <span class="clients-pagination__current">01</span>
                        of 10
                    </span>


                    <div class="clients-pagination__arrows">

                        <button
                            type="button"
                            class="clients-prev"
                            aria-label="Previous clients"
                        >
                            <i class="fa-solid fa-arrow-left" aria-hidden="true"></i>
                        </button>

                        <button
                            type="button"
                            class="clients-next"
                            aria-label="Next clients"
                        >
                            <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </section>
    

</main>

<?php get_footer(); ?>
