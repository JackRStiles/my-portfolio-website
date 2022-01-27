<?php $config = include('config.php'); ?>
<?php
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

<section id="about" class="section is-light-background--alt has-brand-border--top">
  <div class="container content">
    <div class="columns has-text-centered">
      <div class="column">
        <h2>About</h2>
        <p>My journey as a web developer started <?php echo (date("Y")- 2008); ?>  years ago when I began university. At that time I was torn between software development and web development, luckily my first year exposed me to both and helped me decide I wanted to be a web developer. Throughout the rest of university I chose modules and units that I felt would help me. After graduation I toyed with the idea of setting myself up as a freelance developer but opted to pursue a career as a developer for an established company instead. Since then I have been steadily employed as a web developer and don’t regret my choice all those years ago.</p>
        <p>I am a proud and passionate individual who likes things to be lined up just right. My biggest hobbies are video games, tabletop games, photography, and music. I also enjoy exploring forests and ruins when given the chance.</p>
      </div>
    </div>
  </div>
</section>

<section id="skills" class="section">
  <div class="container content">
    <div class="columns has-text-centered">
      <div class="column">
        <h2>Skills</h2>
        <p>Since I started as a web developer all those years ago, i've used a vast number of languages and technologies spanning both front-end and back-end development. Whilst I am improving my back-end skills to help me as a full-stack developer, I've found my stride as a front-end developer and enjoy using JavaScript and JavaScript frameworks such as React.</p>
        <p>The following represent my current and preferred toolkit, though it is not an exhaustive list of my skills.</p>
        <div class="devicons columns">
          <div class="devicon column is-one-fifth is-one-third-mobile">
            <i class="devicon-html5-plain "></i>
            <p>HTML (5)</p>
          </div>
          <div class="devicon column is-one-fifth is-one-third-mobile">
            <i class="devicon-css3-plain"></i>
            <p>CSS (3)</p>
          </div>
          <div class="devicon column is-one-fifth is-one-third-mobile">
            <i class="devicon-sass-original"></i>
            <p>Sass</p>
          </div>
          <div class="devicon column is-one-fifth is-one-third-mobile">
            <i class="devicon-bulma-plain"></i>
              <p>Bulma</p>
          </div>
          <div class="devicon column is-one-fifth is-one-third-mobile">
            <i class="devicon-javascript-plain"></i>
            <p>JavaScript</p>
          </div>
          <div class="devicon column is-one-fifth is-one-third-mobile">
            <i class="devicon-react-original"></i>
            <p>React</p>
          </div>
          <div class="devicon column is-one-fifth is-one-third-mobile">
            <i class="devicon-php-plain"></i>
            <p>PHP</p>
          </div>
          <div class="devicon column is-one-fifth is-one-third-mobile">
            <i class="devicon-mysql-plain"></i>
            <p>MySQL</p>
          </div>
          <div class="devicon column is-one-fifth is-one-third-mobile">
            <i class="devicon-gulp-plain"></i>
            <p>Gulp.js</p>
          </div>
          <div class="devicon column is-one-fifth is-one-third-mobile">
            <i class="devicon-amazonwebservices-plain"></i>
            <p>AWS</p>
          </div>
          <div class="devicon column is-one-fifth is-one-third-mobile">
            <i class="devicon-git-plain"></i>
            <p>Git</p>
          </div>
          <div class="devicon column is-one-fifth is-one-third-mobile">
            <i class="devicon-github-original"></i>
            <p>Github</p>
          </div>
          <div class="devicon column is-one-fifth is-one-third-mobile">
            <i class="devicon-ubuntu-plain"></i>
            <p>Ubuntu</p>
          </div>
          <div class="devicon column is-one-fifth is-one-third-mobile">
            <i class="devicon-wordpress-plain"></i>
            <p>WordPress</p>
          </div>
          <div class="devicon column is-one-fifth is-one-third-mobile">
            <i class="devicon-photoshop-plain"></i>
            <p>Photoshop</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="projects" class="section is-light-background--alt">
  <div class="container content">
    <div class="columns has-text-centered">
      <div class="column">
        <h2>Projects</h2>
        <div class="cards">
        <?php if (empty($response)) : ?>
          <p class="is-flex-grow-2 is-size-5"><a href="https://github.com/JackRStiles" target="_blank"><i class="fab fa-github"></i> Check out my work on GitHub</a></p>
        <?php else :           
            foreach ($response as $value) : 
        ?>
          <div class="card">
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
                <a class="card-footer-item" href="<?= $value['homepage'] ?>" target="_blank"><i class="fas fa-desktop"></i>View Demo</a>
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