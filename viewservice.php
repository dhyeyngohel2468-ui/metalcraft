<?php

include_once 'ownadmin/db.php';
$y = mysqli_query($oo,"select * from web_services where ID = '".$_GET['p']."'");
if($x=mysqli_fetch_array($y)){

?>



<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="service-inner pb-5">
                            <img class="img-fluid w-100" src="<?=$x['img_path']?>" alt="">
                            <div class="service-text px-5 pt-4">
                                <h5 class="text-uppercase"><?=$x['title']?></h4>
                                    <p><?=$x['description']?>
                                    </p>
                            </div>
                            <a class="btn btn-light px-3" href="viewservice.php?p=<?=$x['ID']?>">Read More<i
                                    class="bi bi-chevron-double-right ms-1"></i></a>
                        </div>
                    </div>
                </div>

<?php }?>