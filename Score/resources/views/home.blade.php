@extends('layout.main')

@section('container')
    <div class="container">
        <h1>Score Management</h1>
    </div>

    <div class="container">
        <button type="button" class="btn btn-primary btn-sm">Add New Score</button>
    </div>

    <div class="container">
        <table class="table-bordered">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Handle</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td colspan="2">Larry the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
        </table>
    </div>
@endsection