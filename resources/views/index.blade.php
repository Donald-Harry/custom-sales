@extends('layouts.homelayout')

@section('content')
    <section id="hero" class="hero section">

            <div class="hero-content">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="content">
                                <h1 class="text-primary">GSA Auctions</h1>
                                <p>We partner with forward-thinking companies to accelerate growth, optimize operations,
                                    and unlock their full potential through innovative consulting approaches and
                                    data-driven insights.</p>
                                <div class="cta-group">
                                    <a href="#about" class="btn-primary">Start Your Journey</a>
                                    <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                                        class="btn-secondary glightbox">
                                        <i class="bi bi-play-circle"></i>
                                        <span>Watch Our Story</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="hero-image">
                                <img src="assets/img/about/about-8.webp" alt="Corporate Business" class="img-fluid">
                                <div class="floating-card" data-aos="fade-up" data-aos-delay="300">
                                    <div class="card-content">
                                        <div class="metric">
                                            <span class="number">150+</span>
                                            <span class="label">Successful Projects</span>
                                        </div>
                                        <div class="metric">
                                            <span class="number">98%</span>
                                            <span class="label">Client Satisfaction</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

               

            </div>

        </section>

        <!-- Contact Section -->
        <section id="contact" class="contact section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Need Help? Contact Us</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-stretch">
                    <div class="col-lg-7 order-lg-1 order-2" data-aos="fade-right" data-aos-delay="200">
                        <div class="contact-form-container">
                            <div class="form-intro">
                                <h2>Let's Start a Conversation</h2>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat nulla pariatur excepteur sint occaecat cupidatat.</p>
                            </div>

                            <form action="forms/contact.php" method="post" class="php-email-form contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-field">
                                            <input type="text" name="name" class="form-input" id="userName"
                                                placeholder="Your Name" required="">
                                            <label for="userName" class="field-label">Name</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-field">
                                            <input type="email" class="form-input" name="email" id="userEmail"
                                                placeholder="Your Email" required="">
                                            <label for="userEmail" class="field-label">Email</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-field">
                                            <input type="tel" class="form-input" name="phone" id="userPhone"
                                                placeholder="Your Phone">
                                            <label for="userPhone" class="field-label">Phone</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-field">
                                            <input type="text" class="form-input" name="subject" id="messageSubject"
                                                placeholder="Subject" required="">
                                            <label for="messageSubject" class="field-label">Subject</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-field message-field">
                                    <textarea class="form-input message-input" name="message" id="userMessage" rows="5"
                                        placeholder="Tell us about your project" required=""></textarea>
                                    <label for="userMessage" class="field-label">Message</label>
                                </div>

                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>

                                <button type="submit" class="send-button">
                                    Send Message
                                    <span class="button-arrow">→</span>
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-5 order-lg-2 order-1" data-aos="fade-left" data-aos-delay="300">
                        <div class="contact-sidebar">
                            <div class="contact-header">
                                <h3>Get in Touch</h3>
                                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim
                                    veniam quis nostrud.</p>
                            </div>

                            <div class="contact-methods">
                                <div class="contact-method" data-aos="fade-in" data-aos-delay="350">
                                    <div class="contact-icon">
                                        <i class="bi bi-geo-alt"></i>
                                    </div>
                                    <div class="contact-details">
                                        <span class="method-label">Address</span>
                                        <p>892 Park Avenue, Manhattan<br>New York, NY 10075</p>
                                    </div>
                                </div>

                                <div class="contact-method" data-aos="fade-in" data-aos-delay="400">
                                    <div class="contact-icon">
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                    <div class="contact-details">
                                        <span class="method-label">Email</span>
                                        <p>hello@businessdemo.com</p>
                                    </div>
                                </div>

                                <div class="contact-method" data-aos="fade-in" data-aos-delay="450">
                                    <div class="contact-icon">
                                        <i class="bi bi-telephone"></i>
                                    </div>
                                    <div class="contact-details">
                                        <span class="method-label">Phone</span>
                                        <p>+1 (555) 789-2468</p>
                                    </div>
                                </div>

                                <div class="contact-method" data-aos="fade-in" data-aos-delay="500">
                                    <div class="contact-icon">
                                        <i class="bi bi-clock"></i>
                                    </div>
                                    <div class="contact-details">
                                        <span class="method-label">Hours</span>
                                        <p>Monday - Friday: 9AM - 6PM<br>Saturday: 10AM - 4PM</p>
                                    </div>
                                </div>
                            </div>

                            <div class="connect-section" data-aos="fade-up" data-aos-delay="550">
                                <span class="connect-label">Connect with us</span>
                                <div class="social-links">
                                    <a href="#" class="social-link">
                                        <i class="bi bi-linkedin"></i>
                                    </a>
                                    <a href="#" class="social-link">
                                        <i class="bi bi-twitter-x"></i>
                                    </a>
                                    <a href="#" class="social-link">
                                        <i class="bi bi-instagram"></i>
                                    </a>
                                    <a href="#" class="social-link">
                                        <i class="bi bi-facebook"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection