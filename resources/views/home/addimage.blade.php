<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div style=" padding-left: 30px; padding-top: 30px; font-size: 20px;">
            <a href="{{route('home.index')}}">Back</a> |
            <a href="{{route('logout.index')}}">Logout</a>
        <form method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <table border="0">
           
            <tr>
                <td>Image</td>
                <td><input type="file" name="pic[]" multiple="true"></td>
                <td>Rotate</td>
                <td>
                    <select name="rotate">
                        <option value="default">Default</option>
                        <option value="left">Rotate Left</option>
                        <option value="right">Rotate Right</option>
                    </select>
                </td>
                <td>Crop</td>
                <td>
                    <select name="crop">
                        <option value="default">Default</option>
                        <option value="two">Crop 200, 200</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Title</td>
                <td><input type="text" name="title"></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><input type="text" name="description"></td>
            </tr>
            <tr>
                <td>Category</td>
                <td>
                    <select name="category">
                        <option value="vehicles">Vehicles</option>
                        <option value="animals">Animals</option>
                    </select>
                </td>
                <td>Sub Category</td>
                <td>
                    <select name="subcategory">
                        <option value="boats">Boats</option>
                        <option value="cars">Cars</option>
                        <option value="truks">Truks</option>
                         <option value="lions">Lion</option>
                        <option value="tigers">Tiger</option>
                        <option value="cats">Cat</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Save"></td>
                <td></td>
            </tr>
        </table>
    </form>
        </div>
    </body>
</html>
