<div class="contents">
     <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title"></h4>

                    </div>

            </div>
        </div>
<!-- CKEDITOR -->
<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
 <div class="form-element">
       <div class="row">
                <div class="col-lg-12">
                    <div class="card card-default card-md mb-4">
                        <div class="card-header">
                            <h6>Create Quiz</h6>
                        </div>

                            <?php
                             $wheredet = ($this->input->get('id'));  
                            ?>

                            <?= form_open_multipart("",array("id"=>"add_quiz"))?>
                                <input type="hidden" class="form-control module_id" name="module_id" placeholder="" value="<?php echo   $wheredet ?>">
                     
         
                        <div class="card-body py-md-25">

                        <div class="col-md-12">
                            <label>Title</label>
                            <input type="text" class="form-control form-control-lg title" value="">
                            <span class="error_quiz_title" style="font-size:10px;color:red"></span>
                        </div>
                        <div class="col-md-12">
                            <label>Description</label>
                            <textarea type="text" class="form-control form-control-lg module_description" name="module_description" id="module_description" ></textarea>
       
                        </div> 
                        <script>
                            CKEDITOR.replace( 'module_description' );
                        </script>

     <div class="col-md-12">
    <div class="row">
    <div class="col-md-11"></div>
    <div class="col-md-1">
        <br>
        <br>
         <button type="button" class="btn btn-md btn-primary add_module_row" style="height: 30px;padding:0 10px;line-height:10px" >+</button>
    </div>
    </div>
    
 </div>

<div class="col-md-12 module_section">
<div class="row">   

    <div class="col-md-11 question_row"><label>Question</label>
        <input type="hidden" name="questionnums[]" class="questionnums" value="1">
        <input type="text" class="form-control form-control-lg question" name="question1" >
    </div>
    
     <div class="col-md-1" style="padding-top:30px;">
        <button type="button" class="btn btn-md btn-primary btn-submit remove_module_row"  style="height: 30px;padding:0 10px;line-height:10px">-</button>
    </div>

    <div class="col-md-6 question_module" ></div>
    <div class="col-md-1" style="padding-top:30px;">
        <button type="button" class="btn btn-md btn-primary add_question"  style="height: 30px;padding:0 10px;line-height:10px"  qurstion_number="1" >+</button>
    </div> 
</div>
</div>

<!-- <div class="row">
    <lable>answer</lable>
</div>
<div class="row">
    <div class="col-md-1"><input type="checkbox" name="corr_answer"></div>
    <div class="col-md-10"><input type="text" class="form-control form-control-lg"name="answer'+qnum+'[]"></div>  
    <div class="col-md-1" style="padding-top:30px;"><button type="button" class="btn btn-md btn-primary remove_module_row"  style="height: 30px;padding:0 10px;line-height:10px">-</button></div>
</div> -->



<script>
    let qunumber=1;

    $(".add_module_row").click(function(e){
        e.preventDefault();
        qunumber=qunumber+1;
    $(".module_section").append('<div class="row">\n\
                                <div class="col-md-11 question_row"><label>Question</label>\n\
                                <input type="hidden" name="questionnums[]" class="questionnums" value="'+qunumber+'">\n\
                                <input type="text" class="form-control form-control-lg question"  name="question'+qunumber+'" value="">\n\
                                </div> <div class="col-md-1" style="padding-top:30px;">\n\
                                <button type="button" class="btn btn-md btn-primary remove_module_row"  style="height: 30px;padding:0 10px;line-height:10px">-</button>\n\
                                </div> <div class="row"><div class="col-md-6 question_module"></div>\n\
                                <div class="col-md-1" style="padding-top:30px;"><button type="button" class="btn btn-md btn-primary add_question"  style="height: 30px;padding:0 10px;line-height:10px" qurstion_number="'+qunumber+'" >+</button>\n\
                                </div> </div>'
                                );
    

                                CKEDITOR.replace("module_description"+qunumber);


    });

    let answernumber=0;
     $("body").on("click",".add_question",function(e){
        e.preventDefault();
    var qnum=$(this).attr("qurstion_number");
    answernumber=answernumber+1;

        $(this).parent().parent().find('.question_module').append('<div class="row"><lable>answer</lable></div>\n\
                                                                    <div class="row  answer_row " value="'+qnum+'">\n\
                                                                    <div class="col-md-11 d-flex">\n\
                                                                    <input type="hidden" class="qnum" value="'+qnum+'">\n\
                                                                    <input type="checkbox" class="cranswer correct_answer'+qnum+'" >\n\
                                                                    <input type="text" class="form-control form-control-lg q_answer"   value="" style="margin-left:10px">\n\
                                                                    </div> \n\
                                                                    <div class="col-md-1" style="padding-top:30px;">\n\
                                                                    <button type="button" class="btn btn-md btn-primary remove_module_row"  style="height: 30px;padding:0 10px;line-height:10px">-</button>\n\
                                                                    </div> </div>'
                                                                );
    });

</script>
                                                                                                            
                                    <div class="col-md-6">
                                        <div class="form-group mb-0">
                                            <button type="button"  class="btn btn-lg btn-primary " id="add-quiz">Submit</button>
                                        </div>
                                    </div>
                                </div>
                    <?=form_close()?> 
                        </div>
                    </div>
                    <!-- ends: .card -->
                </div>
            </div>
        </div>                
        </div>
            
<div class="succmod" style="width: 27%;
top: 45%;
left: 38%;
z-index: 9999;
position: fixed;display: none;
color: white;font-size: 25px;font-weight: 700;
background: #1F4363;padding: 50px">
Successfully Registered
</div>



<script>

    $("body").on('click',".remove_module_row",function(){
     $(this).parent().parent().remove();
})   


    $("#add-quiz").click(function (e) {
        // $('.loadingc').css("display", "block");
        e.preventDefault();
        const arr_answers = new Array();
        $(".answer_row").each(function () { 
            var ansrow = [];
            var qnum = $(this).find(".qnum").val();
            var ca = ($(this).find(".cranswer").is(':checked'))? "1" :"0";
           // var ca =  ($(".correct_answer"+$(this).attr("value")).is(':checked'))? "1" :"0"; ;
            var qa = $(this).find(".q_answer").val();
           
            ansrow = {"qnum":qnum,"ca": ca, "qa": qa};
            // console.log(ansrow);
            arr_answers.push(ansrow);
            console.log(arr_answers);
           
        });
      
        
        const question_arry = new Array();
            $(".question_row").each(function () { 
                var quesrow = [];
                var qnum1 = $(this).find(".questionnums").val();
               

                var question =   $(this).find(".question").val();
                // alert(qnum1);
                // alert(question);
                
                // var qa = $(this).find(".q_answer").val();
           
                quesrow = {"qnum1":qnum1,"question": question};
                console.log(quesrow);
                question_arry.push(quesrow);
                console.log(question_arry);


                
           
            });
          
            $.ajax({
                type: 'post',
                dataType: "JSON",
                url: '<?php echo base_url(); ?>index.php/quiz/func_add_quiz',
               
                data: {
                    'mid': $(".module_id").val(),
                    'title': $(".title").val(),
                    'describe': CKEDITOR.instances['module_description'].getData(),
                    // 'question': $(".question").val(),
                    // 'quiz_id': $(".questionnums").val(),
                    "questionarr": JSON.stringify(question_arry),
                    "anssarr": JSON.stringify(arr_answers)
                },
                success: function (data) {
                   $(".error_module_id").html("");
                   $(".error_quiz_title").html("");

                   if (data['status'] == "true") {


                    setTimeout(function () {
                        // $('.loadingc').css("display", "none");
                        // $(".succmod").fadeIn(2000);
                        // $(".succmod").fadeOut(2000);
                        // window.location = "<?php echo base_url() ?>index.php/quiz"
                    }, 5000);

                } else {

                        // var div = document.createElement("div");
                        // div.innerHTML = ;
                       $(".error_module_id").html(data.module_id);
                       $(".error_quiz_title").html(data.quiz_title);
                       $('.loadingc').css("display", "none");
                  }

              }
          });
        // }
    });
</script>

