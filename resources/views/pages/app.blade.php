@include('pages.partials.header')

        @yield('content')
        <!--
            Lines Grid
        -->
        <div class="lines-grid">
            <div class="row">
                <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
                <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3">
                    <div class="lines">
                        <div class="line-1"></div>
                        <div class="line-2" style="animation-delay: 10s;"></div>
                    </div>
                </div>
                <div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3">
                    <div class="lines">
                        <div class="line-1"></div>
                    </div>
                </div>
                <div class="col col-m-0 col-t-0 col-d-0 col-d-lg-3">
                    <div class="lines">
                        <div class="line-1"></div>
                        <div class="line-2" style="animation-delay: 0s;"></div>
                    </div>
                </div>
            </div>
        </div>

@include('pages.partials.footer')
