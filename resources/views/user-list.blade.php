
@include('incloud.header');

@include('incloud.sidebar')



            <div class="bs-example">
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Username</th>
                              <th>First name</th>
                              <th>Last name</th>
                              <th>Profile</th>
                              <th>Expier</th>
                            </tr>
                          </thead>

                          <tbody>
                          @foreach($users as $user)
                            <tr>
                              <td>{{ $user->id }}</td>
                              <td>{{ $user->username }}</td>
                              <td>{{ $user->firstname }}</td>
                              <td>{{ $user->lastname }}</td>
                              <td>{{ $user->srvid }}</td>
                              <td>{{ $user->expiration }}</td>
                            </tr>
                          @endforeach
                          </tbody>
                        </table>
                      </div>
                      <!-- /.table-responsive -->
                    </div>



  </body>
</html>
