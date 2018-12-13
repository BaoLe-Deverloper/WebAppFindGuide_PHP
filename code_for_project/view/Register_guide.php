<?php include_once("Include/Header.php") ?>
<!-- END: header -->


<section class="probootstrap-slider flexslider2 page-inner">
  <div class="overlay"></div>
  <div class="probootstrap-wrap-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-8">

          <div class="page-title probootstrap-animate">
            <div class="probootstrap-breadcrumbs">
              <a href="#">Home</a><span>Đăng Kí</span>
            </div>
            <h1>Đăng Kí Làm Hướng Dẫn Viên</h1>
          </div>

        </div>
      </div>
    </div>
  </div>
  <ul class="slides">
    <li style="background-image: url(img/slider_1.jpg);"></li>
    <li style="background-image: url(img/slider_4.jpg);"></li>
    <li style="background-image: url(img/slider_2.jpg);"></li>
  </ul>
</section>

<!--  phần thân -->


<div class="container">
  <div class="row">
    <h2 class="text-center"> Đăng kí hướng dẫn viên.</h2>
    <section>
      <div class="wizard">
        <div class="wizard-inner">
          <div class="connecting-line"></div>
          <ul class="nav nav-tabs" role="tablist">

            <li role="presentation" class="active">
              <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                <span class="round-tab">
                 <i class="fas fa-user-edit"></i>
               </span>
             </a>
           </li>

           <li role="presentation" class="disabled">
            <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
              <span class="round-tab">
               <i class="fas fa-edit"></i>
             </span>
           </a>
         </li>
         <li role="presentation" class="disabled">
          <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
            <span class="round-tab">
             <i class="far fa-images"></i>
           </span>
         </a>
       </li>

       <li role="presentation" class="disabled">
        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
          <span class="round-tab">
           <i class="fas fa-check"></i>
         </span>
       </a>
     </li>
   </ul>
 </div>

 <form role="form">
  <div class="tab-content">
    <div class="tab-pane active" role="tabpanel" id="step1">
      <div class="panel panel-info">
        <div class="panel-heading">
          <h4 class="panel-title text-center">Đăng kí thông tin cơ bản</h4>
        </div>
        <div class="panel-body">
          <div class="row">
           <div class="col-sm-6">
            <div class="form-group">
             <label class="control-label">Họ Và tên:</label>     
             <input type="text" class="form-control">
           </div>
           
           <div class="form-group">
             <label class="control-label">Số điện thoại:</label>     
             <input type="number" class="form-control">
           </div>
           <div class="form-group">
             <label class="control-label">Địa chỉ Email:</label>     
             <input type="email" class="form-control" >
           </div>
           <div class="form-group">
             <label class="control-label">Địa Chỉ:</label>     
             <input type="text" class="form-control" >
           </div>
           <div class="form-group">
             <label class="control-label">Quê quán:</label>     
             <input type="text" class="form-control" >
           </div>
         </div>
         <div class="col-sm-6">
          <div class="form-group">
           <label class="control-label">Họ Và tên:</label>     
           <input type="text" class="form-control">
         </div>
         
         <div class="form-group">
           <label class="control-label">Số điện thoại:</label>     
           <input type="number" class="form-control">
         </div>
         <div class="form-group">
           <label class="control-label">Địa chỉ Email:</label>     
           <input type="email" class="form-control" >
         </div>
         <div class="form-group">
           <label class="control-label">Địa Chỉ:</label>     
           <input type="text" class="form-control" >
         </div>
         <div class="form-group">
           <label class="control-label">Quê quán:</label>     
           <input type="text" class="form-control" >
         </div>
       </div>
     </div>
   </div>
 </div>
 <ul class="list-inline pull-right">
  <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
</ul>
</div>
<div class="tab-pane" role="tabpanel" id="step2">
  <div class="panel panel-danger">
    <div class="panel-heading">
      <h4 class="panel-title">Panel title</h4>
    </div>
    <div class="panel-body">
      <div style=" text-align: center;">
        <h3>Thông Tin Lịch Trình</h3>
        <div class="">
          <div class="container mt-5 mb-5">
            <div class="row">
              <div class=" offset-md-3">
               <ul class="lichtrinh timeline">
                 
                 <li class="item_lichtrinh">
                  <a  href="#">Công viên Kolomen </a>
                  <a href="#" class="float-right">12h30-3h</a>
                  <p>Tọa lạc trên điền trang nghỉ dưỡng của Hoàng gia Nga xưa kia, Kolomen là công viên có cảnh sắc tựa tranh vẽ. Dưới thời trị vì của Sa hoàng Alekxei Mikhailovich, khu điền trang này bước vào thời kỳ hoàng kim với cung điện gỗ có vẻ đẹp phi thường. ..</p>
                  <div  class="img_lichtrinh" >
                   <div class="row probootstrap-gutter10">
                    <div class="col-md-12 col-sm-12">
                      <a href="#" class="probootstrap-hover-overlay">
                        <img class="img" src="img/Kolomen-park.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                        <div class="probootstrap-text-overlay">
                          <p>430 ảnh</p>
                        </div>
                      </a>
                    </div> 
                  </div>
                </div>
                
                <a class="btn btn-primary delete_item">Xóa lịch trình này</a> 
                
              </li>   
              
              <li class="item_lichtrinh">
                <a href="#">Công viên Kolomen </a>
                <a href="#" class="float-right">12h30-3h</a>
                <p>Tọa lạc trên điền trang nghỉ dưỡng của Hoàng gia Nga xưa kia, Kolomen là công viên có cảnh sắc tựa tranh vẽ. Dưới thời trị vì của Sa hoàng Alekxei Mikhailovich, khu điền trang này bước vào thời kỳ hoàng kim với cung điện gỗ có vẻ đẹp phi thường. ..</p>
                <div  class="img_lichtrinh" >
                 <div class="row probootstrap-gutter10">
                  <div class="col-md-12 col-sm-12">
                    <a href="#" class="probootstrap-hover-overlay">
                      <img src="img/Kolomen-park.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
                      <div class="probootstrap-text-overlay">
                        <p>430 ảnh</p>
                      </div>
                    </a>
                  </div>                            
                </div>
              </div>
              <a class="btn btn-primary delete_item">Xóa lịch trình này</a> 
            </li>

          </ul>
        </div>
      </div>   
      
    </div>
  </div>
</div> 
<div class="col-sm-12 well">
 <h4 class="text-center">Thêm Địa Điểm</h4>
 <input class="btn btn-success" type="file"  onchange="loadFile(event)">
</br>                               
<form role="form">
 <div style ="padding: 15px 0;" class="row">
  <div class="col-sm-4"> <input required  id="dia_diem" type="text" placeholder="Địa điểm ." class="form-control"></div>
  <div class="col-sm-2"><input  id="start_date" type="text" placeholder="Start Date ." class="form-control datetimepicker1"  ></div>
  <div class="col-sm-2"><input id="end_date" type="text" placeholder="End Date ." class="form-control datetimepicker1"  ></div>
</div>
<div class="form-group">
  <textarea id ="text_Detail" class="form-control" placeholder="Chi Tiết" rows="3"></textarea>
</div>
<a class="btn btn-primary my_btn float-right"><i class="fa fa-reply"></i> Submit</a>
</form>
</div>
</div>
</div>
<ul class="list-inline pull-right">
  <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
  <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
</ul>
</div>


<div class="tab-pane" role="tabpanel" id="step3">
  <h3>Step 3</h3>
  <p>This is step 3</p>
  <ul class="list-inline pull-right">
    <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
    <li><button type="button" class="btn btn-default next-step">Skip</button></li>
    <li><button type="button" class="btn btn-primary btn-info-full next-step">Save and continue</button></li>
  </ul>
</div>
<div class="tab-pane" role="tabpanel" id="complete">
  <h3>Complete</h3>
  <p>You have successfully completed all steps.</p>
</div>
<div class="clearfix"></div>
</div>
</form>
</div>
</section>
</div>
</div>
</div>
<section class="probootstrap-section">
  <div class="container">
    <div class="row heading">
      <h2 class="mt0 mb50 text-center">Hướng Dẫn Viên</h2>
    </div>
    <div class="row probootstrap-gutter10">
      <div class="col-md-6 col-sm-6">
        <a href="#" class="probootstrap-hover-overlay">
          <img src="img/saint_peterburg-1.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
          <div class="probootstrap-text-overlay">
            <h3>Saint Peterburg</h3>
            <p>430 Hướng Dẫn Viên</p>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-sm-6">
        <a href="#" class="probootstrap-hover-overlay">
          <img src="img/saint_peterburg-5.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
          <div class="probootstrap-text-overlay">
            <h3>Saint Peterburg</h3>
            <p>430 Hướng Dẫn Viên</p>
          </div>
        </a>
      </div>
      <div class="clearfix visible-sm-block"></div>

      <div class="col-md-4 col-sm-6">
        <a href="#" class="probootstrap-hover-overlay">
          <img src="img/Moscow-1.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
          <div class="probootstrap-text-overlay">
           <h3>Saint Peterburg</h3>
           <p>430 Hướng Dẫn Viên</p>
         </div>
       </a>
     </div>
     <div class="col-md-4 col-sm-6">
      <a href="#" class="probootstrap-hover-overlay">
        <img src="img/Moscow-1.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
        <div class="probootstrap-text-overlay">
          <h3>Saint Peterburg</h3>
          <p>430 Hướng Dẫn Viên</p>
        </div>
      </a>
    </div>
    <div class="clearfix visible-sm-block"></div>
    <div class="col-md-4 col-sm-6">
      <a href="#" class="probootstrap-hover-overlay">
        <img src="img/Moscow-3.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">
        <div class="probootstrap-text-overlay">
         <h3>Saint Peterburg</h3>
         <p>430 Hướng Dẫn Viên</p>
       </div>
     </a>
   </div>

 </div>
</div>
</section>
<!-- END: section -->
<?php include_once("Include/Footer.php") ?>
<script src="js/plugins/jquery.timepicker.js"></script>
<script type="text/javascript">
  $('.datetimepicker1').timepicker({ 'timeFormat': 'H:i' });
</script>   
<script>
  var url;
  var loadFile = function (event) {
    var reader = new FileReader();
    reader.onload = function () {
      url = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
  
  $('.my_btn').on('click', function (e) {
    if (url == null)
      alert(' Hãy Chọn ảnh !');
    else
      $('.lichtrinh').append('<li class="item_lichtrinh" > <a target="_blank" href="#">' + $('#dia_diem').val() + '</a> <a href="#" class="float-right"> Thời Gian :' + $('#start_date').val() + ' - ' + $('#end_date').val() + '</a><p>' + $('#text_Detail').val() + '</p>\
        <div  class="img_lichtrinh">\
        <div class="row probootstrap-gutter10">\
        <div class="col-md-12 col-sm-12">\
        <a href="#" class="probootstrap-hover-overlay"><img src='+ url + ' alt="Free Bootstrap Template icookies.com" class="img-responsive"><div class="probootstrap-text-overlay"><p>430 ảnh</p></div></a></div></div></div>  <a onclick = "click()" class="btn btn-primary delete_item">Xóa lịch trình này</a></li>');
    $('#start_date').val('');
    $('#end_date').val('');
    $('.delete_item').on('click', function (e) {
      e.preventDefault();
      $(this).parent().remove();
    });
  });
</script>
<script>
  $('.delete_item').on('click', function(){
   $(this).parent().remove();

 });
</script>
<script>
  function GetLichTrinh(){
    var lichtrinh = [];
    $('.item_lichtrinh').each(function(index, el) {
      var item =[];
      var diadiem = $($(el).children('a')[0]).text();
      var thoigian = $($(el).children('a')[1]).text();
      var Urlimg = $(el).children('div').children('div').children('div').children('a').children('img')[0].src;
      var content = $($(el).children('p')).text();
      item.push(diadiem,thoigian,Urlimg,content);
      lichtrinh.push(item);
    });
    console.log(lichtrinh);
  }; 
  GetLichTrinh();
</script>
<script src="js/scripts.min.js"></script>

<script src="js/main.js"></script>
<script src="js/custom.js"></script>

</body>
</html>