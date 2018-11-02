@extends('layouts.default',['title'=>'About'])
@section('container')
      <div class='container'>
           <h2>What is {{config('app.name')}}?</h2>
           <p>{{config('app.name')}} is a clone of <a href="https://laramap.com" target="_blank">Laramap</a></p>
           <div class="row">
               <div class="col-md-6">
                    <p class='alert alert-warning'>
                         <strong><i class="fa fa-exclamation-triangle"></i>This app is built by <a href="https://twitter.com/mikeLaravel" target="_blank">@mikeLaravel</a> for learning puposes</strong>
                    </p>
               </div>
           </div>
           <p>Feel free to help to improve the <a href="">source code</a></p>
           <hr/>

           <p>What is Laramap?</p>
           <p>Laramap is the website by which {{config('app.name')}} was inspired:)</p>
           <p>More info <a href="https://laramap.com/p/about">here</a></p>
           <hr>
           <h2>Which tools and services are used in {{config('app.name')}}?</h2>
           <p>Basically it's built on Laravel &amp; Bootstrap . But there is a bunch of services used for emails and other sections.</p>
           <ul>
             <li>Laravel</li>
             <li>Bootstrap</li>
             <li>Amazone S3</li>
             <li>Mandrill</li>
             <li>Google Maps</li>
             <li>Antony Martin's Geolocation Package</li>
             <li>Michel Fortin's Markdown Parser Package</li>
             <li>Heroku</li>
           </ul>
      </div>
@endsection
