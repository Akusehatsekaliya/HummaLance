<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Listings</title>
    <link rel="stylesheet" href="{{ asset('assets_landing/vendor/bootstrap/css/bootstrap.min.css') }}">
    <style>
      .job-listings {
        background-color: #fff;
        display: flex;
        flex-direction: column;
        overflow: hidden;
        width: 100%;
      }

      .header {
        background-color: #fff;
        display: flex;
        width: 100%;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 18px 70px;
        border: 1px solid rgba(0, 0, 0, 0.3);
      }

      @media (max-width: 991px) {
        .header {
          max-width: 100%;
          padding: 0 20px;
        }
      }

      .header-content {
        display: flex;
        width: 100%;
        max-width: 1400px;
        gap: 20px;
        justify-content: space-between;
      }

      @media (max-width: 991px) {
        .header-content {
          max-width: 100%;
        }
      }

      .logo {
        aspect-ratio: 3.88;
        object-fit: contain;
        object-position: center;
        width: 128px;
        max-width: 100%;
        margin: auto 0;
      }

      .search-container {
        align-self: start;
        display: flex;
        color: rgba(0, 0, 0, 0.3);
        font: 400 12px Roboto, sans-serif;
      }

      @media (max-width: 991px) {
        .search-container {
          max-width: 100%;
        }
      }

      .search-input {
        border-radius: 4px 0 0 4px;
        background-color: #fff;
        overflow: hidden;
        flex-grow: 1;
        width: fit-content;
        padding: 16px 13px;
        border: 1px solid rgba(0, 0, 0, 0.3);
      }

      @media (max-width: 991px) {
        .search-input {
          max-width: 100%;
          padding-right: 20px;
        }
      }

      .search-button {
        aspect-ratio: 1;
        object-fit: contain;
        object-position: center;
        width: 41px;
        border-radius: 0 4px 4px 0;
      }

      .nav-links {
        display: flex;
        gap: 20px;
        color: rgba(27, 31, 38, 0.72);
        flex-wrap: wrap;
        margin: auto 0;
        font: 500 20px Roboto, sans-serif;
      }

      @media (max-width: 991px) {
        .nav-links {
          max-width: 100%;
        }
      }

      .nav-link-home {
        color: #01abfe;
      }

      .nav-link-community {
        flex-basis: auto;
      }

      .nav-link-freelancer {
        color: #0081bf;
        flex-basis: auto;
      }

      .user-actions {
        display: flex;
        gap: 16px;
      }

      .user-icon {
        aspect-ratio: 1;
        object-fit: contain;
        object-position: center;
        width: 42px;
        border-radius: 42px;
      }

      .category-nav {
        background-color: #fff;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        display: flex;
        width: 100%;
        flex-direction: column;
        align-items: center;
        color: rgba(27, 31, 38, 0.72);
        padding: 12px 70px 0;
        font: 500 18px Roboto, sans-serif;
      }

      @media (max-width: 991px) {
        .category-nav {
          max-width: 100%;
          padding: 0 20px;
        }
      }

      .category-list {
        display: flex;
        width: 100%;
        max-width: 1381px;
        align-items: start;
        gap: 19px;
        flex-wrap: wrap;
      }

      @media (max-width: 991px) {
        .category-list {
          max-width: 100%;
        }
      }

      .category-item {
        align-self: stretch;
        display: flex;
        flex-direction: column;
        color: #01abfe;
      }

      .category-indicator {
        aspect-ratio: 45.45;
        object-fit: contain;
        object-position: center;
        width: 136px;
        margin-top: 13px;
      }

      @media (max-width: 991px) {
        .category-indicator {
          margin-right: 2px;
        }
      }

      .category-programming {
        flex-grow: 1;
        width: 168px;
      }

      .category-video {
        flex-grow: 1;
        width: 148px;
      }

      .category-music {
        flex-grow: 1;
        width: 115px;
      }

      .category-writing {
        flex-grow: 1;
        width: 166px;
      }

      .category-photography {
        flex-grow: 1;
        width: 101px;
      }

      .category-logo {
        flex-grow: 1;
        width: 99px;
      }

      .category-more {
        aspect-ratio: 0.59;
        object-fit: contain;
        object-position: center;
        width: 10px;
      }

      .hero {
        background-color: #006a9e;
        display: flex;
        width: 100%;
        flex-direction: column;
        align-items: center;
        padding: 23px 70px 0;
      }

      @media (max-width: 991px) {
        .hero {
          max-width: 100%;
          padding: 0 20px;
        }
      }

      .hero-content {
        width: 1286px;
        max-width: 100%;
      }

      .hero-columns {
        gap: 20px;
        display: flex;
      }

      @media (max-width: 991px) {
        .hero-columns {
          flex-direction: column;
          align-items: stretch;
          gap: 0;
        }
      }

      .hero-column {
        display: flex;
        flex-direction: column;
        line-height: normal;
        width: 50%;
        margin-left: 0;
      }

      @media (max-width: 991px) {
        .hero-column {
          width: 100%;
        }
      }

      .hero-text {
        display: flex;
        margin-top: 60px;
        flex-direction: column;
        font-family: Inter, sans-serif;
        color: #fff;
      }

      @media (max-width: 991px) {
        .hero-text {
          max-width: 100%;
          margin-top: 40px;
        }
      }

      .hero-title {
        font-size: 38px;
        font-weight: 700;
        line-height: 48px;
        margin-right: 40px;
      }

      @media (max-width: 991px) {
        .hero-title {
          max-width: 100%;
          margin-right: 10px;
        }
      }

      .hero-subtitle {
        font-size: 19px;
        font-weight: 400;
        line-height: 1;
        margin-top: 22px;
      }

      @media (max-width: 991px) {
        .hero-subtitle {
          max-width: 100%;
          margin-right: 3px;
        }
      }

      .hero-cta {
        border-radius: 38px;
        background-color: #fff;
        margin-top: 41px;
        overflow: hidden;
        color: #1b1f26;
        padding: 13px 70px 25px;
        font: 600 22px Roboto, sans-serif;
      }

      @media (max-width: 991px) {
        .hero-cta {
          max-width: 100%;
          margin-top: 40px;
          padding: 0 20px;
        }
      }

      .hero-image-column {
        display: flex;
        flex-direction: column;
        line-height: normal;
        width: 50%;
        margin-left: 20px;
      }

      @media (max-width: 991px) {
        .hero-image-column {
          width: 100%;
        }
      }

      .hero-image {
        aspect-ratio: 0.96;
        object-fit: contain;
        object-position: center;
        width: 100%;
        flex-grow: 1;
      }

      @media (max-width: 991px) {
        .hero-image {
          max-width: 100%;
          margin-top: 40px;
        }
      }

      .main-content {
        background-color: #fff;
        z-index: 10;
        display: flex;
        margin-top: -178px;
        width: 100%;
        padding-top: 57px;
        flex-direction: column;
      }

      @media (max-width: 991px) {
        .main-content {
          max-width: 100%;
        }
      }

      .content-wrapper {
        align-self: center;
        display: flex;
        width: 100%;
        max-width: 1402px;
        flex-direction: column;
      }

      @media (max-width: 991px) {
        .content-wrapper {
          max-width: 100%;
        }
      }

      .section-header {
        display: flex;
        width: 100%;
        gap: 20px;
        flex-wrap: wrap;
        justify-content: space-between;
      }

      @media (max-width: 991px) {
        .section-header {
          max-width: 100%;
        }
      }

      .section-title {
        color: #060020;
        font: 700 24px/1 Inter, sans-serif;
      }

      .show-all {
        display: flex;
        gap: 6px;
        color: #55a6ff;
        font: 400 18px Roboto, sans-serif;
      }

      .show-all-text {
        flex-grow: 1;
      }

      .show-all-icon {
        aspect-ratio: 0.94;
        object-fit: contain;
        object-position: center;
        width: 16px;
        align-self: start;
      }

      .jobs-title {
        color: #01abfe;
        align-self: start;
        margin: 33px 0 0 15px;
        font: 500 25px Roboto, sans-serif;
      }

      @media (max-width: 991px) {
        .jobs-title {
          margin-left: 10px;
        }
      }

      .jobs-indicator {
        border-radius: 22px;
        background-color: #01abfe;
        display: flex;
        width: 64px;
        height: 6px;
        margin: 6px 0 0 11px;
      }

      @media (max-width: 991px) {
        .jobs-indicator {
          margin-left: 10px;
        }
      }

      .job-listings {
        margin: 28px 11px 0;
      }

      @media (max-width: 991px) {
        .job-listings {
          max-width: 100%;
          margin-right: 10px;
        }
      }

      .job-list {
        gap: 20px;
        display: flex;
      }

      @media (max-width: 991px) {
        .job-list {
          flex-direction: column;
          align-items: stretch;
          gap: 0;
        }
      }

      .job-item {
        display: flex;
        flex-direction: column;
        line-height: normal;
        width: 25%;
        margin-left: 0;
      }

      @media (max-width: 991px) {
        .job-item {
          width: 100%;
        }
      }

      .job-card {
        border-radius: 8px;
        background-color: #fff;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        display: flex;
        flex-grow: 1;
        padding-bottom: 15px;
        flex-direction: column;
        overflow: hidden;
        width: 100%;
      }

      @media (max-width: 991px) {
        .job-card {
          margin-top: 29px;
        }
      }

      .job-image {
        align-self: start;
        display: flex;
        height: 193px;
      }

      .job-details {
        display: flex;
        margin-top: 12px;
        width: 100%;
        flex-direction: column;
        padding: 0 15px;
      }

      .job-header {
        display: flex;
        width: 100%;
        gap: 40px 52px;
      }

      .job-poster {
        display: flex;
        gap: 8px;
        color: #060020;
        flex: 1;
        font: 700 14px/1 Roboto, sans-serif;
      }

      .poster-avatar {
        aspect-ratio: 1;
        object-fit: contain;
        object-position: center;
        width: 31px;
        border-radius: 28px;
      }

      .poster-name {
        align-self: start;
      }

      .job-rating {
        border-radius: 2px;
        background-color: #ffd988;
        align-self: start;
        display: flex;
        gap: 4px;
        overflow: hidden;
        flex: 1;
        padding: 4px 8px;
      }

      .rating-text {
        color: #060020;
        flex-grow: 1;
        font: 700 12px Roboto, sans-serif;
      }

      .rating-stars {
        display: flex;
        gap: 2px;
      }

      .star-icon {
        aspect-ratio: 1;
        object-fit: contain;
        object-position: center;
        width: 12px;
      }

      .job-title {
        color: #423d55;
        align-self: start;
        <FILE path="job-listings-section.html">font: 500 14px/18px Roboto, sans-serif;
        margin-top: 9px;
      }

      .job-meta {
        display: flex;
        margin-top: 14px;
        width: 100%;
        gap: 20px;
        font-family: Roboto, sans-serif;
        justify-content: space-between;
      }

      .job-stats {
        display: flex;
        flex-direction: column;
        font-size: 14px;
        line-height: 1;
      }

      .job-rating-container {
        display: flex;
        gap: 6px;
        white-space: nowrap;
      }

      @media (max-width: 991px) {
        .job-rating-container {
          white-space: initial;
        }
      }

      .rating-icon {
        aspect-ratio: 1;
        object-fit: contain;
        object-position: center;
        width: 14px;
        border-radius: 1px;
        align-self: start;
      }

      .rating-value {
        display: flex;
        gap: 2px;
      }

      @media (max-width: 991px) {
        .rating-value {
          white-space: initial;
        }
      }

      .rating-number {
        color: #060020;
        font-weight: 700;
        flex-grow: 1;
      }

      .rating-count {
        color: #423d55;
        font-weight: 400;
      }

      .job-price {
        color: #060020;
        font-weight: 700;
        align-self: start;
        margin-top: 5px;
      }

      .job-action {
        border-radius: 5px;
        display: flex;
        gap: 2px;
        overflow: hidden;
        font-size: 12px;
        color: #fff;
        font-weight: 700;
        margin: auto 0;
        padding: 8px 18px;
      }

      .action-icon {
        aspect-ratio: 1;
        object-fit: contain;
        object-position: center;
        width: 18px;
      }

      .action-text {
        margin: auto 0;
      }
    </style>
  </head>

  <body>
    <main class="job-listings">
      <header class="header">
        <div class="header-content">
          <img src="logo.png" alt="Company Logo" class="logo">
          <div class="search-container">
            <input type="text" placeholder="Find Services..." class="search-input" aria-label="Search for services">
            <button class="search-button" aria-label="Search">
              <img src="search-icon.png" alt="" class="search-icon">
            </button>
          </div>
          <nav class="nav-links">
            <a href="#" class="nav-link-home">Home</a>
            <a href="#" class="nav-link">Work</a>
            <a href="#" class="nav-link">Service</a>
            <a href="#" class="nav-link-community">Community</a>
            <a href="#" class="nav-link-freelancer">Become a freelancer</a>
          </nav>
          <div class="user-actions">
            <img src="user-icon-1.png" alt="User profile" class="user-icon">
            <img src="user-icon-2.png" alt="Notifications" class="user-icon">
            <img src="user-icon-3.png" alt="Messages" class="user-icon">
          </div>
        </div>
      </header>

      <nav class="category-nav" aria-label="Job categories">
        <ul class="category-list">
          <li class="category-item">
            <a href="#">Graphic & Design</a>
            <img src="category-indicator.png" alt="" class="category-indicator">
          </li>
          <li class="category-item category-programming">
            <a href="#">Programming & Tech</a>
          </li>
          <li class="category-item category-video">
            <a href="#">Video & Animation</a>
          </li>
          <li class="category-item category-music">
            <a href="#">Music & Audio</a>
          </li>
          <li class="category-item category-writing">
            <a href="#">Writing & Translation</a>
          </li>
          <li class="category-item">
            <a href="#">Business</a>
          </li>
          <li class="category-item category-photography">
            <a href="#">Photography</a>
          </li>
          <li class="category-item">
            <a href="#">Finance</a>
          </li>
          <li class="category-item category-logo">
            <a href="#">Logo Design</a>
          </li>
          <li class="category-item">
            <a href="#">Show More</a>
            <img src="show-more-icon.png" alt="" class="category-more">
          </li>
        </ul>
      </nav>

      <section class="hero">
        <div class="hero-content">
          <div class="hero-columns">
            <div class="hero-column">
              <div class="hero-text">
                <h1 class="hero-title">Find your dream job, and turn your free time into a job.</h1>
                <p class="hero-subtitle">Millions of people use clocker to make their dream jobs a reality.</p>
                <a href="#" class="hero-cta">Search for Jobs Now</a>
              </div>
            </div>
            <div class="hero-image-column">
              <img src="hero-image.png" alt="People working on their dream jobs" class="hero-image">
            </div>
          </div>
        </div>
      </section>

      <section class="main-content">
        <div class="content-wrapper">
          <div class="section-header">
            <h2 class="section-title">Freelancer service</h2>
            <a href="#" class="show-all">
              <span class="show-all-text">Show All</span>
              <img src="show-all-icon.png" alt="" class="show-all-icon">
            </a>
          </div>
          <h3 class="jobs-title">Jobs</h3>
          <div class="jobs-indicator" aria-hidden="true"></div>
          <div class="job-listings">
            <ul class="job-list">
              <li class="job-item">
                <article class="job-card">
                  <img src="job-image-1.png" alt="" class="job-image">
                  <div class="job-details">
                    <div class="job-header">
                      <div class="job-poster">
                        <img src="poster-avatar-1.png" alt="" class="poster-avatar">
                        <span class="poster-name">Rifaldi Liebert</span>
                      </div>
                      <div class="job-rating">
                        <span class="rating-text">Top Rated</span>
                        <div class="rating-stars">
                          <img src="star-icon.png" alt="" class="star-icon">
                          <img src="star-icon.png" alt="" class="star-icon">
                          <img src="star-icon.png" alt="" class="star-icon">
                        </div>
                      </div>
                    </div>
                    <h4 class="job-title">I Will Make You A Great Logo Design, With Modern And Minimalist Style</h4>
                    <div class="job-meta">
                      <div class="job-stats">
                        <div class="job-rating-container">
                          <img src="rating-icon.png" alt="" class="rating-icon">
                          <div class="rating-value">
                            <span class="rating-number">5.0</span>
                            <span class="rating-count">(530)</span>
                          </div>
                        </div>
                        <span class="job-price">From $20</span>
                      </div>
                      <a href="#" class="job-action">
                        <img src="action-icon.png" alt="" class="action-icon">
                        <span class="action-text">Order Now</span>
                      </a>
                    </div>
                  </div>
                </article>
              </li>
              <!-- Repeat the job-item structure for the other 3 items -->
            </ul>
          </div>
        </div>
      </section>
    </main>
  </body>

</html>
