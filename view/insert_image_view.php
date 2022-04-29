<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">

        <!-- bootstrap 4.5 css -->
        <link rel="stylesheet" href="/my/css/bootstrap.css">
        <link rel="stylesheet" href="/my/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <form action="/drone/insert" enctype="multipart/form-data" method="post">
                <div class="row justify-content-md-center">
                    <div class="col-sm-3">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text">이름</label>
                            </div>            
                            <input type="text" name="name" class="form-control" required>              
                        </div>
                    </div>

                    <div class="col-sm-7">
                        <input type="file" value="" name="notice_img"> 
                    </div>

                    <div class="col-sm-10" style="margin-bottom: 30px">             
                        <textarea name="content"></textarea>
                    </div> 
                </div>    
                <div class="row justify-content-md-center">
                    <button type="submit" class="btn btn-outline-secondary" style="width: 20%; font-weight: bold">등록</button>
                </div>
            </form>
        </div>
    </body>
</html>
<!--bootstrap 4.5 Javascript-->
<script src="/my/js/jquery-3.6.0.js"></script>
<script src="/my/js/bootstrap.js"></script>
<script src="/my/js/bootstrap.min.js"></script>
