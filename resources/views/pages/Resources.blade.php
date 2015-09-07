
        <!-- Intro Section -->
        <section class="inner-intro bg-img overlay-dark light-color parallax parallax-background2" style="background-image: url('{{ asset('sximo/themes/420/img/img/age-req.jpg') }}');">
            <div class="container">
                <div class="row title">
                    <h1>Chicago 420 Resources</h1>
                        <h2>A Inside View of Whats New on Chicago's 420 Scene</h2>
                </div>
            </div>
        </section>
        <section>
            <div class="container">

                <div class="row">
                    <div class="col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1">
                        <ul class="container-filter categories-filter">
                        <?php 
                            $legal = DB::table('legal_resource_categories')
                                ->get();

                            foreach($legal as $row ) {

                                echo '
                                <li>
                                    <a class="categories " data-filter=".'.strtolower($row->title).'">
                                        <span class="'.$row->Icon.'"></span>
                                        '.$row->title.'
                                    </a>
                                </li>';

                            }
                        ?>
                           

                        </ul>
                    </div>
                </div>

                <div class="row container-grid nf-col-4">

                <?php 

                    $legal = DB::table('legal_resources')

                            ->get();


                    foreach($legal as $row ) {

                        echo '  
                            <div class="nf-item  well col-md-12 '.$row->type.' spacing">
                                <div class="item-box text-center">
                                    <a href="'.$row->link.'">
                                        <img alt="1" src="http://a57.foxnews.com/global.fncstatic.com/static/managed/img/fn-latino/health/0/0/smoking%20marijuana.jpg" class="item-container">
                                        <div class="item-mask">
                                            <div class="item-inner">
                                            <span class="resources-box-text '.$row->description.'"></span>
                                                <h4 class="white">'.$row->title.'</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>';

                    }
                ?>

                </div> 
            </div>

        </section>
   
        <!-- End CONTENT -->

        <!-- FOOTER -->
        <footer class="footer">


            <!-- End Copyright Bar -->

        </footer>
        <!-- END FOOTER -->

        <!-- Scroll Top -->
        <a class="scroll-top">
            <i class="fa fa-angle-double-up"></i>
        </a>
        <!-- End Scroll Top -->

    </div>
