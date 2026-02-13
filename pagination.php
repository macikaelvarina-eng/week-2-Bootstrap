<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pagination Pink</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>
        /* Pagination Pink */
        .pagination .page-link {
            color: #c2185b;
            background-color: #f8bbd0;
            border: 1px solid #f48fb1;
        }

        .pagination .page-link:hover {
            color: white;
            background-color: #ec407a;
            border-color: #ec407a;
        }

        .pagination .page-item.active .page-link {
            background-color: #d81b60;
            border-color: #d81b60;
            color: white;
        }
    </style>
</head>
<body>

<div class="container mt-4">

    <nav aria-label="Pagination">
      <ul class="pagination">
        <li class="page-item"><a href="#" class="page-link">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item active">
          <a class="page-link" href="#" aria-current="page">2</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav>

</div>

</body>
</html>