@extends('layout')
@section('pageClass', 'home')
@section('tabTitle', 'About')
@section('content')

<section class="home__section home__section--cityscape">
    <h1>Hi, I'm Sean.</h1>
    <h2>a web developer</h2>
    <div class="skyline skyline--sunbox">
        <div class="sun-rays">
            <div class="the-sun"></div>
        </div>
    </div>
    <div class="skyline skyline--cloud-2"></div>
    <div class="skyline skyline--cloud-1"></div>
    <div class="skyline skyline--prlx-3"></div>
    <div class="skyline skyline--prlx-2"></div>
    <div class="skyline skyline--prlx-1"></div>
    <div class="skyline skyline--first"></div>
</section>
<section class="home__section">
     <div class="inside-container">
     </div>
</section>
<section class="home__section home__section--about">
    <div class="inside-container">
        <div class="circle"></div>
        <h2>Hi,</h2>
        <p class="tight">I'm a Philadelphia based web developer.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
</section>
<section class="home__section home__section--skills">
     <div class="inside-container">

     </div>
</section>
{{--<div class="white-ridges-down"></div>--}}
<script type="text/javascript" src="/js/parallax-background.js"></script>
 @stop