# Portfolio Site
Like all good developers, you won't get far without a portfolio site. It's one thing to have those skills written nicely on a CV, it's another to be able to put those skills to use in the real world. For a long time I've been struggling to settle on a design for the site, in fact this is probably the fifth or sixth iteration I've gone through and the first one i am actually happy with.

## Technologies Used
- HTML
- CSS
- Bulma
- JavaScript
- PHP
- MySQL
- Wordpress 

## Notable Features
### Wordpress
This is the first site I've ever made using WordPress, being one of the most popular CMS' in use today I figured it would be a good place to start.

### Bulma
Bulma is a front-end framework I stumbled upon a while ago and got on really well with. It's pure CSS which keeps it lightweight, and the class naming system just felt natural.

### PHP API Call
This is by far the feature I am most proud of. 

The homepage features an call to the GitHub API using PHP cURL to get a list of all my projects. 
```php
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
```

Then, based on the resposne it will either render a link to my GitHub profile if it wasn't able to return anything or loop through the results and render them as html elements.
```php
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
```

## Future Improvements
