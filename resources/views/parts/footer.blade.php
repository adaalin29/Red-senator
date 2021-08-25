<footer id="footer">
            <div class="container">
               <div class = "footer-content">
                  <div class="footer-box box1">
                     <a href="/" style="display:block">
                     <img  src="{{ Voyager::image(setting('site.logo')) }}"></a>
                     <h2>&copy Red Senator 2019. All rights reserved.</h2>
                  </div>
                  <div class="footer-box box2" id="mobile-footer" >
                     <h1>Menu:</h1>
                     <div class="container-footer-menu">
                        <ul>
                           <li><a href="/">Home</a></li>
                           <li><a href="news">News</a></li>
                           <li><a href="/dogs/boys">Boys</a></li>
                           <li><a href="/dogs/girls">Girls</a></li>
                        </ul>
                        <ul>
                           <li><a href="puppies">Puppies</a></li>
                           <li><a href="for-sale">for sale</a></li>
                           <li><a href="contact">Contact</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="footer-box box3">
                     <H1>Contact</H1>
<!--                      <div class="contact-item">
                        <div class="contact-left">Address:</div>
                        <div class="contact-right">{{setting('site.adress')}}</div>
                     </div> -->
                     <div class="contact-item">
                        <div class="contact-left">Phone:</div>
                        <div class="contact-right">{{setting('site.numar_telefon')}}</div>
                     </div>
                     <div class="contact-item">
                        <div class="contact-left">Email:</div>
                        <div class="contact-right"><a href = "mailto:{{setting('site.email')}}"> {{setting('site.email')}}</a></div>
                     </div>
                     <div class="contact-item">
                        <div class="contact-left">Follow us on:</div>
                        <div class="contact-right contact-fa">
                           <a  class="fa-decoration" href="{{setting('site.facebook')}}"><i class="fa fa-facebook"></i></a>
                           <a  class="fa-decoration" href="{{setting('site.instagram')}}"><i class="fa fa-instagram"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </footer>