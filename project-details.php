<?php include('header.php'); ?>
<!--Breadcrumb Area Start-->
<section class="fiscal-breadcromb-area section_50">
    <div class="overlay"></div><!--.overlay-->
    <div class="container">
        <div class="row">
            <div class="fiscal-breadcromb">
                <div class="col-md-6">
                    <div class="breadcromb-left">
                        <h3>All projects</h3>
                    </div><!--.breadcromb-left-->
                </div>
                <div class="col-md-6">
                    <div class="breadcromb-right">
                        <ul>
                            <li><a href="index.html"><i class="fa fa-home"></i>home</a></li>
                            <li>/</li>
                            <li>All projects</li>
                            <li>/</li>
                            <li>Project Details</li>
                        </ul>
                    </div><!--.breadcromb-right-->
                </div>
            </div>
        </div><!--.row-->
    </div><!--.container-->
</section>
<!--Breadcrumb Area End-->
<!--Projects Area Start-->
<section class="fiscal-projects-area section-padding">
    <div class="container">
        <div class="row">
            <div class="fiscal-projects-details">
                <div class="main-content">
                    <h3>about this project</h3>
                    <p>Standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets.</p>
                    <h3>about this industry</h3>
                    <p>Standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets.</p>                    
                    <h3>project status</h3>
                    <canvas id="pro_details_chart"></canvas>
                </div>
            </div><!--.fiscal-projects-->
        </div><!--.row-->
    </div><!--.container-->
</section>
<!--Projects Area End-->
<!--Related Project Area Start-->
<section class="fiscal-related-project-area section-padding">
    <div class="container">
        <div class="row">
           <div class="text-center">
               <h2 class="section-title">related project</h2>
           </div>
            <div class="fiscal-related-project">
                <div class="col-md-4">
                    <div class="single-related">
                        <a href="project-details.php" class="img-contain-isotope">
                            <div class="project-single-item">
                                <img alt="Image" class="img-responsive" src="assets/img/projects/5.jpg">
                                <div class="project-img-overlay">
                                    <h4>project title here</h4>
                                    <p>Industry Name</p>
                                </div>
                            </div><!--.project-single-item-->
                        </a><!--.img-contain-isotope-->
                    </div><!--.single-related-->
                </div><!--col-md-4-->
                <div class="col-md-4">
                    <div class="single-related">
                        <a href="project-details.php" class="img-contain-isotope">
                            <div class="project-single-item">
                                <img alt="Image" class="img-responsive" src="assets/img/projects/5.jpg">
                                <div class="project-img-overlay">
                                    <h4>project title here</h4>
                                    <p>Industry Name</p>
                                </div>
                            </div><!--.project-single-item-->
                        </a><!--.img-contain-isotope-->
                    </div><!--.single-related-->
                </div><!--col-md-4-->
                <div class="col-md-4">         
                    <div class="single-related">
                        <a href="project-details.php" class="img-contain-isotope">
                            <div class="project-single-item">
                                <img alt="Image" class="img-responsive" src="assets/img/projects/5.jpg">
                                <div class="project-img-overlay">
                                    <h4>project title here</h4>
                                    <p>Industry Name</p>
                                </div>
                            </div><!--.project-single-item-->
                        </a><!--.img-contain-isotope-->
                    </div><!--.single-related-->
                </div><!--col-md-4-->       
            </div><!--.fiscal-related-project-->
        </div><!--.row-->
    </div><!--.container-->
</section>
<!--Related Project Area End-->
<?php include('footer.php'); ?>
<!-- Chart Script -->
<script type="text/javascript">
    var ctx = document.getElementById('pro_details_chart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JULY", "AUG", "SEP", "OCT", "NOV", "DEC"],
            datasets: [{
                label: "Company dataset",
                backgroundColor: "rgba(39, 166, 155, 0.2)",
                borderColor: "rgba(39, 166, 155, 1)",
                borderWidth: 1,
                hoverBackgroundColor: "rgba(39, 166, 155, 0.4)",
                hoverBorderColor: "rgba(39, 166, 155, 1)",
                data: [100,200,300,700,500,600,500,800,900,1000,900,1200],
            }]
        },
        options: {}
    });
</script>