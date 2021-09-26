<?php
require('./header.php');
?>


<!-- THE HERO PAGE -->
<section id="heroSection">
  <?php
  $q = "SELECT title, body, image, author, is_published, created_at FROM posts ORDER BY created_at DESC";

  $result = $pdo->query($q);
  $i = 0;
  while ($row = $result->fetch(PDO::FETCH_OBJ)) {
  ?>
    <?php if ($i === 0) { ?>
      <div class="bigHero">
        <h3 class="bigHeroText">
          <?php echo $row->title;   ?>
        </h3>
        <div class="bigHeroImage">
        </div>

      </div>
    <?php break; } ?>
  <?php } ?>
  
  <?php while ($row = $result->fetch(PDO::FETCH_OBJ)) { ?>
    <?php if ($i === 1) { ?>
    <div class="smHeroContainer">
        <div class="smHero smHero1">
          <h3 class="smHero1Text">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium, exercitationem?
          </h3>
          <div class="smHero1Image">
          </div>
        </div>
      <?php break;} ?>
      <?php $i++ ?>
  <?php } ?>

  <?php while ($row = $result->fetch(PDO::FETCH_OBJ)) { ?>
      <?php if ($i === 2) { ?>
        <div class="smHero smHero2">
          <h3 class="smHero2Text">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium, exercitationem?
          </h3>
          <div class="smHero2Image">
          </div>
        </div>
    </div>
    <?php break;} ?>
      <?php $i++ ?>
  <?php } ?>
    </div>
</section>

<!-- Editor's Choice -->
<section id="editorsChoiceSection">
  <h3 class="editorsChoiceText">
    Editor's Choice
  </h3>

  <div class="editorsPostsContainer">
    <?php
    $editorQuery = "SELECT title, image FROM posts LIMIT 8";
    $editorPosts = $pdo->query($editorQuery);
    while($ePosts = $editorPosts->fetch(PDO::FETCH_OBJ)){
    ?>
    <div class="editorsPost">
      <div class="editorsPostImage"></div>
      <aside class="editorsPostExcerpt"><?php echo substr($ePosts->title, 0, 20) ?> </aside>
    </div>
    <?php }?>
  </div>
</section>

<!-- Dividing Into Two Segment -->
<section id="dividedSegment">
  <div id="mainNews">
    <section id="latestNewsSection">
      <h2 class="latestNewsHeading">
        Latest News
      </h2>

      <section class="latestNewsListSection">
        <?php
        $q = "SELECT id, title, body, image, author, is_published, created_at FROM posts WHERE is_published=1 ORDER BY created_at DESC";

        $result = $pdo->query($q);

        while ($row = $result->fetch(PDO::FETCH_OBJ)) {
          $cat = 'SELECT name FROM category INNER JOIN has_category ON category.id = has_category.category WHERE has_category.post =' . $row->id;
          $cat_result = $pdo->query($cat);
          $categories = '';
          while ($category = $cat_result->fetch(PDO::FETCH_OBJ)) {
            $categories .= $category->name . ",";
          }
          $categories = explode(",", $categories);
        ?>
          <li class="latestNews">
            <div class="latestImage">
              <img src="<?php echo $row->image ?>" alt="postImage">
            </div>

            <div class="latestDetails">
              <ul class="latestCatList">
                <?php foreach ($categories as $cat) {
                  if ($cat) {
                    echo '<li class="' . $cat . ' category">' . $cat . '</li>';
                  }
                }
                ?>
              </ul>

              <h2 class="latestHeading">
                <?php echo $row->title ?>
              </h2>
              <p class="latestExcerpt">
                <?php echo substr($row->body, 0, 110); ?> <a href="#" class="excerptLink">Read More</a>
              </p>
            </div>
          </li>
        <?php
        }
        ?>
      </section>
    </section>

    <section id="categorySection">
      <h2 class="categorySectionHeading">
        Category 1
      </h2>

      <li class="categoryNews">
        <div class="categoryImage">
          <img src="./assets/img/img1.jpg" alt="catPostImage">
        </div>

        <div class="categoryDetails">
          <ul class="categoryCatList">
            <li class="cat1">Cat 1</li>
            <li class="cat2">Cat 2</li>
            <li class="cat3">Cat 3</li>
          </ul>

          <h2 class="categoryHeading">
            Heading 1
          </h2>
          <p class="categoryExcerpt">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint mollitia quis quia quam quae repellat? <a href="#" class="categoryExcerptLink">Read More</a>
          </p>
        </div>
      </li>
    </section>
  </div>

  <div class="sideBar">
    <section class="sBCat">
      <h3 class="sBCatHeading">
        Categories
      </h3>

      <ul class="sBCatList">
        <li><a href="#" class="catOne">One</a></li>
        <li><a href="#" class="catOne">Two</a></li>
        <li><a href="#" class="catOne">Three</a></li>
        <li><a href="#" class="catOne">Four</a></li>
        <li><a href="#" class="catOne">Five</a></li>
      </ul>
    </section>

    <section class="sBPopular">
      <h3 class="sBPopularHeading">
        Popular
      </h3>

      <ul class="sBPopularList">
        <li class="popular">
          <div class="popularImage">
            <img src="./assets/img/img.jpg" alt="postImage">
          </div>

          <div class="popularDetails">
            <h2 class="popularHeading">
              Heading 1
            </h2>
            <p class="popularExcerpt">
              Lorem ipsum dolor sit amet consectetur, adipisicing <a href="#" class="excerptLink popularExcerptLink">Read More</a>
            </p>
          </div>
        </li>
        <li class="popular">
          <div class="popularImage">
            <img src="./assets/img/img3.jpg" alt="postImage">
          </div>

          <div class="popularDetails">
            <h2 class="popularHeading">
              Heading 1
            </h2>
            <p class="popularExcerpt">
              Lorem ipsum dolor sit amet consectetur, adipisicing <a href="#" class="excerptLink popularExcerptLink">Read More</a>
            </p>
          </div>
        </li>
        <li class="popular">
          <div class="popularImage">
            <img src="./assets/img/img4.jpg" alt="postImage">
          </div>

          <div class="popularDetails">
            <h2 class="popularHeading">
              Heading 1
            </h2>
            <p class="popularExcerpt">
              Lorem ipsum dolor sit amet consectetur, adipisicing <a href="#" class="excerptLink popularExcerptLink">Read More</a>
            </p>
          </div>
        </li>
      </ul>
    </section>

    <section class="mailSubscribe">
      <h3 class="mailSubscribeHeading">Subscribe For Latest News</h3>
      <div class="mailSubscribeBox">
        <input class="mailSubscribeInput" placeholder="Enter your mail here...."></input>
      </div>
    </section>


  </div>
</section>
</main>

<footer>
  <div class="quickLinks">
    <h3 class="quickLinksHeading">Quick Links</h3>
    <ul>

      <li><a href="#">Home</a></li>
      <li class="categoryLink">
        <div class="categoryText">
          Categories <span class="categoryOpen">></span>
        </div>
        <ul class="categoryLinksList">
          <li><a href="#">One</a></li>
          <li><a href="#">Two</a></li>
          <li><a href="#">Three</a></li>
        </ul>
      </li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact Us</a></li>
      <li><a href="#">Privacy Policy</a></li>
    </ul>
  </div>

  <div class="credit">
    <h1>
      NewRator
    </h1>
  </div>
</footer>

<script src="./assets/app.js"></script>
</body>

</html>