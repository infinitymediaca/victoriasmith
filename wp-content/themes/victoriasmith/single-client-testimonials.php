<?php
		// Permanent redirection
		header("HTTP/1.1 301 Moved Permanently");
		header("Location: ".get_bloginfo('url') .'/client-testimonials');
		exit();
?>