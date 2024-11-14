@extends('home.layout.app')
@section('content')

<div class="main-page second py-5">
    <div class="container">
       <div class="row">
          <div class="col-lg-4 left">
             <div class="profile_info">
                <div class="seller-card">
                   <div>
                      <div class="user-online-indicator is-online " data-user-id="1152855">
                         <i class="fa fa-circle"></i>online
                      </div>
                   </div>
                   <div class="user-profile-info">
                      <div>
                         <div class="user-profile-image">
                            <label class="user-pict">
                            <img
                               src="images/user/s10.png"
                               class="img-fluid user-pict-img" alt="Askbootstrap">
                            <a href="#"
                               class="user-badge-round user-badge-round-med locale-en-us top-rated-seller"></a></label>
                         </div>
                      </div>
                      <div class="user-profile-label">
                         <div class="username-line">
                            <a href="#" class="seller-link">Askbootstrap</a>
                         </div>
                         <div class="oneliner-wrapper">
                            <small class="oneliner">Professional Voice Actress</small>
                         </div>
                      </div>
                   </div>
                   <div class="user-stats-desc">
                      <ul class="user-stats">
                         <li class="location">From<strong>United States</strong></li>
                         <li class="member-since">Member since<strong>Dec 2012</strong></li>
                         <li class="response-time">Avg. Response Time<strong>2 hours</strong></li>
                         <li class="recent-delivery">Recent Delivery<strong>about&nbsp;15</strong></li>
                      </ul>
                   </div>
                </div>
             </div>
             <div class="seller-profile">
                <div class="description">
                   <h3>Description</h3>
                   <p>I am a Voice Actress with over 16+ years experience in everything from video games to phone
                      systems to explainer videos to children's books.
                      I am originally from the South East of England and have a natural British accent, as well as a
                      Standard American accent from living in the US for 15 years.
                   </p>
                </div>
                <div class="linked-accounts">
                   <h3>Linked Accounts</h3>
                   <ul>
                      <li class="platform social-account facebook"><i class="platform-icon facebook hint--top"
                         aria-hidden="true" data-hint="facebook"></i><span class="text">facebook</span></li>
                      <li class="platform social-account google"><i class="platform-icon google hint--top"
                         aria-hidden="true" data-hint="google"></i><span class="text">google</span></li>
                   </ul>
                </div>
                <div class="skills">
                   <h3>Skills</h3>
                   <ul>
                      <li class=""><a href="#">voice talent</a></li>
                      <li class=""><a href="#">voice acting</a></li>
                      <li class=""><a href="#">voiceover</a></li>
                      <li class=""><a href="#">voice over</a></li>
                      <li class=""><a href="#">voiceover talent</a></li>
                      <li class=""><a href="#">voice actor</a></li>
                      <li class=""><a href="#">voicetalent</a></li>
                      <li class=""><a href="#">voiceacting</a></li>
                      <li class=""><a href="#">voiceactor</a></li>
                      <li class=""><a href="#">voiceover artist</a></li>
                   </ul>
                </div>
             </div>
          </div>
          <div class="col-lg-8 right">
             <h2>Askbootstrap's Gigs</h2>
             <div class="recommended">
                <div class="row">
                   <div class="col-md-4">
                      <div>
                         <a href="#">
                         <img class="img-fluid" src="images/list/v1.png" />
                         </a>
                         <div class="inner-slider">
                            <div class="inner-wrapper">
                               <div class="d-flex align-items-center">
                                  <span class="seller-image">
                                  <img class="img-fluid"
                                     src="images/user/s1.png"
                                     alt='' />
                                  </span>
                                  <span class="seller-name">
                                  <a href="profile.html">Marcin Kowalski</a>
                                  </span>
                                  </span>
                               </div>
                               <h3>I will create professional audio ads or radio commercials for your project</h3>
                               <div class="footer">
                                  <div class="price">
                                     <a href="#">
                                     Starting At <span> $1,205</span>
                                     </a>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection
