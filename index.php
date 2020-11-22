<?php

	header("HTTP/1.0 418 I'm a teapot");
	header("X-Teapot: Madame Pottine");

	print("<html>\n");
	print("  <head>\n");
	print("    <title>Error 418: I'm a teapot</title>\n");
	print("    <link rel=\"stylesheet\" href=\"/teapot.css\">\n");
	print("  </head>\n");
	print("  <body>\n");
	print("    <h1>Error 418: I'm a teapot</h1>\n");
	print("    <img src=\"/teapot.jpg\"/>\n");
	print("  </body>\n");
	print("</html>\n");

