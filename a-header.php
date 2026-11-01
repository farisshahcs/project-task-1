<!DOCTYPE html>

<html lang="en">
    
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Extase</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" rel="stylesheet">

  <style>
    /* Dark Theme Base & Site-wide Font */
    body {
      background-color: #000000;
      color: #ffffff;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif, Helvetica, sans-serif !important;
    }

    .card {
      background-color: #2b3035 !important;
      color: #ffffff !important;
      border-color: #495057 !important;
    }

    /* Input Boxes: Pure White Background with Dark Text */
    .form-control, .form-select {
      background-color: #ffffff !important;
      color: #212529 !important;
      border-color: #ced4da !important;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif, Helvetica, sans-serif !important;
    }

    .form-control::placeholder {
      color: #6c757d !important;
    }

    .form-control:focus, .form-select:focus {
      background-color: #ffffff !important;
      color: #212529 !important;
      border-color: #0d6efd !important;
      box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25) !important;
    }

    /* Blue & White Tables with Solid Black Outer Border */
    .table-responsive {
      border: 2px solid #000000 !important;
      border-radius: 6px;
      overflow: hidden;
      background-color: #000000 !important;
    }

    .table {
      background-color: #000000 !important;
      color: #212529 !important;
      border: none !important;
      margin-bottom: 0 !important;
    }

    .table th, 
    .table td, 
    .table thead th, 
    .table tfoot th, 
    .table tfoot td,
    .table > :not(caption) > * > * {
      border: 1px solid #000000 !important;
      border-color: #000000 !important;
      box-shadow: none !important;
    }

    /* Table Header: Blue with White Text & Black Borders */
    .table thead, 
    .table thead th,
    .table-dark,
    .table-dark th {
      background-color: #0d6efd !important;
      color: #ffffff !important;
    }

    /* Alternating Rows: White and Soft Light-Blue */
    .table-striped > tbody > tr:nth-of-type(odd) > * {
      background-color: #ffffff !important;
      color: #212529 !important;
    }

    .table-striped > tbody > tr:nth-of-type(even) > * {
      background-color: #e7f1ff !important;
      color: #212529 !important;
    }

    /* Row Hover State: Accent Blue */
    .table-hover > tbody > tr:hover > * {
      background-color: #cfe2ff !important;
      color: #212529 !important;
    }

    /* Table Footer */
    .table tfoot th, 
    .table tfoot td {
      background-color: #d0e2ff !important;
      color: #052c65 !important;
    }

    /* Text & Secondary Labels */
    .text-muted {
      color: #adb5bd !important;
    }

    /* Dropdowns */
    .dropdown-menu {
      background-color: #343a40 !important;
      border-color: #495057 !important;
    }

    .dropdown-item {
      color: #ffffff !important;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif, Helvetica, sans-serif !important;
    }

    .dropdown-item:hover {
      background-color: #495057 !important;
      color: #ffffff !important;
    }

    /* Custom Button Styling */
    .btn {
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif, Helvetica, sans-serif !important;
    }

    .btn-secondary {
      background-color: #6c757d !important;
      border-color: #6c757d !important;
      color: #ffffff !important;
    }

    .btn-secondary:hover {
      background-color: #5c636a !important;
    }
  </style>

</head>

<body class="bg-black text-white">

  <div class="container-fluid p-0 min-vh-100">

    <div class="row g-0 min-vh-100">
