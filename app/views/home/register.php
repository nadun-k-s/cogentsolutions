<!-- <section id="register" class="bg-white py-5">
    <div class="container text-center">
        <h2>Register</h2>
        <form id="registerForm" class="mx-auto" style="max-width: 500px;">
            <div class="mb-3">
                <input type="text" name="name" class="form-control" placeholder="Name" required>
            </div>
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <button class="btn btn-primary w-100" type="submit">Submit</button>
        </form>
        <div id="formMessage" class="mt-3"></div>
    </div>
</section> -->

<section>
        <div id="register"></div>
        <!-- Register -->
        <div class="registration-section aos-init aos-animate" id="register" data-aos="fade-bottem" data-aos-duration="1000">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-md-5 col-12">
                        <h2 class="display-4">Register Now</h2>
                        <p class="h4">Join us for an unforgettable experience!</p>
                    </div>
                    <div class="col-md-7 col-12">
                        <div class="registration-glass">
                            <div id="loading" style="display: none;">
                                <img src="https://cogentsolutions.ae/views/img/vide.gif" alt="Loading..." class="loader-image mt-10" width="200">
                            </div>
                            <!-- <h2 class="registration-title">Register Now</h2>
      <p class="registration-subtitle">Join us for an unforgettable experience!</p> -->
                            <form id="registration-form" class="registration-form">
                                <div class="form-group">
                                    <input type="text" id="first_name" name="first_name" placeholder="First Name" required="">
                                    <span id="first_name-error" class="error-message"></span>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="last_name" name="last_name" placeholder="Last Name" required="">
                                    <span id="last_name-error" class="error-message"></span>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="job_title" name="job_title" placeholder="Job Title" required="">
                                    <span id="job_title-error" class="error-message"></span>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="company" name="company" placeholder="Company" required="">
                                    <span id="company-error" class="error-message"></span>
                                </div>
                                <div class="form-group">
                                    <input type="tel" id="phone" name="phone" placeholder="Mobile Number" required="">
                                    <span id="phone-error" class="error-message"></span>
                                </div>
                                <div class="form-group">
                                    <input type="email" id="email" name="email" placeholder="Email Address" required="">
                                    <span id="email-error" class="error-message"></span>
                                </div>
                                <div class="form-group">
                                    <input type="url" id="company_website_URL" name="company_website_URL" placeholder="Company Website URL" required="">
                                </div>
                                <div class="form-group checkbox-group">
                                    <input type="checkbox" id="privacy_policy" name="privacy_policy" required="">
                                    <label for="privacy_policy">
                                        By filling out the registration form to attend our event, you agree and consent to <a href="https://cogentsolutions.ae/privacy-policy" target="_blank">Cogent Solutions
                                            Privacy Policy</a>.
                                    </label>
                                    <span id="privacy_policy-error" class="error-message"></span>
                                </div>
                                <button type="submit" class="submit-button">Register</button>
                            </form>
                            <div id="loading">
                                <img src="path/to/your/loader.gif" alt="Loading..." class="loader-image">
                            </div>
                            <div class="form-content"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>