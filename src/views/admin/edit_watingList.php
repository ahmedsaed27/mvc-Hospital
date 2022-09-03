<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- aos css file cdn link  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <!-- magnific popup css cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <!--bootstrap cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap-grid.min.css" />
    <!-- font awesome link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <!-- custom css file link  -->
    <link rel="stylesheet" href="../../layout/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../layout/css/style.css">
</head>
<body>
<section class="contact" id="contact">

<div class="container min-vh-100">
    <div class="row justify-content-center">

        <h1 class="heading"><span>'</span> Add Patient <span>'</span></h1>

        <div class="col-md-10 aos-init aos-animate" data-aos="flip-down">
                <? foreach($post as $post): ?>
            <form action="<?= url('admin/updatePatient_fromWatingList') ?>" method="post">
                
                <div class="inputBox">
                    <input type="text" placeholder="رقم المسلسل" id="idNumber" value = "<?= $post['Serial_Number'] ?>" name="Serial_Number">
                    <input type="date" placeholder="التاريخ" id="date" name ="date" value ="<?= $post['date'] ?>">
                    <input type="text" placeholder="اسم المريض " id="pateintName" name ="name" value ="<?= $post['name'] ?>">
                    <input type="text" placeholder="العمر" id="age" name="age" value ="<?= $post['age'] ?>">
                    <input type="text" placeholder="الصناعه" id="Job" name="job" value ="<?= $post['job'] ?>">
                    <input type="text" placeholder="محل الاقامه" id="address" name ="address" value ="<?= $post['address'] ?>">
                    <input type="hidden" placeholder="محل الاقامه" id="address" name ="id" value ="<?= $post['id'] ?>">
                </div>
                <div class="inputBox">
                    <input type="text" placeholder="مرسل بمعرفه" id="sendby" name ="sendby" value ="<?= $post['sendby'] ?>">
                    <input type="time" placeholder="وقت الوصول " id="arrivalTime" name="arrivalTime" value ="<?= $post['arrivalTime'] ?>">
                    <input type="text" placeholder="العنبر " id="roomNum" name ="roomNum" value ="<?= $post['roomNum'] ?>">
                    <input type="text" placeholder="ملاحظات " id="Notics" name ="Notics" value ="<?= $post['Notics'] ?>">
                </div>


                <a id="add" class="btn btn-primary btn-lg active button" role="button" aria-pressed="true" href = "<?= url('admin/Patient') ?>"><i class="fas fa-angle-double-left"></i></a>
                <input type="submit" class ="btn btn-primary btn-lg active button" value ="update">
                
                
                
              
            </form>  
            <? endforeach;?>
        </div>

    </div>
</div>
</section>

</body>
</html>