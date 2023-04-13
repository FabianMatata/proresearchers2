<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Proresearchers</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container">

        <h3 class="my-5">Admin Dashboard</h3>

        <table border="1px">

            <tr>
                <th>First Name</th>
                <th>Last Name</th>

                <th>Description</th>
                <th>subject</th>
                <th>level</th>
                <th>View</th>
                <th>Download</th>
                <th>Name</th>
                <th>Description</th>
                <th>subject</th>
                <th>level</th>

            </tr>

            @foreach($data as $data)

            <tr>
                <td>{{$data->firstname}}</td>
                <td>{{$data->lastname}}</td>

                <td>{{$data->description}}</td>
                <td>{{$data->subject}}</td>
                <td>{{$data->level}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->description}}</td>
                <td>{{$data->subject}}</td>
                <td>{{$data->level}}</td>

                <td><a href="{{url('/view',$data->id)}}">View</a></td>
                <td><a href="{{url('/download',$data->file)}}">Download</a></td>


            </tr>

            @endforeach

        </table>

    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>

</body>

</html>