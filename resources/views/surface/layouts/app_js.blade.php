 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>

    $(document).ready(function() {
        $('.select2').select2({
            theme: 'bootstrap4',
         
        });
    });
    
       function alertMessage(alert,message) {
         switch (alert) {
            case 'success':
                     result = '<div  class="alert alert-success alert-dismissible fade show" role="alert">'+
                              '<strong>Success! </strong>'+message+''+
                              // '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                              //    '<span aria-hidden="true">&times;</span>'+
                              // '</button>'+
                              '</div>'; 
                              $('#alert').html(result);
                  break;
            case 'danger':
                  result = '<div  class="alert alert-danger alert-dismissible fade show" role="alert">'+
                              '<strong>Danger! </strong>'+message+''+
                              // '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                              //    '<span aria-hidden="true">&times;</span>'+
                              // '</button>'+
                              '</div>'; 
                              $('#alert').html(result);
                  break;
            case 'warning':
                  result = '<div  class="alert alert-warning alert-dismissible fade show" role="alert">'+
                              '<strong>Warning! </strong>'+message+''+
                              // '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                              //    '<span aria-hidden="true">&times;</span>'+
                              // '</button>'+
                              '</div>'; 
                              $('#alert').html(result);
                  break;
            case 'info':
                  result = '<div  class="alert alert-info alert-dismissible fade show" role="alert">'+
                              '<strong>Info! </strong>'+message+''+
                              // '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                              //    '<span aria-hidden="true">&times;</span>'+
                              // '</button>'+
                              '</div>'; 
                              $('#alert').html(result);
            default:
                  break;
         }

      window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function(){
               $(this).remove(); 
               });
            }, 4000);

         }

         function taskDate(dateMilli) {
                  var d = (new Date(dateMilli) + '').split(' ');
            
                  return [d[2], d[1], d[3]].join('-');
            }
      
            $(".date").on("change", function() {
             this.setAttribute(
                  "data-date",
                  moment(this.value, "YYYY-MM-DD")
                  .format( this.getAttribute("data-date-format") )
            )
                  
            }).trigger("change");


    </script>