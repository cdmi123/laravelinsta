<!-- Scripts ================================================== -->

<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/uikit.js')}}"></script>
<script src="{{asset('assets/js/simplebar.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>

<!-- choose one -->
<script src="https://unpkg.com/feather-icons"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
<script src="https://kit.fontawesome.com/e9f488f24b.js" crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>


{{-- <script>
  
  $('#post_uplode').click(function(){


    var post_id = $(this).attr('data-post');

    $.ajax({


      type:"post",
      url:"/post_uplode",
      data:{

        "_token":"csrf_token()",
        "id":post_id

      },


    });

    // alert(post_id);


  });

</script> --}}


</body>

</html>