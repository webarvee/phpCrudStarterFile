<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >

    <title>PHP CRUD </title>
  </head>
  <body>
        <div class="container">
            <div class="row justify-content-center">
              <h1 class="text-center">PHP CRUD</h1>
              <div class="col-8">
              <p>
                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                  ADD Details
                </a>
              </p>
              <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <form>
                      <div class="mb-3">
                        <label for="user_name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="user_name" name="user_name" >
                      </div>
                      <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                      </div>
                      <div class="mb-3">
                        <label for="country" class="form-label">Country</label>
                        <select class="form-control" name="country" id="country">
                          <option value="">Select Country </option>
                          <option value="India">India </option>
                          <option value="USA">USA </option>
                          <option value="Canada">Canada </option>
                        </select>
                      </div>
                 
                      <div class="mb-3">
                      <label for="status">Status</label>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="status1" checked>
                          Active
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="status2" >
                        In Active
                      </div> 
                     </div>
                      <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                    </form>
                </div>
              </div>
            </div>
          </div>
            <div class="row justify-content-center table-striped table-bordered">
                  <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Country</th>
                      <th scope="col">Status</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>James</td>
                      <td>james@email.com</td>
                      <td>USA</td>
                      <td><span class="badge bg-success">Active</span></td>
                      <td><a class="btn btn-success  me-3 ">Edit</button><a class="btn btn-danger">Delete</button></td>
                    </tr>
                  
                  </tbody>
                </table>
        </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>