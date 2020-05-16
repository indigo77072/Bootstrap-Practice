<html>
    <head>
    <style>
      #main {
            height:500px;
        }
    </style>
        <title>Bootstrap</title>
        <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
    <body>
            <p class="jumbotron" style="font-size:40px; background-color:pink; text-align:center;">Welcome !!</p>
            
        <div class="row" style="text-align:center;">
            <div class="col-md-4 border"> <p>COL ONE</p> </div>
            <div class="col-md-4"> <p>COL TWO</p></div>
            <div class="col-md-4"><p>COL THREE</p></div>
        </div>

        <div class="row" id="main">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <table class="table">
                    <tr>
                        <th>Title</th>
                        <td>
                            <input type="text" name="titleBox" value="" class="form-control"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Title2</th>
                        <td>
                            <input type="text" name="titleBox2" value="" class="form-control"/>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <button class="btn btn-success"> Submit</buttton>
                        </th>
                        <td></td>
                    </tr>
                </table>
            </div>
            <div class="col-md-3"></div>
        </div>
</div>
        <div class="jumbotron footer" style="margin-bottom:0;">
        <p>This is the bottom of the page</p>
        </div>
       
    </body>
</html>