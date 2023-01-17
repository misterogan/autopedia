    <footer>
        <div class="container">
            <div class="row top-footer">
                <div class="col-md-6 col-12 box-logo">
                    <div class="box-img">
                        <img src="{{ asset('assets/images/png/logo-white.png') }}" class="logo img-fluid" alt="logo">
                    </div>
                </div>
                <div class="col-md-6 col-12 menu-footer">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">{{__("Tentang Perusahaan")}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('/transparansi')}}">{{__("Transparansi")}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('career') }}">{{__("Karir")}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('/hubungi-kami')}}">{{__("Hubungi Kami")}}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row middle-footer">
                <div class="col-12 box-left">
                    <p class="text-socmed m-0">
                        {{__("Sosial Media Kami:")}}
                    </p>
                </div>
                <div class="col-12 menu-footer">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="https://web.facebook.com/profile.php?id=100072935574718" target="_blank">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.tiktok.com/@autopediaid" target="_blank">
                                <i class="fa-brands fa-tiktok"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.instagram.com/autopediaid/" target="_blank">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.youtube.com/channel/UC4SuS_3e6_XoZ7K-xgQ4fjQ" target="_blank">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://twitter.com/autopediaid" target="_blank">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.linkedin.com/company/autopediaid/" target="_blank">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row bottom-footer">
                <div class="col-md-6 col-12 box-left">
                    <p class="text-copyright m-0">
                        © 2022 PT Autopedia Sukses Lestari Tbk. All rights reserved.
                    </p>
                </div>
                <div class="col-md-6 col-12 menu-footer">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('/sitemap')}}">Sitemap</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('/kebijakan-privasi')}}">{{__("Kebijakan Privasi")}}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- <div class="box-copyright text-center">
            <p class="copyright shippori">
                ©2022 BRANZ Mega Kuningan. Official Site Tokyu Land Indonesia
            </p>
        </div> --}}
    </footer>

