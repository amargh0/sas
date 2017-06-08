@include('incloud.header');

@include('incloud.sidebar')



<div class="bs-example">
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Price</th>
                <th>Download Speed</th>
                <th>Upload Speed</th>
                <th>Expiry</th>
            </tr>
            </thead>

            <tbody>
            @foreach($profiles as $profile)
                <tr>
                    <td>{{ $profile->id }}</td>
                    <td>{{ $profile->srvname }}</td>
                    <td>{{ $profile->unitprice }}</td>
                    <td>{{ $profile->downrate }}</td>
                    <td>{{ $profile->uprate }}</td>
                    <td>{{ $profile->limiteexpiration }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.table-responsive -->
</div>



</body>
</html>
