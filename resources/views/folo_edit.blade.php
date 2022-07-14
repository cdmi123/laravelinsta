@foreach ($user_data as $user_row)
    <?php $follow_id = explode(',', $user_row->followers); ?>
    <div class="flex items-center justify-between py-3">
        <div class="flex flex-1 items-center space-x-4">
            <a href="profile.html">
                <img src="register_user/{{ $user_row->image }}" class="bg-gray-200 rounded-full w-10 h-10">
            </a>
            <div class="flex flex-col">
                <span class="block capitalize font-semibold"> {{ $user_row->fname }}
                    {{ $user_row->lname }} </span>
                <span class="block capitalize text-sm"> {{ $user_row->country }} </span>
            </div>
        </div>

        <?php if(in_array(Session::get('user_id'),$follow_id)) { ?>

        <a href="javascript:void(0)" data-folo="{{ $user_row->id }}"
            class="font-semibold px-2 py-1 unfolo"style="font-size: 15px;"> Unfollow </a>

        <?php } else { ?>


        <a href="javascript:void(0)" data-folo="{{ $user_row->id }}"
            class="font-semibold px-2 py-1 folo"style="font-size: 15px;"> Follow </a>

        <?php } ?>
    </div>
@endforeach




<script>
    $('.folo').click(function() {


        var folo_id = $(this).attr('data-folo');

        $.ajax({


            type: "post",
            url: "/folo",
            data: {

                "_token": "{{ csrf_token() }}",
                "id": folo_id

            },
            success: function(res) {
                $('#follow_data').html(res);
            }



        });


    });

    $('.unfolo').click(function() {


        var folo_id = $(this).attr('data-folo');

        $.ajax({


            type: "post",
            url: "/unfolo",
            data: {

                "_token": "{{ csrf_token() }}",
                "id": folo_id

            },
            success: function(res) {
                $('#follow_data').html(res);
            }


        });


    });
</script>
