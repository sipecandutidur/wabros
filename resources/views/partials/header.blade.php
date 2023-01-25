<div class="lime-header">
    <nav class="navbar navbar-expand-lg">
      <section class="material-design-hamburger navigation-toggle">
        <a
          href="javascript:void(0)"
          class="button-collapse material-design-hamburger__icon"
        >
          <span class="material-design-hamburger__layer"></span>
        </a>
      </section>
      <a class="navbar-brand" href="/">Broadcaster</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="material-icons">keyboard_arrow_down</i>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="form-inline my-2 my-lg-0 search" id="search">
          <input
            class="form-control mr-sm-2"
            type="search"
            placeholder="Search..."
            aria-label="Search"
          />
        </form>
        <ul class="navbar-nav ml-auto">

          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <i class="material-icons">more_vert</i>
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
              <li><a class="dropdown-item" href="#">Account</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li class="divider"></li>
              <li><a class="dropdown-item" href="#">Log Out</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <div class="search-results">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="search-results-header">
            <h4>Search Results</h4>
            <a href="#" id="closeSearch"
              ><i class="material-icons">close</i></a
            >
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <ul class="search-result-list user-search">
            <li>
              <img src="/assets/images/avatars/avatar2.png" alt="" />
              <p>
                Tom Manchester<br />(Works at
                <span class="search-input-value"></span>)
              </p>
            </li>
            <li>
              <img src="/assets/images/avatars/avatar5.png" alt="" />
              <p>
                Luke Williams<br />(Lives in
                <span class="search-input-value"></span>)
              </p>
            </li>
            <li>
              <img src="/assets/images/avatars/avatar4.png" alt="" />
              <p>
                People near:<br /><span class="search-input-value"></span>
              </p>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="search-result-list social-search">
            <li>
              <div class="social-search-icon facebook-icon-bg">
                <i class="fab fa-facebook-f"></i>
              </div>
              <div class="social-search-text">
                <p><span class="search-input-value"></span> on Facebook</p>
              </div>
            </li>
            <li>
              <div class="social-search-icon twitter-icon-bg">
                <i class="fab fa-twitter"></i>
              </div>
              <div class="social-search-text">
                <p><span class="search-input-value"></span> on Twitter</p>
              </div>
            </li>
            <li>
              <div class="social-search-icon google-icon-bg">
                <i class="fab fa-google-plus-g"></i>
              </div>
              <div class="social-search-text">
                <p><span class="search-input-value"></span> on Google+</p>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="search-result-list article-search">
            <li>
              <p>
                Lorem ipsum dolor sit amet, consectetur
                <span class="search-input-value"></span> adipiscing elit, sunt
                in culpa quifdaasd quis.
              </p>
              <span class="search-article-date">06 Dec, 2018</span>
            </li>
            <li>
              <p>
                Duis non semper sapien. Morbi imperdiet velit in
                <span class="search-input-value"></span> bibendum lobortis.
                Integer arcu urna, elementum in pellentesque nec, finibus at
                nisi.
              </p>
              <span class="search-article-date">19 Nov, 2017</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
