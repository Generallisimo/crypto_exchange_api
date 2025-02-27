@extends('layouts.app')

@section('title', '«t1ex»')

@section('content')
<div class="rootpage">
    <h1> Project - «t1ex»</h1>
    <div class="rootpage__body">
        <div class="rootpage__info">
        </div>
        <h2>Done pages:</h2>
        <ol class="rootpage__list">
            <li> <a target="_blank" href="{{ route('change') }}">Change</a></li>
            <br>
            <li><a target="_blank" href="{{ route('confirmation') }}">confirmation</a></li>
            <li><a target="_blank" href="{{ route('exchange') }}">exchange</a></li>
            <li><a target="_blank" href="{{ route('finish') }}">finish</a></li>
            <br>
            <br>
            <li><a target="_blank" href="{{ route('about') }}">About</a></li>
            <li><a target="_blank" href="{{ route('started') }}">Started</a></li>
        </ol>
    </div>

</div>

<style>
    @charset "UTF-8";
    @import url("https://fonts.googleapis.com/css?family=Montserrat:regular,700&display=swap");

    *,
    *::before,
    *::after {
        padding: 0px;
        margin: 0px;
        border: 0px;
        box-sizing: border-box;
    }

    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
        min-width: 320px;
        width: 100%;
        color: #fff;
        background-color: #101010;
    }

    body {
        font-family: monospace;
        font-size: 100%;
        line-height: 1;
        font-size: 1rem;
    }

    a {
        text-decoration: underline;
        color: #56e52e;
    }

    a:visited {
        text-decoration: none;
        color: rgba(50, 174, 16, 0.8);
    }

    a:hover {
        text-decoration: none;
    }

    ul li {
        list-style: none;
    }

    img {
        vertical-align: top;
    }

    .wrapper {
        width: 100%;
        min-height: 100%;
        overflow: hidden;
    }

    .rootpage {
        padding: 30px;

        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }



    .rootpage__body {
        margin: 0 auto;
    }


    @media (max-width: 767px) {
        .rootpage {
            padding: 30px 15px;
        }
    }



    h1 {
        color: #66ff3c;
        font-size: 2.5rem;
        margin: 0px 0px 1.25rem 0px;
        align-self: center;
    }

    @media (max-width: 767px) {
        h1 {
            font-size: 1.85rem;
            margin: 0px 0px 1.25rem 0px;
        }
    }

    h2 {
        color: #66ff3c;
        font-size: 1.25rem;
        margin: 0px 0px 1rem 0px;
    }

    @media (max-width: 767px) {
        h2 {
            font-size: 1.125rem;
            margin: 0px 0px 1rem 0px;
        }
    }

    .rootpage__info {
        line-height: 140%;
        margin: 0px 0px 1.5rem 0px;
    }

    .rootpage__list {
        margin: 0px 0px 2.25rem 1.25rem;
    }

    .rootpage__list li:not(:last-child) {
        margin: 0px 0px 15px 0px;
    }

    .rootpage__contacts {
        line-height: 140%;
        align-self: center;

    }


    .rootpage__contacts a {
        color: #00e01e;
        text-decoration: none;
    }
</style>
@stop