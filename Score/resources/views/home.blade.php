@extends('layout.main')

@section('container')
    <div class="container">
        <h1>Score Management</h1>
    </div>

    <div class="container mb-4">
        <button type="button" class="btn btn-primary btn-sm" onclick="window.location.href='/addScore';">Add New Score</button>
    </div>

    <div class="container">
        <table class="table-bordered">
            <thead>
                <tr>
                  <th scope="col">Nama Lagu</th>
                  <th scope="col">Composer(s)</th>
                  <th scope="col">Arranger(s)</th>
                  <th scope="col">Lyricist(s)</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($song as $music)
                <tr>
                    <td>{{ $music->title }}</td>
                    <td>{{ $music->composer }}</td>
                    <td>{{ $music->arranger }}</td>
                    <td>{{ $music->lyricist }}</td>
                    <td><a href="/deleteScore/{{ $music->id }}">Delete</a></td>
                </tr>
                @endforeach
              </tbody>
        </table>
    </div>
@endsection

