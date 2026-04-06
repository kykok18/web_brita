<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portal Berita</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
            background: #f5f6fa;
        }

        /* NAVBAR */
        .navbar {
            background: linear-gradient(90deg, #0d1b2a, #1b263b);
            padding: 14px 0;
        }

        .navbar-brand {
            color: #4cc9f0 !important;
            font-weight: bold;
        }

        .nav-link {
            color: #ddd !important;
            font-size: 15px;
            margin-right: 10px;
            transition: 0.3s;
        }

        .nav-link:hover {
            color: #4cc9f0 !important;
        }

        /* SEARCH */
        .search-box {
            width: 320px;
        }

        /* TRENDING */
        .trending-bar {
            background: #0b132b;
            color: white;
            font-size: 14px;
            padding: 8px 0;
        }

        .trending-bar a {
            color: #ccc;
            text-decoration: none;
            white-space: nowrap;
        }

        .trending-bar a:hover {
            color: #4cc9f0;
        }

        /* supaya konten dorong footer */
        main {
            flex: 1;
        }

        body {
            background: #f5f6fa;
            font-family: 'Segoe UI', sans-serif;
        }

        /* NAVBAR */
        .navbar {
            background: #0f172a !important;
        }

        .navbar-brand {
            font-weight: bold;
            color: #fff !important;
        }

        .nav-link {
            color: #cbd5e1 !important;
            font-weight: 500;
        }

        .nav-link:hover {
            color: #fff !important;
        }

        /* SEARCH */
        .search-box input {
            border-radius: 20px;
            border: none;
            padding: 6px 12px;
        }

        /* CARD */
        .card {
            border: none;
            border-radius: 12px;
        }

        /* IMAGE FIX */
        img {
            object-fit: cover;
        }

        /* HERO */
        .hero img {
            height: 350px;
            border-radius: 12px;
        }

        /* SIDE */
        .side img {
            height: 100px;
            border-radius: 8px;
        }

        /* GRID */
        .card img {
            height: 180px;
        }

        /* TRENDING */
        .trending a {
            text-decoration: none;
            color: #111;
        }

        .trending a:hover {
            color: #0d6efd;
        }

        /* PAGINATION */
        .pagination .page-link {
            border-radius: 8px;
        }
    </style>

</head>

<body>