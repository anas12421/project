{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unique Payment Card Design</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            perspective: 1000px;
            width: 300px;
            height: 200px;
            transform-style: preserve-3d;
            transition: transform 0.5s;
        }

        .card:hover {
            transform: rotateY(180deg);
        }

        .card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transform-style: preserve-3d;
        }

        .card-front,
        .card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-front {
            background-color: #3498db;
            color: #fff;
        }

        .card-back {
            background-color: #2ecc71;
            color: #fff;
            transform: rotateY(180deg);
        }

        .card-logo {
            margin-bottom: 15px;
        }

        .card-number {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .card-expiry,
        .card-cvv {
            font-size: 14px;
        }

        .card-cvv {
            margin-top: 15px;
        }

    </style>
</head>
<body>

<div class="card">
    <div class="card-inner">
        <!-- Card Front -->
        <div class="card-front">
            <div class="card-logo">Your Logo</div>
            <div class="card-number">**** **** **** 1234</div>
            <div class="card-expiry">MM/YY</div>
        </div>

        <!-- Card Back -->
        <div class="card-back">
            <div class="card-cvv">CVV: 123</div>
        </div>
    </div>
</div>

</body>
</html> --}}


@extends('website.master')
@section('body')
<section >
    ok text = {{$value}}
</section>
@endsection

