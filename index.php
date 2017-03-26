<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Leon Robotics</title>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="leonroboticslogo.png">
    </head>


    <body> 

    <div id="page" class="main">
        <img src="leonroboticslogo.png">
        <div id="box-for-arrow" class="red">
          <div class="arrow-down"></div>  
        </div>
    </div>
    <div id="page" class="info">
      <h1>About Us</h1>
      <p>Leon Robotics is a team of high school students from Tallahassee, Florida, that engage in the fields of STEM through designing, programming, and building robots. 
      <br><br>
      The FRC is "a varsity sport for the mind" which requires high school teams to design and fabricate a robot in six weeks to compete against other teams, in the process learning about teamwork, friendly competition, and building robots. During the rigorous six week build season, team members spend as many as thirty hours a week in the shop planning, programming, building, and testing our brainchild, preparing it to compete in a field game that is different every year.

      </p> 

      <div class="slideshow">
      <?php
          $dir = "slideshow/*";
          foreach(glob($dir) as $file) {
            echo '<img class ="slide" src='.$file.' />';
          }
      ?>
      </div>
      <button onclick="plusDivs(-1)">❮ Prev</button>
      <button onclick="plusDivs(1)">Next ❯</button>
        <script>
          var myIndex = 0;
          carousel();

          function carousel() {
              var i;
              var x = document.getElementsByClassName("slide");
              for (i = 0; i < x.length; i++) {
                 x[i].style.display = "none";  
              }
              myIndex++;
              if (myIndex > x.length) {myIndex = 1}    
              x[myIndex-1].style.display = "block";  
              setTimeout(carousel, 5000); //5 seconds
          }
          var slideIndex = myIndex;
          showDivs(slideIndex);

          function plusDivs(n) {
            showDivs(slideIndex += n);
          }

          function currentDiv(n) {
            showDivs(slideIndex = n);
          }

          function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("slide");
            if (n > x.length) {slideIndex = 1}    
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
               x[i].style.display = "none";  
            }
            x[slideIndex-1].style.display = "block";  
          }
        </script>

      <div id="box-for-arrow" class="grey">
          <div class="arrow-down"></div>  
        </div>
    </div>
    <div id="page" class="social">
        <h1>Social Media</h1>
          <iframe scrolling="no" allowtransparency="true" allowfullscreen=""  data-reactid=".0.$SITE_ROOT.$desktop_siteRoot.$PAGES_CONTAINER.1.1.$SITE_PAGES.$jt80h.1.$comp-ixtm1ygu.$https=2//app=1eclincher=1com/wix/editor/views/widget=1php?cacheKiller=01490128335299&amp;compId=0comp-ixtm1ygu&amp;deviceType=0desktop&amp;height=0538&amp;instance=0n_EIB_cR7KrhfggeHw53dLIVklh5UhuytB64X5iG6vE=1eyJpbnN0YW5jZUlkIjoiM2VhMDQxZjUtODZiMS00MzQ5LWFmZTktM2Q4Yjc1ZDFhZmEwIiwic2lnbkRhdGUiOiIyMDE3LTAzLTIxVDIwOjMyOjEzLjQxMVoiLCJ1aWQiOm51bGwsImlwQW5kUG9ydCI6IjEwLjE1LjEuMTY4LzQwMjk2IiwidmVuZG9yUHJvZHVjdElkIjpudWxsLCJkZW1vTW9kZSI6ZmFsc2UsImFpZCI6IjhmNzliYzU4LWQ0NDQtNDVkMi1iZjAxLTFhMGM1YmU0NGVkNSIsInNpdGVPd25lcklkIjoiYWJmZmE5MWEtNjI1OS00YjMyLTlhYmMtNDgyOTYzYzRkZjM1In0&amp;locale=0en&amp;pageId=0jt80h&amp;viewMode=0site&amp;vsi=08327b3d9-fb13-4e2f-a278-cd5f4dbf9ade&amp;width=0885" src="https://app.eclincher.com/wix/editor/views/widget.php?cacheKiller=1490128335299&amp;compId=comp-ixtm1ygu&amp;deviceType=desktop&amp;height=538&amp;instance=n_EIB_cR7KrhfggeHw53dLIVklh5UhuytB64X5iG6vE.eyJpbnN0YW5jZUlkIjoiM2VhMDQxZjUtODZiMS00MzQ5LWFmZTktM2Q4Yjc1ZDFhZmEwIiwic2lnbkRhdGUiOiIyMDE3LTAzLTIxVDIwOjMyOjEzLjQxMVoiLCJ1aWQiOm51bGwsImlwQW5kUG9ydCI6IjEwLjE1LjEuMTY4LzQwMjk2IiwidmVuZG9yUHJvZHVjdElkIjpudWxsLCJkZW1vTW9kZSI6ZmFsc2UsImFpZCI6IjhmNzliYzU4LWQ0NDQtNDVkMi1iZjAxLTFhMGM1YmU0NGVkNSIsInNpdGVPd25lcklkIjoiYWJmZmE5MWEtNjI1OS00YjMyLTlhYmMtNDgyOTYzYzRkZjM1In0&amp;locale=en&amp;pageId=jt80h&amp;viewMode=site&amp;vsi=8327b3d9-fb13-4e2f-a278-cd5f4dbf9ade&amp;width=885" frameborder="0"></iframe>
    
          <div id="box-for-arrow" class="red">
            <div class="arrow-down"></div>  
          </div>
    </div>

    <div id="page" class="sponsors">
    <h1>Thanks to:</h1>
    <div id="wrapper">
      <section id="photos">
      <?php
          $dir = "sponsors/*";
          foreach(glob($dir) as $file) {
            echo '<img src='.$file.' />';
          }
      ?>
      </section>
      </div>
    </div>
    
    

</body>
</html>
