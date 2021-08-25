@extends('parts.template') @section('title', 'Page Title') @section('content')
<div class="container">
  <div class="contact-info">
<!--     <div class="contact-info-left">
      <div class="title-page contact-info-title">
        Contact</div>
      <div class="contact-forms">
        <div class="contact-info-text">
          Do you have any question? Ask us on this form.
        </div>
        <form class="formular-inputuri">
          <input type="text" name="Name" placeholder="Name">
          <input type="Email" name="Email" placeholder="Email">
          <input type="text" name="Message" placeholder="Message">
        </form>
      </div>
      <div class="contact-button">
        <button type="button">Send</button>
      </div>
    </div> -->
    <div class="contact-info-right">
      <div class="contact-item">
      </div>
      <div class="contact-item">
        <div class="contact-left contact-adress">Phone:</div>
        <div class="contact-right contact-adress">{{setting('site.numar_telefon')}}</div>
      </div>
      <div class="contact-item">
        <div class="contact-left contact-adress">Email:</div>
        <div class="contact-right contact-adress"><a href="mailto:{{setting('site.email')}}"> {{setting('site.email')}}</a></div>
      </div>

    </div>
  </div>
</div>

@endsection