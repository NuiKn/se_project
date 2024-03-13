<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <table class="table">
        <thead>
          <tr>
            <th scope="saleTeamID  ">รหัส</th>
            <th scope="teamName">ทีม</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($saleteams as $saleteam)
            <tr>
            <td>{{ $saleteam->saleTeamID  }}</td>
            <td>{{ $saleteam->teamName }}</td>
            </tr>
            @endforeach            
        </tbody>
      </table>
  </body>
</html>