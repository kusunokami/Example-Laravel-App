@extends('layout.main')

@section('container')

    <div class="container">
        <h1>Add a Score Piece</h1>
    </div>

    <div class="container">
        <form action="/addScore/store" method="post">
            {{ csrf_field() }}
            <label for="sTitle">Title:</label><br>
            <input type="text" id="sTitle" name="sTitle" required><br><br>
            <label for="sComposer">Composer:</label><br>
            <input type="text" id="sComposer" name="sComposer" required><br><br>
            <label for="sArranger">Arranger:</label><br>
            <input type="text" id="sArranger" name="sArranger"><br><br>
            <label for="sLyricist">Lyricist:</label><br>
            <input type="text" id="sLyricist" name="sLyricist"><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
@endsection