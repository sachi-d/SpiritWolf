<?php
/*
 * Developed by Sachithra Dangalla
 * 2016  * 
 */


$serverName = 'spiritwolfsound.com';
$pageName = $_SERVER['PHP_SELF'];
$fileName = $serverName . $pageName;

//$tags = get_meta_tags($fileName);
$title = basename($pageName);
$title = str_replace("_", " ", $title);
$title = str_replace(".php", "", $title);
$title = ucwords($title);
;
?>




<div class="col-md-12 share-buttons">
    <div class="col-md-12 share-caption">
        <p>- Share this article - </p>
    </div>

    <div id="share-buttons" class="col-md-12">

        <!-- Buffer 
        <a href="https://bufferapp.com/add?url=http://<?php echo $fileName ?>&amp;text=<?php echo $title ?>" target="_blank">
            <img src="../images/social_icons/buffer.png" alt="Buffer" />
        </a>-->

        <!-- Digg
        <a href="http://www.digg.com/submit?url=http://<?php echo $fileName ?>" target="_blank">
            <img src="../images/social_icons/diggit.png" alt="Digg" />
        </a> -->

        <!-- Email -->
        <a href="mailto:?Subject=<?php echo $title ?>&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20http://<?php echo $fileName ?>">
            <img src="../images/social_icons/email.png" alt="Email" title="Email this article"/>
        </a>

        <!-- Facebook -->
        <a href="http://www.facebook.com/sharer.php?u=http://<?php echo $fileName ?>" target="_blank">
            <img src="../images/social_icons/facebook.png" alt="Facebook" title="Share on facebook"/>
        </a>

        <!-- Google+ -->
        <a href="https://plus.google.com/share?url=http://<?php echo $fileName ?>" target="_blank">
            <img src="../images/social_icons/google.png" alt="Google" title="Share on G+"/>
        </a>

        <!-- LinkedIn -->
        <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://<?php echo $fileName ?>" target="_blank">
            <img src="../images/social_icons/linkedin.png" alt="LinkedIn" title="Share on LinkedIn"/>
        </a>

        <!-- Pinterest -->
        <a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());">
            <img src="../images/social_icons/pinterest.png" alt="Pinterest" title="Share on Pinterest"/>
        </a>

        <!-- Print -->
        <a href="javascript:;" onclick="window.print()">
            <img src="../images/social_icons/print.png" alt="Print" title="Print this article"/>
        </a>

        <!-- Reddit -->
        <a href="http://reddit.com/submit?url=http://<?php echo $fileName ?>&amp;title=<?php echo $title ?>" target="_blank">
            <img src="../images/social_icons/reddit.png" alt="Reddit" title="Share on Reddit"/>
        </a>

        <!-- StumbleUpon
        <a href="http://www.stumbleupon.com/submit?url=http://<?php echo $fileName ?>&amp;title=<?php echo $title ?>" target="_blank">
            <img src="../images/social_icons/stumbleupon.png" alt="StumbleUpon" />
        </a>-->

        <!-- Tumblr-->
        <a href="http://www.tumblr.com/share/link?url=http://<?php echo $fileName ?>&amp;title=<?php echo $title ?>" target="_blank">
            <img src="../images/social_icons/tumblr.png" alt="Tumblr" title="Share on Tumblr"/>
        </a>

        <!-- Twitter -->
        <a href="https://twitter.com/share?url=http://<?php echo $fileName ?>&amp;text=<?php echo $title ?>;hashtags=spiritwolfsound" target="_blank">
            <img src="../images/social_icons/twitter.png" alt="Twitter" title="Share on Twitter"/>
        </a>

        <!-- VK 
        <a href="http://vkontakte.ru/share.php?url=http://<?php echo $fileName ?>" target="_blank">
            <img src="../images/social_icons/vk.png" alt="VK" />
        </a>-->

        <!-- Yummly 
        <a href="http://www.yummly.com/urb/verify?url=http://<?php echo $fileName ?>&amp;title=Simple Share Buttons" target="_blank">
            <img src="../images/social_icons/yummly.png" alt="Yummly" />
        </a>-->

    </div>




</div>

<div class="col-md-12 share-caption">
    <p>- Interesting links - </p>
</div>
<div id="other-links" class="col-md-12">

    <p>Read interesting articles on <a href="http://www.linkwitzlab.com/" target="_blank"><img src='../images/social_icons/linkwitz.png' ></a></p>
    <p>My profile on <a href="http://audiokarma.org/forums/index.php?members/rambline.94429/" target="_blank"><img src="../images/social_icons/audiokarma.png"></a></p>
    <p>My profile on <a href="http://www.diyaudio.com/forums/members/rayma.html" target="_blank"><img src="../images/social_icons/diyaudio.png"></a></p>
    <p>My profile on <a href="http://www.audio-forums.com/members/bottleneck.1032/" target="_blank"><img src="../images/social_icons/audioforums.png"></a></p>
</div>