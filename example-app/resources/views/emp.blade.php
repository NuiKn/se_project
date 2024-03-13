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
            <th scope="empID ">รหัส</th>
            <th scope="prefix">คำนำหน้าชื่อ</th>
            <th scope="firstName ">ชื่อ</th>
            <th scope="lastName">สกุล</th>
            <th scope="phoneNumber ">โทรศัพท์</th>
            <th scope="email">อีเมล</th>
            <th scope="position">ตำแหน่ง</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
            <tr>
            <td>{{ $employee->empID  }}</td>
            <td>{{ $employee->prefix }}</td>
            <td>{{ $employee->firstName  }}</td>
            <td>{{ $employee->lastName }}</td>
            <td>{{ $employee->phoneNumber  }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->positionName }}</td>
            </tr>
            @endforeach            
        </tbody>
      </table>
  </body>
</html>