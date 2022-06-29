<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Data</title>
</head>
<body>
<div class="table m-5" align="center">
<table id="example" class="table table-striped table-bordered" style="width:70%">

  <tbody>
    @foreach($users as $user)
    <tr>
      <th>Name</th>
      <td>&nbsp;&nbsp;&nbsp;{{$user->name}}</td>
    </tr>
    <tr>
        <th>Hobbies</th>
        <td><ol>
            @if($user->singing==1)
            <li>Singing</li>
            @endif
            @if($user->dancing==1)
            <li>Dancing</li>
            @endif
            @if($user->indoor_game==1)
            <li>Indore Game</li>
            @endif
            @if($user->outdoor_game==1)
            <li>Outdoor Game</li>
            @endif
            @if($user->other==1)
            <li>other</li>
            @endif
        </ol></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</body>
</html>