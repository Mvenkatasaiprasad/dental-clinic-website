

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <style type="text/css">
      
      label
      {
        display: inline-block;

        width: 200px;
      }




    </style>


    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
     	@include('admin.sidebar')
      <!-- partial -->
      	@include('admin.navbar')
        <!-- partial -->


        
        <div class="container-fluid page-body-wrapper">










        <div class="container" align="center" style="padding-top: 100px;">


           @if(session()->has('message'))
          <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert">
              X
            </button>

            {{session()->get('message')}}
            
          </div>

            @endif

          <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">

              @csrf

                <div style="padding:15px;">
                     

                      <label>Doctor Name</label>
                      <input type="text" style="color:black;" name="name" placeholder="Write the name" required="">


                </div>


                 <div style="padding:15px">
                     

                      <label>Phone</label>
                      <input type="number" style="color:black;" name="number" placeholder="Write the number" required="">


                </div>


                <div style="padding:15px;">
                     

                      <label>Speciality</label>
                     <select  name="specialty" style="color:black; width:200px;" required="">
                      <option>---Select---</option>
                      <option value="Orthodontics">Orthodontics</option>
                      <option value="Oral Surgery">Oral Surgery</option>
                      <option value="Paediatric Dentistry">Paediatric Dentistry</option>
                      <option value="Dental Maxillofacial Radiology">Dental Maxillofacial Radiology</option>




                     </select>

                </div>


                <div style="padding:15px;">
                     

                      <label>Room No</label>
                      <input type="text" style="color:black;" name="room" placeholder="Write the room number" required="">


                </div>

                <div style="padding:15px;">
                     

                      <label>Doctor Image</label>
                      <input type="file" name="file" required="" >


                </div>


          

                 <div style="padding:15px;">
                     

                      
                      <input type="submit" class="btn btn-success" required="" >


                </div>




          </form>




        </div>




      </div>
    

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
