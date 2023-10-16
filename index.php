<!DOCTYPE html>
<html>
<body>
<div style="display:none;"><p><a href="https://134.209.102.50/">Danatoto</a></p></div>
<div style="display:none;"><p><a href="https://situsgengtoto.web.app/">Gengtoto</a></p></div>
</body>
</html>
<?php 
$page = basename($_SERVER['PHP_SELF']);
if ($page == "index.php") {
    $pagetitle = "Zenex Automation";
}
?>
<?php include 'header.php'; ?>
<section>
    <div class="w-full overflow-hidden mainpage-slider h-[35vh] sm:h-[52vh] md:h-[60vh] lg:h-[88vh] mt-[64px] sm:mt-[90px]">
        <?php
        $slider = "SELECT * FROM banner";
        $sliderrun = mysqli_query($conn,$slider);
        while($sliderfetch = mysqli_fetch_assoc($sliderrun)){
            $catid = $sliderfetch['cat_id'];
            $st= mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM categories WHERE id='$catid'"));
        ?>
        <div class="w-full overflow-hidden relative">
            <img src="./admin/slider_image/<?php echo $sliderfetch['img']; ?>" class="w-full h-[35vh] sm:h-[50vh] md:h-[60vh] lg:h-[88vh]" alt="">
            <div class="absolute top-1/2 left-1/2 w-full -translate-x-1/2 flex flex-col justify-center items-center -translate-y-1/2 text-white p-5">
                <h1 class="text-lg sm:text-2xl md:text-4xl font-semibold text-center mb-2 sm:mb-5"><?php echo $sliderfetch['heading']; ?></h1>
                <p class="text-xs sm:text-base text-center"><?php echo $sliderfetch['content']; ?></p>
                <a href="/products/<?php echo $st['slug_url']; ?>" class="bg-white text-prime px-4 text-xs sm:text-base sm:px-5 py-1 rounded my-2 sm:my-5 font-semibold">Learn More</a>
            </div>
        </div>
        <?php }
        ?>
    </div>
</section>

<div class="pt-8 px-5 md:px-10 lg:px-20">
    <div class="flex flex-col justify-center items-center">
        <h1 class="text-xl sm:text-3xl font-semibold mb-2 text-center">Why Choose Zenex Automation</h1>
        <p class="text-sm sm:text-base text-gray-500 font-semibold text-center">Providing Industrial Automation Solutions, Products Since 2013</p>
        <div class="flex justify-center items-center gap-2 text-prime ">
            <hr class="w-[80px] h-1 bg-prime" />
            <p class="text-2xl">&#x2022;</p>
            <hr class="w-[80px] h-1 bg-prime" />
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 md:gap-16">
        <div class="col-span-1 sm:px-8 md:px-0">
            <div class="my-10 grid grid-cols-8 gap-4">
                <div class="col-span-6 sm:col-span-7 md:col-span-6 ">
                    <p class="text-base font-semibold text-black text-right mb-1">We Make it Easy</p>
                <p class="text-gray-500 text-xs text-right">We love a challenge. We enjoy development of Complex Automation projects and provide solution. You'll find us honest, reliable and a safe pair of hands.</p>
                    
                </div>
                <div class="flex justify-start items-start md:col-span-2 sm:col-span-1 col-span-2">
                    <div class='w-[70px] '>
                        <img src="https://zenexautomation.in/images/icons/value.gif" class="w-full"/>
                    </div>
                </div>
            </div>
            <div class="my-10 grid grid-cols-8 gap-4">
                <div class="col-span-6 sm:col-span-7 md:col-span-6">
                    <p class="text-base font-semibold text-black text-right mb-1">We Listen</p>
                <p class="text-gray-500 text-xs text-right">We can only deliver results if we know what your success looks like. We listen, find out what you want to achieve and plan how we get you there. Things work better when we do it together.</p>
                </div>
                <div class="flex justify-start items-start md:col-span-2 sm:col-span-1 col-span-2">
                    <div class='w-[70px]'>
                        <img src="https://zenexautomation.in/images/icons/ear.gif" class="w-full"/>
                    </div>
                </div>
            </div>
            <div class="my-10 grid grid-cols-8 gap-4">
                <div class="col-span-6 sm:col-span-7 md:col-span-6">
                    <p class="text-base font-semibold text-black text-right mb-1">We have Done It Before</p>
                <p class="text-gray-500 text-xs text-right">We have been working with Industrial Automation since 2013 and have a few grey hairs to prove it! Our experience, along with our creative thinking, will help make sure your project is a success.</p>
                    
                </div>
                <div class="flex justify-start items-start md:col-span-2 sm:col-span-1 col-span-2">
                    <div class='w-[70px]'>
                        <img src="https://zenexautomation.in/images/icons/trophy.gif" class="w-full"/>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col-span-1">
            <div class="my-5 flex justify-center items-center" >
                <img src="/images/icons/main.png" />
            </div>
        </div>
        <div class="col-span-1 sm:px-8 md:px-0">

                <div class="my-10 grid grid-cols-8 gap-4">
                <div class="flex justify-start items-start md:col-span-2 sm:col-span-1 col-span-2">
                    <div class='w-[70px] ml-auto'>
                        <img src="https://zenexautomation.in/images/icons/idea.gif" class="w-full"/>
                    </div>
                </div>
                <div class="md:col-span-6 sm:col-span-7 col-span-6">
                    <p class="text-base font-semibold text-black text-start mb-1">Our values</p>
                <p class="text-gray-500 text-xs text-start">We are strongly believe in Innovation, Sustainability, Flexibility, Cooperation and Integrity.</p>
                    
                </div>
            </div>
                <div class="my-10 grid grid-cols-8 gap-4">
                <div class="flex justify-start items-start md:col-span-2 sm:col-span-1 col-span-2">
                    <div class='w-[70px] ml-auto'>
                        <img src="https://zenexautomation.in/images/icons/clock.gif" class="w-full -scale-x-100"/>
                    </div>
                </div>
                <div class="md:col-span-6 sm:col-span-7 col-span-6">
                    <p class="text-base font-semibold text-black text-start mb-1">Respect customer priorities and time</p>
                <p class="text-gray-500 text-xs text-start">We build relationships based on integrity, reliability, and respect. With transparency, we have planned schedules and kept our promises for 10 years.</p>
                    
                </div>
            </div>
                <div class="my-10 grid grid-cols-8 gap-4">
                <div class="flex justify-start items-start md:col-span-2 sm:col-span-1 col-span-2">
                    <div class='w-[70px] ml-auto'>
                        <img src="https://zenexautomation.in/images/icons/user.gif" class="w-full -scale-x-100"/>
                    </div>
                </div>
                <div class="md:col-span-6 sm:col-span-7 col-span-6">
                    <p class="text-base font-semibold text-black text-start mb-1">We are your single, expert point of contact</p>
                <p class="text-gray-500 text-xs text-start">We manage all the supply chain from understanding your needs, to designing a customized and original solution when needed, to materials selection and sourcing, to quality compliances, to machining, assembling, packaging and delivery.</p>
                    
                </div>
            </div>
  
            
        </div>
    </div>
</div>


<div class="relative my-6 bg-black group overflow-hidden">
    <div class="">
        <img src="https://zenexautomation.in/images/banner/control-panels.jpg" alt="img" class="h-[45vh] sm:h-auto opacity-50 bg-black group-hover:scale-105 transition duration-300 ease-in" />
    </div>
    <div class="absolute top-0 right-0 left-0 bottom-0 bg-prime/40">
        <div class="flex flex-col justify-center items-center gap-6 h-full text-white">
            <button id="videobtn"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-20 h-20 md:w-28 md:h-28 hover:text-prime transition duration-300 ease-in hover:scale-105">
  <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.91 11.672a.375.375 0 010 .656l-5.603 3.113a.375.375 0 01-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112z" />
</svg>
</button>
<div class="flex flex-col justify-center items-center gap-3 px-5">
            <h1 class="text-xl sm:text-2xl md:text-4xl font-bold text-center">Zenex Automation Company Video</h1>
            <p class="text-sm sm:text-base text-center">Your Trusted Industry Automation Solution Provider</p>
</div>
        </div>
    </div>
    
</div>

<div id="videomodal" class="fixed z-50 top-0 right-0 bottom-0 left-0 bg-black/90 md:bg-black/60 w-full h-screen hidden">
    <div id="videoclsbtn" class="absolute right-6 top-5 bg-white text-black p-2 rounded-full cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
</svg>

    </div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-white w-full md:w-2/3 h-[40vh] md:h-[60vh] rounded-lg">
        <div id="muteYouTubeVideoPlayer"></div>
    </div>
</div>
<script async src="https://www.youtube.com/iframe_api"></script>
<script>
 function onYouTubeIframeAPIReady() {
  var player;
  player = new YT.Player('muteYouTubeVideoPlayer', {
    videoId: 'Fi_vA_OfqrA', // YouTube Video ID
    width: '100%',               // Player width (in px)
    height: '100%',              // Player height (in px)
    playerVars: {
      autoplay: 0,        // Auto-play the video on load
      controls: 1,        // Show pause/play buttons in player
      showinfo: 0,        // Hide the video title
      modestbranding: 1,  // Hide the Youtube Logo
      loop: 1,            // Run the video in a loop
      fs: 0,              // Hide the full screen button
      cc_load_policy: 0, // Hide closed captions
      iv_load_policy: 3,  // Hide the Video Annotations
      autohide: 0,        // Hide video controls when playing
        
    },
    events: {
      onReady: function(e) {

      }
    }
  });
 }


</script>

<div class="py-8 px-5 md:px-10 lg:px-20">
    <div class="flex flex-col justify-center items-center">
        <h1 class="text-3xl font-semibold">Our Partners</h1>
        <div class="flex justify-center items-center gap-2 text-prime ">
            <hr class="w-[40px] h-1 bg-prime" />
            <p class="text-2xl">&#x2022;</p>
            <hr class="w-[40px] h-1 bg-prime" />
        </div>
    </div>
    <div>
        <div class="flex justify-center items-center flex-wrap gap-5 sm:gap-10 md:gap-20 my-10" >
            <div >
                <a href="https://www.invt.com/" target="_blank"><img src="/images/banner/invt.png" class="w-[180px] p-5 hover:scale-110 transition duration-300 ease-in-out"/></a>
            </div>
            <div>
                <a href="https://www.deltaww.com/en-US/index" target="_blank"><img src="/images/banner/delta.jpg" class="w-[180px] p-5 hover:scale-110 transition duration-300 ease-in-out"/></a>
            </div>
            <div>
                <a href="https://bholanath.in/shop/" target="_blank"><img src="/images/banner/Bholanath.png" class="w-[180px] p-5 hover:scale-110 transition duration-300 ease-in-out"/></a>
            </div>
            <div>
                <a href="" target="_blank"><img src="/images/banner/Clinch-min.png" class="w-[180px] p-5 hover:scale-110 transition duration-300 ease-in-out"/></a>
            </div>
        </div>
    </div>
    
</div>

<div class="py-8 px-5 md:px-10 lg:px-20">
    <div class="flex flex-col justify-center items-center">
        <h1 class="text-3xl font-semibold">Latest Blogs</h1>
        <div class="flex justify-center items-center gap-2 text-prime ">
            <hr class="w-[40px] h-1 bg-prime" />
            <p class="text-2xl">&#x2022;</p>
            <hr class="w-[40px] h-1 bg-prime" />
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5 sm:gap-10  my-10">
        <?php
        
        $b = "SELECT * FROM blog ORDER BY id DESC LIMIT 4 ";
        $br = mysqli_query($conn,$b);
        $bc = mysqli_num_rows($br);
        if($bc > 0){
           while($brow = mysqli_fetch_assoc($br)){
            ?>
            
            <div class=" col-span-1 rounded-lg shadow-[0px_0px_10px_0px_rgba(0,0,0,0.1)]">
            <div class="">
                <img src="https://www.zenexautomation.in/admin/blogs/<?php echo $brow['image']; ?>" class="w-full rounded-t-lg h-[190px]" />
            </div>
            <div class="flex flex-col justify-start items-start p-5">
               <a href="/blog/<?php echo $brow['slug_url']; ?>"><h1 class="hover:underline text-base sm:text-[2.4vw] md:text-[1.3vw] min-h-[60px] font-semibold text-prime capitalize"><?php echo $brow['title']; ?></h1></a>
                    <!--<hr class="w-12 mx-auto bg-prime h-0.5 border-none" />-->
                <a href="/blog/<?php echo $brow['slug_url']; ?>" class="group text-prime font-semibold hover:underline text-sm mt-5 hover:text-black flex justify-center items-center gap-1">Read more <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                </svg>
                </a>
            </div>
        </div>
            <?php
        }
        }
        
        ?>
        
        
        
        <div class="col-span-1 sm:col-span-2 md:col-span-3 lg:col-span-4 flex justify-center items-center p-2">
            <a href="/blogs" class="bg-prime text-white px-5 py-1 font-semibold rounded text-lg ">View All</a>
        </div>
       
    </div>
    
</div>

<?php include 'footer.php' ?>

