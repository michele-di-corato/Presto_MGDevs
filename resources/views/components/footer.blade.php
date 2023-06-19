<footer id="footer" class="text-center text-lg-start bg-white col-text pt-5">

    <!-- Section: Social media -->
    <div id="footer-top" class="d-flex justify-content-center justify-content-lg-between px-5 py-3">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block col-text">
            <span>{{ __('ui.social-links') }}</span>
        </div>

        <!-- Right -->
        <div>
            <a href="{{ route('home') }}" class="me-4  text-decoration-none">
                <i class="footer-icon fab fa-facebook-f"></i>
            </a>
            <a href="{{ route('home') }}" class="me-4 text-decoration-none">
                <i class="footer-icon fab fa-twitter"></i>
            </a>
            <a href="{{ route('home') }}" class="me-4 text-decoration-none">
                <i class="footer-icon fab fa-google"></i>
            </a>
            <a href="{{ route('home') }}" class="me-4 text-decoration-none">
                <i class="footer-icon fab fa-instagram"></i>
            </a>
            <a href="{{ route('home') }}" class="me-4 text-decoration-none">
                <i class="footer-icon fab fa-linkedin"></i>
            </a>
            <a href="{{ route('home') }}" class="me-4 text-decoration-none">
                <i class="footer-icon fab fa-github"></i>
            </a>
        </div>
    </div>

    <!-- Section: Links  -->
    <div class="container-fluid text-center text-md-start px-5 pt-5">
        <div class="row justify-content-center">

            <!-- Lorem -->
            <div class="col-12 col-md-5 mb-4 pe-lg-5">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold mb-4">
                    <a class="text-decoration-none col-text" href="{{ route('home') }}">
                        <img style="width:15px" src="/media/presto.png" alt="Logo Presto.it">
                        Presto.it
                    </a>
                </h6>
                <p class="pe-md-5 me-md-5">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum nisi eveniet eaque quod
                    accusamus quibusdam rerum iure ipsa officiis sapiente aliquid.
                </p>

            </div>

            <!-- Link -->
            <div class="col-12 col-md-2 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                    {{ __('ui.links') }}
                </h6>
                <p>
                    <a href="{{ route('home') }}" class="footer-link text-reset">Home</a>
                </p>
                <p>
                    <a href="{{ route('create_announce') }}" class="footer-link text-reset">{{ __('ui.add-announce') }}</a>
                </p>
                <p>
                    <a href="{{ route('show_announces') }}" class="footer-link text-reset">{{ __('ui.show-announces') }}</a>
                </p>
                <p>
                    <a href="{{ route('register') }}" class="footer-link text-reset">{{ __('ui.drop-register') }}</a>
                </p>
            </div>

            <!-- Contact -->
            <div class="col-12 col-md-3 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">{{ __('ui.contact') }}</h6>
                <span class="text-center text-md-start">
                    <p><i class="fas fa-home me-3 col-text"></i>{{ __('ui.work-site') }}</p>
                    <p><i class="fas fa-envelope me-3 col-text"></i>info@presto.com</p>
                    <p><i class="fas fa-phone me-3 col-text"></i>+ 01 234 567 88</p>
                    <p><i class="fas fa-print me-3 col-text"></i>+ 01 234 567 89</p>
                </span>
            </div>

            <!-- Work -->
            <div class="col-12 col-md-2 mb-4 text-md-start text-lg-end">
                <!-- Lavora con noi -->
                <h6 class="text-uppercase fw-bold mb-4">
                    {{ __('ui.work-contact-title') }}
                </h6>
                <p>{{ __('ui.work-contact-sub') }}</p>
                <a href="{{ route('form_revisor') }}" class="btn mt-2 button_revisor">{{ __('ui.work-btn') }}
                </a>
            </div>

        </div>
    </div>

    <!-- Copyright -->
    <div id="footer-bottom" class="text-center p-3">
        © 2023 {{ __('ui.copyright') }}
        <a class="text-reset fw-bold" href="{{ route('home') }}">Presto.it</a>
    </div>

</footer>
