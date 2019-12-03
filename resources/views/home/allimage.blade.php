<!DOCTYPE html>
<html>
    <head>
        <title>All Image</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .top-nav-bar{
        height: 58px;
        top: 0;
        position: sticky;
        background: #fff;
        margin-bottom: 20px;
        border-bottom: 3px  solid rgb(43, 199, 90);
        z-index: 2;
    }

    .logo{
        height: 45px;
        float: left;
        padding-left: 80px;
        
    }

    .form-control{
        margin-top: 9px;
        margin-left: 140px;
        border: 1px solid rgb(43, 199, 90) !important;
        border-top-left-radius: 20px !important;
        border-bottom-left-radius: 20px !important;
        border-top-right-radius: 0px !important;
        border-bottom-right-radius: 0px !important;
        box-shadow: none !important;
    }
    .input-group-text{
        background: rgb(43, 199, 90) !important;
        border:  1px solid rgb(43, 199, 90);
        margin: 8.5px 8px 0px 0;
        border-top-left-radius: 0px !important;
        border-bottom-left-radius: 0px !important;
        border-top-right-radius: 20px !important;
        border-bottom-right-radius: 20px !important;
        cursor: pointer;
    }

    .search-box{
        display: inline-flex;
        width: 68%;
        float: left;
    }

    .fa-search{
        color: white;
    }
    .menu-bar{
        width: 30%;
        height: 20px;
        float: right;
    }
    .menu-bar ul{
        display: inline-flex;
        float: right;
    }
    .menu-bar ul li{
        border-left: 1px solid #fff;
        list-style-type: none;
        padding: 15px 25px;
        text-align: center;
        background-color: rgb(43, 199, 90);
        cursor: pointer;
    }
    .menu-bar ul li a{
        font-size: 16px;
        font-weight: bold;
        color: #fff;
        text-decoration: none;
    }  
    .footer{
        margin-top: 50px;
        background: rgb(53, 52, 52);
        color: #fff;
    }
    .footer h1{
        font-size: 20px;
        margin: 25px 0;
    }
    .footer p{
        font-size: 12px;
    }
    .copy-right{
        margin-bottom: -80px;
        text-align: center;
        font-size: 15px;
        padding-bottom: 20px;
    }
    .footer hr{
        margin-top: 10px;
        background-color: #ccc;
    }   
    </style>
    </head>  
    <body>
        <a href="{{route('home.index')}}">Back</a>
    
    	<div class="container">
            <div class="row">
            @foreach($allimg as $img)
				<div class="col-md-3">
        			<div style="border:3px solid #478b47; background-color:whitesmoke; margin:10px; border-radius:5px; padding:10px;" align="center">
                        <img src="{{asset('upload/'.$img->img)}}" class='img-responsive' width='100%' height=300%></br>
                        Title: <h7 class="text-danger">{{$img->title}}</h7></br>
						Description: <h7 class="text-danger">{{$img->description}}</h7></br>
                        Category:  <h7 class="text-danger"></h7></br>
        			</div>
                </div>
            @endforeach
        </div>
    </div>
    </body>
</html>