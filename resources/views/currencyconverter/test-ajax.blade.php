<!DOCTYPE html>
<html>
<hea>
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        #content{
            width: 400px;
            box-shadow: 1px 5px 10px #000000;
            margin: 20px auto;
            padding: 5px;
        }
        .btn{
            padding: 5px;
        }

        .test-loader{
            border: 10px solid #efefef;
            border-top: 10px solid red;
            border-radius: 50px;
            width: 30px;
            height: 30px;
            margin: 0px auto;
            animation: spin 2s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }

        }
    </style>
</hea>
<body>
  <div id="content">
      <h1 align="center">How to show a loader</h1>
  </div>
  <p align="center" onclick="loadData()" class="btn"><button>Load More</button></p>

  <script src="{{asset('app/js/jquery-3.3.1.min.js')}}"></script>
<script>

        let loadData = () =>{

            $('#content').append('<div class="test-loader" id="test-loader"></div>');

            setTimeout(function () {

                $.ajax({
                    url: "{{ route('currencyconverter.loaddata') }}",
                    send: 'Yes',
                    success: function(data, status){
                        $('#test-loader').remove();
                        $('#content').append('<p>Data showed from another file</p>');
                    }
                });

            }, 5000);

        }

</script>
</body>
</html>
