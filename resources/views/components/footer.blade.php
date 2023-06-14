<footer id="footer" class="text-center text-lg-start bg-white col-text">

    <!-- Section: Social media -->
    <div id="footer-top" class="d-flex justify-content-center justify-content-lg-between px-5 pb-3">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block col-text">
            <span>Collegati con noi sui social network:</span>
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
        <!-- Grid row -->
        <div class="row justify-content-center">
            <!-- Grid column -->
            <div class="col-12 col-md-4 mb-4">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold mb-4">
                    <a class="text-decoration-none col-text" href="{{ route('home') }}">
                        <img style="width:15px" src="/media/presto.png" alt="Logo Presto.it">
                        Presto.it
                    </a>
                </h6>
                <p class="pe-md-5">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum nisi eveniet eaque quod
                    accusamus quibusdam rerum iure ipsa officiis sapiente aliquid, ratione tempora quidem
                    necessitatibus ipsum perferendis provident laboriosam sed.
                </p>

            </div>

            <!-- Grid column -->
            <div class="col-6 col-md-2 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                    Prodotti
                </h6>
                <p>
                    <a href="{{ route('home') }}" class="footer-link text-reset">Lorem</a>
                </p>
                <p>
                    <a href="{{ route('home') }}" class="footer-link text-reset">Lorem</a>
                </p>
                <p>
                    <a href="{{ route('home') }}" class="footer-link text-reset">Lorem</a>
                </p>
                <p>
                    <a href="{{ route('home') }}" class="footer-link text-reset">Lorem</a>
                </p>
            </div>

            <!-- Grid column -->
            <div class="col-6 col-md-2 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                    Link Utili
                </h6>
                <p>
                    <a href="{{ route('home') }}" class="footer-link text-reset">Lorem</a>
                </p>
                <p>
                    <a href="{{ route('home') }}" class="footer-link text-reset">Lorem</a>
                </p>
                <p>
                    <a href="{{ route('home') }}" class="footer-link text-reset">Lorem</a>
                </p>
                <p>
                    <a href="{{ route('home') }}" class="footer-link text-reset">Lorem</a>
                </p>
            </div>


            <!-- Grid column -->
            <div class="col-12 col-md-2 mb-4 ">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                <p><i class="fas fa-home me-3 text-dark"></i> New York, US</p>
                <p>
                    <i class="fas fa-envelope me-3 text-dark"></i>
                    info@example.com
                </p>
                <p><i class="fas fa-phone me-3 text-dark"></i>+ 01 234 567 88</p>
                <p><i class="fas fa-print me-3 text-dark"></i>+ 01 234 567 89</p>
            </div>

            <!-- Grid column -->
            <div class="col-12 col-md-2 mb-4">
                <!-- Lavora con noi -->
                <h6 class="text-uppercase fw-bold mb-4">
                    Lavora con noi
                </h6>
                <p>Registrati e candidati qui</p>
                <a href="{{ route('form_revisor') }}" class="btn mt-3 ms-md-3 button_revisor">Diventa revisore</a>
            </div>

        </div>
    </div>


    <!-- Copyright -->
    <div id="footer-bottom" class="text-center p-3">
        © 2023 Copyright:
        <a class="text-reset fw-bold" href="{{ route('home') }}">Presto.it</a>
    </div>
</footer>
