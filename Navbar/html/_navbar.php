<nav class="navbar navbar-fixed-top" style="z-index: 100;">
                  <!-- <div style="margin: 0 4% auto"> -->
                    <div class="navbar-brand" style="margin-left: 4%">
                      <a class="navbar-item company-logo" id="company-logo" href=<?php //echo ($_SESSION['type']=='admin')?'../../Backend/html/backend-base.php':'../../index.php';?>>
                        <!-- <img src="../../Static/images/logo.png">&nbsp;&nbsp;<div id ="navbarLogo"></div> -->
                        <img src="../../Static/images/logo.png">&nbsp;&nbsp;<img id="navbarLogo" src="../../Static/images/company_name_white.png">
                      </a>
                  
                      <a class="navbar-item is-hidden-desktop" href="https://github.com/jgthms/bulma" target="_blank">
                        <span class="icon" style="color: #333;">
                          <i class="fa fa-github"></i>
                        </span>
                      </a>
                  
                      <a class="navbar-item is-hidden-desktop" href="https://twitter.com/jgthms" target="_blank">
                        <span class="icon" style="color: #55acee;">
                          <i class="fa fa-twitter"></i>
                        </span>
                      </a>
                  
                      <div class="navbar-burger burger" data-target="navMenubd-example">
                        <span></span>
                        <span></span>
                        <span></span>
                      </div>
                    </div>
                    <div id="navMenubd-example" class="navbar-menu">
                      <div class="navbar-start" id="centered-menus">
                        <a class="navbar-item" href="#home-section" id="home-menu">
                          <span class="bd-emoji"></span> &nbsp;<span class="navbarLinks">Home</span>
                        </a>
                        <a class="navbar-item" href="#news-section" id="news-menu">
                          <span class="bd-emoji"></span> &nbsp;<span class="navbarLinks">News</span>
                        </a>
                        <a class="navbar-item" href="#services-section" id="services-menu">
                          <span class="bd-emoji"></span> &nbsp;<span class="navbarLinks">Services</span>
                        </a>
                        <a class="navbar-item" href="#professionals-section" id="professionals-menu">
                          <span class="bd-emoji"></span> &nbsp;<span class="navbarLinks">Professionals</span>
                        </a>

                      </div>
                  
                      <div class="navbar-end">
                        <div class="navbar-item">
                          <div class="field is-grouped">
                            <p class="control">
                              <a class="bd-tw-button button" data-social-network="Twitter" data-social-action="tweet" data-social-target="http://bulma.io" target="_blank" href="https://twitter.com/intent/tweet?text=Bulma: a modern CSS framework based on Flexbox&hashtags=bulmaio&url=http://bulma.io&via=jgthms">
                                <span class="icon">
                                    <i class="fa fa-twitter"></i>
                                </span>
                                <span>
                                    Tweet
                                </span>
                              </a>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php
                      if(isset($_SESSION['id']))
                      {
                        echo '<div class="navbar-item has-dropdown is-hoverable" id="account-menu">
                                <a class="navbar-link  is-active" href="javascript:;">
                                        <figure class="image is-32x32" id="user-avatar-div">
                                                <span id="user-avatar-1">
                                                    <img id="user-avatar" src="http://localhost/Web/Static/images/profile-placeholder.jpg">
                                                </span>
                                            </figure>
                                    '.$_SESSION['username'].'
                                </a>
                                <div class="navbar-dropdown ">
                                  <a class="navbar-item " href="javascript:;">
                                    Edit Profile
                                  </a>
                                  <a class="navbar-item " href="javascript:;">
                                    Settings
                                  </a>
                                  <hr id="sign-out-divider">
                                  <a class="navbar-item " href="../../logout.php">
                                    Sign Out
                                  </a>
                                </div>
                              </div>';
                      }
                      else{
                        echo '<a class="navbar-item navbarLinks" href="../../Authentication/Login/index.php">Log In</a>';
                      }
                    ?>
                  </nav>