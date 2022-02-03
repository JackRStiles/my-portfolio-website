<?php
  $config = include('config.php');
  $username = str_replace('"', '', json_encode($config->github_username));
  $key      = str_replace('"', '', json_encode($config->github_key)); 
  $curl     = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_USERAGENT => $_SERVER['HTTP_USER_AGENT'],
    CURLOPT_HTTPAUTH => '$username:$key',
    CURLOPT_URL => 'https://api.github.com/users/' . $username . '/repos',
    CURLOPT_TIMEOUT => 30,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      'cache-control: no-cache'
    ),
  ));

  $response = curl_exec($curl);
  $response = json_decode($response, true);
  $err      = curl_error($curl);
  $err      = json_decode($err, true);
  
  curl_close($curl);
?>

<?php get_header(); ?>

<section id="about" class="section is-medium is-light-background--alt has-brand-border--top">
  <div class="container content reveal">
    <div class="columns">
      <div class="column">
        <h2>About</h2>
        <p>My journey as a web developer started <?php echo (date("Y")- 2008); ?>  years ago when I began university. At that time I was torn between software development and web development, luckily my first year exposed me to both and helped me decide I wanted to be a web developer. Throughout the rest of university I chose modules and units that I felt would help me. After graduation I toyed with the idea of setting myself up as a freelance developer but opted to pursue a career as a developer for an established company instead.</p>
        <p>I am a proud and passionate individual who likes things to be lined up just right. My biggest hobbies are video games, tabletop games, photography, and music. I also enjoy exploring forests and ruins when given the chance.</p>
      </div>
    </div>
  </div>
</section>

<section id="skills" class="section is-medium">
  <div class="container content reveal">
    <div class="columns ">
      <div class="column">
        <h2>Skills</h2>
        <p>Since I started as a web developer all those years ago, i've used a vast number of languages and technologies spanning both front-end and back-end development. Whilst I am improving my back-end skills to help me as a full-stack developer, I've found my stride as a front-end developer and enjoy using JavaScript and JavaScript frameworks such as React.</p>
        <p>The following are what I would consider my current toolkit, however it is by no means an exhaustive list of my skills.</p>
        <div class="devicons columns has-text-centered reveal">
          <div class="devicon column is-one-fifth is-one-third-mobile">
            <i class="devicon-html5-plain "></i>
            <p>HTML<span class="muted">5</span></p>
          </div>
          <div class="devicon column is-one-fifth is-one-third-mobile">
            <i class="devicon-css3-plain"></i>
            <p>CSS<span class="muted">3</span></p>
          </div>
          <div class="devicon column is-one-fifth is-one-third-mobile">
            <i class="devicon-bulma-plain"></i>
            <p>Bulma<span class="muted">0.9</span></p>
          </div>
          <div class="devicon column is-one-fifth is-one-third-mobile">
            <i class="devicon-javascript-plain"></i>
            <p>JavaScript<span class="muted">ES6</span></p>
          </div>
          <div class="devicon column is-one-fifth is-one-third-mobile">
            <i class="devicon-php-plain"></i>
            <p>PHP<span class="muted">7.4</span></p>
          </div>
          <div class="devicon column is-one-fifth is-one-third-mobile">
            <i class="devicon-mysql-plain"></i>
            <p>MySQL<span class="muted">8.0</span></p>
          </div>
          <div class="devicon column is-one-fifth is-one-third-mobile">
            <i class="devicon-sass-original"></i>
            <p>Sass<span class="muted">1.49</span></p>
          </div>
          <div class="devicon column is-one-fifth is-one-third-mobile">
            <i class="devicon-gulp-plain"></i>
            <p>Gulp.js<span class="muted">4.0</span></p>
          </div>
          <div class="devicon column is-one-fifth is-one-third-mobile">
            <i class="devicon-npm-original-wordmark"></i>
            <p>NPM<span class="muted">8.4</span></p>
          </div>
          <div class="devicon column is-one-fifth is-one-third-mobile">
            <i class="devicon-apache-plain"></i>  
            <p>Apache2<span class="muted">2.4</span></p>
          </div>
          <div class="devicon column is-one-fifth is-one-third-mobile">
            <i class="devicon-amazonwebservices-plain"></i>
            <p>AWS<span class="muted">Lightsail</span></p>
          </div>
          <div class="devicon column is-one-fifth is-one-third-mobile">
            <i class="devicon-github-original"></i>
            <p>Github<span class="muted">&amp; Git</span></p>
          </div>
          <div class="devicon column is-one-fifth is-one-third-mobile">
            <i class="devicon-ubuntu-plain"></i>
            <p>Ubuntu<span class="muted">20.04</span></p>
          </div>
          <div class="devicon column is-one-fifth is-one-third-mobile">
            <i class="devicon-wordpress-plain"></i>
            <p>WordPress<span class="muted">5.9</span></p>
          </div>
          <div class="devicon column is-one-fifth is-one-third-mobile">
            <i class="devicon-photoshop-plain"></i>
            <p>Photoshop<span class="muted">CC</span></p>
          </div>
        </div>
      </div>
    </div>
    <div class="columns has-text-centered mt-6 reveal">
      <div class="column">
        <h3>Learning</h3>
        <p>The world of web development is constantly evolving and in an effort to keep up I'm teaching myself the following</p>
        <div class="devicons devicons--small columns reveal">
          <div class="devicon column is-one-sixth is-one-third-mobile">
            <i class="devicon-react-plain "></i>
            <p>React</p>
          </div>
          <div class="devicon column is-one-sixth is-one-third-mobile">
            <i class="devicon-vuejs-plain"></i>
            <p>Vue</p>
          </div>
          <div class="devicon column is-one-sixth is-one-third-mobile">
            <i class="devicon-express-original"></i>
            <p>Express</p>
          </div>
          <div class="devicon column is-one-sixth is-one-third-mobile">
            <i class="devicon-nodejs-plain"></i>
            <p>Node</p>
          </div>
          <div class="devicon column is-one-sixth is-one-third-mobile">
            <i class="devicon-mongodb-plain"></i>
            <p>MongoDB</p>
          </div>
          <div class="devicon column is-one-sixth is-one-third-mobile">
            <i class="devicon-nginx-original"></i>
            <p>NGINX</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="projects" class="section is-medium is-light-background--alt">
  <div class="container content reveal">
    <div class="columns has-text-centered">
      <div class="column">
        <h2>Projects</h2>
        <div class="cards">
        <?php if (empty($response)) : ?>
          <p class="is-flex-grow-2 is-size-5"><a href="https://github.com/JackRStiles" target="_blank"><i class="fab fa-github"></i> Check out my work on GitHub</a></p>
        <?php else :           
            foreach ($response as $value) : 
        ?>
          <div class="card reveal">
            <div class="card-content">
              <h3><?= str_replace('-', ' ', $value['name']); ?></h3>
              <p><?= $value['description'] ?></p>
              <p class="tags is-hidden-touch">
                <?php foreach($value['topics'] as $val) : ?>
                  <span class="tag"><?= $val ?></span>
                <?php endforeach; ?>
              </p>
            </div>
            <footer class="card-footer">
                <a class="card-footer-item" href="<?= $value['html_url'] ?>" target="_blank"><i class="fab fa-github"></i>View Repo</a>
                <?php if ($value['homepage']) : ?>
                  <a class="card-footer-item" href="<?= $value['homepage'] ?>" target="_blank"><i class="fas fa-desktop"></i>View Demo</a>
                <?php endif; ?>
            </footer>
          </div>
        <?php 
            endforeach; 
          endif;
        ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>