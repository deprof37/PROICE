<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Olusola Fatoye">
  <meta name="keyword" content="">
  <meta name="csrf_token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>PRO-ICE LTD Admin</title>

  <!-- Bootstrap CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="sweetalert2/sweetalert2.min.css" type="text/css"/>
  
  <!-- Custom styles -->
  <!--link href="css/widgets.css" rel="stylesheet"-->
  <link href="css/style2.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    @include('partials.top_nav')
    @include('partials.sidebar_nav')
    

    <!--main content start-->
    <section id="main-content">
      

        <div class="container">
            <div class="row">
                @yield('content')
            </div>
        </div>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="sweetalert2/sweetalert2.min.js" type="text/javascript"></script>

</body>

</html>


{{--<script type="text/javascript">
    
    $(document).ready(function(){


        $("#addMedia").on('click', function(){
            save_method="add";
            $('input[name=_method]').val('POST');
            $('#media_dialog form')[0].reset();
            $('#save').text('Add Media');
        });


        $(function(){
            $('#media_form').on('submit', function(e){
                if(!e.isDefaultPrevented()){
                  var id = $('#media-id').val();
                  $( '#error_title' ).html('');
                  $( '#error_descrip' ).html('');
                  $( '#error_url' ).html('');
                  $( '#error_photo' ).html('');
                  
                  if(save_method=='add'){ 
                    url = "{{ url('media') }}";
                      $.ajax({
                      url: url,
                      method: "POST",
                      data: new FormData($("#media_form")[0]),
                      contentType: false,
                      processData: false,
                      success: function(data){
                        if(data.errors){
                            if(data.errors.title){
                                $( '#error_title' ).html( data.errors.title[0]);
                            }
                            if(data.errors.descrip){
                                $( '#error_descrip' ).html( data.errors.descrip[0]);
                            }
                            if(data.errors.url){
                                $( '#error_url' ).html( data.errors.url[0]);
                            }
                            if(data.errors.photo){
                                $( '#error_photo' ).html( data.errors.photo[0]);
                            }
                        }
                        else{
                            alert(data);
                            // $("#media_dialog").modal('hide');
                            // //deptTable.ajax.reload();
                            // swal("Media Created!", "Media created successfully", "success");
                        }
                      }
                    });
                    }
                  else{
                     url = "{{ url('media') }}" + '/' +id;
                    $.ajax({
                      url: url,
                      method: "POST",
                      data: new FormData($("#media_form")[0]),
                      contentType: false,
                      processData: false,
                      success: function(data){
                          if(data.errors){
                            if(data.errors.title){
                                $( '#error_title' ).html( data.errors.title[0]);
                            }
                            if(data.errors.descrip){
                                $( '#error_descrip' ).html( data.errors.descrip[0]);
                            }
                            if(data.errors.url){
                                $( '#error_url' ).html( data.errors.purl[0]);
                            }
                            if(data.errors.photo){
                                $( '#error_photo' ).html( data.errors.photo[0]);
                            }
                        }
                        else{
                            $("#media_dialog").modal('hide');
                            //deptTable.ajax.reload();
                            swal("Media Updated!", "Media info updated successfully", "success");
                        }
                      }
                    });
                  }
                  return false;
                }
            });
        });

       
      });
</script>--}}