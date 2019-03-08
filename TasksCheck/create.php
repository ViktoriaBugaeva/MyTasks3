<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Create Post</h1>
                    <form action="store.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group">
                            <textarea name="comment" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <textarea name="data" class="form-control">гггг-мм-дд</textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
