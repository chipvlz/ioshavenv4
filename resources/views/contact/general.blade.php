@extends('layouts.default')
@section('head')
<link rel="stylesheet" href="/css/uid.css">
@endsection
@section('content')
<div class="wrapper medium">
  <h1>General Contact</h1>
  <form class="card p1" method="POST" action="/contact">
    {{ csrf_field() }}

    <input type="hidden" name="type" value="General">
    
    <div class="field">
      <label>Subject</label>
      <input type="text" class="fancy p1 mt-5" placeholder="subject" name="subject">
    </div>

    <div class="field">
      <label>Email</label>
      <input type="email" class="fancy p1 mt-5" placeholder="email" name="email">
    </div>

    <div class="field">
      <label>Message</label>
      <textarea class="fancy p1 mt-5" placeholder="tell us what's happening..."  rows="5" name="message"></textarea>
    </div>

    <input type="submit" class="fancy fill--blue" style="background:transparent">
  </form>
</div>

@endsection
