<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="form-group col-12 p-0">

            <form action="{{ route('store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <div class="col-sm-12">
                        <h2 style="text-align: center; color: blue">REGISTRATION FORM</h2>
                    </div>
                </div>
                <hr/>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label>USERNAME:</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group col-md-6">
                        <label>EMAIL:</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <label>PASSWORD:</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    </div>
                    
                    <div class="form-group col-md-6 mt-4" align="center">
                        <button type="submit" class="btn btn-success" style="width: 80px;">Submit</button>
                    </form>                 
                     </div>
                </div>
        </div>
    </div>
</body>
</html>
