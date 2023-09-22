
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Lobster&family=Oleo+Script&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/admin.js"></script>
    <script src="js/snowfall.min.js"></script>
</head>
<body>
  
    <?php include'headerhome.php'?>
    <section class="banner">
        <div class="container1">
         <h1>Ikkat World In India</h1>
         <p>Buy your loved product in this Website</p>
          <div class="row">
           <input type="text" placeholder="search">
           </div>
        </div>
    </section>
    <section class="choose">
      
       <div class="minihead">
        <h1>Why choose us ?</h1>
        </div>
        <div style="text-align:justify" class="row">
            <div class="col-md-4 col1">
                <h2>Online Marketing</h2>
                <p>Buy handloom sarees online in India and browse from our saree collection. At Aditri, we understand the importance of having a complete saree collection, one that boasts of heritage styles suited to the contemporary woman. That’s why we have for you a curated collection of silk, cotton, khadi sarees, linen sarees, handloom sarees and more, all available online.

These styles complement our heritage saree pieces beautifully. Online saree purchase can be a daunting task, so we’ve simplified the process to make straightforward and yet, informative.</p>
            </div>
            <div class="col-md-4">
                <h2>Quality</h2>
                 <h5>Ikkat from AP (Telia Rumaal and Pochampally Ikat)</h5> –<p> One of the most unique of all Indian ikat weaving forms is the Telia Rumal from Andhra Pradesh, where the yarn is not only tied-dyed, but is also treated with a special oil to give the fabric a characteristic sheen.</p>
                
            </div>
            <div class="col-md-4">
                <h2>Etymology</h2>
                <p>Ikat is an Indonesian word, which depending on context, can be the nouns: cord, thread, knot, or bundle, also the finished ikat fabric, as well as the verbs "to tie" or "to bind"; the term ikatan is a noun for bond or tie. It has a direct etymological relation to cognates in various Indonesian languages from Sumatra, Borneo, Java, Bali, Sulawesi, Sumba, Flores and Timor. Thus, the name of the finished ikat woven fabric originates from the tali (threads, ropes) being ikat (tied, bound, knotted) before they are being put in celupan (dyed by way of dipping), then berjalin (woven, intertwined) resulting in a berjalin ikat- reduced to ikat.</p>
            </div>
        </div>
        
    </section>
    <section class="types">
        <div class="categories">
            <h1>Categories</h1>
        </div>
        
        <div class="row">
            <div class="col-md-4 col2">
               <div class="content">
                <h3 class="text-center" style="padding:10px 0;">Double Ikkat</h3>
                <img src="images/telia17.jpg">
                <p class="text-center">Double ikkat cotton sarees to see more varieties click on</p>
                <a href="shop.php" class="btn btn-success button">View all</a>
                </div>
            </div>
            <div class="col-md-4">
                 <div class="content">
                <h3 class="text-center" style="padding:10px 0;">Single Ikkat</h3>
                     <a><img src="images/WhatsApp%20Image%202022-03-03%20at%201.54.54%20PM.jpeg"></a>
                <p class="text-center">Single ikkat cotton sarees to see more varieties click on</p>
                <a href="shop.php" class="btn btn-success button">View all</a>
                </div>
            </div>
            <div class="col-md-4">
                 <div class="content">
                <h3 class="text-center" style="padding:10px 0;">Silk Sarees</h3>
                <img src="images/img1.webp">
                <p class="text-center">Pure Silk sarees to see more varieties click on</p>
                <a href="shop.php" class="btn btn-success button">View all</a>
                </div>
            </div>
        </div>
    </section>
    <section class="comments">
        <div class="info1  ">
          <div class="box3">
           <h1>Comments</h1>
    </div>
            <div style="text-align:justify" class="row">
                <div class="col-md-6 col3">
                    <p>
The use of social media in marketing can benefit the handloom industries by developing the awareness and benefits of the handloom products, reducing marketing expenses, increasing the sales</p>
               <h4>Angelina</h4><img src="images/pic-4.png">
                </div>
                <div class="col-md-6 col">
                     <p>
choose your family members and warm wish them Happy National Handloom Day. Buy products from the direct stores of weavers. Try out other ways to reach their outcomes.Try out other ways to reach their outcomes</p>
               <h4>johnson</h4><img src="images/user2.jpg">
                </div>      
            </div>
        </div>
    </section>
    <section class="branches">
      <h1>Wings</h1>
       <div class="row">
           <div class="col-md-4 col6">
              <div class="innerimg">
               <img src="images/bangalore.png">
               </div>
           </div>
           <div class="col-md-4">
                <div class="innerimg">
               <img src="images/hyderabad.png">
               </div>
           </div>
           <div class="col-md-4">
                <div class="innerimg">
               <img src="images/mumbai.png">
               </div>
           </div>
       </div>
        
    </section>
    <section class="wave">
        <img src="images/wave2.png">
    </section>

  <?php include'footer.php';?>
 
   
</body>
  <script>
    snowFall.snow(document.querySelector(" .container1"), {
                  round: true,
                  minSize: 1,
                  maxSize: 6,
                  shadow: true,
                  flakesize:150,
            flakeColor:"#c7fdea",
                  });
    </script>
</html>