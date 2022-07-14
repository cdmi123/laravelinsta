
<div class="lg:w-8/12 bg-white dark:bg-gray-800 w-100 " id="chat_id">

      <div class="px-5 pb-2 pt-3 flex uk-flex-between">

          <a href="#" class="flex items-center space-x-3"  id="recive_id" data-id="{{$chat_data->id}}">
              <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                  <img src="{{ asset('register_user/' . $chat_data->image) }}" alt=""
                      class="h-full rounded-full w-full">
                      <?php if($chat_data->logins == 1){  ?>
                  <span
                      class="absolute bg-green-500 border-2 border-white bottom-0 h-3 m-0.5 right-0 rounded-full shadow-md w-3">
                  </span>
                  <?php } ?>
              </div>
              <span class="flex-1 min-w-0 relative text-gray-500">
                  <h4 class="font-semibold text-black text-lg mb-0">  
                      {{$chat_data->fname}}
                  </h4>
                  <?php if($chat_data->logins == 1){  ?>
                  <p class="font-semibold leading-3 text-green-500 text-sm mb-0">is online</p>
                  <?php } ?>
              </span>
          </a>

          <a href="#"
              class="flex hover:text-red-400 items-center leading-8 space-x-2 text-red-500 font-medium">
              <i class="uil-trash-alt"></i> <span class="lg:block hidden"> Delete Conversation </span>
          </a>
      </div>

      <div class="border-t dark:border-gray-600">

          <div class="lg:p-8 p-4 space-y-5 overflow-auto" style="height: 378px" data-simplebar>

              <h3 class="lg:w-60 mx-auto text-sm uk-heading-line uk-text-center lg:pt-2"><span> 28 June, 2018
                  </span></h3>

              <!-- my message-->
              @foreach($old_msg as $msg)
              <?php if($msg->send_id == Session::get('user_id')) { ?>
              <div class="flex lg:items-center flex-row-reverse">
                  <div class="w-14 h-14 rounded-full relative flex-shrink-0">
                      <img src="{{ asset('register_user/' . Session::get('user_image')) }}" alt=""
                          class="absolute h-full rounded-full w-full">
                  </div>
                  <div
                      class="text-white py-2 px-3 rounded bg_chat_color relative h-full lg:mr-5 mr-2 lg:ml-20 bg_dark">
                      <p class="leading-6">{{$msg->message}}<i class="uil-grin-tongue-wink"></i> </p>
                      <div class="absolute w-3 h-3 top-3 -right-1 transform rotate-45 bg_chat_color_side">
                      </div>
                  </div>
              </div>
              <br>
              <?php } else { ?>
              {{-- <h3 class="lg:w-60 mx-auto text-sm uk-heading-line uk-text-center lg:pt-2"><span> 28 June, 2018
                  </span></h3> --}}

              <div class="flex lg:items-center">
                  <div class="w-14 h-14 rounded-full relative flex-shrink-0">
                      <img src="{{ asset('register_user/' . $chat_data->image) }}" alt=""
                          class="absolute h-full rounded-full w-full">
                  </div>
                  <div
                      class="text-gray-700 py-2 px-3 rounded bg-gray-100 h-full relative lg:ml-5 ml-2 lg:mr-20 dark:bg-gray-700 dark:text-white bg_light">
                      <p class="leading-6">{{$msg->message}}<urna class="i uil-heart"></urna> <i
                              class="uil-grin-tongue-wink"> </i> </p>
                      <div
                          class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-700">
                      </div>
                  </div>
              </div>
              <br>
              <?php } ?>
              @endforeach
              <br>

              {{-- <div class="flex lg:items-center">
                  <div class="w-14 h-14 rounded-full relative flex-shrink-0">
                      <img src="{{ asset('register_user/' .  $chat_data->image) }}" alt=""
                          class="absolute h-full rounded-full w-full">
                  </div>
                  <div
                      class="text-gray-700 py-2 px-3 rounded bg-gray-100 relative h-full lg:ml-5 ml-2 lg:mr-20 dark:bg-gray-700 dark:text-white bg_light">

                      <div class="flex space-x-0.5 my-2 animate-pulse bg_light">
                          <div class="w-2 h-2 rounded-full bg-gray-400"></div>
                          <div class="w-2 h-2 rounded-full bg-gray-300"></div>
                          <div class="w-2 h-2 rounded-full bg-gray-300"></div>
                      </div>
                      <div
                          class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-700">
                      </div>
                  </div>
              </div> --}}

          </div>

          <div class="border-t flex p-2 dark:border-gray-700">
            <textarea cols="1" rows="1" placeholder="Your Message.." id="msg"
                class="border-0 flex-1 h-10 min-h-0 resize-none min-w-0 shadow-none dark:bg-transparent me-3 pt-2 ps-2"></textarea>
            <div class="flex h-full space-x-2">
               <a href="javascript:void(0)" class="bg_chat_color font-semibold px-6 py-2 rounded-md text-white" id="send">Send</a>
            </div>
        </div>

      </div>

  <div class="blank px-5 flex uk-flex-between">

  </div>
  
</div>

<script>

    $('.user_chat').click(function() {
        var chat_id = $(this).attr('data-chat');

        // alert(chat_id);

        $.ajax({

            type: "GET",
            url: "/user_chat_id",
            data: {
                "_token": "{{ csrf_token() }}",
                "id": chat_id

            },
            success: function(res) {
                $("#chat_id").html(res);
            }

        });
    });


$(document).ready(function(){
    $('#send').click(function() {

        var message_data = $('#msg').val();
        var chat_id = $('#recive_id').attr('data-id');
        $.ajax({

            type: "GET",
            url: "/user_chat_id",
            data: {
                "_token": "{{ csrf_token() }}",
                "message": message_data,
                "id":chat_id
               

            },
            success: function(res) {
                $("#chat_id").html(res);
            }

        });
    });
});
</script>
