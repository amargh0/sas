
@include('incloud.header');

@include('incloud.sidebar')

<div class="content-row">

  <div class="panel panel-default">

      <div class="panel-options">
        <a class="bg" data-target="#sample-modal-dialog-1" data-toggle="modal" href="#sample-modal"><i class="entypo-cog"></i></a>
        <a data-rel="collapse" href="#"><i class="entypo-down-open"></i></a>
        <a data-rel="close" href="#!/tasks" ui-sref="Tasks"><i class="entypo-cancel"></i></a>
      </div>
    </div>

    <div class="panel-body">
      <form role="form">
        <div class="form-group">
          <label for="exampleInputEmail1">Username</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Username">
        </div>


        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>



        <div class="form-group">
          <label for="exampleInputPassword1">Confirm Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
        </div>



            <div class="form-group">
                <label for="exampleInputEmail1">Profile</label>
                <select name="selecter_basic" class="form-control" >


                </select>
            </div>





        <div class="form-group">
          <label for="exampleInputEmail1">First Name</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter First Name">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Last Name</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Last Name">
        </div>


        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
        </div>



        <div class="form-group">
          <label for="exampleInputEmail1">Mobile</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Mobile">
        </div>


        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
  </div>

</div>

@include("incloud.footer");