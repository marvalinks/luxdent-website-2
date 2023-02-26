<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Service Request</title>

    <style>
        td{
            border: 1px solid #ccc;
            padding: 5px;
        }
    </style>
</head>
<body>
    <p>
        Hello LuxDent, <br> <br>

        There has been a service quote from your website service form, details below:
    </p>

    <table>
        <tbody>
            <tr>
                <td>Contact name:</td>
                <td>{{$data['name']}}</td>
            </tr>
            <tr>
                <td>Contact email:</td>
                <td>{{$data['email']}}</td>
            </tr>
            <tr>
                <td>Company:</td>
                <td>{{$data['company']}}</td>
            </tr>
            <tr>
                <td>Phone:</td>
                <td>{{$data['phone']}}</td>
            </tr>
            <tr>
                <td>Address:</td>
                <td>{{$data['address']}}</td>
            </tr>
        </tbody>
    </table>

    <h4>Message body: </h4>

    <p>{{$data['message']}}</p>
</body>
</html>