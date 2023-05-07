<body>
    <main class="main-wrapper">
       <?php $this->load->view("frontend/template/headermenu")?>
        <!-- Page Banner Section Start -->
        <div class="page-banner bg-color-05">
            <div class="page-banner__wrapper">
                <div class="container"> 
                    <!-- Page Breadcrumb Start -->
                   <div class="page-breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index.php">Home</a></li>
                            <li class="breadcrumb-item active">Courses</li>
                        </ul>
                    </div> 
                    <!-- Page Breadcrumb End -->
                    <!-- Page Banner Caption Start -->
                    <div class="page-banner__caption text-center">
                        <h2 class="page-banner__main-title">COURSES</h2>
                    </div>
                    <!-- Page Banner Caption End -->
                 </div>
            </div>
        </div>
        <!-- Page Banner Section End -->
        <!-- Offcanvas Start -->
        <div class="offcanvas offcanvas-end offcanvas-mobile" id="offcanvasMobileMenu" style="background-image: url(<?php echo base_url(); ?>assets/frontend/images/mobile-bg.jpg);">
            <div class="offcanvas-header bg-white">
                <div class="offcanvas-logo">
                    <a class="offcanvas-logo__logo" href="#"><img src="<?php echo base_url(); ?>assets/images/dark-logo.png" alt="Logo"></a>
                </div>
                <button type="button" class="offcanvas-close" data-bs-dismiss="offcanvas"><i class="fal fa-times"></i></button>
            </div>

            <div class="offcanvas-body">
                <nav class="canvas-menu">
                    <ul class="offcanvas-menu">
                        <li><a class="active" href="<?php echo base_url(); ?>index.php"><span>Home</span></a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/frontend/course"><span>Courses</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Offcanvas End -->
       
        <!-- Courses Start -->
        <div class="courses-section section-padding-01">
            <div class="container">
            
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="grid">
                        <div class="row gy-6">
                            <div class="row filter_data" >
                           
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="page-pagination" id="pagination_link"> 
                 </div>
            </div>
        </div>
        <!-- Courses End -->
       
        <?php $this->load->view("frontend/template/footermenu")?>

    </main>



    
    <!-- Edumall Demo Option End -->
    <script type="text/javascript">
    $(document).ready(function(e){
       
       
        filter_data(1);

        function filter_data(page)
        {
            $('.filter_data').html('<div>dfrgdrey</div>');
            // var action = 'fetch_data';
            // var minimum_price = $('#hidden_minimum_price').val();
            // var maximum_price = $('#hidden_maximum_price').val();
            // var stall = $('.stall').val();
            // alert(area);
            // var category = get_filter('category');
            // alert(category); 
            // var storage = get_filter('storage');area:area,
            $.ajax({
                url:"<?php echo base_url(); ?>index.php/frontend/fetch_data/"+page,
                method:"POST",
                dataType:"JSON",
                data:{
                    // action:action, 
                    // minimum_price:minimum_price,
                    // maximum_price:maximum_price,
                    // stall:stall,
                    // category:category
                    },
                success:function(data)
                {

                    console.log(data.product_list);
                    $('.filter_data').html(data.product_list);
                    $('#pagination_link').html(data.pagination_link);
           
                }
           
            })
        }

        // function get_filter(class_name)
        // {
        //     var filter = [];
        //     $('.'+class_name+':checked').each(function(){
        //         // alert($(this).val());
        //         filter.push($(this).val());
        //     });
        //     return filter;
        // }

        $(document).on('click', '.pagination li a', function(event){
            event.preventDefault();
            var page = $(this).data('ci-pagination-page');
            filter_data(page);
        });

        // $('.common_selector').click(function(){
        //     // alert()
        //     filter_data(1);
        // });
        // $('.common_combo').change(function(){
       
        //     filter_data(1);
        // });

       
        // $.ajax({
        //         url:"<?php echo base_url(); ?>index.php/frontend/get_price/",
        //         method:"POST",
        //         dataType:"JSON",
        //         data:{ 
        //             },
        //         success:function(data)
        //         { 
        //         $( "#slider-range" ).slider({
        //         range: true,
        //         min:parseInt(data.min_price),
        //         max:parseInt(data.max_price),
        //         values:[parseInt(data.min_price),parseInt(data.max_price)],
        //         step:100,
        //         slide: function( event, ui ) {
        //             $( "#amount" ).html( "Rs" + ui.values[ 0 ] + " - Rs" + ui.values[ 1 ] );
        //             $( "#hidden_minimum_price" ).val(ui.values[ 0 ]);
        //             $( "#hidden_maximum_price" ).val(ui.values[ 1 ]);
        //             filter_data(1);
        //         }
        //     });
        //     $( "#amount" ).html( "Rs " + $( "#slider-range" ).slider( "values", 0 ) +".00"+ " - Rs " + $( "#slider-range" ).slider( "values", 1 )+".00" );
        //         }
           
        // })

    });

    // $("body").on("click",".add_cart",function(e){
    //     e.preventDefault(); 
    //     // var availItems= [];
    //     // var avArr={};
    //     // avArr[]=1;
    //     // availItems.push(avArr);
    //         $.ajax({
    //             type: "post",
				
    //             url: "<?php echo base_url(); ?>index.php/frontend/add_to_cart",
    //             data: {
    //                 product_id:$(this).attr("id"),
    //                 func_n: "add_to_cart",
    //             },
    //             success: function (data) {
    //             //    setTimeout(function(){ window.location.href="<?php echo base_url()?>index.php/cart";  });
    //             }
	
    //         });
			
			
    // });

   

</script>

