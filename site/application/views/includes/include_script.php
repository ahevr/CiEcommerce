<!--===============================================================================================-->
<script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo base_url("assets");?>/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo base_url("assets");?>/vendor/bootstrap/js/popper.js"></script>
<script type="text/javascript" src="<?php echo base_url("assets");?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo base_url("assets");?>/vendor/select2/select2.min.js"></script>

<script type="text/javascript">
    $(".selection-1").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });
</script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo base_url("assets");?>/vendor/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo base_url("assets");?>/js/slick-custom.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo base_url("assets");?>/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo base_url("assets");?>/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="<?php echo base_url("assets");?>/vendor/sweetalert/sweetalert.min.js"></script>

<script type="text/javascript" src="<?php echo base_url("assets");?>/js/iziToast.min.js"></script>

<script src="https://cdn.jsdelivr.net/gh/igorlino/elevatezoom-plus@1.2.3/src/jquery.ez-plus.js"></script>

<?php $this->load->view("includes/popup");?>


<script>
    $(document).ready(function () {
        $(".dontShowBtn").click(function () {

            var  $url = $(this).data("url");
            var  $id  = $(this).data("popup-id");

            $.post("$url",{url : $url , popup_id : $id},function () {

            })

        });
    })
</script>




















<?php
$alert = $this->session->userdata("alert");
if ($alert){

    if ($alert["type"] === "success"){ ?>

<script>
    iziToast.success({
        title: '<?php echo $alert["title"];?>',
        message: '<?php echo $alert["text"];?>',
        position: "topCenter"
    });
</script>

<?php } else { ?>

<script>
    iziToast.error({
        title: '<?php echo $alert["title"];?>',
        message: '<?php echo $alert["text"];?>',
        position: "topCenter"
    });
</script>

<?php }
} ?>









<script type="text/javascript">
    $('#zoom_01').ezPlus();
</script>


<script type="text/javascript">
    $('.block2-btn-addcart').each(function(){
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function(){
            swal(nameProduct, "is added to cart !", "success");
        });
    });

    $('.block2-btn-addwishlist').each(function(){
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function(){
            swal(nameProduct, "is added to wishlist !", "success");
        });
    });
</script>




<script type="text/javascript">
  $("#search").autocomplete({
      source:"http://localhost/newcms/site/home/searchUser",
      minLength : 3
  });

  $("#search").data("ui-autocomplete")._renderItem =function (div,item) {

      var $row = $("<row>");


      $row.html("<a href='http://localhost/newcms/site/urun-detay/"+ item.url +"'><span>"+ item.value  +"</span></a>");

      return  $row.appendTo(div);
  }
</script>
<!--===============================================================================================-->
<script src="<?php echo base_url("assets");?>/js/main.js"></script>
<script src="<?php echo base_url("assets");?>/js/custom.js"></script>


<script>
    $(document).ready(function () {

        $('.addToCartBtn').click(function () {
            alert();
        })


    })
</script>

















