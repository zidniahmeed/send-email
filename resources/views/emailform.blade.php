<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Email Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
              <div class="card mt-5">
                <div class="card-header">
                  <h4 class="text-center">Sending Email</h4>
                </div>
                <div class="card-body">
                  <form action="/sendemail" method="post">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label">title</label>
                          <input type="text" class="form-control" name="title" >     
                        </div>
                        <div class="mb-3">
                            <label class="form-label">body</label>
                            <input type="text" class="form-control" name="body" >     
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Email Tujuan</label>
                          <input type="email" class="form-control" name="email" >     
                      </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>