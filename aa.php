<?php
            include_once 'ownadmin/db.php';
            $y = mysqli_query($oo,'select * from web_services');
            
            while($x = mysqli_fetch_array($y)) {
                extract($x);
            
            
            ?>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="service-inner pb-5">
                            <img class="img-fluid w-100" src="<?=$img_path?>" alt="">
                            <div class="service-text px-5 pt-4">
                                <h5 class="text-uppercase"><?=$title?></h4>
                                    <p><?=$description?>
                                    </p>
                            </div>
                            <a class="btn btn-light px-3" href="">Read More<i
                                    class="bi bi-chevron-double-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
               <?php

            }
?>