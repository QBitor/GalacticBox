---
layout: default
title: "Error"
---

<div class="page">
  <?php 
  if($_SERVER['REDIRECT_STATUS'] == 403)
  {
    echo "<h1 class=\"page-title\">403: Forbidden</h1>";
    die("<p class=\"lead\">Sorry, you can't access this. <a href=\"/\">Head back home</a> to try finding something else.</p>");
  }
  else if($_SERVER['REDIRECT_STATUS'] == 404)
  {
    echo "<h1 class=\"page-title\">404: Not Found</h1>";
    die("<p class=\"lead\">Sorry, we've misplaced that URL or it's pointing to something that doesn't exist. <a href=\"/\">Head back home</a> to try finding it again.</p>");
  }
  else if($_SERVER['REDIRECT_STATUS'] == 500)
  {
    echo "<h1 class=\"page-title\">500: Server Error</h1>";
    die("<p class=\"lead\">A server error occured. None of this was supposed to happen. <a href=\"/\">Head back home</a> to try again.</p>");
  }
  else
  {
	header("Location: /");
  }
  ?>
</div>
